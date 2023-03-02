<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class ReBindLicenseDeviceRequest extends Model
{
    /**
     * @example test
     *
     * @var string[]
     */
    public $deviceNameList;

    /**
     * @example iot-e3***
     *
     * @var string
     */
    public $iotInstanceId;

    /**
     * @example LINK_SPEECH_COMMON_LICENSE
     *
     * @var string
     */
    public $licenseCode;

    /**
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
