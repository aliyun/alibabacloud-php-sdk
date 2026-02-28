<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Dara\Model;

class SetDevicesPropertyRequest extends Model
{
    /**
     * @var string[]
     */
    public $deviceName;

    /**
     * @var string
     */
    public $iotInstanceId;

    /**
     * @var string
     */
    public $items;

    /**
     * @var string
     */
    public $productKey;

    /**
     * @var int
     */
    public $qos;
    protected $_name = [
        'deviceName' => 'DeviceName',
        'iotInstanceId' => 'IotInstanceId',
        'items' => 'Items',
        'productKey' => 'ProductKey',
        'qos' => 'Qos',
    ];

    public function validate()
    {
        if (\is_array($this->deviceName)) {
            Model::validateArray($this->deviceName);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->deviceName) {
            if (\is_array($this->deviceName)) {
                $res['DeviceName'] = [];
                $n1 = 0;
                foreach ($this->deviceName as $item1) {
                    $res['DeviceName'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->iotInstanceId) {
            $res['IotInstanceId'] = $this->iotInstanceId;
        }

        if (null !== $this->items) {
            $res['Items'] = $this->items;
        }

        if (null !== $this->productKey) {
            $res['ProductKey'] = $this->productKey;
        }

        if (null !== $this->qos) {
            $res['Qos'] = $this->qos;
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
        if (isset($map['DeviceName'])) {
            if (!empty($map['DeviceName'])) {
                $model->deviceName = [];
                $n1 = 0;
                foreach ($map['DeviceName'] as $item1) {
                    $model->deviceName[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['IotInstanceId'])) {
            $model->iotInstanceId = $map['IotInstanceId'];
        }

        if (isset($map['Items'])) {
            $model->items = $map['Items'];
        }

        if (isset($map['ProductKey'])) {
            $model->productKey = $map['ProductKey'];
        }

        if (isset($map['Qos'])) {
            $model->qos = $map['Qos'];
        }

        return $model;
    }
}
