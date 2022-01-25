<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Schedulerx2\V20190430\Models\GetJobInstanceListResponseBody\data;

use AlibabaCloud\Tea\Model;

class jobInstanceDetails extends Model
{
    /**
     * @var string
     */
    public $dataTime;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $executor;

    /**
     * @var int
     */
    public $instanceId;

    /**
     * @var int
     */
    public $jobId;

    /**
     * @var string
     */
    public $progress;

    /**
     * @var string
     */
    public $result;

    /**
     * @var string
     */
    public $scheduleTime;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var int
     */
    public $status;

    /**
     * @var int
     */
    public $timeType;

    /**
     * @var int
     */
    public $triggerType;

    /**
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
