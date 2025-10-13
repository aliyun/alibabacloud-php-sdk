<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hologram\V20220601\Models\GetWarehouseDetailResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Hologram\V20220601\Models\GetWarehouseDetailResponseBody\warehouseDetail\warehouseList;

class warehouseDetail extends Model
{
    /**
     * @var string
     */
    public $remainingCpu;

    /**
     * @var string
     */
    public $reservedCpu;

    /**
     * @var string
     */
    public $timedElasticCpu;

    /**
     * @var warehouseList[]
     */
    public $warehouseList;
    protected $_name = [
        'remainingCpu' => 'RemainingCpu',
        'reservedCpu' => 'ReservedCpu',
        'timedElasticCpu' => 'TimedElasticCpu',
        'warehouseList' => 'WarehouseList',
    ];

    public function validate()
    {
        if (\is_array($this->warehouseList)) {
            Model::validateArray($this->warehouseList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->warehouseList)) {
                $res['WarehouseList'] = [];
                $n1 = 0;
                foreach ($this->warehouseList as $item1) {
                    $res['WarehouseList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
                $n1 = 0;
                foreach ($map['WarehouseList'] as $item1) {
                    $model->warehouseList[$n1] = warehouseList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
