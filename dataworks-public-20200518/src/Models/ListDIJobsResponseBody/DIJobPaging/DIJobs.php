<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListDIJobsResponseBody\DIJobPaging;

use AlibabaCloud\Tea\Model;

class DIJobs extends Model
{
    /**
     * @description The task ID.
     *
     * @example 16626
     *
     * @var int
     */
    public $DIJobId;

    /**
     * @description The type of the destination. The value Hologres is returned.
     *
     * @example Hologres
     *
     * @var string
     */
    public $destinationDataSourceType;

    /**
     * @description The task name.
     *
     * @example mysql_to_holo_sync_8772
     *
     * @var string
     */
    public $jobName;

    /**
     * @description The task status. Valid values:
     *
     *   Finished
     *   Initialized
     *   Stopped
     *   Failed
     *   Running
     *   Stopping
     *
     * @example Finished
     *
     * @var string
     */
    public $jobStatus;

    /**
     * @description The synchronization type. Valid values:
     *
     *   FullAndRealtimeIncremental: one-time full synchronization and real-time incremental synchronization
     *   RealtimeIncremental: real-time incremental synchronization
     *   Full: one-time full synchronization
     *
     * @example Full
     *
     * @var string
     */
    public $migrationType;

    /**
     * @description The workspace ID.
     *
     * @example 1967
     *
     * @var int
     */
    public $projectId;

    /**
     * @description The type of the source. The value MySQL is returned.
     *
     * @example MySQL
     *
     * @var string
     */
    public $sourceDataSourceType;
    protected $_name = [
        'DIJobId'                   => 'DIJobId',
        'destinationDataSourceType' => 'DestinationDataSourceType',
        'jobName'                   => 'JobName',
        'jobStatus'                 => 'JobStatus',
        'migrationType'             => 'MigrationType',
        'projectId'                 => 'ProjectId',
        'sourceDataSourceType'      => 'SourceDataSourceType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DIJobId) {
            $res['DIJobId'] = $this->DIJobId;
        }
        if (null !== $this->destinationDataSourceType) {
            $res['DestinationDataSourceType'] = $this->destinationDataSourceType;
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
