<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models\DescribeDBInstancesResponseBody\DBInstances;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeDBInstancesResponseBody\DBInstances\DBInstance\mongosList;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeDBInstancesResponseBody\DBInstances\DBInstance\shardList;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeDBInstancesResponseBody\DBInstances\DBInstance\tags;

class DBInstance extends Model
{
    /**
     * @var int
     */
    public $backupRetentionPolicy;

    /**
     * @var string
     */
    public $capacityUnit;

    /**
     * @var string
     */
    public $chargeType;

    /**
     * @var string
     */
    public $creationTime;

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
    public $regionId;

    /**
     * @var string
     */
    public $releaseTime;

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
    public $storageType;

    /**
     * @var tags
     */
    public $tags;

    /**
     * @var string
     */
    public $vpcAuthMode;

    /**
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

    public function validate()
    {
        if (null !== $this->mongosList) {
            $this->mongosList->validate();
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
            $res['MongosList'] = null !== $this->mongosList ? $this->mongosList->toArray($noStream) : $this->mongosList;
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
            $res['ShardList'] = null !== $this->shardList ? $this->shardList->toArray($noStream) : $this->shardList;
        }

        if (null !== $this->storageType) {
            $res['StorageType'] = $this->storageType;
        }

        if (null !== $this->tags) {
            $res['Tags'] = null !== $this->tags ? $this->tags->toArray($noStream) : $this->tags;
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
