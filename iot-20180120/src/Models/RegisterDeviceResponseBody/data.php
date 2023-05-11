<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\RegisterDeviceResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The DevEUI of the LoRaWAN device. This parameter is returned only when you create a LoRaWAN device.
     *
     * @example e8SDdgeIlk3nED****
     *
     * @var string
     */
    public $devEui;

    /**
     * @description The DeviceName of the device.
     *
     * > Keep the information confidential.
     * @example light
     *
     * @var string
     */
    public $deviceName;

    /**
     * @description The DeviceSecret of the device.
     *
     * > Keep the information confidential.
     * @example mz2Canp4GB7qRVf1OYPNtRqB2anu****
     *
     * @var string
     */
    public $deviceSecret;

    /**
     * @description The ID of the device. The ID is the unique identifier that is issued by IoT Platform to the device.
     *
     * > Keep the information confidential.
     * @example 1O4YPNtRqB2anumz2Canp4GB7q****
     *
     * @var string
     */
    public $iotId;

    /**
     * @description The JoinEUI of the LoRaWAN device. This parameter is returned only when you create a LoRaWAN device.
     *
     * @example Ede4tde8erth****
     *
     * @var string
     */
    public $joinEui;

    /**
     * @description The alias of the device.
     *
     * If you do not specify an alias for the device, this parameter is empty.
     * @var string
     */
    public $nickname;

    /**
     * @description The ProductKey of the product to which the device belongs.
     *
     * @example a1BwAGV****
     *
     * @var string
     */
    public $productKey;
    protected $_name = [
        'devEui'       => 'DevEui',
        'deviceName'   => 'DeviceName',
        'deviceSecret' => 'DeviceSecret',
        'iotId'        => 'IotId',
        'joinEui'      => 'JoinEui',
        'nickname'     => 'Nickname',
        'productKey'   => 'ProductKey',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->devEui) {
            $res['DevEui'] = $this->devEui;
        }
        if (null !== $this->deviceName) {
            $res['DeviceName'] = $this->deviceName;
        }
        if (null !== $this->deviceSecret) {
            $res['DeviceSecret'] = $this->deviceSecret;
        }
        if (null !== $this->iotId) {
            $res['IotId'] = $this->iotId;
        }
        if (null !== $this->joinEui) {
            $res['JoinEui'] = $this->joinEui;
        }
        if (null !== $this->nickname) {
            $res['Nickname'] = $this->nickname;
        }
        if (null !== $this->productKey) {
            $res['ProductKey'] = $this->productKey;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DevEui'])) {
            $model->devEui = $map['DevEui'];
        }
        if (isset($map['DeviceName'])) {
            $model->deviceName = $map['DeviceName'];
        }
        if (isset($map['DeviceSecret'])) {
            $model->deviceSecret = $map['DeviceSecret'];
        }
        if (isset($map['IotId'])) {
            $model->iotId = $map['IotId'];
        }
        if (isset($map['JoinEui'])) {
            $model->joinEui = $map['JoinEui'];
        }
        if (isset($map['Nickname'])) {
            $model->nickname = $map['Nickname'];
        }
        if (isset($map['ProductKey'])) {
            $model->productKey = $map['ProductKey'];
        }

        return $model;
    }
}
