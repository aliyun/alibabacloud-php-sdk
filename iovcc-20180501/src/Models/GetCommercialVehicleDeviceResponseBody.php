<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models;

use AlibabaCloud\SDK\Iovcc\V20180501\Models\GetCommercialVehicleDeviceResponseBody\vehicleDevice;
use AlibabaCloud\Tea\Model;

class GetCommercialVehicleDeviceResponseBody extends Model
{
    /**
     * @description 请求ID
     *
     * @var string
     */
    public $requestId;

    /**
     * @var vehicleDevice
     */
    public $vehicleDevice;
    protected $_name = [
        'requestId'     => 'RequestId',
        'vehicleDevice' => 'VehicleDevice',
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
        if (null !== $this->vehicleDevice) {
            $res['VehicleDevice'] = null !== $this->vehicleDevice ? $this->vehicleDevice->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetCommercialVehicleDeviceResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['VehicleDevice'])) {
            $model->vehicleDevice = vehicleDevice::fromMap($map['VehicleDevice']);
        }

        return $model;
    }
}
