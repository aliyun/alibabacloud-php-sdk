<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Schedulerx2\V20190430\Models\GetWorkflowInstanceResponseBody\data\wfInstanceDag;

use AlibabaCloud\Dara\Model;

class nodes extends Model
{
    /**
     * @var int
     */
    public $attempt;

    /**
     * @var string
     */
    public $dataTime;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var int
     */
    public $jobId;

    /**
     * @var int
     */
    public $jobInstanceId;

    /**
     * @var string
     */
    public $jobName;

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
     * @var string
     */
    public $workAddr;
    protected $_name = [
        'attempt' => 'Attempt',
        'dataTime' => 'DataTime',
        'endTime' => 'EndTime',
        'jobId' => 'JobId',
        'jobInstanceId' => 'JobInstanceId',
        'jobName' => 'JobName',
        'result' => 'Result',
        'scheduleTime' => 'ScheduleTime',
        'startTime' => 'StartTime',
        'status' => 'Status',
        'workAddr' => 'WorkAddr',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
