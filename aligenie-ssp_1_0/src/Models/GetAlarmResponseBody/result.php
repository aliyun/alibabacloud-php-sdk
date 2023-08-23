<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\GetAlarmResponseBody;

use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\GetAlarmResponseBody\result\musicInfo;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\GetAlarmResponseBody\result\scheduleInfo;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @example 1234567
     *
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
     * @example 0
     *
     * @var int
     */
    public $status;

    /**
     * @example 2022-07-29
     *
     * @var string
     */
    public $triggerDateDesc;

    /**
     * @example 10:00
     *
     * @var string
     */
    public $triggerTimeDesc;

    /**
     * @example 40
     *
     * @var int
     */
    public $volume;
    protected $_name = [
        'alarmId'          => 'AlarmId',
        'musicInfo'        => 'MusicInfo',
        'scheduleInfo'     => 'ScheduleInfo',
        'scheduleTypeDesc' => 'ScheduleTypeDesc',
        'status'           => 'Status',
        'triggerDateDesc'  => 'TriggerDateDesc',
        'triggerTimeDesc'  => 'TriggerTimeDesc',
        'volume'           => 'Volume',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alarmId) {
            $res['AlarmId'] = $this->alarmId;
        }
        if (null !== $this->musicInfo) {
            $res['MusicInfo'] = null !== $this->musicInfo ? $this->musicInfo->toMap() : null;
        }
        if (null !== $this->scheduleInfo) {
            $res['ScheduleInfo'] = null !== $this->scheduleInfo ? $this->scheduleInfo->toMap() : null;
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

    /**
     * @param array $map
     *
     * @return result
     */
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
