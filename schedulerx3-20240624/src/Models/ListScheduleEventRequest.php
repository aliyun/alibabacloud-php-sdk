<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SchedulerX3\V20240624\Models;

use AlibabaCloud\Tea\Model;

class ListScheduleEventRequest extends Model
{
    /**
     * @example test-app
     *
     * @var string
     */
    public $appName;

    /**
     * @description This parameter is required.
     *
     * @example xxljob-b6ec1xxxx
     *
     * @var string
     */
    public $clusterId;

    /**
     * @example 1728872796295
     *
     * @var int
     */
    public $endTime;

    /**
     * @example INFO
     *
     * @var string
     */
    public $event;

    /**
     * @var string
     */
    public $eventType;

    /**
     * @example 1310630367761285120
     *
     * @var string
     */
    public $jobExecutionId;

    /**
     * @example test-job
     *
     * @var string
     */
    public $jobName;

    /**
     * @example hello word
     *
     * @var string
     */
    public $keyword;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNum;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example true
     *
     * @var bool
     */
    public $reverse;

    /**
     * @example 1581317873000
     *
     * @var int
     */
    public $startTime;
    protected $_name = [
        'appName' => 'AppName',
        'clusterId' => 'ClusterId',
        'endTime' => 'EndTime',
        'event' => 'Event',
        'eventType' => 'EventType',
        'jobExecutionId' => 'JobExecutionId',
        'jobName' => 'JobName',
        'keyword' => 'Keyword',
        'pageNum' => 'PageNum',
        'pageSize' => 'PageSize',
        'reverse' => 'Reverse',
        'startTime' => 'StartTime',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->event) {
            $res['Event'] = $this->event;
        }
        if (null !== $this->eventType) {
            $res['EventType'] = $this->eventType;
        }
        if (null !== $this->jobExecutionId) {
            $res['JobExecutionId'] = $this->jobExecutionId;
        }
        if (null !== $this->jobName) {
            $res['JobName'] = $this->jobName;
        }
        if (null !== $this->keyword) {
            $res['Keyword'] = $this->keyword;
        }
        if (null !== $this->pageNum) {
            $res['PageNum'] = $this->pageNum;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->reverse) {
            $res['Reverse'] = $this->reverse;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListScheduleEventRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['Event'])) {
            $model->event = $map['Event'];
        }
        if (isset($map['EventType'])) {
            $model->eventType = $map['EventType'];
        }
        if (isset($map['JobExecutionId'])) {
            $model->jobExecutionId = $map['JobExecutionId'];
        }
        if (isset($map['JobName'])) {
            $model->jobName = $map['JobName'];
        }
        if (isset($map['Keyword'])) {
            $model->keyword = $map['Keyword'];
        }
        if (isset($map['PageNum'])) {
            $model->pageNum = $map['PageNum'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['Reverse'])) {
            $model->reverse = $map['Reverse'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
