<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class RegisterDeviceRequest extends Model
{
    /**
     * @example 674f***
     *
     * @var string
     */
    public $appKey;

    /**
     * @example e8SDdgeIlk3nED****
     *
     * @var string
     */
    public $devEui;

    /**
     * @example light
     *
     * @var string
     */
    public $deviceName;

    /**
     * @example iot_instc_pu****_c*-v64********
     *
     * @var string
     */
    public $iotInstanceId;

    /**
     * @example Ede4tde8erth****
     *
     * @var string
     */
    public $joinEui;

    /**
     * @example ALIYUNDEFINED
     *
     * @var string
     */
    public $loraNodeType;

    /**
     * @var string
     */
    public $nickname;

    /**
     * @example DIe80dfeg*****
     *
     * @var string
     */
    public $pinCode;

    /**
     * @example a1BwAGV****
     *
     * @var string
     */
    public $productKey;
    protected $_name = [
        'appKey'        => 'AppKey',
        'devEui'        => 'DevEui',
        'deviceName'    => 'DeviceName',
        'iotInstanceId' => 'IotInstanceId',
        'joinEui'       => 'JoinEui',
        'loraNodeType'  => 'LoraNodeType',
        'nickname'      => 'Nickname',
        'pinCode'       => 'PinCode',
        'productKey'    => 'ProductKey',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appKey) {
            $res['AppKey'] = $this->appKey;
        }
        if (null !== $this->devEui) {
            $res['DevEui'] = $this->devEui;
        }
        if (null !== $this->deviceName) {
            $res['DeviceName'] = $this->deviceName;
        }
        if (null !== $this->iotInstanceId) {
            $res['IotInstanceId'] = $this->iotInstanceId;
        }
        if (null !== $this->joinEui) {
            $res['JoinEui'] = $this->joinEui;
        }
        if (null !== $this->loraNodeType) {
            $res['LoraNodeType'] = $this->loraNodeType;
        }
        if (null !== $this->nickname) {
            $res['Nickname'] = $this->nickname;
        }
        if (null !== $this->pinCode) {
            $res['PinCode'] = $this->pinCode;
        }
        if (null !== $this->productKey) {
            $res['ProductKey'] = $this->productKey;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RegisterDeviceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppKey'])) {
            $model->appKey = $map['AppKey'];
        }
        if (isset($map['DevEui'])) {
            $model->devEui = $map['DevEui'];
        }
        if (isset($map['DeviceName'])) {
            $model->deviceName = $map['DeviceName'];
        }
        if (isset($map['IotInstanceId'])) {
            $model->iotInstanceId = $map['IotInstanceId'];
        }
        if (isset($map['JoinEui'])) {
            $model->joinEui = $map['JoinEui'];
        }
        if (isset($map['LoraNodeType'])) {
            $model->loraNodeType = $map['LoraNodeType'];
        }
        if (isset($map['Nickname'])) {
            $model->nickname = $map['Nickname'];
        }
        if (isset($map['PinCode'])) {
            $model->pinCode = $map['PinCode'];
        }
        if (isset($map['ProductKey'])) {
            $model->productKey = $map['ProductKey'];
        }

        return $model;
    }
}
