<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\ListHotelRoomsRequest\hotelAdminRoom;

class ListHotelRoomsRequest extends Model
{
    /**
     * @var hotelAdminRoom
     */
    public $hotelAdminRoom;

    /**
     * @var string
     */
    public $hotelId;
    protected $_name = [
        'hotelAdminRoom' => 'HotelAdminRoom',
        'hotelId' => 'HotelId',
    ];

    public function validate()
    {
        if (null !== $this->hotelAdminRoom) {
            $this->hotelAdminRoom->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->hotelAdminRoom) {
            $res['HotelAdminRoom'] = null !== $this->hotelAdminRoom ? $this->hotelAdminRoom->toArray($noStream) : $this->hotelAdminRoom;
        }

        if (null !== $this->hotelId) {
            $res['HotelId'] = $this->hotelId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HotelAdminRoom'])) {
            $model->hotelAdminRoom = hotelAdminRoom::fromMap($map['HotelAdminRoom']);
        }

        if (isset($map['HotelId'])) {
            $model->hotelId = $map['HotelId'];
        }

        return $model;
    }
}
