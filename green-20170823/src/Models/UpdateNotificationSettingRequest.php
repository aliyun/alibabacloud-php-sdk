<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20170823\Models;

use AlibabaCloud\Tea\Model;

class UpdateNotificationSettingRequest extends Model
{
    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $realtimeMessageList;

    /**
     * @var string
     */
    public $reminderModeList;

    /**
     * @var int
     */
    public $scheduleMessageTime;

    /**
     * @var int
     */
    public $scheduleMessageTimeZone;

    /**
     * @var string
     */
    public $sourceIp;
    protected $_name = [
        'lang'                    => 'Lang',
        'realtimeMessageList'     => 'RealtimeMessageList',
        'reminderModeList'        => 'ReminderModeList',
        'scheduleMessageTime'     => 'ScheduleMessageTime',
        'scheduleMessageTimeZone' => 'ScheduleMessageTimeZone',
        'sourceIp'                => 'SourceIp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->realtimeMessageList) {
            $res['RealtimeMessageList'] = $this->realtimeMessageList;
        }
        if (null !== $this->reminderModeList) {
            $res['ReminderModeList'] = $this->reminderModeList;
        }
        if (null !== $this->scheduleMessageTime) {
            $res['ScheduleMessageTime'] = $this->scheduleMessageTime;
        }
        if (null !== $this->scheduleMessageTimeZone) {
            $res['ScheduleMessageTimeZone'] = $this->scheduleMessageTimeZone;
        }
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateNotificationSettingRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['RealtimeMessageList'])) {
            $model->realtimeMessageList = $map['RealtimeMessageList'];
        }
        if (isset($map['ReminderModeList'])) {
            $model->reminderModeList = $map['ReminderModeList'];
        }
        if (isset($map['ScheduleMessageTime'])) {
            $model->scheduleMessageTime = $map['ScheduleMessageTime'];
        }
        if (isset($map['ScheduleMessageTimeZone'])) {
            $model->scheduleMessageTimeZone = $map['ScheduleMessageTimeZone'];
        }
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }

        return $model;
    }
}
