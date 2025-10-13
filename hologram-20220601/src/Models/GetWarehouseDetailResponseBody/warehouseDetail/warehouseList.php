<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hologram\V20220601\Models\GetWarehouseDetailResponseBody\warehouseDetail;

use AlibabaCloud\Dara\Model;

class warehouseList extends Model
{
    /**
     * @var int
     */
    public $cpu;

    /**
     * @var bool
     */
    public $defaultWarehouse;

    /**
     * @var int
     */
    public $elasticCpu;

    /**
     * @var int
     */
    public $id;

    /**
     * @var int
     */
    public $mem;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $nodeCount;

    /**
     * @var string
     */
    public $rebalanceStatus;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'cpu' => 'Cpu',
        'defaultWarehouse' => 'DefaultWarehouse',
        'elasticCpu' => 'ElasticCpu',
        'id' => 'Id',
        'mem' => 'Mem',
        'name' => 'Name',
        'nodeCount' => 'NodeCount',
        'rebalanceStatus' => 'RebalanceStatus',
        'status' => 'Status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cpu) {
            $res['Cpu'] = $this->cpu;
        }

        if (null !== $this->defaultWarehouse) {
            $res['DefaultWarehouse'] = $this->defaultWarehouse;
        }

        if (null !== $this->elasticCpu) {
            $res['ElasticCpu'] = $this->elasticCpu;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->mem) {
            $res['Mem'] = $this->mem;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->nodeCount) {
            $res['NodeCount'] = $this->nodeCount;
        }

        if (null !== $this->rebalanceStatus) {
            $res['RebalanceStatus'] = $this->rebalanceStatus;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['Cpu'])) {
            $model->cpu = $map['Cpu'];
        }

        if (isset($map['DefaultWarehouse'])) {
            $model->defaultWarehouse = $map['DefaultWarehouse'];
        }

        if (isset($map['ElasticCpu'])) {
            $model->elasticCpu = $map['ElasticCpu'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['Mem'])) {
            $model->mem = $map['Mem'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['NodeCount'])) {
            $model->nodeCount = $map['NodeCount'];
        }

        if (isset($map['RebalanceStatus'])) {
            $model->rebalanceStatus = $map['RebalanceStatus'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
