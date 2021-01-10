<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models;

use AlibabaCloud\SDK\Iovcc\V20180501\Models\DescribeDeviceBrandResponseBody\deviceBrand;
use AlibabaCloud\Tea\Model;

class DescribeDeviceBrandResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var deviceBrand
     */
    public $deviceBrand;
    protected $_name = [
        'requestId'   => 'RequestId',
        'deviceBrand' => 'DeviceBrand',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->deviceBrand) {
            $res['DeviceBrand'] = null !== $this->deviceBrand ? $this->deviceBrand->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDeviceBrandResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['DeviceBrand'])) {
            $model->deviceBrand = deviceBrand::fromMap($map['DeviceBrand']);
        }

        return $model;
    }
}
