<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\SDK\Iot\V20180120\Models\BatchCheckDeviceNamesRequest\deviceNameList;
use AlibabaCloud\Tea\Model;

class BatchCheckDeviceNamesRequest extends Model
{
    /**
     * @var string
     */
    public $iotInstanceId;

    /**
     * @var string
     */
    public $productKey;

    /**
     * @var string[]
     */
    public $deviceName;

    /**
     * @var deviceNameList[]
     */
    public $deviceNameList;
    protected $_name = [
        'iotInstanceId'  => 'IotInstanceId',
        'productKey'     => 'ProductKey',
        'deviceName'     => 'DeviceName',
        'deviceNameList' => 'DeviceNameList',
    ];

    public function validate()
    {
        Model::validateRequired('productKey', $this->productKey, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->iotInstanceId) {
            $res['IotInstanceId'] = $this->iotInstanceId;
        }
        if (null !== $this->productKey) {
            $res['ProductKey'] = $this->productKey;
        }
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
        if (isset($map['IotInstanceId'])) {
            $model->iotInstanceId = $map['IotInstanceId'];
        }
        if (isset($map['ProductKey'])) {
            $model->productKey = $map['ProductKey'];
        }
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

        return $model;
    }
}
