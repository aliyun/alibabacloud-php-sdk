<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models;

use AlibabaCloud\Tea\Model;

class BatchAddHotelRoomRequest extends Model
{
    /**
     * @example e6dd44fd16084db8a60d69fd625d9f0f
     *
     * @var string
     */
    public $hotelId;

    /**
     * @var string[]
     */
    public $roomNoList;
    protected $_name = [
        'hotelId'    => 'HotelId',
        'roomNoList' => 'RoomNoList',
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
        if (null !== $this->roomNoList) {
            $res['RoomNoList'] = $this->roomNoList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BatchAddHotelRoomRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HotelId'])) {
            $model->hotelId = $map['HotelId'];
        }
        if (isset($map['RoomNoList'])) {
            if (!empty($map['RoomNoList'])) {
                $model->roomNoList = $map['RoomNoList'];
            }
        }

        return $model;
    }
}
