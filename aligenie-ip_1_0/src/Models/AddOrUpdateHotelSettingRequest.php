<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models;

use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\AddOrUpdateHotelSettingRequest\hotelScreenSaver;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\AddOrUpdateHotelSettingRequest\nightMode;
use AlibabaCloud\Tea\Model;

class AddOrUpdateHotelSettingRequest extends Model
{
    /**
     * @var string[]
     */
    public $hotelDeviceModeList;

    /**
     * @example a7a3***013
     *
     * @var string
     */
    public $hotelId;

    /**
     * @var hotelScreenSaver
     */
    public $hotelScreenSaver;

    /**
     * @var nightMode
     */
    public $nightMode;

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
        'hotelDeviceModeList' => 'HotelDeviceModeList',
        'hotelId'             => 'HotelId',
        'hotelScreenSaver'    => 'HotelScreenSaver',
        'nightMode'           => 'NightMode',
        'settingType'         => 'SettingType',
        'value'               => 'Value',
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
        if (null !== $this->hotelScreenSaver) {
            $res['HotelScreenSaver'] = null !== $this->hotelScreenSaver ? $this->hotelScreenSaver->toMap() : null;
        }
        if (null !== $this->nightMode) {
            $res['NightMode'] = null !== $this->nightMode ? $this->nightMode->toMap() : null;
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
     * @return AddOrUpdateHotelSettingRequest
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
        if (isset($map['HotelScreenSaver'])) {
            $model->hotelScreenSaver = hotelScreenSaver::fromMap($map['HotelScreenSaver']);
        }
        if (isset($map['NightMode'])) {
            $model->nightMode = nightMode::fromMap($map['NightMode']);
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
