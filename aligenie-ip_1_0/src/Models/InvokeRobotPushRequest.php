<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models;

use AlibabaCloud\Tea\Model;

class InvokeRobotPushRequest extends Model
{
    /**
     * @example af7***536
     *
     * @var string
     */
    public $hotelId;

    /**
     * @example GET
     *
     * @var string
     */
    public $pushType;

    /**
     * @example 1211
     *
     * @var string
     */
    public $roomNo;
    protected $_name = [
        'hotelId'  => 'HotelId',
        'pushType' => 'PushType',
        'roomNo'   => 'RoomNo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->hotelId) {
            $res['HotelId'] = $this->hotelId;
        }
        if (null !== $this->pushType) {
            $res['PushType'] = $this->pushType;
        }
        if (null !== $this->roomNo) {
            $res['RoomNo'] = $this->roomNo;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return InvokeRobotPushRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HotelId'])) {
            $model->hotelId = $map['HotelId'];
        }
        if (isset($map['PushType'])) {
            $model->pushType = $map['PushType'];
        }
        if (isset($map['RoomNo'])) {
            $model->roomNo = $map['RoomNo'];
        }

        return $model;
    }
}
