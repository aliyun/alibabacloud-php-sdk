<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hologram\V20220601\Models\ListWarehouseScheduleTaskResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Hologram\V20220601\Models\ListWarehouseScheduleTaskResponseBody\scheduleTaskList\plans;

class scheduleTaskList extends Model
{
    /**
     * @var string
     */
    public $elasticType;

    /**
     * @var plans[]
     */
    public $plans;

    /**
     * @var int
     */
    public $reservedCpu;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $warehouseId;

    /**
     * @var string
     */
    public $warehouseName;
    protected $_name = [
        'elasticType' => 'ElasticType',
        'plans' => 'Plans',
        'reservedCpu' => 'ReservedCpu',
        'status' => 'Status',
        'warehouseId' => 'WarehouseId',
        'warehouseName' => 'WarehouseName',
    ];

    public function validate()
    {
        if (\is_array($this->plans)) {
            Model::validateArray($this->plans);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->elasticType) {
            $res['ElasticType'] = $this->elasticType;
        }

        if (null !== $this->plans) {
            if (\is_array($this->plans)) {
                $res['Plans'] = [];
                $n1 = 0;
                foreach ($this->plans as $item1) {
                    $res['Plans'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->reservedCpu) {
            $res['ReservedCpu'] = $this->reservedCpu;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->warehouseId) {
            $res['WarehouseId'] = $this->warehouseId;
        }

        if (null !== $this->warehouseName) {
            $res['WarehouseName'] = $this->warehouseName;
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
        if (isset($map['ElasticType'])) {
            $model->elasticType = $map['ElasticType'];
        }

        if (isset($map['Plans'])) {
            if (!empty($map['Plans'])) {
                $model->plans = [];
                $n1 = 0;
                foreach ($map['Plans'] as $item1) {
                    $model->plans[$n1] = plans::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ReservedCpu'])) {
            $model->reservedCpu = $map['ReservedCpu'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['WarehouseId'])) {
            $model->warehouseId = $map['WarehouseId'];
        }

        if (isset($map['WarehouseName'])) {
            $model->warehouseName = $map['WarehouseName'];
        }

        return $model;
    }
}
