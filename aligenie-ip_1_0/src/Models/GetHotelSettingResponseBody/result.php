<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\GetHotelSettingResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\GetHotelSettingResponseBody\result\hotelScreenSaver;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\GetHotelSettingResponseBody\result\nightMode;

class result extends Model
{
    /**
     * @var int
     */
    public $deleteToken;

    /**
     * @var string
     */
    public $extInfo;

    /**
     * @var string[]
     */
    public $hotelDeviceModeList;

    /**
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
     * @var string
     */
    public $settingType;

    /**
     * @var string
     */
    public $value;
    protected $_name = [
        'deleteToken' => 'DeleteToken',
        'extInfo' => 'ExtInfo',
        'hotelDeviceModeList' => 'HotelDeviceModeList',
        'hotelId' => 'HotelId',
        'hotelScreenSaver' => 'HotelScreenSaver',
        'nightMode' => 'NightMode',
        'settingType' => 'SettingType',
        'value' => 'Value',
    ];

    public function validate()
    {
        if (\is_array($this->hotelDeviceModeList)) {
            Model::validateArray($this->hotelDeviceModeList);
        }
        if (null !== $this->hotelScreenSaver) {
            $this->hotelScreenSaver->validate();
        }
        if (null !== $this->nightMode) {
            $this->nightMode->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->deleteToken) {
            $res['DeleteToken'] = $this->deleteToken;
        }

        if (null !== $this->extInfo) {
            $res['ExtInfo'] = $this->extInfo;
        }

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

        if (null !== $this->hotelScreenSaver) {
            $res['HotelScreenSaver'] = null !== $this->hotelScreenSaver ? $this->hotelScreenSaver->toArray($noStream) : $this->hotelScreenSaver;
        }

        if (null !== $this->nightMode) {
            $res['NightMode'] = null !== $this->nightMode ? $this->nightMode->toArray($noStream) : $this->nightMode;
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
        if (isset($map['DeleteToken'])) {
            $model->deleteToken = $map['DeleteToken'];
        }

        if (isset($map['ExtInfo'])) {
            $model->extInfo = $map['ExtInfo'];
        }

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
