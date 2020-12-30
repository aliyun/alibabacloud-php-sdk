<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20190101\Models;

use AlibabaCloud\Tea\Model;

class UpgradeMultiZoneClusterRequest extends Model
{
    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $runMode;

    /**
     * @var string
     */
    public $upgradeInsName;

    /**
     * @var string
     */
    public $components;

    /**
     * @var string
     */
    public $versions;

    /**
     * @var string
     */
    public $restartComponents;
    protected $_name = [
        'clusterId'         => 'ClusterId',
        'runMode'           => 'RunMode',
        'upgradeInsName'    => 'UpgradeInsName',
        'components'        => 'Components',
        'versions'          => 'Versions',
        'restartComponents' => 'RestartComponents',
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
        if (null !== $this->runMode) {
            $res['RunMode'] = $this->runMode;
        }
        if (null !== $this->upgradeInsName) {
            $res['UpgradeInsName'] = $this->upgradeInsName;
        }
        if (null !== $this->components) {
            $res['Components'] = $this->components;
        }
        if (null !== $this->versions) {
            $res['Versions'] = $this->versions;
        }
        if (null !== $this->restartComponents) {
            $res['RestartComponents'] = $this->restartComponents;
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
        if (isset($map['RunMode'])) {
            $model->runMode = $map['RunMode'];
        }
        if (isset($map['UpgradeInsName'])) {
            $model->upgradeInsName = $map['UpgradeInsName'];
        }
        if (isset($map['Components'])) {
            $model->components = $map['Components'];
        }
        if (isset($map['Versions'])) {
            $model->versions = $map['Versions'];
        }
        if (isset($map['RestartComponents'])) {
            $model->restartComponents = $map['RestartComponents'];
        }

        return $model;
    }
}
