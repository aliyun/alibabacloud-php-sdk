<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\ImportDeviceResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The DeviceName of the device.
     *
     * >  Keep the information confidential.
     * @example light
     *
     * @var string
     */
    public $deviceName;

    /**
     * @description The DeviceSecret of the device.
     *
     * >  Keep the information confidential.
     * @example b4d43f7******10ba5e5
     *
     * @var string
     */
    public $deviceSecret;

    /**
     * @description The ID of the device. The ID is a unique identifier that is issued by IoT Platform to the device.
     *
     * >  Keep the information confidential.
     * @example 1O4YPNtRqB2anumz2Canp4GB7*****
     *
     * @var string
     */
    public $iotId;

    /**
     * @description The alias of the device.
     *
     * > If you did not specify an alias for the device, the response parameter is empty.
     * @example Campus light
     *
     * @var string
     */
    public $nickname;

    /**
     * @description The **ProductKey** of the product to which the device belongs.
     *
     * @example a1BwAGV****
     *
     * @var string
     */
    public $productKey;

    /**
     * @description The SN of the device.
     *
     * > If you did not specify an SN for the device, the response parameter is empty.
     * @example QC4******001
     *
     * @var string
     */
    public $sn;
    protected $_name = [
        'deviceName'   => 'DeviceName',
        'deviceSecret' => 'DeviceSecret',
        'iotId'        => 'IotId',
        'nickname'     => 'Nickname',
        'productKey'   => 'ProductKey',
        'sn'           => 'Sn',
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
        if (null !== $this->iotId) {
            $res['IotId'] = $this->iotId;
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
     * @return data
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
        if (isset($map['IotId'])) {
            $model->iotId = $map['IotId'];
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
