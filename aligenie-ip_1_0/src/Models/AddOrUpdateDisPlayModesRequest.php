<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models;

use AlibabaCloud\Dara\Model;

class AddOrUpdateDisPlayModesRequest extends Model
{
    /**
     * @var string[]
     */
    public $hotelDeviceModeList;

    /**
     * @var string
     */
    public $hotelId;
    protected $_name = [
        'hotelDeviceModeList' => 'HotelDeviceModeList',
        'hotelId' => 'HotelId',
    ];

    public function validate()
    {
        if (\is_array($this->hotelDeviceModeList)) {
            Model::validateArray($this->hotelDeviceModeList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->hotelDeviceModeList) {
            if (\is_array($this->hotelDeviceModeList)) {
                $res['HotelDeviceModeList'] = [];
                $n1 = 0;
                foreach ($this->hotelDeviceModeList as $item1) {
                    $res['HotelDeviceModeList'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['HotelDeviceModeList'])) {
            if (!empty($map['HotelDeviceModeList'])) {
                $model->hotelDeviceModeList = [];
                $n1 = 0;
                foreach ($map['HotelDeviceModeList'] as $item1) {
                    $model->hotelDeviceModeList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['HotelId'])) {
            $model->hotelId = $map['HotelId'];
        }

        return $model;
    }
}
