<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models;

use AlibabaCloud\Tea\Model;

class AddOrUpdateDisPlayModesShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $hotelDeviceModeListShrink;

    /**
     * @example a7***83
     *
     * @var string
     */
    public $hotelId;
    protected $_name = [
        'hotelDeviceModeListShrink' => 'HotelDeviceModeList',
        'hotelId'                   => 'HotelId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->hotelDeviceModeListShrink) {
            $res['HotelDeviceModeList'] = $this->hotelDeviceModeListShrink;
        }
        if (null !== $this->hotelId) {
            $res['HotelId'] = $this->hotelId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddOrUpdateDisPlayModesShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HotelDeviceModeList'])) {
            $model->hotelDeviceModeListShrink = $map['HotelDeviceModeList'];
        }
        if (isset($map['HotelId'])) {
            $model->hotelId = $map['HotelId'];
        }

        return $model;
    }
}
