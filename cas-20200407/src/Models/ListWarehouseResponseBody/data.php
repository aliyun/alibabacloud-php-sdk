<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cas\V20200407\Models\ListWarehouseResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $warehouseInstanceId;

    /**
     * @var string
     */
    public $warehouseName;

    /**
     * @var string
     */
    public $warehouseType;
    protected $_name = [
        'warehouseInstanceId' => 'WarehouseInstanceId',
        'warehouseName' => 'WarehouseName',
        'warehouseType' => 'WarehouseType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->warehouseInstanceId) {
            $res['WarehouseInstanceId'] = $this->warehouseInstanceId;
        }

        if (null !== $this->warehouseName) {
            $res['WarehouseName'] = $this->warehouseName;
        }

        if (null !== $this->warehouseType) {
            $res['WarehouseType'] = $this->warehouseType;
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
        if (isset($map['WarehouseInstanceId'])) {
            $model->warehouseInstanceId = $map['WarehouseInstanceId'];
        }

        if (isset($map['WarehouseName'])) {
            $model->warehouseName = $map['WarehouseName'];
        }

        if (isset($map['WarehouseType'])) {
            $model->warehouseType = $map['WarehouseType'];
        }

        return $model;
    }
}
