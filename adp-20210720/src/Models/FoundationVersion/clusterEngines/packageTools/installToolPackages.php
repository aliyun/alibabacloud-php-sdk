<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adp\V20210720\Models\FoundationVersion\clusterEngines\packageTools;

use AlibabaCloud\Tea\Model;

class installToolPackages extends Model
{
    /**
     * @example ENUM:["amd64","arm64"]
     *
     * @var string
     */
    public $architecture;

    /**
     * @example ENUM:["linux","windows"]
     *
     * @var string
     */
    public $os;

    /**
     * @var string
     */
    public $url;
    protected $_name = [
        'architecture' => 'architecture',
        'os'           => 'os',
        'url'          => 'url',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->architecture) {
            $res['architecture'] = $this->architecture;
        }
        if (null !== $this->os) {
            $res['os'] = $this->os;
        }
        if (null !== $this->url) {
            $res['url'] = $this->url;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return installToolPackages
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['architecture'])) {
            $model->architecture = $map['architecture'];
        }
        if (isset($map['os'])) {
            $model->os = $map['os'];
        }
        if (isset($map['url'])) {
            $model->url = $map['url'];
        }

        return $model;
    }
}
