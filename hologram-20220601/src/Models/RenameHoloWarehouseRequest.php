<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hologram\V20220601\Models;

use AlibabaCloud\Tea\Model;

class RenameHoloWarehouseRequest extends Model
{
    /**
     * @description The original name of the virtual warehouse.
     *
     * This parameter is required.
     *
     * @example my_warehouse
     *
     * @var string
     */
    public $name;

    /**
     * @description The new name of the virtual warehouse.
     *
     * This parameter is required.
     *
     * @example new_name
     *
     * @var string
     */
    public $newWarehouseName;
    protected $_name = [
        'name' => 'name',
        'newWarehouseName' => 'newWarehouseName',
    ];

    public function validate() {}

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return RenameHoloWarehouseRequest
     */
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
