<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20220112\Models;

use AlibabaCloud\Tea\Model;

class ResourceInfos extends Model
{
    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $ecsSpec;

    /**
     * @var string
     */
    public $gpuCardType;

    /**
     * @var string
     */
    public $machineModel;

    /**
     * @var int
     */
    public $maxQuota;

    /**
     * @var string
     */
    public $networkPodId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var int
     */
    public $usedQuota;

    /**
     * @var string
     */
    public $userId;

    /**
     * @var string
     */
    public $userName;
    protected $_name = [
        'clusterId' => 'ClusterId',
        'ecsSpec' => 'EcsSpec',
        'gpuCardType' => 'GpuCardType',
        'machineModel' => 'MachineModel',
        'maxQuota' => 'MaxQuota',
        'networkPodId' => 'NetworkPodId',
        'regionId' => 'RegionId',
        'usedQuota' => 'UsedQuota',
        'userId' => 'UserId',
        'userName' => 'UserName',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->ecsSpec) {
            $res['EcsSpec'] = $this->ecsSpec;
        }
        if (null !== $this->gpuCardType) {
            $res['GpuCardType'] = $this->gpuCardType;
        }
        if (null !== $this->machineModel) {
            $res['MachineModel'] = $this->machineModel;
        }
        if (null !== $this->maxQuota) {
            $res['MaxQuota'] = $this->maxQuota;
        }
        if (null !== $this->networkPodId) {
            $res['NetworkPodId'] = $this->networkPodId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->usedQuota) {
            $res['UsedQuota'] = $this->usedQuota;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ResourceInfos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['EcsSpec'])) {
            $model->ecsSpec = $map['EcsSpec'];
        }
        if (isset($map['GpuCardType'])) {
            $model->gpuCardType = $map['GpuCardType'];
        }
        if (isset($map['MachineModel'])) {
            $model->machineModel = $map['MachineModel'];
        }
        if (isset($map['MaxQuota'])) {
            $model->maxQuota = $map['MaxQuota'];
        }
        if (isset($map['NetworkPodId'])) {
            $model->networkPodId = $map['NetworkPodId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['UsedQuota'])) {
            $model->usedQuota = $map['UsedQuota'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }

        return $model;
    }
}
