<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\SDK\Iot\V20180120\Models\BatchAddThingTopoRequest\topoAddItem;
use AlibabaCloud\Tea\Model;

class BatchAddThingTopoRequest extends Model
{
    /**
     * @description The name of the gateway.
     *
     * @example gateway
     *
     * @var string
     */
    public $gwDeviceName;

    /**
     * @description The key of the product to which the gateway belongs.
     *
     * @example a1vL7cp****
     *
     * @var string
     */
    public $gwProductKey;

    /**
     * @description The ID of the instance. On the **Overview** page in the IoT Platform console, you can view the ID of the instance.
     *
     * >*   If your instance has an ID, you must specify this parameter. Otherwise, the call fails.
     * >*   If no **Overview** page or instance ID appears in the IoT Platform console, ignore this parameter.
     *
     * For more information, see [Overview](~~356505~~).
     * @example iot_instc_pu****_c*-v64********
     *
     * @var string
     */
    public $iotInstanceId;

    /**
     * @var topoAddItem[]
     */
    public $topoAddItem;
    protected $_name = [
        'gwDeviceName'  => 'GwDeviceName',
        'gwProductKey'  => 'GwProductKey',
        'iotInstanceId' => 'IotInstanceId',
        'topoAddItem'   => 'TopoAddItem',
    ];

    public function validate()
    {
    }

    public function toMap()
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
            $res['TopoAddItem'] = [];
            if (null !== $this->topoAddItem && \is_array($this->topoAddItem)) {
                $n = 0;
                foreach ($this->topoAddItem as $item) {
                    $res['TopoAddItem'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
                $n                  = 0;
                foreach ($map['TopoAddItem'] as $item) {
                    $model->topoAddItem[$n++] = null !== $item ? topoAddItem::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
