<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20190101\Models;

use AlibabaCloud\Tea\Model;

class UpgradeMultiZoneClusterRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example ld-***************
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description This parameter is required.
     *
     * @example LINDORM
     *
     * @var string
     */
    public $components;

    /**
     * @example LPROXY
     *
     * @var string
     */
    public $restartComponents;

    /**
     * @example serial
     *
     * @var string
     */
    public $runMode;

    /**
     * @example ld-t4n40m3171t4******-az-b
     *
     * @var string
     */
    public $upgradeInsName;

    /**
     * @example t-apsara-lindorm-2.1.20-20200518175539.alios7.x86_64
     *
     * @var string
     */
    public $versions;
    protected $_name = [
        'clusterId'         => 'ClusterId',
        'components'        => 'Components',
        'restartComponents' => 'RestartComponents',
        'runMode'           => 'RunMode',
        'upgradeInsName'    => 'UpgradeInsName',
        'versions'          => 'Versions',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->components) {
            $res['Components'] = $this->components;
        }
        if (null !== $this->restartComponents) {
            $res['RestartComponents'] = $this->restartComponents;
        }
        if (null !== $this->runMode) {
            $res['RunMode'] = $this->runMode;
        }
        if (null !== $this->upgradeInsName) {
            $res['UpgradeInsName'] = $this->upgradeInsName;
        }
        if (null !== $this->versions) {
            $res['Versions'] = $this->versions;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpgradeMultiZoneClusterRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['Components'])) {
            $model->components = $map['Components'];
        }
        if (isset($map['RestartComponents'])) {
            $model->restartComponents = $map['RestartComponents'];
        }
        if (isset($map['RunMode'])) {
            $model->runMode = $map['RunMode'];
        }
        if (isset($map['UpgradeInsName'])) {
            $model->upgradeInsName = $map['UpgradeInsName'];
        }
        if (isset($map['Versions'])) {
            $model->versions = $map['Versions'];
        }

        return $model;
    }
}
