<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models;

use AlibabaCloud\Tea\Model;

class MigrateToOtherZoneRequest extends Model
{
    /**
     * @description The ID of the Tair (Redis OSS-compatible) instance.
     *
     * This parameter is required.
     *
     * @example r-bp1zxszhcgatnx****
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description The time when the database is switched after the instance is migrated. Valid values:
     *
     *   **Immediately**: The database is immediately switched after the instance is migrated.
     *   **MaintainTime**: The database is switched within the maintenance window.
     *
     * >  Default value: Immediately.
     *
     * @example Immediately
     *
     * @var string
     */
    public $effectiveTime;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The number of read replicas in the primary zone.
     *
     * >
     *
     *   The **ReadOnlyCount** and **SlaveReadOnlyCount** parameters are applicable only to cloud-native instances for which read/write splitting is enabled. When you migrate an instance to multiple zones, you can use these parameters to adjust the distribution of read replicas in the primary and secondary zones of the instance. This operation does not allow you to increase or decrease the number of nodes. Therefore, the sum of the values of `ReadOnlyCount and SlaveReadOnlyCount` must be the same as that before the migration.
     *
     *   If you do not specify these parameters when you migrate an instance from a single zone to multiple zones, one read replica is migrated to the secondary zone, and all other read replicas remain in the primary zone.
     *
     *   If the instance is a cluster instance, the preceding parameters indicate the number of read replicas per shard in the primary and secondary zones of the instance.
     *
     * @example 1
     *
     * @var int
     */
    public $readOnlyCount;

    /**
     * @description The number of replica nodes in the primary zone.
     *
     * >
     *
     *   The **ReplicaCount** and **SlaveReplicaCount** parameters are applicable only to cloud-native instances. When you migrate an instance to multiple zones, you can use these parameters to adjust the distribution of replica nodes in the primary and secondary zones of the instance. This operation does not allow you to increase or decrease the number of nodes. Therefore, the sum of the values of `ReplicaCount and SlaveReplicaCount` must be the same as that before the migration.
     *
     *   If you do not specify these parameters when you migrate an instance from a single zone to multiple zones, one replica node is migrated to the secondary zone, and all other replica nodes remain in the primary zone.
     *
     *   If the instance is a cluster instance, the preceding parameters indicate the number of replica nodes per shard in the primary and secondary zones of the instance.
     *
     * @example 1
     *
     * @var int
     */
    public $replicaCount;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description The ID of the secondary zone to which you want to migrate the instance. You can call the [DescribeZones](https://help.aliyun.com/document_detail/473764.html) operation to query zone IDs.
     *
     * >  If you specify this parameter, the master node and replica node of the instance can be deployed in different zones and disaster recovery is implemented across zones. The instance can withstand failures in data centers.
     *
     * @example cn-hangzhou-h
     *
     * @var string
     */
    public $secondaryZoneId;

    /**
     * @var string
     */
    public $securityToken;

    /**
     * @description The number of read replicas in the secondary zone.
     *
     * @example 1
     *
     * @var int
     */
    public $slaveReadOnlyCount;

    /**
     * @description The number of replica nodes in the secondary zone.
     *
     * @example 1
     *
     * @var int
     */
    public $slaveReplicaCount;

    /**
     * @description The ID of the vSwitch.
     *
     * >
     *
     *   The zone where the vSwitch resides must be the same as the ID of the destination zone.
     *
     *   If the network type of the instance is VPC, this parameter is required.
     *
     * @example vsw-bp1e7clcw529l773d****
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @description The ID of the destination primary zone. You can call the [DescribeZones](https://help.aliyun.com/document_detail/473764.html) operation to query zone IDs.
     *
     * This parameter is required.
     *
     * @example cn-hangzhou-g
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'DBInstanceId' => 'DBInstanceId',
        'effectiveTime' => 'EffectiveTime',
        'ownerAccount' => 'OwnerAccount',
        'ownerId' => 'OwnerId',
        'readOnlyCount' => 'ReadOnlyCount',
        'replicaCount' => 'ReplicaCount',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'secondaryZoneId' => 'SecondaryZoneId',
        'securityToken' => 'SecurityToken',
        'slaveReadOnlyCount' => 'SlaveReadOnlyCount',
        'slaveReplicaCount' => 'SlaveReplicaCount',
        'vSwitchId' => 'VSwitchId',
        'zoneId' => 'ZoneId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->effectiveTime) {
            $res['EffectiveTime'] = $this->effectiveTime;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->readOnlyCount) {
            $res['ReadOnlyCount'] = $this->readOnlyCount;
        }
        if (null !== $this->replicaCount) {
            $res['ReplicaCount'] = $this->replicaCount;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->secondaryZoneId) {
            $res['SecondaryZoneId'] = $this->secondaryZoneId;
        }
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }
        if (null !== $this->slaveReadOnlyCount) {
            $res['SlaveReadOnlyCount'] = $this->slaveReadOnlyCount;
        }
        if (null !== $this->slaveReplicaCount) {
            $res['SlaveReplicaCount'] = $this->slaveReplicaCount;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return MigrateToOtherZoneRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['EffectiveTime'])) {
            $model->effectiveTime = $map['EffectiveTime'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ReadOnlyCount'])) {
            $model->readOnlyCount = $map['ReadOnlyCount'];
        }
        if (isset($map['ReplicaCount'])) {
            $model->replicaCount = $map['ReplicaCount'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['SecondaryZoneId'])) {
            $model->secondaryZoneId = $map['SecondaryZoneId'];
        }
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }
        if (isset($map['SlaveReadOnlyCount'])) {
            $model->slaveReadOnlyCount = $map['SlaveReadOnlyCount'];
        }
        if (isset($map['SlaveReplicaCount'])) {
            $model->slaveReplicaCount = $map['SlaveReplicaCount'];
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
