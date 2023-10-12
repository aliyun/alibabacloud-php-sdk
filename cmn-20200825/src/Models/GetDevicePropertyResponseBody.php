<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models;

use AlibabaCloud\SDK\Cmn\V20200825\Models\GetDevicePropertyResponseBody\deviceProperty;
use AlibabaCloud\Tea\Model;

class GetDevicePropertyResponseBody extends Model
{
    /**
     * @var deviceProperty
     */
    public $deviceProperty;

    /**
     * @example 1f598491-db6d-4276-a83a-3b5f57d4a4e1
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'deviceProperty' => 'DeviceProperty',
        'requestId'      => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deviceProperty) {
            $res['DeviceProperty'] = null !== $this->deviceProperty ? $this->deviceProperty->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetDevicePropertyResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeviceProperty'])) {
            $model->deviceProperty = deviceProperty::fromMap($map['DeviceProperty']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
