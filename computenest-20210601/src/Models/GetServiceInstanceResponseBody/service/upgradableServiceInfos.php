<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNest\V20210601\Models\GetServiceInstanceResponseBody\service;

use AlibabaCloud\Tea\Model;

class upgradableServiceInfos extends Model
{
    /**
     * @description An upgradable service version.
     *
     * @example draft
     *
     * @var string
     */
    public $version;

    /**
     * @description The version name of an upgradable service version.
     *
     * @example 0.1.0
     *
     * @var string
     */
    public $versionName;
    protected $_name = [
        'version' => 'Version',
        'versionName' => 'VersionName',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }
        if (null !== $this->versionName) {
            $res['VersionName'] = $this->versionName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return upgradableServiceInfos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }
        if (isset($map['VersionName'])) {
            $model->versionName = $map['VersionName'];
        }

        return $model;
    }
}
