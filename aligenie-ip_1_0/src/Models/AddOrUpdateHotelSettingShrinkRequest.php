<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models;

use AlibabaCloud\Tea\Model;

class AddOrUpdateHotelSettingShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $hotelDeviceModeListShrink;

    /**
     * @example a7a3***013
     *
     * @var string
     */
    public $hotelId;

    /**
     * @var string
     */
    public $hotelScreenSaverShrink;

    /**
     * @var string
     */
    public $nightModeShrink;

    /**
     * @example SCREENSAVER
     *
     * @var string
     */
    public $settingType;

    /**
     * @var string
     */
    public $value;
    protected $_name = [
        'hotelDeviceModeListShrink' => 'HotelDeviceModeList',
        'hotelId'                   => 'HotelId',
        'hotelScreenSaverShrink'    => 'HotelScreenSaver',
        'nightModeShrink'           => 'NightMode',
        'settingType'               => 'SettingType',
        'value'                     => 'Value',
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
        if (null !== $this->hotelScreenSaverShrink) {
            $res['HotelScreenSaver'] = $this->hotelScreenSaverShrink;
        }
        if (null !== $this->nightModeShrink) {
            $res['NightMode'] = $this->nightModeShrink;
        }
        if (null !== $this->settingType) {
            $res['SettingType'] = $this->settingType;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddOrUpdateHotelSettingShrinkRequest
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
        if (isset($map['HotelScreenSaver'])) {
            $model->hotelScreenSaverShrink = $map['HotelScreenSaver'];
        }
        if (isset($map['NightMode'])) {
            $model->nightModeShrink = $map['NightMode'];
        }
        if (isset($map['SettingType'])) {
            $model->settingType = $map['SettingType'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
