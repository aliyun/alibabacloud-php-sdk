<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SchedulerX3\V20240624\Models\ListAlarmEventResponseBody\data;

use AlibabaCloud\Tea\Model;

class records extends Model
{
    /**
     * @example webhook
     *
     * @var string
     */
    public $alarmChannel;

    /**
     * @example zhangsan
     *
     * @var string
     */
    public $alarmContacts;

    /**
     * @var string
     */
    public $alarmMessage;

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
     * @example test-job
     *
     * @var string
     */
    public $jobName;

    /**
     * @example 2024-10-31 16:43:51
     *
     * @var string
     */
    public $time;
    protected $_name = [
        'alarmChannel' => 'AlarmChannel',
        'alarmContacts' => 'AlarmContacts',
        'alarmMessage' => 'AlarmMessage',
        'alarmStatus' => 'AlarmStatus',
        'alarmType' => 'AlarmType',
        'appName' => 'AppName',
        'jobName' => 'JobName',
        'time' => 'Time',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->alarmChannel) {
            $res['AlarmChannel'] = $this->alarmChannel;
        }
        if (null !== $this->alarmContacts) {
            $res['AlarmContacts'] = $this->alarmContacts;
        }
        if (null !== $this->alarmMessage) {
            $res['AlarmMessage'] = $this->alarmMessage;
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
        if (null !== $this->jobName) {
            $res['JobName'] = $this->jobName;
        }
        if (null !== $this->time) {
            $res['Time'] = $this->time;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return records
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlarmChannel'])) {
            $model->alarmChannel = $map['AlarmChannel'];
        }
        if (isset($map['AlarmContacts'])) {
            $model->alarmContacts = $map['AlarmContacts'];
        }
        if (isset($map['AlarmMessage'])) {
            $model->alarmMessage = $map['AlarmMessage'];
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
        if (isset($map['JobName'])) {
            $model->jobName = $map['JobName'];
        }
        if (isset($map['Time'])) {
            $model->time = $map['Time'];
        }

        return $model;
    }
}
