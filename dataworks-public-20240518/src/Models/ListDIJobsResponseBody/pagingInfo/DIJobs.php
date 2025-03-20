<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListDIJobsResponseBody\pagingInfo;

use AlibabaCloud\Tea\Model;

class DIJobs extends Model
{
    /**
     * @description This parameter is deprecated. Use the Id parameter instead.
     *
     * @example 32599
     *
     * @deprecated
     *
     * @var int
     */
    public $DIJobId;

    /**
     * @description The destination type. Valid values: Hologres, OSS-HDFS, OSS, MaxCompute, Loghub, STARROCKS, Datahub, ANALYTICDB_FOR_MYSQL, Kafka, and Hive. If you do not configure this parameter, the API operation returns synchronization tasks that use all type of destinations.
     *
     * @example Hologres
     *
     * @var string
     */
    public $destinationDataSourceType;

    /**
     * @description The ID of the synchronization task.
     *
     * @example 32599
     *
     * @var int
     */
    public $id;

    /**
     * @description The name of the synchronization task.
     *
     * @example mysql_to_holo_sync_35197
     *
     * @var string
     */
    public $jobName;

    /**
     * @description The status of the synchronization task. Valid values:
     *
     *   Finished
     *   Initialized
     *   Stopped
     *   Failed
     *   Running
     *   Stopping
     *
     * @example Running
     *
     * @var string
     */
    public $jobStatus;

    /**
     * @description The synchronization type. Valid values:
     *
     *   FullAndRealtimeIncremental: one-time full synchronization and real-time incremental synchronization
     *   RealtimeIncremental: real-time incremental synchronization
     *   Full: full synchronization
     *   OfflineIncremental: batch incremental synchronization
     *   FullAndOfflineIncremental: one-time full synchronization and batch incremental synchronization
     *
     * @example FullAndRealtimeIncremental
     *
     * @var string
     */
    public $migrationType;

    /**
     * @description The ID of the DataWorks workspace to which the synchronization task belongs.
     *
     * @example 26442
     *
     * @var int
     */
    public $projectId;

    /**
     * @description The source type. Valid values: PolarDB, MySQL, Kafka, Loghub, Hologres, Oracle, OceanBase, MongoDB, RedShift, Hive, SqlServer, Doris, and ClickHouse. If you do not configure this parameter, the API operation returns synchronization tasks that use all types of sources.
     *
     * @example Mysql
     *
     * @var string
     */
    public $sourceDataSourceType;
    protected $_name = [
        'DIJobId' => 'DIJobId',
        'destinationDataSourceType' => 'DestinationDataSourceType',
        'id' => 'Id',
        'jobName' => 'JobName',
        'jobStatus' => 'JobStatus',
        'migrationType' => 'MigrationType',
        'projectId' => 'ProjectId',
        'sourceDataSourceType' => 'SourceDataSourceType',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->DIJobId) {
            $res['DIJobId'] = $this->DIJobId;
        }
        if (null !== $this->destinationDataSourceType) {
            $res['DestinationDataSourceType'] = $this->destinationDataSourceType;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->jobName) {
            $res['JobName'] = $this->jobName;
        }
        if (null !== $this->jobStatus) {
            $res['JobStatus'] = $this->jobStatus;
        }
        if (null !== $this->migrationType) {
            $res['MigrationType'] = $this->migrationType;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->sourceDataSourceType) {
            $res['SourceDataSourceType'] = $this->sourceDataSourceType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DIJobs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DIJobId'])) {
            $model->DIJobId = $map['DIJobId'];
        }
        if (isset($map['DestinationDataSourceType'])) {
            $model->destinationDataSourceType = $map['DestinationDataSourceType'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['JobName'])) {
            $model->jobName = $map['JobName'];
        }
        if (isset($map['JobStatus'])) {
            $model->jobStatus = $map['JobStatus'];
        }
        if (isset($map['MigrationType'])) {
            $model->migrationType = $map['MigrationType'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['SourceDataSourceType'])) {
            $model->sourceDataSourceType = $map['SourceDataSourceType'];
        }

        return $model;
    }
}
