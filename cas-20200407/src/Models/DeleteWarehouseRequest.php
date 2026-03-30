<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cas\V20200407\Models;

use AlibabaCloud\Dara\Model;

class DeleteWarehouseRequest extends Model
{
    /**
     * @var string
     */
    public $warehouseInstanceId;
    protected $_name = [
        'warehouseInstanceId' => 'WarehouseInstanceId',
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

        return $model;
    }
}
