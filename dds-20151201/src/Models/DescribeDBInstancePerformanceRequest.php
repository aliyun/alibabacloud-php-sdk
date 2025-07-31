<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models;

use AlibabaCloud\Tea\Model;

class DescribeDBInstancePerformanceRequest extends Model
{
    /**
     * @description The instance ID.
     *
     * >  If you set this parameter to the ID of a sharded cluster instance, you must also specify the **NodeId** parameter.
     *
     * This parameter is required.
     *
     * @example dds-bp2635****
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description The end of the time range to query. Specify the time in the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm*Z format. The time must be in UTC. The end time must be later than the start time.
     *
     * This parameter is required.
     *
     * @example 2022-06-13T11:58Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The interval at which performance data is collected. Valid values: 5, 30, 60, 600, 1800, 3600, 86400.
     *
     * @example 60
     *
     * @var string
     */
    public $interval;

    /**
     * @description The performance metric. For more information about valid values, see [Monitoring items and metrics](https://help.aliyun.com/document_detail/216973.html).
     *
     * >  If you need to specify multiple metrics, separate the metrics with commas (,).
     *
     * This parameter is required.
     *
     * @example CpuUsage
     *
     * @var string
     */
    public $key;

    /**
     * @description The ID of the mongos or shard node in a sharded cluster instance. You can specify this parameter to view the performance data of a single node.
     *
     * >  This parameter is valid when you set the **DBInstanceId** parameter to the ID of a sharded cluster instance.
     *
     * @example d-bp2287****
     *
     * @var string
     */
    public $nodeId;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The role of the node in the standalone or replica set instance. Valid values:
     *
     *   **Primary**
     *   **Secondary**
     *
     * >  *  This parameter is valid only when you specify the **DBInstanceId** parameter to the ID of a standalone instance or a replica set instance.
     * > *  This parameter can be set only to **Primary** when you specify the **DBInstanceId** parameter to the ID of a standalone instance.
     *
     * @example Primary
     *
     * @var string
     */
    public $replicaSetRole;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description The role ID of the node in a standalone or replica set instance. You can call the [DescribeReplicaSetRole](https://help.aliyun.com/document_detail/62134.html) operation to query the role ID of the node.
     *
     * >  This parameter is available when you set the **DBInstanceId** parameter to the ID of a standalone instance or a replica set instance.
     *
     * @example 6025****
     *
     * @var string
     */
    public $roleId;

    /**
     * @description The beginning of the time range to query. Specify the time in the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm*Z format. The time must be in UTC.
     *
     * This parameter is required.
     *
     * @example 2022-06-13T10:58Z
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'DBInstanceId' => 'DBInstanceId',
        'endTime' => 'EndTime',
        'interval' => 'Interval',
        'key' => 'Key',
        'nodeId' => 'NodeId',
        'ownerAccount' => 'OwnerAccount',
        'ownerId' => 'OwnerId',
        'replicaSetRole' => 'ReplicaSetRole',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'roleId' => 'RoleId',
        'startTime' => 'StartTime',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->interval) {
            $res['Interval'] = $this->interval;
        }
        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->replicaSetRole) {
            $res['ReplicaSetRole'] = $this->replicaSetRole;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->roleId) {
            $res['RoleId'] = $this->roleId;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDBInstancePerformanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['Interval'])) {
            $model->interval = $map['Interval'];
        }
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ReplicaSetRole'])) {
            $model->replicaSetRole = $map['ReplicaSetRole'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['RoleId'])) {
            $model->roleId = $map['RoleId'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
