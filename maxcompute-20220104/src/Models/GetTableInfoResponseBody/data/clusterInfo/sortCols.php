<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models\GetTableInfoResponseBody\data\clusterInfo;

use AlibabaCloud\Tea\Model;

class sortCols extends Model
{
    /**
     * @description The name of the sorting field.
     *
     * @example col_2
     *
     * @var string
     */
    public $name;

    /**
     * @description The sorting order.
     *
     * @example DESC
     *
     * @var string
     */
    public $order;
    protected $_name = [
        'name' => 'name',
        'order' => 'order',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->order) {
            $res['order'] = $this->order;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return sortCols
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['order'])) {
            $model->order = $map['order'];
        }

        return $model;
    }
}
