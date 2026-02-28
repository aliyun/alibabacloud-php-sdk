<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Dara\Model;

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
     * @var string
     */
    public $iotInstanceId;

    /**
     * @var string
     */
    public $licenseCode;

    /**
     * @var string
     */
    public $productKey;
    protected $_name = [
        'deviceNameList' => 'DeviceNameList',
        'iotIdList' => 'IotIdList',
        'iotInstanceId' => 'IotInstanceId',
        'licenseCode' => 'LicenseCode',
        'productKey' => 'ProductKey',
    ];

    public function validate()
    {
        if (\is_array($this->deviceNameList)) {
            Model::validateArray($this->deviceNameList);
        }
        if (\is_array($this->iotIdList)) {
            Model::validateArray($this->iotIdList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->deviceNameList) {
            if (\is_array($this->deviceNameList)) {
                $res['DeviceNameList'] = [];
                $n1 = 0;
                foreach ($this->deviceNameList as $item1) {
                    $res['DeviceNameList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->iotIdList) {
            if (\is_array($this->iotIdList)) {
                $res['IotIdList'] = [];
                $n1 = 0;
                foreach ($this->iotIdList as $item1) {
                    $res['IotIdList'][$n1] = $item1;
                    ++$n1;
                }
            }
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeviceNameList'])) {
            if (!empty($map['DeviceNameList'])) {
                $model->deviceNameList = [];
                $n1 = 0;
                foreach ($map['DeviceNameList'] as $item1) {
                    $model->deviceNameList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['IotIdList'])) {
            if (!empty($map['IotIdList'])) {
                $model->iotIdList = [];
                $n1 = 0;
                foreach ($map['IotIdList'] as $item1) {
                    $model->iotIdList[$n1] = $item1;
                    ++$n1;
                }
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
