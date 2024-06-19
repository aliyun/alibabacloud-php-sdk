<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models;

use AlibabaCloud\Tea\Model;

class DescribeHistoryMonitorValuesRequest extends Model
{
    /**
     * @description The end of the time range to query. The end time must be later than the start time. Specify the time in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time must be in UTC.
     *
     *   You can query the monitoring data of the last month. The maximum time range that you can specify for a query is seven days.
     *   If the number of data nodes in the instance is greater than 32, the time range to query for the Data Node Aggregation and Proxy Node Aggregation metrics cannot exceed 1 hour.
     *
     * This parameter is required.
     * @example 2022-11-06T00:30:00Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The ID of the instance.
     *
     * This parameter is required.
     * @example r-bp1zxszhcgatnx****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The interval at which to collect monitoring data. Unit: minutes. Set the value to `01m`.
     *
     * This parameter is required.
     * @example 01m
     *
     * @var string
     */
    public $intervalForHistory;

    /**
     * @description The monitoring metrics. Separate the metrics with commas (,). Take CpuUsage as an example:
     *
     *   To query the overall CPU utilization of all data nodes, specify **CpuUsage$db**.
     *   To query the CPU utilization of a single data node, specify **CpuUsage** and NodeId.
     *
     * For more information about the monitoring metrics, see **Additional description of MonitorKeys**.
     *
     * >
     *
     *   This parameter is empty by default, which indicates that the UsedMemory and quotaMemory metrics are returned.
     *
     *   To ensure query efficiency, we recommend that you specify no more than five metrics for a single node at a time, and specify only a single metric when you query aggregate metrics.
     *
     * [Additional description of MonitorKeys](https://help.aliyun.com/zh/redis/developer-reference/api-r-kvstore-2015-01-01-describehistorymonitorvalues-redis)
     * @example memoryUsage
     *
     * @var string
     */
    public $monitorKeys;

    /**
     * @description The ID of the node in the instance. You can set this parameter to query the data of a specified node.
     *
     *   This parameter is available only for read/write splitting or cluster instances of ApsaraDB for Redis.
     *
     *   You can call the [DescribeLogicInstanceTopology](https://help.aliyun.com/document_detail/94665.html) operation to query node IDs.
     *
     * @example r-bp1zxszhcgatnx****-db-0#1679****
     *
     * @var string
     */
    public $nodeId;

    /**
     * @description If you want to query the metrics of the read replicas in a cloud-native read/write splitting instance, you must set this parameter to **READONLY** and specify **NodeId**.
     *
     * > In other cases, you do not need to specify this parameter or you can set this parameter to **MASTER**.
     * @example READONLY
     *
     * @var string
     */
    public $nodeRole;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

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
     * @description The beginning of the time range to query. Specify the time in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time must be in UTC.
     *
     * This parameter is required.
     * @example 2022-11-06T00:00:00Z
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'endTime'              => 'EndTime',
        'instanceId'           => 'InstanceId',
        'intervalForHistory'   => 'IntervalForHistory',
        'monitorKeys'          => 'MonitorKeys',
        'nodeId'               => 'NodeId',
        'nodeRole'             => 'NodeRole',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'securityToken'        => 'SecurityToken',
        'startTime'            => 'StartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->intervalForHistory) {
            $res['IntervalForHistory'] = $this->intervalForHistory;
        }
        if (null !== $this->monitorKeys) {
            $res['MonitorKeys'] = $this->monitorKeys;
        }
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }
        if (null !== $this->nodeRole) {
            $res['NodeRole'] = $this->nodeRole;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
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
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeHistoryMonitorValuesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['IntervalForHistory'])) {
            $model->intervalForHistory = $map['IntervalForHistory'];
        }
        if (isset($map['MonitorKeys'])) {
            $model->monitorKeys = $map['MonitorKeys'];
        }
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }
        if (isset($map['NodeRole'])) {
            $model->nodeRole = $map['NodeRole'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
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
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
