<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models\DescribeDBInstanceAttributeResponseBody\DBInstances;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeDBInstanceAttributeResponseBody\DBInstances\DBInstance\configserverList;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeDBInstanceAttributeResponseBody\DBInstances\DBInstance\mongosList;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeDBInstanceAttributeResponseBody\DBInstances\DBInstance\replicaSets;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeDBInstanceAttributeResponseBody\DBInstances\DBInstance\shardList;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeDBInstanceAttributeResponseBody\DBInstances\DBInstance\tags;

class DBInstance extends Model
{
    /**
     * @var bool
     */
    public $burstingEnabled;

    /**
     * @var string
     */
    public $capacityUnit;

    /**
     * @var string
     */
    public $chargeType;

    /**
     * @var configserverList
     */
    public $configserverList;

    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var string
     */
    public $currentKernelVersion;

    /**
     * @var string
     */
    public $DBInstanceClass;

    /**
     * @var string
     */
    public $DBInstanceDescription;

    /**
     * @var string
     */
    public $DBInstanceId;

    /**
     * @var string
     */
    public $DBInstanceOrderStatus;

    /**
     * @var bool
     */
    public $DBInstanceReleaseProtection;

    /**
     * @var string
     */
    public $DBInstanceStatus;

    /**
     * @var int
     */
    public $DBInstanceStorage;

    /**
     * @var string
     */
    public $DBInstanceType;

    /**
     * @var string
     */
    public $destroyTime;

    /**
     * @var bool
     */
    public $encrypted;

    /**
     * @var string
     */
    public $encryptionKey;

    /**
     * @var string
     */
    public $engine;

    /**
     * @var string
     */
    public $engineVersion;

    /**
     * @var string
     */
    public $expireTime;

    /**
     * @var string
     */
    public $hiddenZoneId;

    /**
     * @var string
     */
    public $kindCode;

    /**
     * @var string
     */
    public $lastDowngradeTime;

    /**
     * @var string
     */
    public $lockMode;

    /**
     * @var string
     */
    public $maintainEndTime;

    /**
     * @var string
     */
    public $maintainStartTime;

    /**
     * @var int
     */
    public $maxConnections;

    /**
     * @var int
     */
    public $maxIOPS;

    /**
     * @var int
     */
    public $maxMBPS;

    /**
     * @var mongosList
     */
    public $mongosList;

    /**
     * @var string
     */
    public $networkType;

    /**
     * @var string
     */
    public $protocolType;

    /**
     * @var int
     */
    public $provisionedIops;

    /**
     * @var string
     */
    public $readonlyReplicas;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $replacateId;

    /**
     * @var string
     */
    public $replicaSetName;

    /**
     * @var replicaSets
     */
    public $replicaSets;

    /**
     * @var string
     */
    public $replicationFactor;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $secondaryZoneId;

    /**
     * @var shardList
     */
    public $shardList;

    /**
     * @var string
     */
    public $storageEngine;

    /**
     * @var string
     */
    public $storageType;

    /**
     * @var string
     */
    public $syncPercent;

    /**
     * @var tags
     */
    public $tags;

    /**
     * @var bool
     */
    public $useClusterBackup;

    /**
     * @var string
     */
    public $VPCCloudInstanceIds;

    /**
     * @var string
     */
    public $VPCId;

    /**
     * @var string
     */
    public $vSwitchId;

    /**
     * @var string
     */
    public $vpcAuthMode;

    /**
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'burstingEnabled' => 'BurstingEnabled',
        'capacityUnit' => 'CapacityUnit',
        'chargeType' => 'ChargeType',
        'configserverList' => 'ConfigserverList',
        'creationTime' => 'CreationTime',
        'currentKernelVersion' => 'CurrentKernelVersion',
        'DBInstanceClass' => 'DBInstanceClass',
        'DBInstanceDescription' => 'DBInstanceDescription',
        'DBInstanceId' => 'DBInstanceId',
        'DBInstanceOrderStatus' => 'DBInstanceOrderStatus',
        'DBInstanceReleaseProtection' => 'DBInstanceReleaseProtection',
        'DBInstanceStatus' => 'DBInstanceStatus',
        'DBInstanceStorage' => 'DBInstanceStorage',
        'DBInstanceType' => 'DBInstanceType',
        'destroyTime' => 'DestroyTime',
        'encrypted' => 'Encrypted',
        'encryptionKey' => 'EncryptionKey',
        'engine' => 'Engine',
        'engineVersion' => 'EngineVersion',
        'expireTime' => 'ExpireTime',
        'hiddenZoneId' => 'HiddenZoneId',
        'kindCode' => 'KindCode',
        'lastDowngradeTime' => 'LastDowngradeTime',
        'lockMode' => 'LockMode',
        'maintainEndTime' => 'MaintainEndTime',
        'maintainStartTime' => 'MaintainStartTime',
        'maxConnections' => 'MaxConnections',
        'maxIOPS' => 'MaxIOPS',
        'maxMBPS' => 'MaxMBPS',
        'mongosList' => 'MongosList',
        'networkType' => 'NetworkType',
        'protocolType' => 'ProtocolType',
        'provisionedIops' => 'ProvisionedIops',
        'readonlyReplicas' => 'ReadonlyReplicas',
        'regionId' => 'RegionId',
        'replacateId' => 'ReplacateId',
        'replicaSetName' => 'ReplicaSetName',
        'replicaSets' => 'ReplicaSets',
        'replicationFactor' => 'ReplicationFactor',
        'resourceGroupId' => 'ResourceGroupId',
        'secondaryZoneId' => 'SecondaryZoneId',
        'shardList' => 'ShardList',
        'storageEngine' => 'StorageEngine',
        'storageType' => 'StorageType',
        'syncPercent' => 'SyncPercent',
        'tags' => 'Tags',
        'useClusterBackup' => 'UseClusterBackup',
        'VPCCloudInstanceIds' => 'VPCCloudInstanceIds',
        'VPCId' => 'VPCId',
        'vSwitchId' => 'VSwitchId',
        'vpcAuthMode' => 'VpcAuthMode',
        'zoneId' => 'ZoneId',
    ];

    public function validate()
    {
        if (null !== $this->configserverList) {
            $this->configserverList->validate();
        }
        if (null !== $this->mongosList) {
            $this->mongosList->validate();
        }
        if (null !== $this->replicaSets) {
            $this->replicaSets->validate();
        }
        if (null !== $this->shardList) {
            $this->shardList->validate();
        }
        if (null !== $this->tags) {
            $this->tags->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            $res['ConfigserverList'] = null !== $this->configserverList ? $this->configserverList->toArray($noStream) : $this->configserverList;
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
            $res['MongosList'] = null !== $this->mongosList ? $this->mongosList->toArray($noStream) : $this->mongosList;
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
            $res['ReplicaSets'] = null !== $this->replicaSets ? $this->replicaSets->toArray($noStream) : $this->replicaSets;
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
            $res['ShardList'] = null !== $this->shardList ? $this->shardList->toArray($noStream) : $this->shardList;
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
            $res['Tags'] = null !== $this->tags ? $this->tags->toArray($noStream) : $this->tags;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
