<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\SDK\Iot\V20180120\Models\BatchAddThingTopoRequest\topoAddItem;
use AlibabaCloud\Tea\Model;

class BatchAddThingTopoRequest extends Model
{
    /**
     * @var string
     */
    public $iotInstanceId;

    /**
     * @var topoAddItem[]
     */
    public $topoAddItem;

    /**
     * @var string
     */
    public $gwProductKey;

    /**
     * @var string
     */
    public $gwDeviceName;
    protected $_name = [
        'iotInstanceId' => 'IotInstanceId',
        'topoAddItem'   => 'TopoAddItem',
        'gwProductKey'  => 'GwProductKey',
        'gwDeviceName'  => 'GwDeviceName',
    ];

    public function validate()
    {
        Model::validateRequired('topoAddItem', $this->topoAddItem, true);
        Model::validateRequired('gwProductKey', $this->gwProductKey, true);
        Model::validateRequired('gwDeviceName', $this->gwDeviceName, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->iotInstanceId) {
            $res['IotInstanceId'] = $this->iotInstanceId;
        }
        if (null !== $this->topoAddItem) {
            $res['TopoAddItem'] = [];
            if (null !== $this->topoAddItem && \is_array($this->topoAddItem)) {
                $n = 0;
                foreach ($this->topoAddItem as $item) {
                    $res['TopoAddItem'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->gwProductKey) {
            $res['GwProductKey'] = $this->gwProductKey;
        }
        if (null !== $this->gwDeviceName) {
            $res['GwDeviceName'] = $this->gwDeviceName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BatchAddThingTopoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IotInstanceId'])) {
            $model->iotInstanceId = $map['IotInstanceId'];
        }
        if (isset($map['TopoAddItem'])) {
            if (!empty($map['TopoAddItem'])) {
                $model->topoAddItem = [];
                $n                  = 0;
                foreach ($map['TopoAddItem'] as $item) {
                    $model->topoAddItem[$n++] = null !== $item ? topoAddItem::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['GwProductKey'])) {
            $model->gwProductKey = $map['GwProductKey'];
        }
        if (isset($map['GwDeviceName'])) {
            $model->gwDeviceName = $map['GwDeviceName'];
        }

        return $model;
    }
}
