<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models;

use AlibabaCloud\Tea\Model;

class ListHotelAlarmShrinkRequest extends Model
{
    /**
     * @example a7a3***013
     *
     * @var string
     */
    public $hotelId;

    /**
     * @var string
     */
    public $roomsShrink;
    protected $_name = [
        'hotelId'     => 'HotelId',
        'roomsShrink' => 'Rooms',
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
        if (null !== $this->roomsShrink) {
            $res['Rooms'] = $this->roomsShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListHotelAlarmShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HotelId'])) {
            $model->hotelId = $map['HotelId'];
        }
        if (isset($map['Rooms'])) {
            $model->roomsShrink = $map['Rooms'];
        }

        return $model;
    }
}
