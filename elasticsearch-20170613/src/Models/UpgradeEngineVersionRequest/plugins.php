<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\UpgradeEngineVersionRequest;

use AlibabaCloud\Tea\Model;

class plugins extends Model
{
    /**
     * @var string
     */
    public $enable;

    /**
     * @var string
     */
    public $fileVersion;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $version;
    protected $_name = [
        'enable'      => 'enable',
        'fileVersion' => 'fileVersion',
        'name'        => 'name',
        'version'     => 'version',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->enable) {
            $res['enable'] = $this->enable;
        }
        if (null !== $this->fileVersion) {
            $res['fileVersion'] = $this->fileVersion;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->version) {
            $res['version'] = $this->version;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return plugins
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['enable'])) {
            $model->enable = $map['enable'];
        }
        if (isset($map['fileVersion'])) {
            $model->fileVersion = $map['fileVersion'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['version'])) {
            $model->version = $map['version'];
        }

        return $model;
    }
}
