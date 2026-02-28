<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Dara\Model;

class QueryDeviceDesiredPropertyRequest extends Model
{
    /**
     * @var string
     */
    public $deviceName;

    /**
     * @var string
     */
    public $functionBlockId;

    /**
     * @var string[]
     */
    public $identifier;

    /**
     * @var string
     */
    public $iotId;

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
        'functionBlockId' => 'FunctionBlockId',
        'identifier' => 'Identifier',
        'iotId' => 'IotId',
        'iotInstanceId' => 'IotInstanceId',
        'productKey' => 'ProductKey',
    ];

    public function validate()
    {
        if (\is_array($this->identifier)) {
            Model::validateArray($this->identifier);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->deviceName) {
            $res['DeviceName'] = $this->deviceName;
        }

        if (null !== $this->functionBlockId) {
            $res['FunctionBlockId'] = $this->functionBlockId;
        }

        if (null !== $this->identifier) {
            if (\is_array($this->identifier)) {
                $res['Identifier'] = [];
                $n1 = 0;
                foreach ($this->identifier as $item1) {
                    $res['Identifier'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->iotId) {
            $res['IotId'] = $this->iotId;
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
            $model->deviceName = $map['DeviceName'];
        }

        if (isset($map['FunctionBlockId'])) {
            $model->functionBlockId = $map['FunctionBlockId'];
        }

        if (isset($map['Identifier'])) {
            if (!empty($map['Identifier'])) {
                $model->identifier = [];
                $n1 = 0;
                foreach ($map['Identifier'] as $item1) {
                    $model->identifier[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['IotId'])) {
            $model->iotId = $map['IotId'];
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
