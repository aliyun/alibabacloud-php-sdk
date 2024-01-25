<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adp\V20210720\Models\FoundationVersion\clusterEngines;

use AlibabaCloud\SDK\Adp\V20210720\Models\Platform;
use AlibabaCloud\Tea\Model;

class infrastructureStatements extends Model
{
    /**
     * @example false
     *
     * @var bool
     */
    public $default;

    /**
     * @example CentOS, Ubuntu, Anolis, Kylin, etc
     *
     * @var string
     */
    public $distroName;

    /**
     * @example 7.6, 7.9, V10, etc
     *
     * @var string
     */
    public $distroVersion;

    /**
     * @var Platform
     */
    public $platform;
    protected $_name = [
        'default'       => 'default',
        'distroName'    => 'distroName',
        'distroVersion' => 'distroVersion',
        'platform'      => 'platform',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->default) {
            $res['default'] = $this->default;
        }
        if (null !== $this->distroName) {
            $res['distroName'] = $this->distroName;
        }
        if (null !== $this->distroVersion) {
            $res['distroVersion'] = $this->distroVersion;
        }
        if (null !== $this->platform) {
            $res['platform'] = null !== $this->platform ? $this->platform->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return infrastructureStatements
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['default'])) {
            $model->default = $map['default'];
        }
        if (isset($map['distroName'])) {
            $model->distroName = $map['distroName'];
        }
        if (isset($map['distroVersion'])) {
            $model->distroVersion = $map['distroVersion'];
        }
        if (isset($map['platform'])) {
            $model->platform = Platform::fromMap($map['platform']);
        }

        return $model;
    }
}
