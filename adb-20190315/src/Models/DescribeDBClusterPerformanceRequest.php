<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models;

use AlibabaCloud\Tea\Model;

class DescribeDBClusterPerformanceRequest extends Model
{
    /**
     * @description The ID of the AnalyticDB for MySQL cluster.
     *
     * >  You can call the [DescribeDBClusters](~~129857~~) operation to query the IDs of all AnalyticDB for MySQL clusters within a region.
     * @example am-************
     *
     * @var string
     */
    public $DBClusterId;

    /**
     * @description The end time of the query. Specify the time in the ISO 8601 standard in the *yyyy-MM-ddTHH:mmZ* format. The time must be in UTC.
     *
     * > The end time must be later than the start time. The maximum time range that can be specified is two days.
     * @example 2021-05-03T15:01Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The performance metrics to be queried. Separate multiple values with commas (,). Valid values:
     *
     *   CPU
     *
     *   **AnalyticDB_CPU**: the average CPU utilization.
     *
     *   Connections
     *
     *   **AnalyticDB_Connections**: the number of database connections.
     *
     *   Writes
     *
     *   **AnalyticDB_TPS**: the write transactions per second (TPS).
     *   **AnalyticDB_InsertRT**: the write response time.
     *   **AnalyticDB_InsertBytes**: the write throughput.
     *
     *   Updates
     *
     *   **AnalyticDB_UpdateRT**: the update response time.
     *
     *   Deletion
     *
     *   **AnalyticDB_DeleteRT**: the delete response time.
     *
     *   Queries
     *
     *   **AnalyticDB_QPS**: the queries per second (QPS).
     *   **AnalyticDB_QueryRT**: the query response time.
     *   **AnalyticDB_QueryWaitTime**: the query wait time.
     *
     *   Disks
     *
     *   **AnalyticDB_IO**: the disk I/O throughput.
     *   **AnalyticDB_IO_UTIL**: the I/O utilization.
     *   **AnalyticDB_IO_WAIT**: the I/O wait time.
     *   **AnalyticDB_IOPS**: the disk input/output operations per second (IOPS).
     *   **AnalyticDB_DiskUsage**: the disk space that is used.
     *   **AnalyticDB_HotDataDiskUsage**: the disk space that is used by hot data.
     *   **AnalyticDB_ColdDataDiskUsage**: the disk space that is used by cold data.
     *
     * >  If you leave this parameter empty, the values of all the preceding performance metrics are returned.
     * @example AnalyticDB_CPU
     *
     * @var string
     */
    public $key;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The region ID of the cluster.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description The name of the resource group.
     *
     * @example test
     *
     * @var string
     */
    public $resourcePools;

    /**
     * @description The start time of the query. Specify the time in the ISO 8601 standard in the *yyyy-MM-ddTHH:mmZ* format. The time must be in UTC.
     *
     * @example 2021-05-03T15:00Z
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'DBClusterId'          => 'DBClusterId',
        'endTime'              => 'EndTime',
        'key'                  => 'Key',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'regionId'             => 'RegionId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'resourcePools'        => 'ResourcePools',
        'startTime'            => 'StartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->resourcePools) {
            $res['ResourcePools'] = $this->resourcePools;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDBClusterPerformanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['ResourcePools'])) {
            $model->resourcePools = $map['ResourcePools'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
