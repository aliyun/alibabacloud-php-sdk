<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeTairKVCacheCustomInstancesResponseBody\instances;

use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeTairKVCacheCustomInstancesResponseBody\instances\KVStoreInstance\tags;
use AlibabaCloud\Tea\Model;

class KVStoreInstance extends Model
{
    /**
     * @example PrePaid
     *
     * @var string
     */
    public $chargeType;

    /**
     * @example 2018-11-07T08:49:00Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @example 2019-04-28T10:03:01Z
     *
     * @var string
     */
    public $destroyTime;

    /**
     * @example 2024-05-21T00:00:00Z
     *
     * @var string
     */
    public $endTime;

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
     * @example testdb
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
     * @example VPC
     *
     * @var string
     */
    public $networkType;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @example rg-acfmyiu4ekp****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @example 50
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
     * @example cn-hangzhou-e
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'chargeType'      => 'ChargeType',
        'createTime'      => 'CreateTime',
        'destroyTime'     => 'DestroyTime',
        'endTime'         => 'EndTime',
        'instanceClass'   => 'InstanceClass',
        'instanceId'      => 'InstanceId',
        'instanceName'    => 'InstanceName',
        'instanceStatus'  => 'InstanceStatus',
        'instanceType'    => 'InstanceType',
        'networkType'     => 'NetworkType',
        'regionId'        => 'RegionId',
        'resourceGroupId' => 'ResourceGroupId',
        'storage'         => 'Storage',
        'storageType'     => 'StorageType',
        'tags'            => 'Tags',
        'vSwitchId'       => 'VSwitchId',
        'vpcId'           => 'VpcId',
        'zoneId'          => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
        if (null !== $this->networkType) {
            $res['NetworkType'] = $this->networkType;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return KVStoreInstance
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
        if (isset($map['NetworkType'])) {
            $model->networkType = $map['NetworkType'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
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

        return $model;
    }
}
