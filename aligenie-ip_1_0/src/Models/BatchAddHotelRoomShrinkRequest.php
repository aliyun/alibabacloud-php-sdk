<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models;

use AlibabaCloud\Tea\Model;

class BatchAddHotelRoomShrinkRequest extends Model
{
    /**
     * @example e6dd44fd16084db8a60d69fd625d9f0f
     *
     * @var string
     */
    public $hotelId;

    /**
     * @var string
     */
    public $roomNoListShrink;
    protected $_name = [
        'hotelId'          => 'HotelId',
        'roomNoListShrink' => 'RoomNoList',
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
        if (null !== $this->roomNoListShrink) {
            $res['RoomNoList'] = $this->roomNoListShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BatchAddHotelRoomShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HotelId'])) {
            $model->hotelId = $map['HotelId'];
        }
        if (isset($map['RoomNoList'])) {
            $model->roomNoListShrink = $map['RoomNoList'];
        }

        return $model;
    }
}
