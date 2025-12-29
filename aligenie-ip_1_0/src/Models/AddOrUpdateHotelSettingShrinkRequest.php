<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models;

use AlibabaCloud\Dara\Model;

class AddOrUpdateHotelSettingShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $hotelDeviceModeListShrink;

    /**
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
     * @var string
     */
    public $settingType;

    /**
     * @var string
     */
    public $value;
    protected $_name = [
        'hotelDeviceModeListShrink' => 'HotelDeviceModeList',
        'hotelId' => 'HotelId',
        'hotelScreenSaverShrink' => 'HotelScreenSaver',
        'nightModeShrink' => 'NightMode',
        'settingType' => 'SettingType',
        'value' => 'Value',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
