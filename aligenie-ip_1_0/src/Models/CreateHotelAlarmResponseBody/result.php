<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\CreateHotelAlarmResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @example 94
     *
     * @var int
     */
    public $alarmId;

    /**
     * @example Pvk***TA==
     *
     * @var string
     */
    public $deviceOpenId;

    /**
     * @var string
     */
    public $failMsg;

    /**
     * @example 101
     *
     * @var string
     */
    public $roomNo;

    /**
     * @example mg***Qd
     *
     * @var string
     */
    public $userOpenId;
    protected $_name = [
        'alarmId'      => 'AlarmId',
        'deviceOpenId' => 'DeviceOpenId',
        'failMsg'      => 'FailMsg',
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
        if (null !== $this->failMsg) {
            $res['FailMsg'] = $this->failMsg;
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
        if (isset($map['FailMsg'])) {
            $model->failMsg = $map['FailMsg'];
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
