<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models;

use AlibabaCloud\Tea\Model;

class ListHotelRoomsShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $hotelAdminRoomShrink;

    /**
     * @example e6dd44fd16084db8a60d69fd625d9f0f
     *
     * @var string
     */
    public $hotelId;
    protected $_name = [
        'hotelAdminRoomShrink' => 'HotelAdminRoom',
        'hotelId'              => 'HotelId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->hotelAdminRoomShrink) {
            $res['HotelAdminRoom'] = $this->hotelAdminRoomShrink;
        }
        if (null !== $this->hotelId) {
            $res['HotelId'] = $this->hotelId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListHotelRoomsShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HotelAdminRoom'])) {
            $model->hotelAdminRoomShrink = $map['HotelAdminRoom'];
        }
        if (isset($map['HotelId'])) {
            $model->hotelId = $map['HotelId'];
        }

        return $model;
    }
}
