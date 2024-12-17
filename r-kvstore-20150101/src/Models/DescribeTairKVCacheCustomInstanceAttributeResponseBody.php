<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models;

use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeTairKVCacheCustomInstanceAttributeResponseBody\disks;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeTairKVCacheCustomInstanceAttributeResponseBody\tags;
use AlibabaCloud\Tea\Model;

class DescribeTairKVCacheCustomInstanceAttributeResponseBody extends Model
{
    /**
     * @example tair_custom
     *
     * @var string
     */
    public $architectureType;

    /**
     * @example PrePaid
     *
     * @var string
     */
    public $chargeType;

    /**
     * @example 2
     *
     * @var int
     */
    public $cpu;

    /**
     * @example 2024-02-21T08:23Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @var disks
     */
    public $disks;

    /**
     * @example 2024-05-28T00:00:00Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @example m-bp10k5694v6yfevajw**
     *
     * @var string
     */
    public $imageId;

    /**
     * @example tair.gpu.test.16g
     *
     * @var string
     */
    public $instanceClass;

    /**
     * @example tc-bp1zxszhcgatnx****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example newinstancename
     *
     * @var string
     */
    public $instanceName;

    /**
     * @example Normal
     *
     * @var string
     */
    public $instanceStatus;

    /**
     * @example TairCustom
     *
     * @var string
     */
    public $instanceType;

    /**
     * @example true
     *
     * @var bool
     */
    public $isOrderCompleted;

    /**
     * @example 262144
     *
     * @var int
     */
    public $memory;

    /**
     * @example VPC
     *
     * @var string
     */
    public $networkType;

    /**
     * @example 172.16.49.***
     *
     * @var string
     */
    public $privateIp;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @example 2BE6E619-A657-42E3-AD2D-18F8428A****
     *
     * @var string
     */
    public $requestId;

    /**
     * @example rg-acfmyiu4ekp****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @example sg-bpcfmyiu4ekp****
     *
     * @var string
     */
    public $securityGroupId;

    /**
     * @example 60
     *
     * @var int
     */
    public $storage;

    /**
     * @example essd_pl1
     *
     * @var string
     */
    public $storageType;

    /**
     * @var tags
     */
    public $tags;

    /**
     * @example vsw-bp1e7clcw529l773d****
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @example vpc-bp1nme44gek34slfc****
     *
     * @var string
     */
    public $vpcId;

    /**
     * @example cn-hangzhou-b
     *
     * @var string
     */
    public $zoneId;

    /**
     * @example singlezone
     *
     * @var string
     */
    public $zoneType;
    protected $_name = [
        'architectureType' => 'ArchitectureType',
        'chargeType'       => 'ChargeType',
        'cpu'              => 'Cpu',
        'createTime'       => 'CreateTime',
        'disks'            => 'Disks',
        'endTime'          => 'EndTime',
        'imageId'          => 'ImageId',
        'instanceClass'    => 'InstanceClass',
        'instanceId'       => 'InstanceId',
        'instanceName'     => 'InstanceName',
        'instanceStatus'   => 'InstanceStatus',
        'instanceType'     => 'InstanceType',
        'isOrderCompleted' => 'IsOrderCompleted',
        'memory'           => 'Memory',
        'networkType'      => 'NetworkType',
        'privateIp'        => 'PrivateIp',
        'regionId'         => 'RegionId',
        'requestId'        => 'RequestId',
        'resourceGroupId'  => 'ResourceGroupId',
        'securityGroupId'  => 'SecurityGroupId',
        'storage'          => 'Storage',
        'storageType'      => 'StorageType',
        'tags'             => 'Tags',
        'vSwitchId'        => 'VSwitchId',
        'vpcId'            => 'VpcId',
        'zoneId'           => 'ZoneId',
        'zoneType'         => 'ZoneType',
    ];

    public function validate()
    {
    }

    public function toMap()
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
            $res['Disks'] = null !== $this->disks ? $this->disks->toMap() : null;
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
            $res['Tags'] = null !== $this->tags ? $this->tags->toMap() : null;
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

    /**
     * @param array $map
     *
     * @return DescribeTairKVCacheCustomInstanceAttributeResponseBody
     */
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
