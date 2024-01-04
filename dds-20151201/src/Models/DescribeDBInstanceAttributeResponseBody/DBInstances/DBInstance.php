<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models\DescribeDBInstanceAttributeResponseBody\DBInstances;

use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeDBInstanceAttributeResponseBody\DBInstances\DBInstance\configserverList;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeDBInstanceAttributeResponseBody\DBInstances\DBInstance\mongosList;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeDBInstanceAttributeResponseBody\DBInstances\DBInstance\replicaSets;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeDBInstanceAttributeResponseBody\DBInstances\DBInstance\shardList;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeDBInstanceAttributeResponseBody\DBInstances\DBInstance\tags;
use AlibabaCloud\Tea\Model;

class DBInstance extends Model
{
    /**
     * @description Indicates whether performance burst is enabled for the ESSD AutoPL disk.
     *
     * @example true
     *
     * @var bool
     */
    public $burstingEnabled;

    /**
     * @description The read and write throughput consumed by the instance.
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
     *   **PostPaid**: pay-as-you-go
     *
     * @example PostPaid
     *
     * @var string
     */
    public $chargeType;

    /**
     * @description The information of the Configserver nodes.
     *
     * >  This parameter is returned if the instance is a sharded cluster instance.
     * @var configserverList
     */
    public $configserverList;

    /**
     * @description The time when the instance was created. The time follows the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time is displayed in UTC.
     *
     * @example 2022-01-02T07:43:59Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description The minor version of the current database in the instance.
     *
     * @example 5.0.5-20220721143518_0
     *
     * @var string
     */
    public $currentKernelVersion;

    /**
     * @description The instance type of the instance.
     *
     * @example dds.mongo.mid
     *
     * @var string
     */
    public $DBInstanceClass;

    /**
     * @description The name of the instance.
     *
     * @example Test database
     *
     * @var string
     */
    public $DBInstanceDescription;

    /**
     * @description The instance ID.
     *
     * @example dds-bp11483712c1****
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description The status of the orders generated for the instance. Valid values:
     *
     *   **all_completed**: All orders are being produced or complete.
     *   **order_unpaid**: The instance has unpaid orders.
     *   **order_wait_for_produce**: Orders are being delivered for production.
     *
     * >  The order production process includes the following steps: place an order, pay for an order, deliver an order for production, produce an order, and complete the production.
     * > *   If an order is in the **order_wait_for_produce** state for a long time, an error occurs when the order is being delivered for production. The system will automatically retry.
     * > *   The instance status changes only when the order is in the producing and complete state, such as changing configurations and running.
     * @example all_completed
     *
     * @var string
     */
    public $DBInstanceOrderStatus;

    /**
     * @description Indicates whether release protection is enabled for the instance. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example false
     *
     * @var bool
     */
    public $DBInstanceReleaseProtection;

    /**
     * @description The status of the instance. For more information, see [Instance states](~~63870~~).
     *
     * @example Running
     *
     * @var string
     */
    public $DBInstanceStatus;

    /**
     * @description The storage capacity of the instance.
     *
     * @example 10
     *
     * @var int
     */
    public $DBInstanceStorage;

    /**
     * @description The architecture of the instance. Valid values:
     *
     *   **replicate**: replica set instance
     *   **sharding**: sharded cluster instance
     *
     * @example replicate
     *
     * @var string
     */
    public $DBInstanceType;

    /**
     * @description The time when the instance data was destroyed. The time follows the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format. The time is displayed in UTC.
     *
     * @example 2021-12-10T16:00:00Z
     *
     * @var string
     */
    public $destroyTime;

    /**
     * @description Indicates whether disk encryption is enabled.
     *
     * @example true
     *
     * @var bool
     */
    public $encrypted;

    /**
     * @description The Key Management Service (KMS) key used for disk encryption.
     *
     * @example 07609cc3-3109-408f-a35e-c548e776da0b
     *
     * @var string
     */
    public $encryptionKey;

    /**
     * @description The database engine of the instance.
     *
     * @example MongoDB
     *
     * @var string
     */
    public $engine;

    /**
     * @description The database engine version of the instance.
     *
     *   **6.0**
     *   **5.0**
     *   **4.4**
     *   **4.2**
     *   **4.0**
     *
     * @example 4.4
     *
     * @var string
     */
    public $engineVersion;

    /**
     * @description The time when the subscription instance expires. The time follows the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm*Z format. The time is displayed in UTC.
     *
     * >  This parameter is returned if the instance is a subscription instance.
     * @example 2022-02-05T16:00Z
     *
     * @var string
     */
    public $expireTime;

    /**
     * @description The ID of the secondary zone 2 of the instance. Valid values:
     *
     *   **cn-hangzhou-g**: Hangzhou Zone G
     *   **cn-hangzhou-h**: Hangzhou Zone H
     *   **cn-hangzhou-i**: Hangzhou Zone I
     *   **cn-hongkong-b**: Hongkong Zone B
     *   **cn-hongkong-c**: Hongkong Zone C
     *   **cn-hongkong-d**: Hongkong Zone D
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
     * > *   This parameter is returned if the instance is a replica set or sharded cluster instance that runs MongoDB 4.4 or 5.0 and uses multi-zone deployment.
     * > *   This parameter is returned only if you use the China site (aliyun.com).
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
     * @description The date when the last downgrade operation was performed on the instance.
     *
     * @example 2022-01-08
     *
     * @var string
     */
    public $lastDowngradeTime;

    /**
     * @description The lock status of the instance. Valid values:
     *
     *   **Unlock**: The instance is not locked.
     *   **ManualLock**: The instance is manually locked.
     *   **LockByExpiration**: The instance is automatically locked due to instance expiration.
     *   **LockByRestoration**: The instance is automatically locked before the instance is rolled back.
     *   **LockByDiskQuota**: The instance is automatically locked after the storage space is exhausted.
     *   **Released**: The instance is released.
     *
     * @example Unlock
     *
     * @var string
     */
    public $lockMode;

    /**
     * @description The end time of the maintenance window. The time follows the ISO 8601 standard in the *HH:mm*Z format. The time is displayed in UTC.
     *
     * @example 03:00Z
     *
     * @var string
     */
    public $maintainEndTime;

    /**
     * @description The start time of the maintenance window. The time follows the ISO 8601 standard in the *HH:mm*Z format. The time is displayed in UTC.
     *
     * @example 18:00Z
     *
     * @var string
     */
    public $maintainStartTime;

    /**
     * @description The maximum number of connections to the instance.
     *
     * @example 500
     *
     * @var int
     */
    public $maxConnections;

    /**
     * @description The maximum IOPS of the instance.
     *
     * @example 1000
     *
     * @var int
     */
    public $maxIOPS;

    /**
     * @description The maximum MBPS of the instance, Unit: MB/s.
     *
     * @example 350
     *
     * @var int
     */
    public $maxMBPS;

    /**
     * @description The information of the mongos nodes.
     *
     * >  This parameter is returned if the instance is a sharded cluster instance.
     * @var mongosList
     */
    public $mongosList;

    /**
     * @description The network type of the instance. Valid values:
     *
     *   **Classic**: classic network
     *   **VPC**: VPC
     *
     * @example VPC
     *
     * @var string
     */
    public $networkType;

    /**
     * @description The access protocol type of the instance. Valid values:
     *
     *   **mongodb**
     *   **dynamodb**
     *
     * >  This parameter is returned if the instance is a sharded cluster instance.
     * @example mongodb
     *
     * @var string
     */
    public $protocolType;

    /**
     * @description The provisioned performance of the ESSD AutoPL disk.
     *
     * @example 1960
     *
     * @var int
     */
    public $provisionedIops;

    /**
     * @description The number of read-only nodes in the instance.
     *
     * @example 1
     *
     * @var string
     */
    public $readonlyReplicas;

    /**
     * @description The region ID of the instance.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The logical ID of the replica set instance.
     *
     * >  ApsaraDB for MongoDB does not support new instances of this type. This parameter applies only to previous-version replica set instances.
     * @example bls-m****
     *
     * @var string
     */
    public $replacateId;

    /**
     * @description The name of the replica set instance.
     *
     * >  This parameter is returned if the instance is a replica set instance.
     * @example mgset-10ace****
     *
     * @var string
     */
    public $replicaSetName;

    /**
     * @description The information of the replica set instance.
     *
     * >  This parameter is returned if the instance is a replica set instance.
     * @var replicaSets
     */
    public $replicaSets;

    /**
     * @description The number of nodes in the instance.
     *
     * >  This parameter is returned if the instance is a replica set instance.
     * @example 3
     *
     * @var string
     */
    public $replicationFactor;

    /**
     * @description The ID of the resource group to which the instance belongs.
     *
     * >  This parameter is returned only if you use the China site (aliyun.com).
     * @example rg-acfmyiu4ekp****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The ID of the secondary zone 1 of the instance. Valid values:
     *
     *   **cn-hangzhou-g**: Hangzhou Zone G
     *   **cn-hangzhou-h**: Hangzhou Zone H
     *   **cn-hangzhou-i**: Hangzhou Zone I
     *   **cn-hongkong-b**: Hongkong Zone B
     *   **cn-hongkong-c**: Hongkong Zone C
     *   **cn-hongkong-d**: Hongkong Zone D
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
     * > *   This parameter is returned if the instance is a replica set or sharded cluster instance that runs MongoDB 4.4 or 5.0 and uses multi-zone deployment.
     * > *   This parameter is returned only if you use the China site (aliyun.com).
     * @example cn-hangzhou-i
     *
     * @var string
     */
    public $secondaryZoneId;

    /**
     * @description The information of the shard nodes.
     *
     * >  This parameter is returned if the instance is a sharded cluster instance.
     * @var shardList
     */
    public $shardList;

    /**
     * @description The storage engine of the instance.
     *
     * @example WiredTiger
     *
     * @var string
     */
    public $storageEngine;

    /**
     * @description The storage type of the instance. Valid values:
     *
     **cloud_essd1**: ESSD PL1 **cloud_essd2**: ESSD PL2 **cloud_essd3**: ESSD PL3 **local_ssd**: local SSD **cloud_essd_dbfs_s**: DBFS disk
     *
     * @example cloud_essd1
     *
     * @var string
     */
    public $storageType;

    /**
     * @description The progress of data synchronization in percentage. When you are changing the configurations of the instance, you must synchronize the data of the instance. You can obtain the data synchronization progress based on the value returned for this parameter.
     *
     * @example 0.8
     *
     * @var string
     */
    public $syncPercent;

    /**
     * @description The details of the instance tags.
     *
     * @var tags
     */
    public $tags;

    /**
     * @description Indicates whether the cluster backup mode is enabled. Valid values:
     *
     *   **true**: The cluster backup mode is enabled.
     *   **false**: The cluster backup mode is disabled.
     *
     * @example true
     *
     * @var bool
     */
    public $useClusterBackup;

    /**
     * @description The instance ID.
     *
     * >  This parameter is returned if the network type of the instance is VPC.
     * @example dds-bp11483712c1****
     *
     * @var string
     */
    public $VPCCloudInstanceIds;

    /**
     * @description The VPC ID of the instance.
     *
     * >  This parameter is returned if the network type of the instance is VPC.
     * @example vpc-bp1n3i15v90el48nx****
     *
     * @var string
     */
    public $VPCId;

    /**
     * @description The vSwitch ID of the instance.
     *
     * >  This parameter is returned if the network type of the instance is VPC.
     * @example vsw-bp1oo2a7isyrb8igf****
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @description Indicates whether password-free access within the VPC is enabled. Valid values:
     *
     *   **Open**: Password-free access within the VPC is enabled.
     *   **Close**: Password-free access within the VPC is disabled, and you must use a password for access.
     *   **NotSupport**: Password-free access within the VPC is not supported.
     *
     * @example Open
     *
     * @var string
     */
    public $vpcAuthMode;

    /**
     * @description The ID of the zone in which the instance resides.
     *
     * @example cn-hangzhou-b
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'burstingEnabled'             => 'BurstingEnabled',
        'capacityUnit'                => 'CapacityUnit',
        'chargeType'                  => 'ChargeType',
        'configserverList'            => 'ConfigserverList',
        'creationTime'                => 'CreationTime',
        'currentKernelVersion'        => 'CurrentKernelVersion',
        'DBInstanceClass'             => 'DBInstanceClass',
        'DBInstanceDescription'       => 'DBInstanceDescription',
        'DBInstanceId'                => 'DBInstanceId',
        'DBInstanceOrderStatus'       => 'DBInstanceOrderStatus',
        'DBInstanceReleaseProtection' => 'DBInstanceReleaseProtection',
        'DBInstanceStatus'            => 'DBInstanceStatus',
        'DBInstanceStorage'           => 'DBInstanceStorage',
        'DBInstanceType'              => 'DBInstanceType',
        'destroyTime'                 => 'DestroyTime',
        'encrypted'                   => 'Encrypted',
        'encryptionKey'               => 'EncryptionKey',
        'engine'                      => 'Engine',
        'engineVersion'               => 'EngineVersion',
        'expireTime'                  => 'ExpireTime',
        'hiddenZoneId'                => 'HiddenZoneId',
        'kindCode'                    => 'KindCode',
        'lastDowngradeTime'           => 'LastDowngradeTime',
        'lockMode'                    => 'LockMode',
        'maintainEndTime'             => 'MaintainEndTime',
        'maintainStartTime'           => 'MaintainStartTime',
        'maxConnections'              => 'MaxConnections',
        'maxIOPS'                     => 'MaxIOPS',
        'maxMBPS'                     => 'MaxMBPS',
        'mongosList'                  => 'MongosList',
        'networkType'                 => 'NetworkType',
        'protocolType'                => 'ProtocolType',
        'provisionedIops'             => 'ProvisionedIops',
        'readonlyReplicas'            => 'ReadonlyReplicas',
        'regionId'                    => 'RegionId',
        'replacateId'                 => 'ReplacateId',
        'replicaSetName'              => 'ReplicaSetName',
        'replicaSets'                 => 'ReplicaSets',
        'replicationFactor'           => 'ReplicationFactor',
        'resourceGroupId'             => 'ResourceGroupId',
        'secondaryZoneId'             => 'SecondaryZoneId',
        'shardList'                   => 'ShardList',
        'storageEngine'               => 'StorageEngine',
        'storageType'                 => 'StorageType',
        'syncPercent'                 => 'SyncPercent',
        'tags'                        => 'Tags',
        'useClusterBackup'            => 'UseClusterBackup',
        'VPCCloudInstanceIds'         => 'VPCCloudInstanceIds',
        'VPCId'                       => 'VPCId',
        'vSwitchId'                   => 'VSwitchId',
        'vpcAuthMode'                 => 'VpcAuthMode',
        'zoneId'                      => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->burstingEnabled) {
            $res['BurstingEnabled'] = $this->burstingEnabled;
        }
        if (null !== $this->capacityUnit) {
            $res['CapacityUnit'] = $this->capacityUnit;
        }
        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }
        if (null !== $this->configserverList) {
            $res['ConfigserverList'] = null !== $this->configserverList ? $this->configserverList->toMap() : null;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->currentKernelVersion) {
            $res['CurrentKernelVersion'] = $this->currentKernelVersion;
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
        if (null !== $this->DBInstanceOrderStatus) {
            $res['DBInstanceOrderStatus'] = $this->DBInstanceOrderStatus;
        }
        if (null !== $this->DBInstanceReleaseProtection) {
            $res['DBInstanceReleaseProtection'] = $this->DBInstanceReleaseProtection;
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
        if (null !== $this->encrypted) {
            $res['Encrypted'] = $this->encrypted;
        }
        if (null !== $this->encryptionKey) {
            $res['EncryptionKey'] = $this->encryptionKey;
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
        if (null !== $this->maintainEndTime) {
            $res['MaintainEndTime'] = $this->maintainEndTime;
        }
        if (null !== $this->maintainStartTime) {
            $res['MaintainStartTime'] = $this->maintainStartTime;
        }
        if (null !== $this->maxConnections) {
            $res['MaxConnections'] = $this->maxConnections;
        }
        if (null !== $this->maxIOPS) {
            $res['MaxIOPS'] = $this->maxIOPS;
        }
        if (null !== $this->maxMBPS) {
            $res['MaxMBPS'] = $this->maxMBPS;
        }
        if (null !== $this->mongosList) {
            $res['MongosList'] = null !== $this->mongosList ? $this->mongosList->toMap() : null;
        }
        if (null !== $this->networkType) {
            $res['NetworkType'] = $this->networkType;
        }
        if (null !== $this->protocolType) {
            $res['ProtocolType'] = $this->protocolType;
        }
        if (null !== $this->provisionedIops) {
            $res['ProvisionedIops'] = $this->provisionedIops;
        }
        if (null !== $this->readonlyReplicas) {
            $res['ReadonlyReplicas'] = $this->readonlyReplicas;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->replacateId) {
            $res['ReplacateId'] = $this->replacateId;
        }
        if (null !== $this->replicaSetName) {
            $res['ReplicaSetName'] = $this->replicaSetName;
        }
        if (null !== $this->replicaSets) {
            $res['ReplicaSets'] = null !== $this->replicaSets ? $this->replicaSets->toMap() : null;
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
        if (null !== $this->storageEngine) {
            $res['StorageEngine'] = $this->storageEngine;
        }
        if (null !== $this->storageType) {
            $res['StorageType'] = $this->storageType;
        }
        if (null !== $this->syncPercent) {
            $res['SyncPercent'] = $this->syncPercent;
        }
        if (null !== $this->tags) {
            $res['Tags'] = null !== $this->tags ? $this->tags->toMap() : null;
        }
        if (null !== $this->useClusterBackup) {
            $res['UseClusterBackup'] = $this->useClusterBackup;
        }
        if (null !== $this->VPCCloudInstanceIds) {
            $res['VPCCloudInstanceIds'] = $this->VPCCloudInstanceIds;
        }
        if (null !== $this->VPCId) {
            $res['VPCId'] = $this->VPCId;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
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
        if (isset($map['BurstingEnabled'])) {
            $model->burstingEnabled = $map['BurstingEnabled'];
        }
        if (isset($map['CapacityUnit'])) {
            $model->capacityUnit = $map['CapacityUnit'];
        }
        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
        }
        if (isset($map['ConfigserverList'])) {
            $model->configserverList = configserverList::fromMap($map['ConfigserverList']);
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['CurrentKernelVersion'])) {
            $model->currentKernelVersion = $map['CurrentKernelVersion'];
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
        if (isset($map['DBInstanceOrderStatus'])) {
            $model->DBInstanceOrderStatus = $map['DBInstanceOrderStatus'];
        }
        if (isset($map['DBInstanceReleaseProtection'])) {
            $model->DBInstanceReleaseProtection = $map['DBInstanceReleaseProtection'];
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
        if (isset($map['Encrypted'])) {
            $model->encrypted = $map['Encrypted'];
        }
        if (isset($map['EncryptionKey'])) {
            $model->encryptionKey = $map['EncryptionKey'];
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
        if (isset($map['MaintainEndTime'])) {
            $model->maintainEndTime = $map['MaintainEndTime'];
        }
        if (isset($map['MaintainStartTime'])) {
            $model->maintainStartTime = $map['MaintainStartTime'];
        }
        if (isset($map['MaxConnections'])) {
            $model->maxConnections = $map['MaxConnections'];
        }
        if (isset($map['MaxIOPS'])) {
            $model->maxIOPS = $map['MaxIOPS'];
        }
        if (isset($map['MaxMBPS'])) {
            $model->maxMBPS = $map['MaxMBPS'];
        }
        if (isset($map['MongosList'])) {
            $model->mongosList = mongosList::fromMap($map['MongosList']);
        }
        if (isset($map['NetworkType'])) {
            $model->networkType = $map['NetworkType'];
        }
        if (isset($map['ProtocolType'])) {
            $model->protocolType = $map['ProtocolType'];
        }
        if (isset($map['ProvisionedIops'])) {
            $model->provisionedIops = $map['ProvisionedIops'];
        }
        if (isset($map['ReadonlyReplicas'])) {
            $model->readonlyReplicas = $map['ReadonlyReplicas'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ReplacateId'])) {
            $model->replacateId = $map['ReplacateId'];
        }
        if (isset($map['ReplicaSetName'])) {
            $model->replicaSetName = $map['ReplicaSetName'];
        }
        if (isset($map['ReplicaSets'])) {
            $model->replicaSets = replicaSets::fromMap($map['ReplicaSets']);
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
        if (isset($map['StorageEngine'])) {
            $model->storageEngine = $map['StorageEngine'];
        }
        if (isset($map['StorageType'])) {
            $model->storageType = $map['StorageType'];
        }
        if (isset($map['SyncPercent'])) {
            $model->syncPercent = $map['SyncPercent'];
        }
        if (isset($map['Tags'])) {
            $model->tags = tags::fromMap($map['Tags']);
        }
        if (isset($map['UseClusterBackup'])) {
            $model->useClusterBackup = $map['UseClusterBackup'];
        }
        if (isset($map['VPCCloudInstanceIds'])) {
            $model->VPCCloudInstanceIds = $map['VPCCloudInstanceIds'];
        }
        if (isset($map['VPCId'])) {
            $model->VPCId = $map['VPCId'];
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
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
