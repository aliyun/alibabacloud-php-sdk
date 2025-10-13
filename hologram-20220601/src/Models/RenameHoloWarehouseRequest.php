<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hologram\V20220601\Models;

use AlibabaCloud\Dara\Model;

class RenameHoloWarehouseRequest extends Model
{
    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $newWarehouseName;
    protected $_name = [
        'name' => 'name',
        'newWarehouseName' => 'newWarehouseName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->newWarehouseName) {
            $res['newWarehouseName'] = $this->newWarehouseName;
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
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['newWarehouseName'])) {
            $model->newWarehouseName = $map['newWarehouseName'];
        }

        return $model;
    }
}
