<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\QueryImportedDeviceByApplyIdResponseBody\deviceList;

use AlibabaCloud\Tea\Model;

class device extends Model
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
     * @description The **ProductKey** of the product to which the device belongs.
     *
     * @example a1BwAGV****
     *
     * @var string
     */
    public $productKey;

    /**
     * @description The serial number (SN) of the device.
     *
     * > If you did not specify an SN for the device, this parameter is empty.
     * @example QC4******001
     *
     * @var string
     */
    public $sn;
    protected $_name = [
        'deviceName'   => 'DeviceName',
        'deviceSecret' => 'DeviceSecret',
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
     * @return device
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
        if (isset($map['ProductKey'])) {
            $model->productKey = $map['ProductKey'];
        }
        if (isset($map['Sn'])) {
            $model->sn = $map['Sn'];
        }

        return $model;
    }
}
