<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeDBInstancesResponseBody\items;

use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeDBInstancesResponseBody\items\DBInstance\tags;
use AlibabaCloud\Tea\Model;

class DBInstance extends Model
{
    /**
     * @description An invalid parameter. It is no longer returned when you call this operation.
     *
     * You can call the [DescribeDBInstanceAttribute](~~86910~~) operation to query the access mode of an instance.
     * @example null
     *
     * @var string
     */
    public $connectionMode;

    /**
     * @description The time when the instance was created. The time is displayed in UTC.
     *
     * @example 2021-10-09T04:54:08Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The edition of the instance. Valid values:
     *
     *   **Basic**: Basic Edition
     *   **HighAvailability**: High-availability Edition
     *   **Finance**: Enterprise Edition
     *
     * @example HighAvailability
     *
     * @var string
     */
    public $DBInstanceCategory;

    /**
     * @description The description of the instance.
     *
     * @example gp-bp12ga6v69h86****
     *
     * @var string
     */
    public $DBInstanceDescription;

    /**
     * @description The ID of the instance.
     *
     * @example gp-bp12ga6v69h86****
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description The resource type of the instance. Valid values:
     *
     *   **Serverless**: Serverless mode
     *   **StorageElastic**: elastic storage mode
     *   **Classic**: reserved storage mode
     *
     * @example StorageElastic
     *
     * @var string
     */
    public $DBInstanceMode;

    /**
     * @description The type of the network interface card (NIC) that is used by the instance. Valid values:
     *
     *   **0**: Internet
     *   **1**: internal network
     *   **2**: VPC
     *
     * @example 2
     *
     * @var string
     */
    public $DBInstanceNetType;

    /**
     * @description The state of the instance. For more information, see [Instance statuses](~~86944~~).
     *
     * @example Running
     *
     * @var string
     */
    public $DBInstanceStatus;

    /**
     * @description The database engine that the instance runs.
     *
     * @example gpdb
     *
     * @var string
     */
    public $engine;

    /**
     * @description The version of the database engine.
     *
     * @example 6.0
     *
     * @var string
     */
    public $engineVersion;

    /**
     * @description The expiration time of the instance. The time is displayed in UTC.
     *
     * >  For pay-as-you-go instances, `2999-09-08T16:00:00Z` is returned.
     * @example 2999-09-08T16:00:00Z
     *
     * @var string
     */
    public $expireTime;

    /**
     * @description The resource type of the instance. Valid values:
     *
     *   **cluster**: elastic storage mode or Serverless mode
     *   **replicaSet**: reserved storage mode
     *
     * @example cluster
     *
     * @var string
     */
    public $instanceDeployType;

    /**
     * @description The network type of the instance. Valid values:
     *
     *   **Classic**
     *   **VPC**
     *
     * @example VPC
     *
     * @var string
     */
    public $instanceNetworkType;

    /**
     * @description The lock mode of the instance. Valid values:
     *
     *   **Unlock**: The instance is not locked.
     *   **ManualLock**: The instance is manually locked.
     *   **LockByExpiration**: The instance is automatically locked due to instance expiration.
     *   **LockByRestoration**: The instance is automatically locked due to instance restoration.
     *   **LockByDiskQuota**: The instance is automatically locked due to exhausted storage.
     *   **LockReadInstanceByDiskQuota**: The instance is a read-only instance and is automatically locked due to exhausted storage.
     *
     * @example Unlock
     *
     * @var string
     */
    public $lockMode;

    /**
     * @description The reason why the cluster is locked.
     *
     * >  This parameter is returned only when the cluster is locked. The value is **instance_expire**.
     * @example 0
     *
     * @var string
     */
    public $lockReason;

    /**
     * @description The number of coordinator nodes.
     *
     * @example 1
     *
     * @var int
     */
    public $masterNodeNum;

    /**
     * @description The billing method of the instance. Valid values:
     *
     *   **Postpaid**: pay-as-you-go
     *   **Prepaid**: subscription
     *
     * @example Postpaid
     *
     * @var string
     */
    public $payType;

    /**
     * @description The region ID of the instance.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the resource group to which the instance belongs.
     *
     * @example rg-bp67acfmxazb4p****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The number of compute nodes.
     *
     * @example 4
     *
     * @var string
     */
    public $segNodeNum;

    /**
     * @description The type of the Serverless mode. Valid values:
     *
     *   **Manual**: manual scheduling
     *   **Auto**: automatic scheduling
     *
     * >  This parameter is returned only for instances in Serverless mode.
     * @example Manual
     *
     * @var string
     */
    public $serverlessMode;

    /**
     * @description The storage capacity. Unit: GB.
     *
     * @example 50
     *
     * @var string
     */
    public $storageSize;

    /**
     * @description The storage type of the instance. Valid values:
     *
     *   **cloud_essd**: enhanced SSD (ESSD)
     *   **cloud_efficiency**: ultra disk
     *
     * @example cloud_essd
     *
     * @var string
     */
    public $storageType;

    /**
     * @description The tags of the instance. Each tag is a key-value pair.
     *
     * @var tags
     */
    public $tags;

    /**
     * @description The ID of the vSwitch.
     *
     * @example vsw-bp1cpq8mr64paltkb****
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @description The ID of virtual private cloud (VPC).
     *
     * @example vpc-bp19ame5m1r3oejns****
     *
     * @var string
     */
    public $vpcId;

    /**
     * @description The zone ID of the instance.
     *
     * @example cn-hangzhou-h
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'connectionMode'        => 'ConnectionMode',
        'createTime'            => 'CreateTime',
        'DBInstanceCategory'    => 'DBInstanceCategory',
        'DBInstanceDescription' => 'DBInstanceDescription',
        'DBInstanceId'          => 'DBInstanceId',
        'DBInstanceMode'        => 'DBInstanceMode',
        'DBInstanceNetType'     => 'DBInstanceNetType',
        'DBInstanceStatus'      => 'DBInstanceStatus',
        'engine'                => 'Engine',
        'engineVersion'         => 'EngineVersion',
        'expireTime'            => 'ExpireTime',
        'instanceDeployType'    => 'InstanceDeployType',
        'instanceNetworkType'   => 'InstanceNetworkType',
        'lockMode'              => 'LockMode',
        'lockReason'            => 'LockReason',
        'masterNodeNum'         => 'MasterNodeNum',
        'payType'               => 'PayType',
        'regionId'              => 'RegionId',
        'resourceGroupId'       => 'ResourceGroupId',
        'segNodeNum'            => 'SegNodeNum',
        'serverlessMode'        => 'ServerlessMode',
        'storageSize'           => 'StorageSize',
        'storageType'           => 'StorageType',
        'tags'                  => 'Tags',
        'vSwitchId'             => 'VSwitchId',
        'vpcId'                 => 'VpcId',
        'zoneId'                => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->connectionMode) {
            $res['ConnectionMode'] = $this->connectionMode;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->DBInstanceCategory) {
            $res['DBInstanceCategory'] = $this->DBInstanceCategory;
        }
        if (null !== $this->DBInstanceDescription) {
            $res['DBInstanceDescription'] = $this->DBInstanceDescription;
        }
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->DBInstanceMode) {
            $res['DBInstanceMode'] = $this->DBInstanceMode;
        }
        if (null !== $this->DBInstanceNetType) {
            $res['DBInstanceNetType'] = $this->DBInstanceNetType;
        }
        if (null !== $this->DBInstanceStatus) {
            $res['DBInstanceStatus'] = $this->DBInstanceStatus;
        }
        if (null !== $this->engine) {
            $res['Engine'] = $this->engine;
        }
        if (null !== $this->engineVersion) {
            $res['EngineVersion'] = $this->engineVersion;
        }
        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }
        if (null !== $this->instanceDeployType) {
            $res['InstanceDeployType'] = $this->instanceDeployType;
        }
        if (null !== $this->instanceNetworkType) {
            $res['InstanceNetworkType'] = $this->instanceNetworkType;
        }
        if (null !== $this->lockMode) {
            $res['LockMode'] = $this->lockMode;
        }
        if (null !== $this->lockReason) {
            $res['LockReason'] = $this->lockReason;
        }
        if (null !== $this->masterNodeNum) {
            $res['MasterNodeNum'] = $this->masterNodeNum;
        }
        if (null !== $this->payType) {
            $res['PayType'] = $this->payType;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->segNodeNum) {
            $res['SegNodeNum'] = $this->segNodeNum;
        }
        if (null !== $this->serverlessMode) {
            $res['ServerlessMode'] = $this->serverlessMode;
        }
        if (null !== $this->storageSize) {
            $res['StorageSize'] = $this->storageSize;
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
     * @return DBInstance
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConnectionMode'])) {
            $model->connectionMode = $map['ConnectionMode'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['DBInstanceCategory'])) {
            $model->DBInstanceCategory = $map['DBInstanceCategory'];
        }
        if (isset($map['DBInstanceDescription'])) {
            $model->DBInstanceDescription = $map['DBInstanceDescription'];
        }
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['DBInstanceMode'])) {
            $model->DBInstanceMode = $map['DBInstanceMode'];
        }
        if (isset($map['DBInstanceNetType'])) {
            $model->DBInstanceNetType = $map['DBInstanceNetType'];
        }
        if (isset($map['DBInstanceStatus'])) {
            $model->DBInstanceStatus = $map['DBInstanceStatus'];
        }
        if (isset($map['Engine'])) {
            $model->engine = $map['Engine'];
        }
        if (isset($map['EngineVersion'])) {
            $model->engineVersion = $map['EngineVersion'];
        }
        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }
        if (isset($map['InstanceDeployType'])) {
            $model->instanceDeployType = $map['InstanceDeployType'];
        }
        if (isset($map['InstanceNetworkType'])) {
            $model->instanceNetworkType = $map['InstanceNetworkType'];
        }
        if (isset($map['LockMode'])) {
            $model->lockMode = $map['LockMode'];
        }
        if (isset($map['LockReason'])) {
            $model->lockReason = $map['LockReason'];
        }
        if (isset($map['MasterNodeNum'])) {
            $model->masterNodeNum = $map['MasterNodeNum'];
        }
        if (isset($map['PayType'])) {
            $model->payType = $map['PayType'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['SegNodeNum'])) {
            $model->segNodeNum = $map['SegNodeNum'];
        }
        if (isset($map['ServerlessMode'])) {
            $model->serverlessMode = $map['ServerlessMode'];
        }
        if (isset($map['StorageSize'])) {
            $model->storageSize = $map['StorageSize'];
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
