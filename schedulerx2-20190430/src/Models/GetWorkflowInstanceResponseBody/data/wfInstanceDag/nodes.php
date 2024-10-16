<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Schedulerx2\V20190430\Models\GetWorkflowInstanceResponseBody\data\wfInstanceDag;

use AlibabaCloud\Tea\Model;

class nodes extends Model
{
    /**
     * @description The number of retries when the job failed.
     *
     * @example 0
     *
     * @var int
     */
    public $attempt;

    /**
     * @description The data timestamp of the job.
     *
     * @example 2023-01-03 18:00:00
     *
     * @var string
     */
    public $dataTime;

    /**
     * @description The time when the job stopped running.
     *
     * @example 2023-01-03 18:00:21
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The job ID.
     *
     * @example 1472
     *
     * @var int
     */
    public $jobId;

    /**
     * @description The ID of the job instance.
     *
     * @example 24058796
     *
     * @var int
     */
    public $jobInstanceId;

    /**
     * @description The job name.
     *
     * @example TestJob
     *
     * @var string
     */
    public $jobName;

    /**
     * @description The execution result of the job.
     *
     * @example code=200
     *
     * @var string
     */
    public $result;

    /**
     * @description The time when the job was scheduled.
     *
     * @example 2023-01-03 18:00:03
     *
     * @var string
     */
    public $scheduleTime;

    /**
     * @description The time when the job started to run.
     *
     * @example 2023-01-03 18:00:03
     *
     * @var string
     */
    public $startTime;

    /**
     * @description The state of the job instance. Valid values: 1: The job instance is waiting for execution. 3: The job instance is running. 4: The job instance is run. 5: The job instance failed to run. 9: The job instance is rejected. Enumeration class: com.alibaba.schedulerx.common.domain.InstanceStatus.
     *
     * @example 4
     *
     * @var int
     */
    public $status;

    /**
     * @description The worker on which the job instance run.
     *
     * @example 10.163.0.101:34027
     *
     * @var string
     */
    public $workAddr;
    protected $_name = [
        'attempt'       => 'Attempt',
        'dataTime'      => 'DataTime',
        'endTime'       => 'EndTime',
        'jobId'         => 'JobId',
        'jobInstanceId' => 'JobInstanceId',
        'jobName'       => 'JobName',
        'result'        => 'Result',
        'scheduleTime'  => 'ScheduleTime',
        'startTime'     => 'StartTime',
        'status'        => 'Status',
        'workAddr'      => 'WorkAddr',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->attempt) {
            $res['Attempt'] = $this->attempt;
        }
        if (null !== $this->dataTime) {
            $res['DataTime'] = $this->dataTime;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->jobInstanceId) {
            $res['JobInstanceId'] = $this->jobInstanceId;
        }
        if (null !== $this->jobName) {
            $res['JobName'] = $this->jobName;
        }
        if (null !== $this->result) {
            $res['Result'] = $this->result;
        }
        if (null !== $this->scheduleTime) {
            $res['ScheduleTime'] = $this->scheduleTime;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->workAddr) {
            $res['WorkAddr'] = $this->workAddr;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return nodes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Attempt'])) {
            $model->attempt = $map['Attempt'];
        }
        if (isset($map['DataTime'])) {
            $model->dataTime = $map['DataTime'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['JobInstanceId'])) {
            $model->jobInstanceId = $map['JobInstanceId'];
        }
        if (isset($map['JobName'])) {
            $model->jobName = $map['JobName'];
        }
        if (isset($map['Result'])) {
            $model->result = $map['Result'];
        }
        if (isset($map['ScheduleTime'])) {
            $model->scheduleTime = $map['ScheduleTime'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['WorkAddr'])) {
            $model->workAddr = $map['WorkAddr'];
        }

        return $model;
    }
}
