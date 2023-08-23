<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\GetHotelSettingResponseBody;

use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\GetHotelSettingResponseBody\result\hotelScreenSaver;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\GetHotelSettingResponseBody\result\nightMode;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @example 0
     *
     * @var int
     */
    public $deleteToken;

    /**
     * @example {}
     *
     * @var string
     */
    public $extInfo;

    /**
     * @var string[]
     */
    public $hotelDeviceModeList;

    /**
     * @example af7***536
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
        'deleteToken'         => 'DeleteToken',
        'extInfo'             => 'ExtInfo',
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
        if (null !== $this->deleteToken) {
            $res['DeleteToken'] = $this->deleteToken;
        }
        if (null !== $this->extInfo) {
            $res['ExtInfo'] = $this->extInfo;
        }
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
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeleteToken'])) {
            $model->deleteToken = $map['DeleteToken'];
        }
        if (isset($map['ExtInfo'])) {
            $model->extInfo = $map['ExtInfo'];
        }
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
