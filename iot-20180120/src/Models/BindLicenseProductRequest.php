<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class BindLicenseProductRequest extends Model
{
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
        'iotInstanceId' => 'IotInstanceId',
        'licenseCode'   => 'LicenseCode',
        'productKey'    => 'ProductKey',
    ];

    public function validate()
    {
        Model::validateRequired('licenseCode', $this->licenseCode, true);
        Model::validateRequired('productKey', $this->productKey, true);
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
     * @return BindLicenseProductRequest
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
