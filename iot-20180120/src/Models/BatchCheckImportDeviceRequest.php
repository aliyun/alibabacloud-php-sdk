<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\SDK\Iot\V20180120\Models\BatchCheckImportDeviceRequest\deviceList;
use AlibabaCloud\Tea\Model;

class BatchCheckImportDeviceRequest extends Model
{
    /**
     * @var deviceList[]
     */
    public $deviceList;

    /**
     * @example iot-1n8t****
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
        'deviceList'    => 'DeviceList',
        'iotInstanceId' => 'IotInstanceId',
        'productKey'    => 'ProductKey',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deviceList) {
            $res['DeviceList'] = [];
            if (null !== $this->deviceList && \is_array($this->deviceList)) {
                $n = 0;
                foreach ($this->deviceList as $item) {
                    $res['DeviceList'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return BatchCheckImportDeviceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeviceList'])) {
            if (!empty($map['DeviceList'])) {
                $model->deviceList = [];
                $n                 = 0;
                foreach ($map['DeviceList'] as $item) {
                    $model->deviceList[$n++] = null !== $item ? deviceList::fromMap($item) : $item;
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
