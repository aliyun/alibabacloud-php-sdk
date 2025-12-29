<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models;

use AlibabaCloud\Dara\Model;

class ListHotelAlarmRequest extends Model
{
    /**
     * @var string
     */
    public $hotelId;

    /**
     * @var string[]
     */
    public $rooms;
    protected $_name = [
        'hotelId' => 'HotelId',
        'rooms' => 'Rooms',
    ];

    public function validate()
    {
        if (\is_array($this->rooms)) {
            Model::validateArray($this->rooms);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->hotelId) {
            $res['HotelId'] = $this->hotelId;
        }

        if (null !== $this->rooms) {
            if (\is_array($this->rooms)) {
                $res['Rooms'] = [];
                $n1 = 0;
                foreach ($this->rooms as $item1) {
                    $res['Rooms'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['HotelId'])) {
            $model->hotelId = $map['HotelId'];
        }

        if (isset($map['Rooms'])) {
            if (!empty($map['Rooms'])) {
                $model->rooms = [];
                $n1 = 0;
                foreach ($map['Rooms'] as $item1) {
                    $model->rooms[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
