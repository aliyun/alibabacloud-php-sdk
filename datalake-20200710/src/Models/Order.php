<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DataLake\V20200710\Models;

use AlibabaCloud\Tea\Model;

class Order extends Model
{
    /**
     * @var string
     */
    public $col;

    /**
     * @var int
     */
    public $order;
    protected $_name = [
        'col'   => 'Col',
        'order' => 'Order',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->col) {
            $res['Col'] = $this->col;
        }
        if (null !== $this->order) {
            $res['Order'] = $this->order;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return Order
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Col'])) {
            $model->col = $map['Col'];
        }
        if (isset($map['Order'])) {
            $model->order = $map['Order'];
        }

        return $model;
    }
}
