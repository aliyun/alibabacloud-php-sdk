<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20170823\Models;

use AlibabaCloud\Tea\Model;

class DescribeNotificationSettingResponseBody extends Model
{
    /**
     * @var string
     */
    public $email;

    /**
     * @var string
     */
    public $phone;

    /**
     * @var string[]
     */
    public $realtimeMessageList;

    /**
     * @var string[]
     */
    public $reminderModeList;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $scheduleMessageTime;

    /**
     * @var int
     */
    public $scheduleMessageTimeZone;
    protected $_name = [
        'email'                   => 'Email',
        'phone'                   => 'Phone',
        'realtimeMessageList'     => 'RealtimeMessageList',
        'reminderModeList'        => 'ReminderModeList',
        'requestId'               => 'RequestId',
        'scheduleMessageTime'     => 'ScheduleMessageTime',
        'scheduleMessageTimeZone' => 'ScheduleMessageTimeZone',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->email) {
            $res['Email'] = $this->email;
        }
        if (null !== $this->phone) {
            $res['Phone'] = $this->phone;
        }
        if (null !== $this->realtimeMessageList) {
            $res['RealtimeMessageList'] = $this->realtimeMessageList;
        }
        if (null !== $this->reminderModeList) {
            $res['ReminderModeList'] = $this->reminderModeList;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->scheduleMessageTime) {
            $res['ScheduleMessageTime'] = $this->scheduleMessageTime;
        }
        if (null !== $this->scheduleMessageTimeZone) {
            $res['ScheduleMessageTimeZone'] = $this->scheduleMessageTimeZone;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeNotificationSettingResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Email'])) {
            $model->email = $map['Email'];
        }
        if (isset($map['Phone'])) {
            $model->phone = $map['Phone'];
        }
        if (isset($map['RealtimeMessageList'])) {
            if (!empty($map['RealtimeMessageList'])) {
                $model->realtimeMessageList = $map['RealtimeMessageList'];
            }
        }
        if (isset($map['ReminderModeList'])) {
            if (!empty($map['ReminderModeList'])) {
                $model->reminderModeList = $map['ReminderModeList'];
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ScheduleMessageTime'])) {
            $model->scheduleMessageTime = $map['ScheduleMessageTime'];
        }
        if (isset($map['ScheduleMessageTimeZone'])) {
            $model->scheduleMessageTimeZone = $map['ScheduleMessageTimeZone'];
        }

        return $model;
    }
}
