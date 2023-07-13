<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class UnbindLicenseProductRequest extends Model
{
    /**
     * @description The ID of the Enterprise Edition instance. You can view the **ID** of the instance on the **Overview** page in the IoT Platform console.
     *
     * @example iot-s3***
     *
     * @var string
     */
    public $iotInstanceId;

    /**
     * @description The license type that specifies the audio and video specifications. Valid values: **480P** and **720P**.
     *
     * To view the license type of a product, choose **License Management > Product Authorization** in the **Real-time Communication Service** console.
     * @example 480P
     *
     * @var string
     */
    public $licenseCode;

    /**
     * @description The ProductKey of the product from which you want to unbind the license.
     *
     * You can choose **License Management > Product Authorization** in the **Real-Time Communication Service** console to view the **ProductKey** of the product.
     * @example gq62z***
     *
     * @var string
     */
    public $productKey;
    protected $_name = [
        'iotInstanceId' => 'IotInstanceId',
        'licenseCode'   => 'LicenseCode',
        'productKey'    => 'ProductKey',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
     * @return UnbindLicenseProductRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
