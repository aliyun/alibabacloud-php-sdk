<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Iot\V20180120\Models\BatchCheckDeviceNamesRequest\deviceNameList;

class BatchCheckDeviceNamesRequest extends Model
{
    /**
     * @var string[]
     */
    public $deviceName;

    /**
     * @var deviceNameList[]
     */
    public $deviceNameList;

    /**
     * @var string
     */
    public $iotInstanceId;

    /**
     * @var string
     */
    public $productKey;
    protected $_name = [
        'deviceName' => 'DeviceName',
        'deviceNameList' => 'DeviceNameList',
        'iotInstanceId' => 'IotInstanceId',
        'productKey' => 'ProductKey',
    ];

    public function validate()
    {
        if (\is_array($this->deviceName)) {
            Model::validateArray($this->deviceName);
        }
        if (\is_array($this->deviceNameList)) {
            Model::validateArray($this->deviceNameList);
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

        if (null !== $this->deviceNameList) {
            if (\is_array($this->deviceNameList)) {
                $res['DeviceNameList'] = [];
                $n1 = 0;
                foreach ($this->deviceNameList as $item1) {
                    $res['DeviceNameList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

        if (isset($map['DeviceNameList'])) {
            if (!empty($map['DeviceNameList'])) {
                $model->deviceNameList = [];
                $n1 = 0;
                foreach ($map['DeviceNameList'] as $item1) {
                    $model->deviceNameList[$n1] = deviceNameList::fromMap($item1);
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
