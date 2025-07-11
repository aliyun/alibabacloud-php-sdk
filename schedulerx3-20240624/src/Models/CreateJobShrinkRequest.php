<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SchedulerX3\V20240624\Models;

use AlibabaCloud\Tea\Model;

class CreateJobShrinkRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example test-app
     *
     * @var string
     */
    public $appName;

    /**
     * @example 3
     *
     * @var int
     */
    public $attemptInterval;

    /**
     * @example workday
     *
     * @var string
     */
    public $calendar;

    /**
     * @var string
     */
    public $childJobId;

    /**
     * @description This parameter is required.
     *
     * @example xxljob-b6ec1xxxx
     *
     * @var string
     */
    public $clusterId;

    /**
     * @example test
     *
     * @var string
     */
    public $description;

    /**
     * @example 1
     *
     * @var int
     */
    public $executorBlockStrategy;

    /**
     * @example testJobVoidHandler
     *
     * @var string
     */
    public $jobHandler;

    /**
     * @description This parameter is required.
     *
     * @example xxljob
     *
     * @var string
     */
    public $jobType;

    /**
     * @example 3
     *
     * @var int
     */
    public $maxAttempt;

    /**
     * @example 1
     *
     * @var int
     */
    public $maxConcurrency;

    /**
     * @description This parameter is required.
     *
     * @example test-job
     *
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $noticeConfigShrink;

    /**
     * @var string
     */
    public $noticeContactsShrink;

    /**
     * @example test
     *
     * @var string
     */
    public $parameters;

    /**
     * @example 5
     *
     * @var int
     */
    public $priority;

    /**
     * @example 1
     *
     * @var int
     */
    public $routeStrategy;

    /**
     * @var string
     */
    public $script;

    /**
     * @example 1701310327000
     *
     * @var int
     */
    public $startTime;

    /**
     * @example 1
     *
     * @var int
     */
    public $status;

    /**
     * @example 0 0 4 ? * Mon/1
     *
     * @var string
     */
    public $timeExpression;

    /**
     * @description This parameter is required.
     *
     * @example -1
     *
     * @var int
     */
    public $timeType;

    /**
     * @example GMT+8
     *
     * @var string
     */
    public $timezone;
    protected $_name = [
        'appName' => 'AppName',
        'attemptInterval' => 'AttemptInterval',
        'calendar' => 'Calendar',
        'childJobId' => 'ChildJobId',
        'clusterId' => 'ClusterId',
        'description' => 'Description',
        'executorBlockStrategy' => 'ExecutorBlockStrategy',
        'jobHandler' => 'JobHandler',
        'jobType' => 'JobType',
        'maxAttempt' => 'MaxAttempt',
        'maxConcurrency' => 'MaxConcurrency',
        'name' => 'Name',
        'noticeConfigShrink' => 'NoticeConfig',
        'noticeContactsShrink' => 'NoticeContacts',
        'parameters' => 'Parameters',
        'priority' => 'Priority',
        'routeStrategy' => 'RouteStrategy',
        'script' => 'Script',
        'startTime' => 'StartTime',
        'status' => 'Status',
        'timeExpression' => 'TimeExpression',
        'timeType' => 'TimeType',
        'timezone' => 'Timezone',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->attemptInterval) {
            $res['AttemptInterval'] = $this->attemptInterval;
        }
        if (null !== $this->calendar) {
            $res['Calendar'] = $this->calendar;
        }
        if (null !== $this->childJobId) {
            $res['ChildJobId'] = $this->childJobId;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->executorBlockStrategy) {
            $res['ExecutorBlockStrategy'] = $this->executorBlockStrategy;
        }
        if (null !== $this->jobHandler) {
            $res['JobHandler'] = $this->jobHandler;
        }
        if (null !== $this->jobType) {
            $res['JobType'] = $this->jobType;
        }
        if (null !== $this->maxAttempt) {
            $res['MaxAttempt'] = $this->maxAttempt;
        }
        if (null !== $this->maxConcurrency) {
            $res['MaxConcurrency'] = $this->maxConcurrency;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->noticeConfigShrink) {
            $res['NoticeConfig'] = $this->noticeConfigShrink;
        }
        if (null !== $this->noticeContactsShrink) {
            $res['NoticeContacts'] = $this->noticeContactsShrink;
        }
        if (null !== $this->parameters) {
            $res['Parameters'] = $this->parameters;
        }
        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }
        if (null !== $this->routeStrategy) {
            $res['RouteStrategy'] = $this->routeStrategy;
        }
        if (null !== $this->script) {
            $res['Script'] = $this->script;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->timeExpression) {
            $res['TimeExpression'] = $this->timeExpression;
        }
        if (null !== $this->timeType) {
            $res['TimeType'] = $this->timeType;
        }
        if (null !== $this->timezone) {
            $res['Timezone'] = $this->timezone;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateJobShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['AttemptInterval'])) {
            $model->attemptInterval = $map['AttemptInterval'];
        }
        if (isset($map['Calendar'])) {
            $model->calendar = $map['Calendar'];
        }
        if (isset($map['ChildJobId'])) {
            $model->childJobId = $map['ChildJobId'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['ExecutorBlockStrategy'])) {
            $model->executorBlockStrategy = $map['ExecutorBlockStrategy'];
        }
        if (isset($map['JobHandler'])) {
            $model->jobHandler = $map['JobHandler'];
        }
        if (isset($map['JobType'])) {
            $model->jobType = $map['JobType'];
        }
        if (isset($map['MaxAttempt'])) {
            $model->maxAttempt = $map['MaxAttempt'];
        }
        if (isset($map['MaxConcurrency'])) {
            $model->maxConcurrency = $map['MaxConcurrency'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['NoticeConfig'])) {
            $model->noticeConfigShrink = $map['NoticeConfig'];
        }
        if (isset($map['NoticeContacts'])) {
            $model->noticeContactsShrink = $map['NoticeContacts'];
        }
        if (isset($map['Parameters'])) {
            $model->parameters = $map['Parameters'];
        }
        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }
        if (isset($map['RouteStrategy'])) {
            $model->routeStrategy = $map['RouteStrategy'];
        }
        if (isset($map['Script'])) {
            $model->script = $map['Script'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TimeExpression'])) {
            $model->timeExpression = $map['TimeExpression'];
        }
        if (isset($map['TimeType'])) {
            $model->timeType = $map['TimeType'];
        }
        if (isset($map['Timezone'])) {
            $model->timezone = $map['Timezone'];
        }

        return $model;
    }
}
