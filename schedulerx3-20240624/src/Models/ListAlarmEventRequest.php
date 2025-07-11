<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SchedulerX3\V20240624\Models;

use AlibabaCloud\Tea\Model;

class ListAlarmEventRequest extends Model
{
    /**
     * @example webhook
     *
     * @var string
     */
    public $alarmChannel;

    /**
     * @example true
     *
     * @var string
     */
    public $alarmStatus;

    /**
     * @example schedulerx3_fail_alarm
     *
     * @var string
     */
    public $alarmType;

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
     * @example 1731636011558
     *
     * @var int
     */
    public $endTime;

    /**
     * @example test-job
     *
     * @var string
     */
    public $jobName;

    /**
     * @example 1
     *
     * @var string
     */
    public $pageNum;

    /**
     * @example 10
     *
     * @var string
     */
    public $pageSize;

    /**
     * @example true
     *
     * @var bool
     */
    public $reverse;

    /**
     * @example 1690419316000
     *
     * @var int
     */
    public $startTime;
    protected $_name = [
        'alarmChannel' => 'AlarmChannel',
        'alarmStatus' => 'AlarmStatus',
        'alarmType' => 'AlarmType',
        'appName' => 'AppName',
        'clusterId' => 'ClusterId',
        'endTime' => 'EndTime',
        'jobName' => 'JobName',
        'pageNum' => 'PageNum',
        'pageSize' => 'PageSize',
        'reverse' => 'Reverse',
        'startTime' => 'StartTime',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->alarmChannel) {
            $res['AlarmChannel'] = $this->alarmChannel;
        }
        if (null !== $this->alarmStatus) {
            $res['AlarmStatus'] = $this->alarmStatus;
        }
        if (null !== $this->alarmType) {
            $res['AlarmType'] = $this->alarmType;
        }
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->jobName) {
            $res['JobName'] = $this->jobName;
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
     * @return ListAlarmEventRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlarmChannel'])) {
            $model->alarmChannel = $map['AlarmChannel'];
        }
        if (isset($map['AlarmStatus'])) {
            $model->alarmStatus = $map['AlarmStatus'];
        }
        if (isset($map['AlarmType'])) {
            $model->alarmType = $map['AlarmType'];
        }
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['JobName'])) {
            $model->jobName = $map['JobName'];
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
