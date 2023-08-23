<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\UpdateHotelAlarmRequest;

use AlibabaCloud\Tea\Model;

class alarms extends Model
{
    /**
     * @example 1234567
     *
     * @var int
     */
    public $alarmId;

    /**
     * @example Pvk***VTA==
     *
     * @var string
     */
    public $deviceOpenId;

    /**
     * @example 101
     *
     * @var string
     */
    public $roomNo;

    /**
     * @example mgw/***dHQd
     *
     * @var string
     */
    public $userOpenId;
    protected $_name = [
        'alarmId'      => 'AlarmId',
        'deviceOpenId' => 'DeviceOpenId',
        'roomNo'       => 'RoomNo',
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
        if (null !== $this->roomNo) {
            $res['RoomNo'] = $this->roomNo;
        }
        if (null !== $this->userOpenId) {
            $res['UserOpenId'] = $this->userOpenId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return alarms
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
        if (isset($map['RoomNo'])) {
            $model->roomNo = $map['RoomNo'];
        }
        if (isset($map['UserOpenId'])) {
            $model->userOpenId = $map['UserOpenId'];
        }

        return $model;
    }
}
