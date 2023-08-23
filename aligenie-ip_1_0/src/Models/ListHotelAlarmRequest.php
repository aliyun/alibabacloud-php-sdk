<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models;

use AlibabaCloud\Tea\Model;

class ListHotelAlarmRequest extends Model
{
    /**
     * @example a7a3***013
     *
     * @var string
     */
    public $hotelId;

    /**
     * @var string[]
     */
    public $rooms;
    protected $_name = [
        'hotelId' => 'HotelId',
        'rooms'   => 'Rooms',
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
        if (null !== $this->rooms) {
            $res['Rooms'] = $this->rooms;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListHotelAlarmRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HotelId'])) {
            $model->hotelId = $map['HotelId'];
        }
        if (isset($map['Rooms'])) {
            if (!empty($map['Rooms'])) {
                $model->rooms = $map['Rooms'];
            }
        }

        return $model;
    }
}
