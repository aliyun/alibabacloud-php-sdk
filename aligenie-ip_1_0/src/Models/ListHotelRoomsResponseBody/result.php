<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\ListHotelRoomsResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @example e6dd44fd16084db8a60d69fd625d9f0f
     *
     * @var string
     */
    public $hotelId;

    /**
     * @example 102
     *
     * @var string
     */
    public $roomNo;
    protected $_name = [
        'hotelId' => 'HotelId',
        'roomNo'  => 'RoomNo',
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
        if (null !== $this->roomNo) {
            $res['RoomNo'] = $this->roomNo;
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
        if (isset($map['HotelId'])) {
            $model->hotelId = $map['HotelId'];
        }
        if (isset($map['RoomNo'])) {
            $model->roomNo = $map['RoomNo'];
        }

        return $model;
    }
}
