<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models\DescribeDBInstancesOverviewResponseBody;

use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeDBInstancesOverviewResponseBody\DBInstances\mongosList;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeDBInstancesOverviewResponseBody\DBInstances\shardList;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeDBInstancesOverviewResponseBody\DBInstances\tags;
use AlibabaCloud\Tea\Model;

class DBInstances extends Model
{
    /**
     * @description The I/O throughput consumed by the instance.
     *
     * > * This parameter is returned when the instance is a serverless instance.
     * > * Serverless instances are available only in the China site (aliyun.com).
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
     * @example PrePaid
     *
     * @var string
     */
    public $chargeType;

    /**
     * @description The time when the instance was created. The time is in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time is displayed in UTC.
     *
     * @example 2022-01-05T03:18:53Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description The instance type of the instance. The instance type varies based on the instance architecture. For more information about instance types supported by different instance architectures, see the following topics:
     *
     *   [Standalone instance types](~~311407~~)
     *   [Replica set instance types](~~311410~~)
     *   [Sharded cluster instance types](~~311414~~)
     *
     * @example dds.mongo.mid
     *
     * @var string
     */
    public $DBInstanceClass;

    /**
     * @description The description of the instance.
     *
     * @example test db
     *
     * @var string
     */
    public $DBInstanceDescription;

    /**
     * @description The ID of the instance.
     *
     * @example dds-bp12c5b040dc****
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description The state of the instance. For more information about valid values, see [Instance states](~~63870~~).
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
     * @description The category of the instance. Valid values:
     *
     *   **sharding**: sharded cluster instance
     *   **replicate**: replica set or standalone instance
     *
     * @example replicate
     *
     * @var string
     */
    public $DBInstanceType;

    /**
     * @description The time when the instance data was destroyed. The time is in the yyyy-MM-ddTHH:mm:ssZ format. The time is displayed in UTC.
     *
     * @example 2021-12-10T16:00:00Z
     *
     * @var string
     */
    public $destroyTime;

    /**
     * @description The database engine of the instance. Set the value to **MongoDB**.
     *
     * @example MongoDB
     *
     * @var string
     */
    public $engine;

    /**
     * @description The database engine version of the instance.
     *
     * @example 4.2
     *
     * @var string
     */
    public $engineVersion;

    /**
     * @description The time when the instance expires. The time is in the *yyyy-MM-dd*T*HH:mm*Z format. The time is displayed in UTC.
     *
     * @example 2022-02-05T16:00Z
     *
     * @var string
     */
    public $expireTime;

    /**
     * @description The kind code of the instance. Valid values:
     *
     *   **0**: physical machine
     *   **1**: Elastic Compute Service (ECS) instance
     *   **2**: Docker cluster
     *   **18**: Kubernetes cluster
     *
     * @example 0
     *
     * @var string
     */
    public $kindCode;

    /**
     * @description The last time when the instance was downgraded.
     *
     * @example 2021-05-08
     *
     * @var string
     */
    public $lastDowngradeTime;

    /**
     * @description Indicates whether the instance is locked. Valid values:
     *
     *   **Unlock**: The instance is not locked.
     *   **ManualLock**: The cluster is manually locked.
     *   **LockByExpiration**: The instance is automatically locked after it expires.
     *   **LockByRestoration**: The instance is automatically locked before it is rolled back.
     *   **LockByDiskQuota**: The instance is automatically locked after the storage capacity is exhausted.
     *   **Released**: The instance is released. After an instance is released, the instance cannot be unlocked. You can only restore the backup data of the instance to a new instance. This process requires an extended period of time.
     *
     * @example Unlock
     *
     * @var string
     */
    public $lockMode;

    /**
     * @description Details about the mongos node.
     *
     * >  This parameter is returned if the instance is a sharded cluster instance.
     * @var mongosList[]
     */
    public $mongosList;

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
     * @description The number of nodes in the instance.
     *
     * >  This parameter is returned if the instance is a replica set instance.
     * @example 3
     *
     * @var string
     */
    public $replicationFactor;

    /**
     * @description The ID of the resource group.
     *
     * @example rg-acfm22cdcgc****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description Details about the shard node.
     *
     * >  This parameter is returned if the instance is a sharded cluster instance.
     * @var shardList[]
     */
    public $shardList;

    /**
     * @description The tags of the instance.
     *
     * @var tags[]
     */
    public $tags;

    /**
     * @description Indicates whether password-free access within a VPC is enabled. Valid values:
     *
     *   **Open**: Password-free access is enabled.
     *   **Close**: Password-free access is disabled.
     *
     * @example Open
     *
     * @var string
     */
    public $vpcAuthMode;

    /**
     * @description The zone ID of the instance.
     *
     * @example cn-hangzhou-i
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'capacityUnit'          => 'CapacityUnit',
        'chargeType'            => 'ChargeType',
        'creationTime'          => 'CreationTime',
        'DBInstanceClass'       => 'DBInstanceClass',
        'DBInstanceDescription' => 'DBInstanceDescription',
        'DBInstanceId'          => 'DBInstanceId',
        'DBInstanceStatus'      => 'DBInstanceStatus',
        'DBInstanceStorage'     => 'DBInstanceStorage',
        'DBInstanceType'        => 'DBInstanceType',
        'destroyTime'           => 'DestroyTime',
        'engine'                => 'Engine',
        'engineVersion'         => 'EngineVersion',
        'expireTime'            => 'ExpireTime',
        'kindCode'              => 'KindCode',
        'lastDowngradeTime'     => 'LastDowngradeTime',
        'lockMode'              => 'LockMode',
        'mongosList'            => 'MongosList',
        'networkType'           => 'NetworkType',
        'regionId'              => 'RegionId',
        'replicationFactor'     => 'ReplicationFactor',
        'resourceGroupId'       => 'ResourceGroupId',
        'shardList'             => 'ShardList',
        'tags'                  => 'Tags',
        'vpcAuthMode'           => 'VpcAuthMode',
        'zoneId'                => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
            $res['MongosList'] = [];
            if (null !== $this->mongosList && \is_array($this->mongosList)) {
                $n = 0;
                foreach ($this->mongosList as $item) {
                    $res['MongosList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->networkType) {
            $res['NetworkType'] = $this->networkType;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->replicationFactor) {
            $res['ReplicationFactor'] = $this->replicationFactor;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->shardList) {
            $res['ShardList'] = [];
            if (null !== $this->shardList && \is_array($this->shardList)) {
                $n = 0;
                foreach ($this->shardList as $item) {
                    $res['ShardList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->tags) {
            $res['Tags'] = [];
            if (null !== $this->tags && \is_array($this->tags)) {
                $n = 0;
                foreach ($this->tags as $item) {
                    $res['Tags'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
     * @return DBInstances
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
            if (!empty($map['MongosList'])) {
                $model->mongosList = [];
                $n                 = 0;
                foreach ($map['MongosList'] as $item) {
                    $model->mongosList[$n++] = null !== $item ? mongosList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['NetworkType'])) {
            $model->networkType = $map['NetworkType'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ReplicationFactor'])) {
            $model->replicationFactor = $map['ReplicationFactor'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['ShardList'])) {
            if (!empty($map['ShardList'])) {
                $model->shardList = [];
                $n                = 0;
                foreach ($map['ShardList'] as $item) {
                    $model->shardList[$n++] = null !== $item ? shardList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n           = 0;
                foreach ($map['Tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? tags::fromMap($item) : $item;
                }
            }
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
