<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Iot\V20180120\Models\BatchAddThingTopoRequest\topoAddItem;

class BatchAddThingTopoRequest extends Model
{
    /**
     * @var string
     */
    public $gwDeviceName;

    /**
     * @var string
     */
    public $gwProductKey;

    /**
     * @var string
     */
    public $iotInstanceId;

    /**
     * @var topoAddItem[]
     */
    public $topoAddItem;
    protected $_name = [
        'gwDeviceName' => 'GwDeviceName',
        'gwProductKey' => 'GwProductKey',
        'iotInstanceId' => 'IotInstanceId',
        'topoAddItem' => 'TopoAddItem',
    ];

    public function validate()
    {
        if (\is_array($this->topoAddItem)) {
            Model::validateArray($this->topoAddItem);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->gwDeviceName) {
            $res['GwDeviceName'] = $this->gwDeviceName;
        }

        if (null !== $this->gwProductKey) {
            $res['GwProductKey'] = $this->gwProductKey;
        }

        if (null !== $this->iotInstanceId) {
            $res['IotInstanceId'] = $this->iotInstanceId;
        }

        if (null !== $this->topoAddItem) {
            if (\is_array($this->topoAddItem)) {
                $res['TopoAddItem'] = [];
                $n1 = 0;
                foreach ($this->topoAddItem as $item1) {
                    $res['TopoAddItem'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['GwDeviceName'])) {
            $model->gwDeviceName = $map['GwDeviceName'];
        }

        if (isset($map['GwProductKey'])) {
            $model->gwProductKey = $map['GwProductKey'];
        }

        if (isset($map['IotInstanceId'])) {
            $model->iotInstanceId = $map['IotInstanceId'];
        }

        if (isset($map['TopoAddItem'])) {
            if (!empty($map['TopoAddItem'])) {
                $model->topoAddItem = [];
                $n1 = 0;
                foreach ($map['TopoAddItem'] as $item1) {
                    $model->topoAddItem[$n1] = topoAddItem::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
