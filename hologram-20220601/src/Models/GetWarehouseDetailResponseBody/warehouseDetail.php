<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hologram\V20220601\Models\GetWarehouseDetailResponseBody;

use AlibabaCloud\SDK\Hologram\V20220601\Models\GetWarehouseDetailResponseBody\warehouseDetail\warehouseList;
use AlibabaCloud\Tea\Model;

class warehouseDetail extends Model
{
    /**
     * @description The remaining unallocated computing resources of the virtual warehouse instance.
     *
     * @example 32
     *
     * @var string
     */
    public $remainingCpu;

    /**
     * @description The reserved computing resources. The amount of computing resources in all running virtual warehouses in an instance cannot exceed the amount of reserved computing resources in the virtual warehouses.
     *
     * @example 64
     *
     * @var string
     */
    public $reservedCpu;

    /**
     * @var string
     */
    public $timedElasticCpu;

    /**
     * @description The list of virtual warehouses.
     *
     * @var warehouseList[]
     */
    public $warehouseList;
    protected $_name = [
        'remainingCpu' => 'RemainingCpu',
        'reservedCpu' => 'ReservedCpu',
        'timedElasticCpu' => 'TimedElasticCpu',
        'warehouseList' => 'WarehouseList',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->remainingCpu) {
            $res['RemainingCpu'] = $this->remainingCpu;
        }
        if (null !== $this->reservedCpu) {
            $res['ReservedCpu'] = $this->reservedCpu;
        }
        if (null !== $this->timedElasticCpu) {
            $res['TimedElasticCpu'] = $this->timedElasticCpu;
        }
        if (null !== $this->warehouseList) {
            $res['WarehouseList'] = [];
            if (null !== $this->warehouseList && \is_array($this->warehouseList)) {
                $n = 0;
                foreach ($this->warehouseList as $item) {
                    $res['WarehouseList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return warehouseDetail
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RemainingCpu'])) {
            $model->remainingCpu = $map['RemainingCpu'];
        }
        if (isset($map['ReservedCpu'])) {
            $model->reservedCpu = $map['ReservedCpu'];
        }
        if (isset($map['TimedElasticCpu'])) {
            $model->timedElasticCpu = $map['TimedElasticCpu'];
        }
        if (isset($map['WarehouseList'])) {
            if (!empty($map['WarehouseList'])) {
                $model->warehouseList = [];
                $n = 0;
                foreach ($map['WarehouseList'] as $item) {
                    $model->warehouseList[$n++] = null !== $item ? warehouseList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
