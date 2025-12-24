<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SchedulerX3\V20240624\Models;

use AlibabaCloud\Dara\Model;

class CreateJobShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $appName;

    /**
     * @var int
     */
    public $attemptInterval;

    /**
     * @var string
     */
    public $calendar;

    /**
     * @var string
     */
    public $childJobId;

    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $coordinateShrink;

    /**
     * @var int
     */
    public $dependentStrategy;

    /**
     * @var string
     */
    public $description;

    /**
     * @var int
     */
    public $executorBlockStrategy;

    /**
     * @var string
     */
    public $jobHandler;

    /**
     * @var string
     */
    public $jobType;

    /**
     * @var int
     */
    public $maxAttempt;

    /**
     * @var int
     */
    public $maxConcurrency;

    /**
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
     * @var string
     */
    public $parameters;

    /**
     * @var int
     */
    public $priority;

    /**
     * @var int
     */
    public $routeStrategy;

    /**
     * @var string
     */
    public $script;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var int
     */
    public $startTimeType;

    /**
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $timeExpression;

    /**
     * @var int
     */
    public $timeType;

    /**
     * @var string
     */
    public $timezone;

    /**
     * @var int
     */
    public $weight;
    protected $_name = [
        'appName' => 'AppName',
        'attemptInterval' => 'AttemptInterval',
        'calendar' => 'Calendar',
        'childJobId' => 'ChildJobId',
        'clusterId' => 'ClusterId',
        'coordinateShrink' => 'Coordinate',
        'dependentStrategy' => 'DependentStrategy',
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
        'startTimeType' => 'StartTimeType',
        'status' => 'Status',
        'timeExpression' => 'TimeExpression',
        'timeType' => 'TimeType',
        'timezone' => 'Timezone',
        'weight' => 'Weight',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->coordinateShrink) {
            $res['Coordinate'] = $this->coordinateShrink;
        }

        if (null !== $this->dependentStrategy) {
            $res['DependentStrategy'] = $this->dependentStrategy;
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

        if (null !== $this->startTimeType) {
            $res['StartTimeType'] = $this->startTimeType;
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

        if (null !== $this->weight) {
            $res['Weight'] = $this->weight;
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

        if (isset($map['Coordinate'])) {
            $model->coordinateShrink = $map['Coordinate'];
        }

        if (isset($map['DependentStrategy'])) {
            $model->dependentStrategy = $map['DependentStrategy'];
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

        if (isset($map['StartTimeType'])) {
            $model->startTimeType = $map['StartTimeType'];
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

        if (isset($map['Weight'])) {
            $model->weight = $map['Weight'];
        }

        return $model;
    }
}
