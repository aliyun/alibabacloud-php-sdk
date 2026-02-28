<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Dara\Model;

class BatchGrayMigrationDeviceRequest extends Model
{
    /**
     * @var string[]
     */
    public $deviceNames;

    /**
     * @var string
     */
    public $productKey;
    protected $_name = [
        'deviceNames' => 'DeviceNames',
        'productKey' => 'ProductKey',
    ];

    public function validate()
    {
        if (\is_array($this->deviceNames)) {
            Model::validateArray($this->deviceNames);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->deviceNames) {
            if (\is_array($this->deviceNames)) {
                $res['DeviceNames'] = [];
                $n1 = 0;
                foreach ($this->deviceNames as $item1) {
                    $res['DeviceNames'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['DeviceNames'])) {
            if (!empty($map['DeviceNames'])) {
                $model->deviceNames = [];
                $n1 = 0;
                foreach ($map['DeviceNames'] as $item1) {
                    $model->deviceNames[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ProductKey'])) {
            $model->productKey = $map['ProductKey'];
        }

        return $model;
    }
}
