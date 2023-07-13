<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class BindLicenseDeviceRequest extends Model
{
    /**
     * @var string[]
     */
    public $deviceNameList;

    /**
     * @var string[]
     */
    public $iotIdList;

    /**
     * @description The ID of the Enterprise Edition instance. You can view the **ID** of the instance on the **Overview** page in the IoT Platform console.
     *
     * @example iot-e3***
     *
     * @var string
     */
    public $iotInstanceId;

    /**
     * @description The license type that specifies the audio and video specifications. Valid values: **480P** and **720P**.
     *
     * @example 720P
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
        'iotIdList'      => 'IotIdList',
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
        if (null !== $this->iotIdList) {
            $res['IotIdList'] = $this->iotIdList;
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
     * @return BindLicenseDeviceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeviceNameList'])) {
            if (!empty($map['DeviceNameList'])) {
                $model->deviceNameList = $map['DeviceNameList'];
            }
        }
        if (isset($map['IotIdList'])) {
            if (!empty($map['IotIdList'])) {
                $model->iotIdList = $map['IotIdList'];
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
