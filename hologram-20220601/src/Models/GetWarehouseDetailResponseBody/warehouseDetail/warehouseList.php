<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hologram\V20220601\Models\GetWarehouseDetailResponseBody\warehouseDetail;

use AlibabaCloud\Tea\Model;

class warehouseList extends Model
{
    /**
     * @description cpu
     *
     * @example 32
     *
     * @var int
     */
    public $cpu;

    /**
     * @description id
     *
     * @example 2
     *
     * @var int
     */
    public $id;

    /**
     * @example 128
     *
     * @var int
     */
    public $mem;

    /**
     * @example MyWarehouse
     *
     * @var string
     */
    public $name;

    /**
     * @example 2
     *
     * @var int
     */
    public $nodeCount;

    /**
     * @example kRunning
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'cpu'       => 'Cpu',
        'id'        => 'Id',
        'mem'       => 'Mem',
        'name'      => 'Name',
        'nodeCount' => 'NodeCount',
        'status'    => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cpu) {
            $res['Cpu'] = $this->cpu;
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
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return warehouseList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Cpu'])) {
            $model->cpu = $map['Cpu'];
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
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
