<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeTairKVCacheInferInstancesResponseBody\instances;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeTairKVCacheInferInstancesResponseBody\instances\tairInferInstanceDTO\tags;

class tairInferInstanceDTO extends Model
{
    /**
     * @var int
     */
    public $capacity;

    /**
     * @var string
     */
    public $chargeType;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $destroyTime;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $instanceClass;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var string
     */
    public $instanceStatus;

    /**
     * @var string
     */
    public $instanceType;

    /**
     * @var string
     */
    public $moduleName;

    /**
     * @var string
     */
    public $networkType;

    /**
     * @var string
     */
    public $privateIp;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var int
     */
    public $reserveGpuNum;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var tags
     */
    public $tags;

    /**
     * @var int
     */
    public $usedGpuNum;

    /**
     * @var string
     */
    public $vSwitchId;

    /**
     * @var string
     */
    public $vpcId;

    /**
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'capacity' => 'Capacity',
        'chargeType' => 'ChargeType',
        'createTime' => 'CreateTime',
        'destroyTime' => 'DestroyTime',
        'endTime' => 'EndTime',
        'instanceClass' => 'InstanceClass',
        'instanceId' => 'InstanceId',
        'instanceName' => 'InstanceName',
        'instanceStatus' => 'InstanceStatus',
        'instanceType' => 'InstanceType',
        'moduleName' => 'ModuleName',
        'networkType' => 'NetworkType',
        'privateIp' => 'PrivateIp',
        'regionId' => 'RegionId',
        'reserveGpuNum' => 'ReserveGpuNum',
        'resourceGroupId' => 'ResourceGroupId',
        'tags' => 'Tags',
        'usedGpuNum' => 'UsedGpuNum',
        'vSwitchId' => 'VSwitchId',
        'vpcId' => 'VpcId',
        'zoneId' => 'ZoneId',
    ];

    public function validate()
    {
        if (null !== $this->tags) {
            $this->tags->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->capacity) {
            $res['Capacity'] = $this->capacity;
        }

        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->destroyTime) {
            $res['DestroyTime'] = $this->destroyTime;
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->instanceClass) {
            $res['InstanceClass'] = $this->instanceClass;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }

        if (null !== $this->instanceStatus) {
            $res['InstanceStatus'] = $this->instanceStatus;
        }

        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }

        if (null !== $this->moduleName) {
            $res['ModuleName'] = $this->moduleName;
        }

        if (null !== $this->networkType) {
            $res['NetworkType'] = $this->networkType;
        }

        if (null !== $this->privateIp) {
            $res['PrivateIp'] = $this->privateIp;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->reserveGpuNum) {
            $res['ReserveGpuNum'] = $this->reserveGpuNum;
        }

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->tags) {
            $res['Tags'] = null !== $this->tags ? $this->tags->toArray($noStream) : $this->tags;
        }

        if (null !== $this->usedGpuNum) {
            $res['UsedGpuNum'] = $this->usedGpuNum;
        }

        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }

        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Capacity'])) {
            $model->capacity = $map['Capacity'];
        }

        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['DestroyTime'])) {
            $model->destroyTime = $map['DestroyTime'];
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['InstanceClass'])) {
            $model->instanceClass = $map['InstanceClass'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }

        if (isset($map['InstanceStatus'])) {
            $model->instanceStatus = $map['InstanceStatus'];
        }

        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }

        if (isset($map['ModuleName'])) {
            $model->moduleName = $map['ModuleName'];
        }

        if (isset($map['NetworkType'])) {
            $model->networkType = $map['NetworkType'];
        }

        if (isset($map['PrivateIp'])) {
            $model->privateIp = $map['PrivateIp'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['ReserveGpuNum'])) {
            $model->reserveGpuNum = $map['ReserveGpuNum'];
        }

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        if (isset($map['Tags'])) {
            $model->tags = tags::fromMap($map['Tags']);
        }

        if (isset($map['UsedGpuNum'])) {
            $model->usedGpuNum = $map['UsedGpuNum'];
        }

        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }

        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
