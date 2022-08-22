<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\UpdateAlarmRequest;

use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\UpdateAlarmRequest\payload\musicInfo;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\UpdateAlarmRequest\payload\scheduleInfo;
use AlibabaCloud\Tea\Model;

class payload extends Model
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
     * @var int
     */
    public $volume;
    protected $_name = [
        'alarmId'      => 'AlarmId',
        'musicInfo'    => 'MusicInfo',
        'scheduleInfo' => 'ScheduleInfo',
        'volume'       => 'Volume',
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
        if (null !== $this->volume) {
            $res['Volume'] = $this->volume;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return payload
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
        if (isset($map['Volume'])) {
            $model->volume = $map['Volume'];
        }

        return $model;
    }
}
