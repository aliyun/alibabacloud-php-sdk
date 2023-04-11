<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetOnlineDDLProgressResponseBody;

use AlibabaCloud\Tea\Model;

class onlineDDLTaskDetail extends Model
{
    /**
     * @description The cleanup policy of the original table after the cut-over. Valid values:
     *
     *   **DROP**: Invalid original tables are deleted.
     *   **MOVE**: Invalid original tables are moved to the test database. You can delete the tables manually.
     *   **NOTHING**: Invalid original tables are retained in the original database. You can delete the tables manually.
     *
     * @example DROP
     *
     * @var string
     */
    public $cleanStrategy;

    /**
     * @description The policy of full replication. Valid values:
     *
     *   **AUTO**: DMS dynamically adjusts the chunk size based on the performance of the database. Tables are locked for less than 1.5 seconds during a single replication operation.
     *   **RUNNING**: DMS uses the specified value of the CopyChunkSize parameter. The valid value of the CopyChunkSize parameter ranges from 1 to 60000. If you set this parameter to RUNNING, you must specify the CopyChunkSize parameter.
     *
     * @example AUTO
     *
     * @var string
     */
    public $copyChunkMode;

    /**
     * @description The size of each chunk that is used to replicate data. This parameter is used to specify the size of each chunk. A larger chunk size increases the replication efficiency and decreases the business performance.
     *
     * > During full replication, the original table is divided into N small chunks and each chunk is replicated to the temporary table one by one. By default, DMS dynamically adjusts the size of each chunk.
     * @example 1000
     *
     * @var int
     */
    public $copyChunkSize;

    /**
     * @description The actual amount of data replicated from the original table in the lock-free change operation.
     *
     * @example 9
     *
     * @var int
     */
    public $copyCount;

    /**
     * @description The estimated total number of rows of the data. The value is obtained from the statistical data in the information_schema database. In most cases, the estimated total number of rows is smaller than the actual number of rows in a table.
     *
     * @example 10
     *
     * @var int
     */
    public $copyTotal;

    /**
     * @description The number of retries when the cut-over fails.
     *
     * @example 3
     *
     * @var int
     */
    public $cutoverFailRetryTimes;

    /**
     * @description The maximum period of time that a table can be locked during cut-over. Unit: seconds.
     *
     * @example 2
     *
     * @var int
     */
    public $cutoverLockTimeSeconds;

    /**
     * @description The end of the time window of the cut-over operation. This value is at least 30 minutes later than the CutoverWindowStartTime parameter. Default value: 23:59:59
     *
     * @example 13:00:00
     *
     * @var string
     */
    public $cutoverWindowEndTime;

    /**
     * @description The beginning of the time window of the cut-over operation. Default value: 00:00:00. This parameter controls the time window of the cut-over. Cut-over can be performed only when the cut-over conditions are met and the time is within the specified time window. If the time is not within the time window, the cut-over operation is not performed until the time reaches the beginning of the time window.
     *
     * @example 12:00:00
     *
     * @var string
     */
    public $cutoverWindowStartTime;

    /**
     * @description The replay latency of DMS. Unit: seconds. The replay latency is the period of time that is taken to replay the binary logs of the table to the temporary table. The latency does not indicate the data migration latency between a primary database and a secondary database.
     *
     * @example 0
     *
     * @var int
     */
    public $delaySeconds;

    /**
     * @description The state of the task. Valid values:
     *
     *   **INIT**: The task is being initialized.
     *   **SUCCESS**: The task is complete.
     *   **RUNNING**: The task is being executed.
     *   **WAITING_CUTOVER**: The task is waiting for cut-over.
     *   **RESTARTING**: The task is restarting.
     *   **PAUSE**: The task is suspended.
     *   **UNSUPPORTED**: The task is not supported.
     *   **CANCELED**: The task is canceled.
     *   **FAIL**: The task failed.
     *   **INTERRUPT**: The task is interrupted.
     *
     * @example SUCCESS
     *
     * @var string
     */
    public $jobStatus;

    /**
     * @description The estimated execution progress. The actual progress is subject to the task status.
     *
     * @example 90%
     *
     * @var string
     */
    public $progressRatio;

    /**
     * @description The description of the task status.
     *
     * @example Success
     *
     * @var string
     */
    public $statusDesc;
    protected $_name = [
        'cleanStrategy'          => 'CleanStrategy',
        'copyChunkMode'          => 'CopyChunkMode',
        'copyChunkSize'          => 'CopyChunkSize',
        'copyCount'              => 'CopyCount',
        'copyTotal'              => 'CopyTotal',
        'cutoverFailRetryTimes'  => 'CutoverFailRetryTimes',
        'cutoverLockTimeSeconds' => 'CutoverLockTimeSeconds',
        'cutoverWindowEndTime'   => 'CutoverWindowEndTime',
        'cutoverWindowStartTime' => 'CutoverWindowStartTime',
        'delaySeconds'           => 'DelaySeconds',
        'jobStatus'              => 'JobStatus',
        'progressRatio'          => 'ProgressRatio',
        'statusDesc'             => 'StatusDesc',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cleanStrategy) {
            $res['CleanStrategy'] = $this->cleanStrategy;
        }
        if (null !== $this->copyChunkMode) {
            $res['CopyChunkMode'] = $this->copyChunkMode;
        }
        if (null !== $this->copyChunkSize) {
            $res['CopyChunkSize'] = $this->copyChunkSize;
        }
        if (null !== $this->copyCount) {
            $res['CopyCount'] = $this->copyCount;
        }
        if (null !== $this->copyTotal) {
            $res['CopyTotal'] = $this->copyTotal;
        }
        if (null !== $this->cutoverFailRetryTimes) {
            $res['CutoverFailRetryTimes'] = $this->cutoverFailRetryTimes;
        }
        if (null !== $this->cutoverLockTimeSeconds) {
            $res['CutoverLockTimeSeconds'] = $this->cutoverLockTimeSeconds;
        }
        if (null !== $this->cutoverWindowEndTime) {
            $res['CutoverWindowEndTime'] = $this->cutoverWindowEndTime;
        }
        if (null !== $this->cutoverWindowStartTime) {
            $res['CutoverWindowStartTime'] = $this->cutoverWindowStartTime;
        }
        if (null !== $this->delaySeconds) {
            $res['DelaySeconds'] = $this->delaySeconds;
        }
        if (null !== $this->jobStatus) {
            $res['JobStatus'] = $this->jobStatus;
        }
        if (null !== $this->progressRatio) {
            $res['ProgressRatio'] = $this->progressRatio;
        }
        if (null !== $this->statusDesc) {
            $res['StatusDesc'] = $this->statusDesc;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return onlineDDLTaskDetail
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CleanStrategy'])) {
            $model->cleanStrategy = $map['CleanStrategy'];
        }
        if (isset($map['CopyChunkMode'])) {
            $model->copyChunkMode = $map['CopyChunkMode'];
        }
        if (isset($map['CopyChunkSize'])) {
            $model->copyChunkSize = $map['CopyChunkSize'];
        }
        if (isset($map['CopyCount'])) {
            $model->copyCount = $map['CopyCount'];
        }
        if (isset($map['CopyTotal'])) {
            $model->copyTotal = $map['CopyTotal'];
        }
        if (isset($map['CutoverFailRetryTimes'])) {
            $model->cutoverFailRetryTimes = $map['CutoverFailRetryTimes'];
        }
        if (isset($map['CutoverLockTimeSeconds'])) {
            $model->cutoverLockTimeSeconds = $map['CutoverLockTimeSeconds'];
        }
        if (isset($map['CutoverWindowEndTime'])) {
            $model->cutoverWindowEndTime = $map['CutoverWindowEndTime'];
        }
        if (isset($map['CutoverWindowStartTime'])) {
            $model->cutoverWindowStartTime = $map['CutoverWindowStartTime'];
        }
        if (isset($map['DelaySeconds'])) {
            $model->delaySeconds = $map['DelaySeconds'];
        }
        if (isset($map['JobStatus'])) {
            $model->jobStatus = $map['JobStatus'];
        }
        if (isset($map['ProgressRatio'])) {
            $model->progressRatio = $map['ProgressRatio'];
        }
        if (isset($map['StatusDesc'])) {
            $model->statusDesc = $map['StatusDesc'];
        }

        return $model;
    }
}
