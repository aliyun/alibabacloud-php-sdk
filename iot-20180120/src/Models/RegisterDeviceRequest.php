<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class RegisterDeviceRequest extends Model
{
    /**
     * @description The AppKey of the LoRaWAN device.
     *
     * When you create a LoRaWAN device, set **LoraNodeType** to **USERDEFINED**. This parameter is required.
     * @example 674f***
     *
     * @var string
     */
    public $appKey;

    /**
     * @description The DevEUI of the LoRaWAN device.
     *
     * This parameter is required when you create a LoRaWAN device.
     * @example e8SDdgeIlk3nED****
     *
     * @var string
     */
    public $devEui;

    /**
     * @description The DeviceName of the device. The name must be 4 to 32 characters in length, and can contain letters, digits, hyphens (-), underscores (\_), at signs (@), periods (.), and colons (:).
     *
     * >  If you do not specify this parameter, IoT Platform randomly generates a DeviceName.
     * @example light
     *
     * @var string
     */
    public $deviceName;

    /**
     * @description The ID of the instance. You can view the instance **ID** on the **Overview** page in the IoT Platform console.
     *
     * >*   If your instance has an ID, you must configure this parameter. If you do not set this parameter, the call fails.
     * >*   If your instance has no **Overview** page or ID, you do not need to set this parameter.
     *
     * For more information, see [Overview](~~356505~~).
     * @example iot_instc_pu****_c*-v64********
     *
     * @var string
     */
    public $iotInstanceId;

    /**
     * @description The JoinEUI of the LoRaWAN device.
     *
     * When you create a LoRaWAN device, set **LoraNodeType** to **USERDEFINED**. This parameter is required.
     * @example Ede4tde8erth****
     *
     * @var string
     */
    public $joinEui;

    /**
     * @description The type of the LoRaWAN device. Valid values:
     *
     *   **ALIYUNDEFINED**: The device is issued by Alibaba Cloud. You must specify **DevEui** and **PinCode**.
     *   **USERDEFINED**: The device is user-defined. You must specify **DevEui**, **JoinEui**, and **AppKey**.
     *
     * @example ALIYUNDEFINED
     *
     * @var string
     */
    public $loraNodeType;

    /**
     * @description The alias of the device. The alias must be 4 to 64 characters in length, and can contain letters, digits, and underscores (\_).
     *
     * >  If you do not specify this parameter, IoT Platform does not generate an alias for the device.
     * @var string
     */
    public $nickname;

    /**
     * @description The PIN code of the LoRaWAN device. This parameter is used to verify the DevEUI.
     *
     * When you create a LoRaWAN device, set **LoraNodeType** to **ALIYUNDEFINED**. This parameter is required.
     * @example DIe80dfeg*****
     *
     * @var string
     */
    public $pinCode;

    /**
     * @description The ProductKey of the product to which the device belongs. A ProductKey is a GUID that is issued by IoT Platform to a product.
     *
     * You can use the IoT Platform console or call the [QueryProductList](~~69271~~) operation to view the information about all products within the current account.
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
