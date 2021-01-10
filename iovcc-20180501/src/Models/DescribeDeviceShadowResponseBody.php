<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models;

use AlibabaCloud\SDK\Iovcc\V20180501\Models\DescribeDeviceShadowResponseBody\deviceShadow;
use AlibabaCloud\Tea\Model;

class DescribeDeviceShadowResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var deviceShadow
     */
    public $deviceShadow;
    protected $_name = [
        'requestId'    => 'RequestId',
        'deviceShadow' => 'DeviceShadow',
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
        if (null !== $this->deviceShadow) {
            $res['DeviceShadow'] = null !== $this->deviceShadow ? $this->deviceShadow->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDeviceShadowResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['DeviceShadow'])) {
            $model->deviceShadow = deviceShadow::fromMap($map['DeviceShadow']);
        }

        return $model;
    }
}
