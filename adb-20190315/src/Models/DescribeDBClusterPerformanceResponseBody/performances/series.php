<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models\DescribeDBClusterPerformanceResponseBody\performances;

use AlibabaCloud\Tea\Model;

class series extends Model
{
    /**
     * @description *   CPU
     *
     *   **AnalyticDB_CPU**: the average CPU utilization.
     *
     *   worker_avg_cpu_used: the average CPU utilization across storage nodes.
     *   worker_max_cpu_used: the maximum CPU utilization across storage nodes.
     *   executor_avg_cpu_used: the average CPU utilization across compute nodes.
     *   executor_max_cpu_used: the maximum CPU utilization across compute nodes.
     *
     *   Connections
     *
     *   **AnalyticDB_Connections**: the number of connections of the cluster.
     *
     *   connections: the number of connections of the cluster.
     *
     *   Writes
     *
     *   **AnalyticDB_TPS**: the write TPS.
     *
     *   tps: the sum of the insert_tps, update_tps, delete_tps, and load_tps values.
     *   insert_tps: the number of successful INSERT INTO VALUES operations per second.
     *   update_tps: the number of successful UPDATE operations per second.
     *   delete_tps: the number of successful DELETE operations per second.
     *   load_tps: the number of successful INSERT OVERWRITE operations per second.
     *
     *   **AnalyticDB_InsertRT**: the write response time.
     *
     *   insert_avg_rt: the average amount of time consumed by writes.
     *   insert_max_rt: the maximum amount of time consumed by a single write.
     *
     *   **AnalyticDB_InsertBytes**: the write throughput.
     *
     *   insert_in_bytes: the amount of written data.
     *
     *   Updates
     *
     *   **AnalyticDB_UpdateRT**: the update response time.
     *
     *   updateinto_avg_rt: the average amount of time consumed by updates.
     *   updateinto_max_rt: the maximum amount of time consumed by a single update.
     *
     *   Deletes
     *
     *   **AnalyticDB_DeleteRT**: the delete response time.
     *
     *   delete_avg_rt: the average amount of time consumed by deletes.
     *   delete_max_rt: the maximum amount of time consumed by a single delete.
     *
     *   Queries
     *
     *   **AnalyticDB_QPS**: the QPS.
     *
     *   qps: the number of SELECT operations completed per second.
     *   etl_qps: the number of INSERT OVERWRITE operations completed per second.
     *
     *   **AnalyticDB_QueryRT**: the query response time.
     *
     *   query_avg_rt: the average amount of time consumed by queries.
     *   query_max_rt: the maximum amount of time consumed by a single query.
     *   etl_avg_rt: the average amount of time consumed by extract-transform-load (ETL) operations.
     *   etl_max_rt: the maximum amount of time consumed by a single ETL operation.
     *
     *   **AnalyticDB_QueryWaitTime**: the query wait time.
     *
     *   query_avg_wait_time: the average wait time for SELECT and ETL operations.
     *   query_max_wait_time: the maximum wait time for SELECT and ETL operations.
     *
     *   AnalyticDB_QueryFailedRatio: the query failure rate.
     *
     *   query_failed_ratio: the failure rate of SELECT and ETL operations.
     *
     *   Disks
     *
     *   **AnalyticDB_IO**: the disk I/O throughput.
     *
     *   worker_avg_read_bytes_ratio: the average read throughput across storage nodes.
     *   worker_avg_write_bytes_ratio: the average write throughput across storage nodes.
     *
     *   **AnalyticDB_IO_UTIL**: the disk I/O usage.
     *
     *   worker_avg_io_util: the disk I/O usage across storage nodes.
     *
     *   **AnalyticDB_IO_WAIT**: the disk I/O wait time.
     *
     *   worker_avg_io_await: the average I/O wait time of storage nodes.
     *
     *   **AnalyticDB_IOPS**: the disk IOPS.
     *
     *   worker_avg_read_ratio: the average read IOPS of storage nodes.
     *   worker_avg_write_ratio: the average write IOPS of storage nodes.
     *
     *   **AnalyticDB_DiskUsage**: the disk space that is used.
     *
     *   disk_used_ratio: the average disk space usage across nodes.
     *   worker_max_node_disk_used_ratio: the maximum disk space usage across nodes.
     *
     *   **AnalyticDB_HotDataDiskUsage**: the disk space that is used by hot data.
     *
     *   local_disk_used: the disk space that is used by hot data.
     *
     *   **AnalyticDB_ColdDataDiskUsage**: the disk space that is used by cold data.
     *
     *   remote_disk_used: the disk space that is used by cold data.
     *
     *   AnalyticDB_DiskUsedRatio: the node disk usage.
     *
     *   disk_used_ratio: the average disk usage across nodes.
     *   worker_max_node_disk_used_ratio: the maximum disk usage across nodes.
     *
     *   AnalyticDB_DiskUsedSize: the total data size of the cluster.
     *
     * disk_no_log_used: the total data size of the AnalyticDB for MySQL Data Warehouse Edition (V3.0) cluster in reserved mode.
     * disk_no_log_used_max: the maximum data size of nodes of the AnalyticDB for MySQL Data Warehouse Edition (V3.0) cluster in reserved mode.
     * disk_no_log_used_avg: the average data size of nodes of the AnalyticDB for MySQL Data Warehouse Edition (V3.0) cluster in reserved mode.
     *   user_used_disk_max: the maximum hot data size of nodes of the AnalyticDB for MySQL Data Warehouse Edition (V3.0) cluster in elastic mode for Cluster Edition.
     *   user_used_disk_avg: the average hot data size of nodes of the AnalyticDB for MySQL Data Warehouse Edition (V3.0) cluster in elastic mode for Cluster Edition.
     *   hot_disk_used: the hot data size of the AnalyticDB for MySQL Data Warehouse Edition (V3.0) cluster in elastic mode for Cluster Edition.
     *   cold_disk_used: the cold data size of the AnalyticDB for MySQL Data Warehouse Edition (V3.0) cluster in elastic mode for Cluster Edition.
     *
     *   Other
     *
     *   **AnalyticDB_BuildTaskCount**: the number of BUILD jobs.
     *
     *   max_build_task_count: the maximum number of running BUILD jobs across nodes.
     *   avg_build_task_count: the average number of running BUILD jobs across nodes.
     *
     *   **AnalyticDB_ComputeMemoryUsedRatio**: the compute memory usage.
     *
     *   max_worker_compute_memory_used_ratio: the maximum compute memory usage across storage nodes.
     *   avg_worker_compute_memory_used_ratio: the average compute memory usage across storage nodes.
     *   max_executor_compute_memory_used_ratio: the maximum compute memory usage across compute nodes.
     *   avg_executor_compute_memory_used_ratio: the average compute memory usage across compute nodes.
     *
     *   AnalyticDB_UnavailableNodeCount: the number of unavailable nodes.
     *
     *   worker_unavailable_node_count: the number of unavailable storage nodes.
     *   executor_unavailable_node_count: the number of unavailable compute nodes.
     *
     *   WLM
     *
     *   AnalyticDB_WLM_ResubmitQueries_Count: the number of resubmitted WLM queries.
     *
     *   AnalyticDB_WLM_ResubmitQueries_Count: the number of resubmitted WLM queries.
     *
     *   AnalyticDB_WLM_SQA_AvgRt_MS: the average amount of time consumed by accelerated short WLM queries.
     *
     *   AnalyticDB_WLM_SQA_AvgRt_MS: the average amount of time consumed by accelerated short WLM queries.
     *
     *   AnalyticDB_WLM_SQA_Queries_Count: the number of accelerated short WLM queries.
     *
     *   AnalyticDB_WLM_SQA_Queries_Count: the number of accelerated short WLM queries.
     *
     *   AnalyticDB_WLM_TotalQueries_Count: the total number of WLM queries.
     *
     *   AnalyticDB_WLM_TotalQueries_Count: the total number of WLM queries.
     *
     *   AnalyticDB Pipeline Service (APS)
     *
     *   AnalyticDB_APS_BPS: the bytes per second (BPS) of APS provided by the AnalyticDB for MySQL Data Warehouse Edition (V3.0) cluster.
     *
     *   APS_Read_BPS: the read BPS of APS.
     *
     *   AnalyticDB_APS_CPU: the CPU utilization of APS provided by the AnalyticDB for MySQL Data Warehouse Edition (V3.0) cluster.
     *
     *   APS_CPU_Avg_Usage_Percentage: the average CPU utilization of APS.
     *   APS_CPU_Max_Usage_Percentage: the maximum CPU utilization of APS.
     *
     *   AnalyticDB_APS_Memory: the memory usage of APS provided by the AnalyticDB for MySQL Data Warehouse Edition (V3.0) cluster.
     *
     *   APS_Memory_Avg_Usage_Percentage: the average memory usage of APS.
     *   APS_Memory_Max_Usage_Percentage: the maximum memory usage of APS.
     *
     *   AnalyticDB_APS_RPS: the number of records per second of APS provided by the AnalyticDB for MySQL Data Warehouse Edition (V3.0) cluster.
     *
     *   APS_Read_RPS: the number of read records per second of APS.
     *
     *   AnalyticDB_APS_RT: the response time of APS provided by the AnalyticDB for MySQL Data Warehouse Edition (V3.0) cluster.
     *
     *   AnalyticDB_APS_RT: the average response time of APS.
     *   APS_Read_Max_RT: the maximum response time of APS.
     *
     * @example worker_avg_cpu_used
     *
     * @var string
     */
    public $name;

    /**
     * @description The tags that are added to the cluster.
     *
     * @example instance_name: "amv-8vbf80pjcz*****"
     *
     * @var string
     */
    public $tags;

    /**
     * @description The values of the queried performance metric.
     *
     * @var string[]
     */
    public $values;
    protected $_name = [
        'name'   => 'Name',
        'tags'   => 'Tags',
        'values' => 'Values',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->tags) {
            $res['Tags'] = $this->tags;
        }
        if (null !== $this->values) {
            $res['Values'] = $this->values;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return series
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Tags'])) {
            $model->tags = $map['Tags'];
        }
        if (isset($map['Values'])) {
            if (!empty($map['Values'])) {
                $model->values = $map['Values'];
            }
        }

        return $model;
    }
}
