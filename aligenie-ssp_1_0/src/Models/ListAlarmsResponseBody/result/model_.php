<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\ListAlarmsResponseBody\result;

use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\ListAlarmsResponseBody\result\model\musicInfo;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\ListAlarmsResponseBody\result\model\scheduleInfo;
use AlibabaCloud\Tea\Model;

class model_ extends Model
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
    public $userId;

    /**
     * @var string
     */
    public $uuid;

    /**
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
        'userId'           => 'UserId',
        'uuid'             => 'Uuid',
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
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
        }
        if (null !== $this->volume) {
            $res['Volume'] = $this->volume;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return model_
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
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }
        if (isset($map['Volume'])) {
            $model->volume = $map['Volume'];
        }

        return $model;
    }
}
