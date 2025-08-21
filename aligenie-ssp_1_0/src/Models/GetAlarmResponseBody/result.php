<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\GetAlarmResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\GetAlarmResponseBody\result\musicInfo;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\GetAlarmResponseBody\result\scheduleInfo;

class result extends Model
{
    /**
     * @var int
     */
    public $alarmId;

    /**
     * @var musicInfo
     */
    public $musicInfo;

    /**
     * @var scheduleInfo
     */
    public $scheduleInfo;

    /**
     * @var string
     */
    public $scheduleTypeDesc;

    /**
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $triggerDateDesc;

    /**
     * @var string
     */
    public $triggerTimeDesc;

    /**
     * @var int
     */
    public $volume;
    protected $_name = [
        'alarmId' => 'AlarmId',
        'musicInfo' => 'MusicInfo',
        'scheduleInfo' => 'ScheduleInfo',
        'scheduleTypeDesc' => 'ScheduleTypeDesc',
        'status' => 'Status',
        'triggerDateDesc' => 'TriggerDateDesc',
        'triggerTimeDesc' => 'TriggerTimeDesc',
        'volume' => 'Volume',
    ];

    public function validate()
    {
        if (null !== $this->musicInfo) {
            $this->musicInfo->validate();
        }
        if (null !== $this->scheduleInfo) {
            $this->scheduleInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alarmId) {
            $res['AlarmId'] = $this->alarmId;
        }

        if (null !== $this->musicInfo) {
            $res['MusicInfo'] = null !== $this->musicInfo ? $this->musicInfo->toArray($noStream) : $this->musicInfo;
        }

        if (null !== $this->scheduleInfo) {
            $res['ScheduleInfo'] = null !== $this->scheduleInfo ? $this->scheduleInfo->toArray($noStream) : $this->scheduleInfo;
        }

        if (null !== $this->scheduleTypeDesc) {
            $res['ScheduleTypeDesc'] = $this->scheduleTypeDesc;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->triggerDateDesc) {
            $res['TriggerDateDesc'] = $this->triggerDateDesc;
        }

        if (null !== $this->triggerTimeDesc) {
            $res['TriggerTimeDesc'] = $this->triggerTimeDesc;
        }

        if (null !== $this->volume) {
            $res['Volume'] = $this->volume;
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
        if (isset($map['AlarmId'])) {
            $model->alarmId = $map['AlarmId'];
        }

        if (isset($map['MusicInfo'])) {
            $model->musicInfo = musicInfo::fromMap($map['MusicInfo']);
        }

        if (isset($map['ScheduleInfo'])) {
            $model->scheduleInfo = scheduleInfo::fromMap($map['ScheduleInfo']);
        }

        if (isset($map['ScheduleTypeDesc'])) {
            $model->scheduleTypeDesc = $map['ScheduleTypeDesc'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['TriggerDateDesc'])) {
            $model->triggerDateDesc = $map['TriggerDateDesc'];
        }

        if (isset($map['TriggerTimeDesc'])) {
            $model->triggerTimeDesc = $map['TriggerTimeDesc'];
        }

        if (isset($map['Volume'])) {
            $model->volume = $map['Volume'];
        }

        return $model;
    }
}
