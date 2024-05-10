<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\Tea\Model;

class DescribeDBClusterPerformanceRequest extends Model
{
    /**
     * @description The ID of the AnalyticDB for MySQL Data Lakehouse Edition (V3.0) cluster.
     *
     * This parameter is required.
     * @example amv-bp1hx5n1o8f61****
     *
     * @var string
     */
    public $DBClusterId;

    /**
     * @description The end of the time range to query. Specify the time in the ISO 8601 standard in the *yyyy-MM-ddTHH:mmZ* format. The time must be in UTC.
     *
     * > The end time must be later than the start time. The maximum time range that can be specified is two days.
     * @example 2022-03-11T15:01Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The performance metrics to be queried. Separate multiple values with commas (,). Valid values:
     *
     *   CPU
     *
     *   **AnalyticDB_CPU_Usage_Percentage**: the average CPU utilization.
     *
     *   Connections
     *
     *   **AnalyticDB_Instance_Connection_Count**: the number of database connections.
     *
     *   Writes
     *
     *   **AnalyticDB_TPS**: the write transactions per second (TPS).
     *   **AnalyticDB_InsertRT**: the write response time.
     *   **AnalyticDB_InsertBytes**: the write throughput.
     *
     *   Queries
     *
     *   **AnalyticDB_QPS**: the queries per second (QPS).
     *   **AnalyticDB_QueryRT**: the query response time.
     *   **AnalyticDB_QueryWaitTime**: the query wait time.
     *
     *   Disks
     *
     *   **AnalyticDB_Disk_IO_Avg_Usage_Percentage**: the average I/O utilization.
     *   **AnalyticDB_Disk_IO_Avg_Waiting_Time**: the average I/O wait time.
     *   **AnalyticDB_IO_Throughput**: the disk throughput.
     *   **AnalyticDB_IOPS**: the disk IOPS.
     *   **AnalyticDB_Disk_Usage**: the disk space that is used.
     *   **AnalyticDB_Disk_Usage_Percentage**: the disk usage.
     *   **AnalyticDB_Hot_Data_Usage**: the disk space that is used by hot data.
     *   **AnalyticDB_Cold_Data_Usage**: the disk space that is used by code data.
     *
     * >  This parameter must be specified.
     * @example AnalyticDB_CPU_Usage_Percentage
     *
     * @var string
     */
    public $key;

    /**
     * @description The region ID of the cluster.
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The resource group ID.
     *
     * @example user_default
     *
     * @var string
     */
    public $resourcePools;

    /**
     * @description The beginning of the time range to query. Specify the time in the ISO 8601 standard in the *yyyy-MM-ddTHH:mmZ* format. The time must be in UTC.
     *
     * @example 2022-03-10T23:56Z
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'DBClusterId'   => 'DBClusterId',
        'endTime'       => 'EndTime',
        'key'           => 'Key',
        'regionId'      => 'RegionId',
        'resourcePools' => 'ResourcePools',
        'startTime'     => 'StartTime',
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
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
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
