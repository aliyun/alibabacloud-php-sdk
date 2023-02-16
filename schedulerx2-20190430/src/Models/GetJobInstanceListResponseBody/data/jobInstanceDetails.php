<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Schedulerx2\V20190430\Models\GetJobInstanceListResponseBody\data;

use AlibabaCloud\Tea\Model;

class jobInstanceDetails extends Model
{
    /**
     * @description The data time.
     *
     * @example 2020-07-27 11:52:10
     *
     * @var string
     */
    public $dataTime;

    /**
     * @description The end time of the job execution.
     *
     * @example 2020-07-27 11:52:10
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The user who executes the job.
     *
     * @example A
     *
     * @var string
     */
    public $executor;

    /**
     * @description The ID of the job instance.
     *
     * @example 11111111
     *
     * @var int
     */
    public $instanceId;

    /**
     * @description The ID of the job.
     *
     * @example 92583
     *
     * @var int
     */
    public $jobId;

    /**
     * @description The progress of the job instance.
     *
     * @example complete
     *
     * @var string
     */
    public $progress;

    /**
     * @description The execution results of the job instance.
     *
     * @example success
     *
     * @var string
     */
    public $result;

    /**
     * @description The scheduled time of the job.
     *
     * @example 2020-07-27 11:52:10
     *
     * @var string
     */
    public $scheduleTime;

    /**
     * @description The start time of the job execution.
     *
     * @example 2020-07-27 11:52:10
     *
     * @var string
     */
    public $startTime;

    /**
     * @description The status of the job instance. Valid values:
     *
     *   **1**: The job instance is waiting for execution.
     *   **3**: The job instance is running.
     *   **4**: The job instance is successful.
     *   **5**: The job instance fails.
     *   **9**: The job instance is rejected.
     *
     * Enumeration class: com.alibaba.schedulerx.common.domain.InstanceStatus
     * @example 4
     *
     * @var int
     */
    public $status;

    /**
     * @description The method that is used to specify the time when to schedule the job instance. Valid values:
     *
     *   **1**: cron
     *   **3**: fix_rate
     *   **4**: second_delay
     *   **100**: api
     *
     * Enumeration class: com.alibaba.schedulerx.common.domain.TimeType
     * @example 1
     *
     * @var int
     */
    public $timeType;

    /**
     * @description The trigger type of the job instance. Valid values:
     *
     *   **1**: The job instance is triggered at the scheduled time.
     *   **2**: The job instance is triggered due to data update.
     *   **3**: The job instance is triggered by an API call.
     *   **4**: The job instance is triggered because it is manually rerun.
     *   **5**: The job instance is triggered because the system automatically reruns the job instance upon a system exception, such as a database exception.
     *
     * Enumeration class: com.alibaba.schedulerx.common.domain.TriggerType
     * @example 3
     *
     * @var int
     */
    public $triggerType;

    /**
     * @description The endpoint of the triggered client. The value is in the IP address:Port number format.
     *
     * @example 192.168.0.0:16
     *
     * @var string
     */
    public $workAddr;
    protected $_name = [
        'dataTime'     => 'DataTime',
        'endTime'      => 'EndTime',
        'executor'     => 'Executor',
        'instanceId'   => 'InstanceId',
        'jobId'        => 'JobId',
        'progress'     => 'Progress',
        'result'       => 'Result',
        'scheduleTime' => 'ScheduleTime',
        'startTime'    => 'StartTime',
        'status'       => 'Status',
        'timeType'     => 'TimeType',
        'triggerType'  => 'TriggerType',
        'workAddr'     => 'WorkAddr',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataTime) {
            $res['DataTime'] = $this->dataTime;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->executor) {
            $res['Executor'] = $this->executor;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->progress) {
            $res['Progress'] = $this->progress;
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
        if (null !== $this->timeType) {
            $res['TimeType'] = $this->timeType;
        }
        if (null !== $this->triggerType) {
            $res['TriggerType'] = $this->triggerType;
        }
        if (null !== $this->workAddr) {
            $res['WorkAddr'] = $this->workAddr;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return jobInstanceDetails
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataTime'])) {
            $model->dataTime = $map['DataTime'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['Executor'])) {
            $model->executor = $map['Executor'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['Progress'])) {
            $model->progress = $map['Progress'];
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
        if (isset($map['TimeType'])) {
            $model->timeType = $map['TimeType'];
        }
        if (isset($map['TriggerType'])) {
            $model->triggerType = $map['TriggerType'];
        }
        if (isset($map['WorkAddr'])) {
            $model->workAddr = $map['WorkAddr'];
        }

        return $model;
    }
}
