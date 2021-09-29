<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models;

use AlibabaCloud\SDK\Iovcc\V20180501\Models\ListCommercialVehicleDevicesResponseBody\vehicleDevices;
use AlibabaCloud\Tea\Model;

class ListCommercialVehicleDevicesResponseBody extends Model
{
    /**
     * @description 请求ID
     *
     * @var string
     */
    public $requestId;

    /**
     * @description 表示当前调用返回读取到的位置，空代表数据已经读取完毕
     *
     * @var vehicleDevices
     */
    public $vehicleDevices;
    protected $_name = [
        'requestId'      => 'RequestId',
        'vehicleDevices' => 'VehicleDevices',
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
        if (null !== $this->vehicleDevices) {
            $res['VehicleDevices'] = null !== $this->vehicleDevices ? $this->vehicleDevices->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListCommercialVehicleDevicesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['VehicleDevices'])) {
            $model->vehicleDevices = vehicleDevices::fromMap($map['VehicleDevices']);
        }

        return $model;
    }
}
