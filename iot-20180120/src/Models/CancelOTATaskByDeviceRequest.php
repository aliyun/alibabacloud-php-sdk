<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Dara\Model;

class CancelOTATaskByDeviceRequest extends Model
{
    /**
     * @var string[]
     */
    public $deviceName;

    /**
     * @var string
     */
    public $firmwareId;

    /**
     * @var string
     */
    public $iotInstanceId;

    /**
     * @var string
     */
    public $jobId;

    /**
     * @var string
     */
    public $productKey;
    protected $_name = [
        'deviceName' => 'DeviceName',
        'firmwareId' => 'FirmwareId',
        'iotInstanceId' => 'IotInstanceId',
        'jobId' => 'JobId',
        'productKey' => 'ProductKey',
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

        if (null !== $this->firmwareId) {
            $res['FirmwareId'] = $this->firmwareId;
        }

        if (null !== $this->iotInstanceId) {
            $res['IotInstanceId'] = $this->iotInstanceId;
        }

        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
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

        if (isset($map['FirmwareId'])) {
            $model->firmwareId = $map['FirmwareId'];
        }

        if (isset($map['IotInstanceId'])) {
            $model->iotInstanceId = $map['IotInstanceId'];
        }

        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }

        if (isset($map['ProductKey'])) {
            $model->productKey = $map['ProductKey'];
        }

        return $model;
    }
}
