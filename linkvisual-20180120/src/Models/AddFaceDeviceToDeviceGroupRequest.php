<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkvisual\V20180120\Models;

use AlibabaCloud\Tea\Model;

class AddFaceDeviceToDeviceGroupRequest extends Model
{
    /**
     * @example kvjyhurc
     *
     * @var string
     */
    public $deviceGroupId;

    /**
     * @example TestDevice
     *
     * @var string
     */
    public $deviceName;

    /**
     * @example TestInstanceId
     *
     * @var string
     */
    public $iotInstanceId;

    /**
     * @example TestIsolationId
     *
     * @var string
     */
    public $isolationId;

    /**
     * @example a1Tp7KYZHHK
     *
     * @var string
     */
    public $productKey;
    protected $_name = [
        'deviceGroupId' => 'DeviceGroupId',
        'deviceName'    => 'DeviceName',
        'iotInstanceId' => 'IotInstanceId',
        'isolationId'   => 'IsolationId',
        'productKey'    => 'ProductKey',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deviceGroupId) {
            $res['DeviceGroupId'] = $this->deviceGroupId;
        }
        if (null !== $this->deviceName) {
            $res['DeviceName'] = $this->deviceName;
        }
        if (null !== $this->iotInstanceId) {
            $res['IotInstanceId'] = $this->iotInstanceId;
        }
        if (null !== $this->isolationId) {
            $res['IsolationId'] = $this->isolationId;
        }
        if (null !== $this->productKey) {
            $res['ProductKey'] = $this->productKey;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddFaceDeviceToDeviceGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeviceGroupId'])) {
            $model->deviceGroupId = $map['DeviceGroupId'];
        }
        if (isset($map['DeviceName'])) {
            $model->deviceName = $map['DeviceName'];
        }
        if (isset($map['IotInstanceId'])) {
            $model->iotInstanceId = $map['IotInstanceId'];
        }
        if (isset($map['IsolationId'])) {
            $model->isolationId = $map['IsolationId'];
        }
        if (isset($map['ProductKey'])) {
            $model->productKey = $map['ProductKey'];
        }

        return $model;
    }
}
