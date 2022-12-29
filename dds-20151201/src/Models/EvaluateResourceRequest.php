<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models;

use AlibabaCloud\Tea\Model;

class EvaluateResourceRequest extends Model
{
    /**
     * @description The instance type.
     *
     * >  This parameter is required when you check whether resources are sufficient for creating or upgrading a replica set instance. For more information about instance types, see [Instance types](~~57141~~).
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
     * @description The database engine version of the instance. Valid values:
     *
     *   **5.0**
     *   **4.4**
     *   **4.2**
     *   **4.0**
     *   **3.4**
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
     * @description The number of read-only nodes. Valid values: **1** to **5**.
     *
     * @example 1
     *
     * @var string
     */
    public $readonlyReplicas;

    /**
     * @description The region ID of the instance. You can call the [DescribeRegions](~~61933~~) operation to query the region ID of the instance.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The number of nodes in the instance.
     *
     *   Valid values for standalone instances: **1**
     *   Valid values for replica set instances: **3**, **5**, and **7**
     *
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
     * @var string
     */
    public $securityToken;

    /**
     * @description The node information. This parameter is required when you check whether resources are sufficient for creating or upgrading a sharded cluster instance.
     *
     *   To check whether resources are sufficient for creating a sharded cluster instance, specify the specifications of each node in the instance. The value must be a JSON string. Example:
     *
     * Parameters in the example:
     *
     *   ConfigSvrs: the Configserver node.
     *   Mongos: the mongos node.
     *   Shards: the shard node.
     *   Storage: the storage space of the node.
     *   DBInstanceClass: the instance type of the node. For more information, see [Instance types](~~57141~~).
     *
     *   To check whether resources are sufficient for upgrading a node of a sharded cluster instance, specify only the information of the node to be upgraded. The value must be a JSON string. Example:
     *
     * {
     * "NodeId": "d-bp147c4d9ca7****", "NodeClass": "dds.shard.standard"
     * Parameters in the example:
     *
     *   NodeId: the ID of the node. You can call the [DescribeDBInstanceAttribute](~~62010~~) operation to query the node ID.
     *   NodeClass: the instance type of the node. For more information, see [Instance types](~~57141~~).
     *
     * @example {"NodeId": "d-bp147c4d9ca7****", "NodeClass": "dds.shard.standard"}
     *
     * @var string
     */
    public $shardsInfo;

    /**
     * @description The zone ID of the instance. You can call the [DescribeRegions](~~61933~~) operation to query the most recent zone list.
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
        'securityToken'        => 'SecurityToken',
        'shardsInfo'           => 'ShardsInfo',
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
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }
        if (null !== $this->shardsInfo) {
            $res['ShardsInfo'] = $this->shardsInfo;
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
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }
        if (isset($map['ShardsInfo'])) {
            $model->shardsInfo = $map['ShardsInfo'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
