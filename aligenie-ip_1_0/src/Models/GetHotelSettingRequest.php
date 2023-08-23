<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models;

use AlibabaCloud\Tea\Model;

class GetHotelSettingRequest extends Model
{
    /**
     * @example af7***536
     *
     * @var string
     */
    public $hotelId;

    /**
     * @example SCREENSAVER
     *
     * @var string
     */
    public $settingType;
    protected $_name = [
        'hotelId'     => 'HotelId',
        'settingType' => 'SettingType',
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
        if (null !== $this->settingType) {
            $res['SettingType'] = $this->settingType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetHotelSettingRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HotelId'])) {
            $model->hotelId = $map['HotelId'];
        }
        if (isset($map['SettingType'])) {
            $model->settingType = $map['SettingType'];
        }

        return $model;
    }
}
