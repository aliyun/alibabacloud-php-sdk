<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models;

use AlibabaCloud\Tea\Model;

class AddOrUpdateDisPlayModesRequest extends Model
{
    /**
     * @var string[]
     */
    public $hotelDeviceModeList;

    /**
     * @example a7***83
     *
     * @var string
     */
    public $hotelId;
    protected $_name = [
        'hotelDeviceModeList' => 'HotelDeviceModeList',
        'hotelId'             => 'HotelId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->hotelDeviceModeList) {
            $res['HotelDeviceModeList'] = $this->hotelDeviceModeList;
        }
        if (null !== $this->hotelId) {
            $res['HotelId'] = $this->hotelId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddOrUpdateDisPlayModesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HotelDeviceModeList'])) {
            if (!empty($map['HotelDeviceModeList'])) {
                $model->hotelDeviceModeList = $map['HotelDeviceModeList'];
            }
        }
        if (isset($map['HotelId'])) {
            $model->hotelId = $map['HotelId'];
        }

        return $model;
    }
}
