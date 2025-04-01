<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeTairKVCacheCustomInstanceAttributeResponseBody\disks;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeTairKVCacheCustomInstanceAttributeResponseBody\tags;

class DescribeTairKVCacheCustomInstanceAttributeResponseBody extends Model
{
    /**
     * @var string
     */
    public $architectureType;

    /**
     * @var string
     */
    public $chargeType;

    /**
     * @var int
     */
    public $cpu;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var disks
     */
    public $disks;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $imageId;

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
     * @var bool
     */
    public $isOrderCompleted;

    /**
     * @var int
     */
    public $memory;

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
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $securityGroupId;

    /**
     * @var int
     */
    public $storage;

    /**
     * @var string
     */
    public $storageType;

    /**
     * @var tags
     */
    public $tags;

    /**
     * @var bool
     */
    public $useEni;

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

    /**
     * @var string
     */
    public $zoneType;
    protected $_name = [
        'architectureType' => 'ArchitectureType',
        'chargeType' => 'ChargeType',
        'cpu' => 'Cpu',
        'createTime' => 'CreateTime',
        'disks' => 'Disks',
        'endTime' => 'EndTime',
        'imageId' => 'ImageId',
        'instanceClass' => 'InstanceClass',
        'instanceId' => 'InstanceId',
        'instanceName' => 'InstanceName',
        'instanceStatus' => 'InstanceStatus',
        'instanceType' => 'InstanceType',
        'isOrderCompleted' => 'IsOrderCompleted',
        'memory' => 'Memory',
        'networkType' => 'NetworkType',
        'privateIp' => 'PrivateIp',
        'regionId' => 'RegionId',
        'requestId' => 'RequestId',
        'resourceGroupId' => 'ResourceGroupId',
        'securityGroupId' => 'SecurityGroupId',
        'storage' => 'Storage',
        'storageType' => 'StorageType',
        'tags' => 'Tags',
        'useEni' => 'UseEni',
        'vSwitchId' => 'VSwitchId',
        'vpcId' => 'VpcId',
        'zoneId' => 'ZoneId',
        'zoneType' => 'ZoneType',
    ];

    public function validate()
    {
        if (null !== $this->disks) {
            $this->disks->validate();
        }
        if (null !== $this->tags) {
            $this->tags->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->architectureType) {
            $res['ArchitectureType'] = $this->architectureType;
        }

        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }

        if (null !== $this->cpu) {
            $res['Cpu'] = $this->cpu;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->disks) {
            $res['Disks'] = null !== $this->disks ? $this->disks->toArray($noStream) : $this->disks;
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
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

        if (null !== $this->isOrderCompleted) {
            $res['IsOrderCompleted'] = $this->isOrderCompleted;
        }

        if (null !== $this->memory) {
            $res['Memory'] = $this->memory;
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

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->securityGroupId) {
            $res['SecurityGroupId'] = $this->securityGroupId;
        }

        if (null !== $this->storage) {
            $res['Storage'] = $this->storage;
        }

        if (null !== $this->storageType) {
            $res['StorageType'] = $this->storageType;
        }

        if (null !== $this->tags) {
            $res['Tags'] = null !== $this->tags ? $this->tags->toArray($noStream) : $this->tags;
        }

        if (null !== $this->useEni) {
            $res['UseEni'] = $this->useEni;
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

        if (null !== $this->zoneType) {
            $res['ZoneType'] = $this->zoneType;
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
        if (isset($map['ArchitectureType'])) {
            $model->architectureType = $map['ArchitectureType'];
        }

        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
        }

        if (isset($map['Cpu'])) {
            $model->cpu = $map['Cpu'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['Disks'])) {
            $model->disks = disks::fromMap($map['Disks']);
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
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

        if (isset($map['IsOrderCompleted'])) {
            $model->isOrderCompleted = $map['IsOrderCompleted'];
        }

        if (isset($map['Memory'])) {
            $model->memory = $map['Memory'];
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

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        if (isset($map['SecurityGroupId'])) {
            $model->securityGroupId = $map['SecurityGroupId'];
        }

        if (isset($map['Storage'])) {
            $model->storage = $map['Storage'];
        }

        if (isset($map['StorageType'])) {
            $model->storageType = $map['StorageType'];
        }

        if (isset($map['Tags'])) {
            $model->tags = tags::fromMap($map['Tags']);
        }

        if (isset($map['UseEni'])) {
            $model->useEni = $map['UseEni'];
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

        if (isset($map['ZoneType'])) {
            $model->zoneType = $map['ZoneType'];
        }

        return $model;
    }
}
