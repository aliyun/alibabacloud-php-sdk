<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\ListHotelAlarmResponseBody;

use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\ListHotelAlarmResponseBody\result\scheduleInfo;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @example 5039
     *
     * @var int
     */
    public $alarmId;

    /**
     * @example PvkB****VVTA==
     *
     * @var string
     */
    public $deviceOpenId;

    /**
     * @var scheduleInfo
     */
    public $scheduleInfo;

    /**
     * @example mgw/k***HQd
     *
     * @var string
     */
    public $userOpenId;
    protected $_name = [
        'alarmId'      => 'AlarmId',
        'deviceOpenId' => 'DeviceOpenId',
        'scheduleInfo' => 'ScheduleInfo',
        'userOpenId'   => 'UserOpenId',
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
        if (null !== $this->deviceOpenId) {
            $res['DeviceOpenId'] = $this->deviceOpenId;
        }
        if (null !== $this->scheduleInfo) {
            $res['ScheduleInfo'] = null !== $this->scheduleInfo ? $this->scheduleInfo->toMap() : null;
        }
        if (null !== $this->userOpenId) {
            $res['UserOpenId'] = $this->userOpenId;
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
        if (isset($map['DeviceOpenId'])) {
            $model->deviceOpenId = $map['DeviceOpenId'];
        }
        if (isset($map['ScheduleInfo'])) {
            $model->scheduleInfo = scheduleInfo::fromMap($map['ScheduleInfo']);
        }
        if (isset($map['UserOpenId'])) {
            $model->userOpenId = $map['UserOpenId'];
        }

        return $model;
    }
}
