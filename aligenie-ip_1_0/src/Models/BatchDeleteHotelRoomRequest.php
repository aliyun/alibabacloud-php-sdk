<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models;

use AlibabaCloud\Dara\Model;

class BatchDeleteHotelRoomRequest extends Model
{
    /**
     * @var string
     */
    public $hotelId;

    /**
     * @var string[]
     */
    public $roomNoList;
    protected $_name = [
        'hotelId' => 'HotelId',
        'roomNoList' => 'RoomNoList',
    ];

    public function validate()
    {
        if (\is_array($this->roomNoList)) {
            Model::validateArray($this->roomNoList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->hotelId) {
            $res['HotelId'] = $this->hotelId;
        }

        if (null !== $this->roomNoList) {
            if (\is_array($this->roomNoList)) {
                $res['RoomNoList'] = [];
                $n1 = 0;
                foreach ($this->roomNoList as $item1) {
                    $res['RoomNoList'][$n1] = $item1;
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

        if (isset($map['RoomNoList'])) {
            if (!empty($map['RoomNoList'])) {
                $model->roomNoList = [];
                $n1 = 0;
                foreach ($map['RoomNoList'] as $item1) {
                    $model->roomNoList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
