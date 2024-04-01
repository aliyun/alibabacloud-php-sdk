<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models;

use AlibabaCloud\Tea\Model;

class EvaluateResourceRequest extends Model
{
    /**
     * @description The type of the instance.
     *
     * > This parameter is required when you check whether resources are sufficient for creating or upgrading a replica set instance. For more information about instance types, see [Instance types](~~57141~~).
     * @example dds.mongo.mid
     *
     * @var string
     */
    public $DBInstanceClass;

    /**
     * @description The ID of the instance. This parameter is required when you check whether resources are sufficient for upgrading an instance.
     *
     * @example dds-bp14bf67a76d****
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description The database engine of the instance. Set the value to **MongoDB**.
     *
     * @example MongoDB
     *
     * @var string
     */
    public $engine;

    /**
     * @description The version of the database engine. Valid values:
     *
     *   **7.0**
     *   **6.0**
     *   **5.0**
     *   **4.4**
     *   **4.2**
     *   **4.0**
     *
     * <!---->
     *
     *   3.4
     *   4.0
     *   4.2
     *   4.4
     *   5.0
     *   6.0
     *
     * @example 4.0
     *
     * @var string
     */
    public $engineVersion;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The number of read-only nodes in the instance. Valid values: **1** to **5**.
     *
     * > This parameter is not required for standalone or serverless instances.
     * @example 1
     *
     * @var string
     */
    public $readonlyReplicas;

    /**
     * @description The region ID of the instance. You can call the [DescribeRegions](~~61933~~) operation to query the region ID.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The number of nodes in the instance.
     *
     *   Set the value to **1** for standalone instances.
     *   Valid values for replica set instances: **3**, **5**, and **7**
     *
     * > This parameter is not required for serverless instances.
     * @example 3
     *
     * @var string
     */
    public $replicationFactor;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description The node information about the sharded cluster instance. This parameter is required when you check whether resources are sufficient for creating or upgrading a sharded cluster instance.
     *
     * Parameters in the example:
     *
     *   ConfigSvrs: the Configserver node.
     *   Mongos: the mongos node.
     *   Shards: the shard node.
     *   Storage: the storage space of the node.
     *   DBInstanceClass: the instance type of the node. For more information, see [Sharded cluster instance types](~~311414~~).
     *
     * {
     * "NodeId": "d-bp147c4d9ca7****", "NodeClass": "dds.shard.standard"
     * Parameters in the example:
     *
     *   NodeId: the ID of the node.
     *   NodeClass: the instance type of the node. For more information, see [Sharded cluster instance types](~~311414~~).
     *
     * @example {"NodeId": "d-bp147c4d9ca7****", "NodeClass": "dds.shard.standard"}
     *
     * @var string
     */
    public $shardsInfo;

    /**
     * @description The storage capacity of the replica set instance. Unit: GB.
     *
     * > This parameter is required for the instances that use cloud disks.
     * @example 10
     *
     * @var string
     */
    public $storage;

    /**
     * @description The zone ID of the instance. You can call the [DescribeRegions](~~61933~~) operation to query the zone ID.
     *
     * @example cn-hangzhou-h
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'DBInstanceClass'      => 'DBInstanceClass',
        'DBInstanceId'         => 'DBInstanceId',
        'engine'               => 'Engine',
        'engineVersion'        => 'EngineVersion',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'readonlyReplicas'     => 'ReadonlyReplicas',
        'regionId'             => 'RegionId',
        'replicationFactor'    => 'ReplicationFactor',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'shardsInfo'           => 'ShardsInfo',
        'storage'              => 'Storage',
        'zoneId'               => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBInstanceClass) {
            $res['DBInstanceClass'] = $this->DBInstanceClass;
        }
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->engine) {
            $res['Engine'] = $this->engine;
        }
        if (null !== $this->engineVersion) {
            $res['EngineVersion'] = $this->engineVersion;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->readonlyReplicas) {
            $res['ReadonlyReplicas'] = $this->readonlyReplicas;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->replicationFactor) {
            $res['ReplicationFactor'] = $this->replicationFactor;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->shardsInfo) {
            $res['ShardsInfo'] = $this->shardsInfo;
        }
        if (null !== $this->storage) {
            $res['Storage'] = $this->storage;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return EvaluateResourceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBInstanceClass'])) {
            $model->DBInstanceClass = $map['DBInstanceClass'];
        }
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['Engine'])) {
            $model->engine = $map['Engine'];
        }
        if (isset($map['EngineVersion'])) {
            $model->engineVersion = $map['EngineVersion'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ReadonlyReplicas'])) {
            $model->readonlyReplicas = $map['ReadonlyReplicas'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ReplicationFactor'])) {
            $model->replicationFactor = $map['ReplicationFactor'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['ShardsInfo'])) {
            $model->shardsInfo = $map['ShardsInfo'];
        }
        if (isset($map['Storage'])) {
            $model->storage = $map['Storage'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
