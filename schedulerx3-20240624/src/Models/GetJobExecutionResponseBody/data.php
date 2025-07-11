<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SchedulerX3\V20240624\Models\GetJobExecutionResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example test-app
     *
     * @var string
     */
    public $appName;

    /**
     * @example 1
     *
     * @var int
     */
    public $attempt;

    /**
     * @var string
     */
    public $dataTime;

    /**
     * @example 1
     *
     * @var int
     */
    public $duration;

    /**
     * @example 2024-10-29 15:56:36
     *
     * @var string
     */
    public $endTime;

    /**
     * @example {\\"Status\\": \\"NORMAL\\", \\"ActiveCount\\": 4, \\"UnavailableCount\\": 0, \\"ExpectedCount\\": 4, \\"RiskCount\\": 0}
     *
     * @var string
     */
    public $executor;

    /**
     * @example 1310630367761285120
     *
     * @var string
     */
    public $jobExecutionId;

    /**
     * @example 74
     *
     * @var int
     */
    public $jobId;

    /**
     * @var string
     */
    public $jobName;

    /**
     * @example xxljob
     *
     * @var string
     */
    public $jobType;

    /**
     * @example /home/avatar/system/services/biz/payment/crontab/monitorpayment.php
     *
     * @var string
     */
    public $parameters;

    /**
     * @example []
     *
     * @var string
     */
    public $result;

    /**
     * @example 1
     *
     * @var int
     */
    public $routeStrategy;

    /**
     * @var string
     */
    public $scheduleTime;

    /**
     * @example 172.3.27.76
     *
     * @var string
     */
    public $serverIp;

    /**
     * @example 2025-03-11T00:06:10Z
     *
     * @var string
     */
    public $startTime;

    /**
     * @example 4
     *
     * @var int
     */
    public $status;

    /**
     * @example 1
     *
     * @var int
     */
    public $timeType;

    /**
     * @example timer_schedule
     *
     * @var int
     */
    public $triggerType;
    protected $_name = [
        'appName' => 'AppName',
        'attempt' => 'Attempt',
        'dataTime' => 'DataTime',
        'duration' => 'Duration',
        'endTime' => 'EndTime',
        'executor' => 'Executor',
        'jobExecutionId' => 'JobExecutionId',
        'jobId' => 'JobId',
        'jobName' => 'JobName',
        'jobType' => 'JobType',
        'parameters' => 'Parameters',
        'result' => 'Result',
        'routeStrategy' => 'RouteStrategy',
        'scheduleTime' => 'ScheduleTime',
        'serverIp' => 'ServerIp',
        'startTime' => 'StartTime',
        'status' => 'Status',
        'timeType' => 'TimeType',
        'triggerType' => 'TriggerType',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->attempt) {
            $res['Attempt'] = $this->attempt;
        }
        if (null !== $this->dataTime) {
            $res['DataTime'] = $this->dataTime;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->executor) {
            $res['Executor'] = $this->executor;
        }
        if (null !== $this->jobExecutionId) {
            $res['JobExecutionId'] = $this->jobExecutionId;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->jobName) {
            $res['JobName'] = $this->jobName;
        }
        if (null !== $this->jobType) {
            $res['JobType'] = $this->jobType;
        }
        if (null !== $this->parameters) {
            $res['Parameters'] = $this->parameters;
        }
        if (null !== $this->result) {
            $res['Result'] = $this->result;
        }
        if (null !== $this->routeStrategy) {
            $res['RouteStrategy'] = $this->routeStrategy;
        }
        if (null !== $this->scheduleTime) {
            $res['ScheduleTime'] = $this->scheduleTime;
        }
        if (null !== $this->serverIp) {
            $res['ServerIp'] = $this->serverIp;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['Attempt'])) {
            $model->attempt = $map['Attempt'];
        }
        if (isset($map['DataTime'])) {
            $model->dataTime = $map['DataTime'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['Executor'])) {
            $model->executor = $map['Executor'];
        }
        if (isset($map['JobExecutionId'])) {
            $model->jobExecutionId = $map['JobExecutionId'];
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['JobName'])) {
            $model->jobName = $map['JobName'];
        }
        if (isset($map['JobType'])) {
            $model->jobType = $map['JobType'];
        }
        if (isset($map['Parameters'])) {
            $model->parameters = $map['Parameters'];
        }
        if (isset($map['Result'])) {
            $model->result = $map['Result'];
        }
        if (isset($map['RouteStrategy'])) {
            $model->routeStrategy = $map['RouteStrategy'];
        }
        if (isset($map['ScheduleTime'])) {
            $model->scheduleTime = $map['ScheduleTime'];
        }
        if (isset($map['ServerIp'])) {
            $model->serverIp = $map['ServerIp'];
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

        return $model;
    }
}
