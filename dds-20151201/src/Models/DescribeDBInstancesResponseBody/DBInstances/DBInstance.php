<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models\DescribeDBInstancesResponseBody\DBInstances;

use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeDBInstancesResponseBody\DBInstances\DBInstance\mongosList;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeDBInstancesResponseBody\DBInstances\DBInstance\shardList;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeDBInstancesResponseBody\DBInstances\DBInstance\tags;
use AlibabaCloud\Tea\Model;

class DBInstance extends Model
{
    /**
     * @description The backup retention policy configured for the instance. Valid values:
     *
     *   **0**: All backup sets of the instance are immediately deleted when the instance is released.
     *   **1**: A backup set of the instance is automatically backed up and retained for a long period of time when the instance is released.
     *   **2**: All backup sets of the instance are automatically backed up and retained for a long period of time when the instance is released.
     *
     * @example 1
     *
     * @var int
     */
    public $backupRetentionPolicy;

    /**
     * @description The I/O throughput consumed by the instance.
     *
     * >  This parameter is required only when the instance is a serverless instance.
     *
     * @example 100
     *
     * @var string
     */
    public $capacityUnit;

    /**
     * @description The billing method of the instance. Valid values:
     *
     *   **PrePaid**: subscription
     *   **PostPaid:** pay-as-you-go
     *
     * @example PrePaid
     *
     * @var string
     */
    public $chargeType;

    /**
     * @description The time when the instance was created. The time follows the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time is displayed in UTC.
     *
     * @example 2021-03-25T02:18:00Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description The instance type of the instance.
     *
     * @example dds.mongo.mid
     *
     * @var string
     */
    public $DBInstanceClass;

    /**
     * @description The description of the instance.
     *
     * @example Test database
     *
     * @var string
     */
    public $DBInstanceDescription;

    /**
     * @description The instance ID.
     *
     * @example dds-bp18b0934e70****
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description The status of the instance. For more information, see [Instance states](https://help.aliyun.com/document_detail/63870.html).
     *
     * @example Running
     *
     * @var string
     */
    public $DBInstanceStatus;

    /**
     * @description The storage capacity of the instance.
     *
     * @example 20
     *
     * @var int
     */
    public $DBInstanceStorage;

    /**
     * @description The architecture of the instance.
     *
     *   **sharding**: sharded cluster instance
     *   **replicate**: replica set or standalone instance
     *
     * @example sharding
     *
     * @var string
     */
    public $DBInstanceType;

    /**
     * @description The time when the instance data is destroyed. The time follows the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time is displayed in UTC.
     *
     * > *   For a subscription instance, the computing resources of the instance are released on the 16th day after expiration, and the data of the instance is retained for seven days. The data is deleted on the 23th day after expiration and cannot be restored.
     * > *   For a pay-as-you-go instance, the computing resources of the instance are released on the 16th day after the payment becomes overdue, and the data of the instance is retained for seven days. The data is deleted on the 23th day after the payment becomes overdue and cannot be restored.
     *
     * @example 2021-12-10T16:00:00Z
     *
     * @var string
     */
    public $destroyTime;

    /**
     * @description The engine of the instance.
     *
     * @example MongoDB
     *
     * @var string
     */
    public $engine;

    /**
     * @description The database engine version of the instance. Valid values:
     *
     *   **7.0**
     *   **6.0**
     *   **5.0**
     *   **4.4**
     *   **4.2**
     *   **4.0**
     *   **3.4**
     *
     * @example 4.2
     *
     * @var string
     */
    public $engineVersion;

    /**
     * @description The time when the instance expires. The time follows the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm*Z format. The time is displayed in UTC.
     *
     * @example 2021-11-25T16:00Z
     *
     * @var string
     */
    public $expireTime;

    /**
     * @description The secondary zone 2 of the instance in the multi-zone deployment. Valid values:
     *
     *   **cn-hangzhou-g**: Hangzhou Zone G
     *   **cn-hangzhou-h**: Hangzhou Zone H
     *   **cn-hangzhou-i**: Hangzhou Zone I
     *   **cn-hongkong-b**: Hong Kong Zone B
     *   **cn-hongkong-c**: Hong Kong Zone C
     *   **cn-hongkong-d**: Hong Kong Zone D
     *   **cn-wulanchabu-a**: Ulanqab Zone A
     *   **cn-wulanchabu-b**: Ulanqab Zone B
     *   **cn-wulanchabu-c**: Ulanqab Zone C
     *   **ap-southeast-1a**: Singapore Zone A
     *   **ap-southeast-1b**: Singapore Zone B
     *   **ap-southeast-1c**: Singapore Zone C
     *   **ap-southeast-5a**: Jakarta Zone A
     *   **ap-southeast-5b**: Jakarta Zone B
     *   **ap-southeast-5c**: Jakarta Zone C
     *   **eu-central-1a**: Frankfurt Zone A
     *   **eu-central-1b**: Frankfurt Zone B
     *   **eu-central-1c**: Frankfurt Zone C
     *
     * > *   This parameter is returned only when the instance is a replica set or sharded cluster instance that runs MongoDB 4.4 or 5.0 and uses the multi-zone deployment.
     * > *   This parameter is returned only if you use the China site (aliyun.com).
     *
     * @example cn-hangzhou-h
     *
     * @var string
     */
    public $hiddenZoneId;

    /**
     * @description The kind code of the instance. Valid values:
     *
     *   **0**: physical machine
     *   **1**: Elastic Compute Service (ECS) instance
     *   **2**: Docker cluster
     *   **18**: Kubernetes cluster
     *
     * @example 1
     *
     * @var string
     */
    public $kindCode;

    /**
     * @description The date when the last downgrade operation was performed.
     *
     * @example 2021-05-08
     *
     * @var string
     */
    public $lastDowngradeTime;

    /**
     * @description The lock status of the instance. Valid values:
     *
     *   **Unlock**: The cluster is unlocked.
     *   **ManualLock**: The instance is manually locked.
     *   **LockByExpiration**: The instance is automatically locked due to instance expiration.
     *   **LockByRestoration**: The instance is automatically locked before it is rolled back.
     *   **LockByDiskQuota**: The instance is automatically locked after the storage space is exhausted.
     *   **Released**: The instance is released. After an instance is released, the instance cannot be unlocked. You can only restore the backup data of the instance to a new instance. This process requires a long period of time.
     *
     * @example Unlock
     *
     * @var string
     */
    public $lockMode;

    /**
     * @description The details of the mongos node.
     *
     * >  This parameter is returned if the instance is a sharded cluster instance.
     *
     * @var mongosList
     */
    public $mongosList;

    /**
     * @description The network type of the instance. Valid values:
     *
     *   **Classic**: classic network
     *   **VPC**: VPC
     *
     * @example Classic
     *
     * @var string
     */
    public $networkType;

    /**
     * @description The region ID of the instance.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The time when the instance was released.
     *
     * @example 2024-06-17T07:01Z
     *
     * @var string
     */
    public $releaseTime;

    /**
     * @description The number of nodes in the instance.
     *
     * >  This parameter is returned if the instance is a replica set instance.
     *
     * @example 3
     *
     * @var string
     */
    public $replicationFactor;

    /**
     * @description The ID of the resource group to which the instance belongs.
     *
     * @example rg-acfmyiu4ekp****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The secondary zone 1 of the instance in the multi-zone deployment. Valid values:
     *
     *   **cn-hangzhou-g**: Hangzhou Zone G
     *   **cn-hangzhou-h**: Hangzhou Zone H
     *   **cn-hangzhou-i**: Hangzhou Zone I
     *   **cn-hongkong-b**: Hong Kong Zone B
     *   **cn-hongkong-c**: Hong Kong Zone C
     *   **cn-hongkong-d**: Hong Kong Zone D
     *   **cn-wulanchabu-a**: Ulanqab Zone A
     *   **cn-wulanchabu-b**: Ulanqab Zone B
     *   **cn-wulanchabu-c**: Ulanqab Zone C
     *   **ap-southeast-1a**: Singapore Zone A
     *   **ap-southeast-1b**: Singapore Zone B
     *   **ap-southeast-1c**: Singapore Zone C
     *   **ap-southeast-5a**: Jakarta Zone A
     *   **ap-southeast-5b**: Jakarta Zone B
     *   **ap-southeast-5c**: Jakarta Zone C
     *   **eu-central-1a**: Frankfurt Zone A
     *   **eu-central-1b**: Frankfurt Zone B
     *   **eu-central-1c**: Frankfurt Zone C
     *
     * > *   This parameter is returned only when the instance is a replica set or sharded cluster instance that runs MongoDB 4.4 or 5.0 and uses the multi-zone deployment.
     * > *   This parameter is returned only if you use the China site (aliyun.com).
     *
     * @example cn-hangzhou-i
     *
     * @var string
     */
    public $secondaryZoneId;

    /**
     * @description The details of the shard node.
     *
     * >  This parameter is returned if the instance is a sharded cluster instance.
     *
     * @var shardList
     */
    public $shardList;

    /**
     * @description The storage type of the instance. Valid values:
     *
     *   **cloud_essd**: Enterprise SSD (ESSD)
     *   **local_ssd**: local SSD
     *
     * @example local_ssd
     *
     * @var string
     */
    public $storageType;

    /**
     * @description The details of the tag.
     *
     * @var tags
     */
    public $tags;

    /**
     * @description Indicates whether password-free access over virtual private cloud (VPC) is enabled. Valid values:
     *
     *   **Open**: Password-free access over VPC is enabled.
     *   **Close**: Password-free access over VPC is disabled.
     *
     * @example Close
     *
     * @var string
     */
    public $vpcAuthMode;

    /**
     * @description The zone ID of the instance.
     *
     * @example cn-hangzhou-g
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'backupRetentionPolicy' => 'BackupRetentionPolicy',
        'capacityUnit' => 'CapacityUnit',
        'chargeType' => 'ChargeType',
        'creationTime' => 'CreationTime',
        'DBInstanceClass' => 'DBInstanceClass',
        'DBInstanceDescription' => 'DBInstanceDescription',
        'DBInstanceId' => 'DBInstanceId',
        'DBInstanceStatus' => 'DBInstanceStatus',
        'DBInstanceStorage' => 'DBInstanceStorage',
        'DBInstanceType' => 'DBInstanceType',
        'destroyTime' => 'DestroyTime',
        'engine' => 'Engine',
        'engineVersion' => 'EngineVersion',
        'expireTime' => 'ExpireTime',
        'hiddenZoneId' => 'HiddenZoneId',
        'kindCode' => 'KindCode',
        'lastDowngradeTime' => 'LastDowngradeTime',
        'lockMode' => 'LockMode',
        'mongosList' => 'MongosList',
        'networkType' => 'NetworkType',
        'regionId' => 'RegionId',
        'releaseTime' => 'ReleaseTime',
        'replicationFactor' => 'ReplicationFactor',
        'resourceGroupId' => 'ResourceGroupId',
        'secondaryZoneId' => 'SecondaryZoneId',
        'shardList' => 'ShardList',
        'storageType' => 'StorageType',
        'tags' => 'Tags',
        'vpcAuthMode' => 'VpcAuthMode',
        'zoneId' => 'ZoneId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->backupRetentionPolicy) {
            $res['BackupRetentionPolicy'] = $this->backupRetentionPolicy;
        }
        if (null !== $this->capacityUnit) {
            $res['CapacityUnit'] = $this->capacityUnit;
        }
        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->DBInstanceClass) {
            $res['DBInstanceClass'] = $this->DBInstanceClass;
        }
        if (null !== $this->DBInstanceDescription) {
            $res['DBInstanceDescription'] = $this->DBInstanceDescription;
        }
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->DBInstanceStatus) {
            $res['DBInstanceStatus'] = $this->DBInstanceStatus;
        }
        if (null !== $this->DBInstanceStorage) {
            $res['DBInstanceStorage'] = $this->DBInstanceStorage;
        }
        if (null !== $this->DBInstanceType) {
            $res['DBInstanceType'] = $this->DBInstanceType;
        }
        if (null !== $this->destroyTime) {
            $res['DestroyTime'] = $this->destroyTime;
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
        if (null !== $this->hiddenZoneId) {
            $res['HiddenZoneId'] = $this->hiddenZoneId;
        }
        if (null !== $this->kindCode) {
            $res['KindCode'] = $this->kindCode;
        }
        if (null !== $this->lastDowngradeTime) {
            $res['LastDowngradeTime'] = $this->lastDowngradeTime;
        }
        if (null !== $this->lockMode) {
            $res['LockMode'] = $this->lockMode;
        }
        if (null !== $this->mongosList) {
            $res['MongosList'] = null !== $this->mongosList ? $this->mongosList->toMap() : null;
        }
        if (null !== $this->networkType) {
            $res['NetworkType'] = $this->networkType;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->releaseTime) {
            $res['ReleaseTime'] = $this->releaseTime;
        }
        if (null !== $this->replicationFactor) {
            $res['ReplicationFactor'] = $this->replicationFactor;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->secondaryZoneId) {
            $res['SecondaryZoneId'] = $this->secondaryZoneId;
        }
        if (null !== $this->shardList) {
            $res['ShardList'] = null !== $this->shardList ? $this->shardList->toMap() : null;
        }
        if (null !== $this->storageType) {
            $res['StorageType'] = $this->storageType;
        }
        if (null !== $this->tags) {
            $res['Tags'] = null !== $this->tags ? $this->tags->toMap() : null;
        }
        if (null !== $this->vpcAuthMode) {
            $res['VpcAuthMode'] = $this->vpcAuthMode;
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
        if (isset($map['BackupRetentionPolicy'])) {
            $model->backupRetentionPolicy = $map['BackupRetentionPolicy'];
        }
        if (isset($map['CapacityUnit'])) {
            $model->capacityUnit = $map['CapacityUnit'];
        }
        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['DBInstanceClass'])) {
            $model->DBInstanceClass = $map['DBInstanceClass'];
        }
        if (isset($map['DBInstanceDescription'])) {
            $model->DBInstanceDescription = $map['DBInstanceDescription'];
        }
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['DBInstanceStatus'])) {
            $model->DBInstanceStatus = $map['DBInstanceStatus'];
        }
        if (isset($map['DBInstanceStorage'])) {
            $model->DBInstanceStorage = $map['DBInstanceStorage'];
        }
        if (isset($map['DBInstanceType'])) {
            $model->DBInstanceType = $map['DBInstanceType'];
        }
        if (isset($map['DestroyTime'])) {
            $model->destroyTime = $map['DestroyTime'];
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
        if (isset($map['HiddenZoneId'])) {
            $model->hiddenZoneId = $map['HiddenZoneId'];
        }
        if (isset($map['KindCode'])) {
            $model->kindCode = $map['KindCode'];
        }
        if (isset($map['LastDowngradeTime'])) {
            $model->lastDowngradeTime = $map['LastDowngradeTime'];
        }
        if (isset($map['LockMode'])) {
            $model->lockMode = $map['LockMode'];
        }
        if (isset($map['MongosList'])) {
            $model->mongosList = mongosList::fromMap($map['MongosList']);
        }
        if (isset($map['NetworkType'])) {
            $model->networkType = $map['NetworkType'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ReleaseTime'])) {
            $model->releaseTime = $map['ReleaseTime'];
        }
        if (isset($map['ReplicationFactor'])) {
            $model->replicationFactor = $map['ReplicationFactor'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['SecondaryZoneId'])) {
            $model->secondaryZoneId = $map['SecondaryZoneId'];
        }
        if (isset($map['ShardList'])) {
            $model->shardList = shardList::fromMap($map['ShardList']);
        }
        if (isset($map['StorageType'])) {
            $model->storageType = $map['StorageType'];
        }
        if (isset($map['Tags'])) {
            $model->tags = tags::fromMap($map['Tags']);
        }
        if (isset($map['VpcAuthMode'])) {
            $model->vpcAuthMode = $map['VpcAuthMode'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
