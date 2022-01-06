<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class RegisterDeviceRequest extends Model
{
    /**
     * @var string
     */
    public $appKey;

    /**
     * @var string
     */
    public $devEui;

    /**
     * @var string
     */
    public $deviceName;

    /**
     * @var string
     */
    public $iotInstanceId;

    /**
     * @var string
     */
    public $joinEui;

    /**
     * @var string
     */
    public $loraNodeType;

    /**
     * @var string
     */
    public $nickname;

    /**
     * @var string
     */
    public $pinCode;

    /**
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
