<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\SDK\Iot\V20180120\Models\BatchCheckDeviceNamesRequest\deviceNameList;
use AlibabaCloud\Tea\Model;

class BatchCheckDeviceNamesRequest extends Model
{
    /**
     * @example light
     *
     * @var string[]
     */
    public $deviceName;

    /**
     * @var deviceNameList[]
     */
    public $deviceNameList;

    /**
     * @example iot-cn-0pp1n8t****
     *
     * @var string
     */
    public $iotInstanceId;

    /**
     * @example a1BwAGV****
     *
     * @var string
     */
    public $productKey;
    protected $_name = [
        'deviceName'     => 'DeviceName',
        'deviceNameList' => 'DeviceNameList',
        'iotInstanceId'  => 'IotInstanceId',
        'productKey'     => 'ProductKey',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deviceName) {
            $res['DeviceName'] = $this->deviceName;
        }
        if (null !== $this->deviceNameList) {
            $res['DeviceNameList'] = [];
            if (null !== $this->deviceNameList && \is_array($this->deviceNameList)) {
                $n = 0;
                foreach ($this->deviceNameList as $item) {
                    $res['DeviceNameList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->iotInstanceId) {
            $res['IotInstanceId'] = $this->iotInstanceId;
        }
        if (null !== $this->productKey) {
            $res['ProductKey'] = $this->productKey;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BatchCheckDeviceNamesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeviceName'])) {
            if (!empty($map['DeviceName'])) {
                $model->deviceName = $map['DeviceName'];
            }
        }
        if (isset($map['DeviceNameList'])) {
            if (!empty($map['DeviceNameList'])) {
                $model->deviceNameList = [];
                $n                     = 0;
                foreach ($map['DeviceNameList'] as $item) {
                    $model->deviceNameList[$n++] = null !== $item ? deviceNameList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['IotInstanceId'])) {
            $model->iotInstanceId = $map['IotInstanceId'];
        }
        if (isset($map['ProductKey'])) {
            $model->productKey = $map['ProductKey'];
        }

        return $model;
    }
}
