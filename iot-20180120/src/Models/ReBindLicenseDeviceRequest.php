<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class ReBindLicenseDeviceRequest extends Model
{
    /**
     * @description The **DeviceNames** of all devices to which you want to rebind a license.
     *
     * You can call the [QueryDevice](~~69905~~) operation to query the **DeviceNames** of all devices that belong to a specific product.
     * @example test
     *
     * @var string[]
     */
    public $deviceNameList;

    /**
     * @description The instance ID. You can view the **ID** of the instance on the **Overview** page in the IoT Platform console.
     *
     * For more information, see [Overview](~~356505~~) of IoT instances.
     * @example iot-e3***
     *
     * @var string
     */
    public $iotInstanceId;

    /**
     * @description The license type. Set the value to **LINK_SPEECH_COMMON_LICENSE**.
     *
     * @example LINK_SPEECH_COMMON_LICENSE
     *
     * @var string
     */
    public $licenseCode;

    /**
     * @description The **ProductKey** of the product to which the devices belong.
     *
     * You can go to the IoT Platform console or call the [QueryProductList](~~69271~~) operation to view the information about all products of the instance.
     * @example a2YwD23***
     *
     * @var string
     */
    public $productKey;
    protected $_name = [
        'deviceNameList' => 'DeviceNameList',
        'iotInstanceId'  => 'IotInstanceId',
        'licenseCode'    => 'LicenseCode',
        'productKey'     => 'ProductKey',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deviceNameList) {
            $res['DeviceNameList'] = $this->deviceNameList;
        }
        if (null !== $this->iotInstanceId) {
            $res['IotInstanceId'] = $this->iotInstanceId;
        }
        if (null !== $this->licenseCode) {
            $res['LicenseCode'] = $this->licenseCode;
        }
        if (null !== $this->productKey) {
            $res['ProductKey'] = $this->productKey;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ReBindLicenseDeviceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeviceNameList'])) {
            if (!empty($map['DeviceNameList'])) {
                $model->deviceNameList = $map['DeviceNameList'];
            }
        }
        if (isset($map['IotInstanceId'])) {
            $model->iotInstanceId = $map['IotInstanceId'];
        }
        if (isset($map['LicenseCode'])) {
            $model->licenseCode = $map['LicenseCode'];
        }
        if (isset($map['ProductKey'])) {
            $model->productKey = $map['ProductKey'];
        }

        return $model;
    }
}
