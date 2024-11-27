<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SchedulerX3\V20240624\Models;

use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\UpdateJobRequest\noticeConfig;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\UpdateJobRequest\noticeContacts;
use AlibabaCloud\Tea\Model;

class UpdateJobRequest extends Model
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
     * @example testJobVoidHandler
     *
     * @var string
     */
    public $jobHandler;

    /**
     * @description This parameter is required.
     *
     * @example 74
     *
     * @var int
     */
    public $jobId;

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
     * @example test-job
     *
     * @var string
     */
    public $name;

    /**
     * @var noticeConfig
     */
    public $noticeConfig;

    /**
     * @var noticeContacts[]
     */
    public $noticeContacts;

    /**
     * @example test
     *
     * @var string
     */
    public $parameters;

    /**
     * @example 10
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
     * @example 1716902187
     *
     * @var int
     */
    public $startTime;

    /**
     * @example 0 0 4 ? * Mon/1
     *
     * @var string
     */
    public $timeExpression;

    /**
     * @example 1
     *
     * @var int
     */
    public $timeType;

    /**
     * @example Asia/Beijing
     *
     * @var string
     */
    public $timezone;
    protected $_name = [
        'appName'         => 'AppName',
        'attemptInterval' => 'AttemptInterval',
        'calendar'        => 'Calendar',
        'clusterId'       => 'ClusterId',
        'description'     => 'Description',
        'jobHandler'      => 'JobHandler',
        'jobId'           => 'JobId',
        'maxAttempt'      => 'MaxAttempt',
        'maxConcurrency'  => 'MaxConcurrency',
        'name'            => 'Name',
        'noticeConfig'    => 'NoticeConfig',
        'noticeContacts'  => 'NoticeContacts',
        'parameters'      => 'Parameters',
        'priority'        => 'Priority',
        'routeStrategy'   => 'RouteStrategy',
        'startTime'       => 'StartTime',
        'timeExpression'  => 'TimeExpression',
        'timeType'        => 'TimeType',
        'timezone'        => 'Timezone',
    ];

    public function validate()
    {
    }

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
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->jobHandler) {
            $res['JobHandler'] = $this->jobHandler;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
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
        if (null !== $this->noticeConfig) {
            $res['NoticeConfig'] = null !== $this->noticeConfig ? $this->noticeConfig->toMap() : null;
        }
        if (null !== $this->noticeContacts) {
            $res['NoticeContacts'] = [];
            if (null !== $this->noticeContacts && \is_array($this->noticeContacts)) {
                $n = 0;
                foreach ($this->noticeContacts as $item) {
                    $res['NoticeContacts'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
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
     * @return UpdateJobRequest
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
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['JobHandler'])) {
            $model->jobHandler = $map['JobHandler'];
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
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
            $model->noticeConfig = noticeConfig::fromMap($map['NoticeConfig']);
        }
        if (isset($map['NoticeContacts'])) {
            if (!empty($map['NoticeContacts'])) {
                $model->noticeContacts = [];
                $n                     = 0;
                foreach ($map['NoticeContacts'] as $item) {
                    $model->noticeContacts[$n++] = null !== $item ? noticeContacts::fromMap($item) : $item;
                }
            }
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
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
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
