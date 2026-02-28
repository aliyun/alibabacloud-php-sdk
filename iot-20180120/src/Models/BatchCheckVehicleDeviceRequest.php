<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Iot\V20180120\Models\BatchCheckVehicleDeviceRequest\deviceList;

class BatchCheckVehicleDeviceRequest extends Model
{
    /**
     * @var deviceList[]
     */
    public $deviceList;

    /**
     * @var string
     */
    public $iotInstanceId;

    /**
     * @var string
     */
    public $productKey;
    protected $_name = [
        'deviceList' => 'DeviceList',
        'iotInstanceId' => 'IotInstanceId',
        'productKey' => 'ProductKey',
    ];

    public function validate()
    {
        if (\is_array($this->deviceList)) {
            Model::validateArray($this->deviceList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->deviceList) {
            if (\is_array($this->deviceList)) {
                $res['DeviceList'] = [];
                $n1 = 0;
                foreach ($this->deviceList as $item1) {
                    $res['DeviceList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeviceList'])) {
            if (!empty($map['DeviceList'])) {
                $model->deviceList = [];
                $n1 = 0;
                foreach ($map['DeviceList'] as $item1) {
                    $model->deviceList[$n1] = deviceList::fromMap($item1);
                    ++$n1;
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
