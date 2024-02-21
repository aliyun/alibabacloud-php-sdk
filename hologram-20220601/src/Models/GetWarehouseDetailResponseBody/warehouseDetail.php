<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hologram\V20220601\Models\GetWarehouseDetailResponseBody;

use AlibabaCloud\SDK\Hologram\V20220601\Models\GetWarehouseDetailResponseBody\warehouseDetail\warehouseList;
use AlibabaCloud\Tea\Model;

class warehouseDetail extends Model
{
    /**
     * @example 32
     *
     * @var string
     */
    public $remainingCpu;

    /**
     * @example 64
     *
     * @var string
     */
    public $reservedCpu;

    /**
     * @var warehouseList[]
     */
    public $warehouseList;
    protected $_name = [
        'remainingCpu'  => 'RemainingCpu',
        'reservedCpu'   => 'ReservedCpu',
        'warehouseList' => 'WarehouseList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->remainingCpu) {
            $res['RemainingCpu'] = $this->remainingCpu;
        }
        if (null !== $this->reservedCpu) {
            $res['ReservedCpu'] = $this->reservedCpu;
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
        if (isset($map['WarehouseList'])) {
            if (!empty($map['WarehouseList'])) {
                $model->warehouseList = [];
                $n                    = 0;
                foreach ($map['WarehouseList'] as $item) {
                    $model->warehouseList[$n++] = null !== $item ? warehouseList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
