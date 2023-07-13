<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class ImportDeviceRequest extends Model
{
    /**
     * @description The DeviceName of the device.
     *
     * The DeviceName must be unique in the product.
     * @example light
     *
     * @var string
     */
    public $deviceName;

    /**
     * @description The DeviceSecret of the device.
     *
     * The DeviceSecret must be 1 to 32 characters in length, and can contain letters, digits, hyphens (-), underscores (\_), at signs (@), periods (.), and colons (:).
     * @example b4d43f7******10ba5e5
     *
     * @var string
     */
    public $deviceSecret;

    /**
     * @description The instance ID. You can view the **ID** of the instance on the **Overview** page in the IoT Platform console.
     *
     * For more information, see [Overview](~~356505~~) of IoT instances.
     * @example iot-1n8t****
     *
     * @var string
     */
    public $iotInstanceId;

    /**
     * @description The alias of the device.
     *
     * > If you do not specify this parameter, IoT Platform does not generate an alias for the device.
     * @example Campus light
     *
     * @var string
     */
    public $nickname;

    /**
     * @description The **ProductKey** of the gateway product to which the device belongs.
     *
     * @example a1BwAGV****
     *
     * @var string
     */
    public $productKey;

    /**
     * @description The serial number (SN) of the device.
     *
     * > If you do not specify this parameter, IoT Platform does not generate an SN for the device.
     * @example QC4******001
     *
     * @var string
     */
    public $sn;
    protected $_name = [
        'deviceName'    => 'DeviceName',
        'deviceSecret'  => 'DeviceSecret',
        'iotInstanceId' => 'IotInstanceId',
        'nickname'      => 'Nickname',
        'productKey'    => 'ProductKey',
        'sn'            => 'Sn',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deviceName) {
            $res['DeviceName'] = $this->deviceName;
        }
        if (null !== $this->deviceSecret) {
            $res['DeviceSecret'] = $this->deviceSecret;
        }
        if (null !== $this->iotInstanceId) {
            $res['IotInstanceId'] = $this->iotInstanceId;
        }
        if (null !== $this->nickname) {
            $res['Nickname'] = $this->nickname;
        }
        if (null !== $this->productKey) {
            $res['ProductKey'] = $this->productKey;
        }
        if (null !== $this->sn) {
            $res['Sn'] = $this->sn;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ImportDeviceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeviceName'])) {
            $model->deviceName = $map['DeviceName'];
        }
        if (isset($map['DeviceSecret'])) {
            $model->deviceSecret = $map['DeviceSecret'];
        }
        if (isset($map['IotInstanceId'])) {
            $model->iotInstanceId = $map['IotInstanceId'];
        }
        if (isset($map['Nickname'])) {
            $model->nickname = $map['Nickname'];
        }
        if (isset($map['ProductKey'])) {
            $model->productKey = $map['ProductKey'];
        }
        if (isset($map['Sn'])) {
            $model->sn = $map['Sn'];
        }

        return $model;
    }
}
