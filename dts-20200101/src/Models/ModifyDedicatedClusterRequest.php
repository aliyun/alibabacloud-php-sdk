<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models;

use AlibabaCloud\Tea\Model;

class ModifyDedicatedClusterRequest extends Model
{
    /**
     * @description The ID of the cluster.
     *
     * >  You must specify one of the **InstanceId** and **DedicatedClusterId** parameters.
     * @example dtscluster_h3fl1cs217sx952
     *
     * @var string
     */
    public $dedicatedClusterId;

    /**
     * @description The name of the cluster.
     *
     * @example dtscluster_test_001
     *
     * @var string
     */
    public $dedicatedClusterName;

    /**
     * @description The ID of the instance.
     *
     * >  You must specify one of the **InstanceId** and **DedicatedClusterId** parameters.
     * @example rm-bp1162kryivb8****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The overcommit ratio. Unit: %.
     *
     * @example 150
     *
     * @var int
     */
    public $oversoldRatio;

    /**
     * @var string
     */
    public $ownerId;

    /**
     * @description The ID of the region in which the Data Transmission Service (DTS) instance resides.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'dedicatedClusterId'   => 'DedicatedClusterId',
        'dedicatedClusterName' => 'DedicatedClusterName',
        'instanceId'           => 'InstanceId',
        'oversoldRatio'        => 'OversoldRatio',
        'ownerId'              => 'OwnerId',
        'regionId'             => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dedicatedClusterId) {
            $res['DedicatedClusterId'] = $this->dedicatedClusterId;
        }
        if (null !== $this->dedicatedClusterName) {
            $res['DedicatedClusterName'] = $this->dedicatedClusterName;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->oversoldRatio) {
            $res['OversoldRatio'] = $this->oversoldRatio;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyDedicatedClusterRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DedicatedClusterId'])) {
            $model->dedicatedClusterId = $map['DedicatedClusterId'];
        }
        if (isset($map['DedicatedClusterName'])) {
            $model->dedicatedClusterName = $map['DedicatedClusterName'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['OversoldRatio'])) {
            $model->oversoldRatio = $map['OversoldRatio'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
