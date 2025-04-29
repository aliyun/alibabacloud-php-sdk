<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SchedulerX3\V20240624\Models\ListAlarmEventResponseBody\data;

use AlibabaCloud\Dara\Model;

class records extends Model
{
    /**
     * @var string
     */
    public $alarmChannel;

    /**
     * @var string
     */
    public $alarmContacts;

    /**
     * @var string
     */
    public $alarmMessage;

    /**
     * @var string
     */
    public $alarmStatus;

    /**
     * @var string
     */
    public $alarmType;

    /**
     * @var string
     */
    public $appName;

    /**
     * @var string
     */
    public $jobName;

    /**
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

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
