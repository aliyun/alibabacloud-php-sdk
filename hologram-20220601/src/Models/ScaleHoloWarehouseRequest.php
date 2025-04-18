<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hologram\V20220601\Models;

use AlibabaCloud\Tea\Model;

class ScaleHoloWarehouseRequest extends Model
{
    /**
     * @description The specifications of the virtual warehouse. The number of vCPUs must be an integer multiple of 16.
     *
     * This parameter is required.
     *
     * @example 64
     *
     * @var int
     */
    public $cpu;

    /**
     * @description The name of the virtual warehouse.
     *
     * This parameter is required.
     *
     * @example my_warehouse
     *
     * @var string
     */
    public $name;
    protected $_name = [
        'cpu' => 'cpu',
        'name' => 'name',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->cpu) {
            $res['cpu'] = $this->cpu;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ScaleHoloWarehouseRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['cpu'])) {
            $model->cpu = $map['cpu'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        return $model;
    }
}
