<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Dara\Model;

class CarOrderQueryRequest extends Model
{
    /**
     * @var int
     */
    public $orderId;

    /**
     * @var int
     */
    public $subOrderId;
    protected $_name = [
        'orderId' => 'order_id',
        'subOrderId' => 'sub_order_id',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->orderId) {
            $res['order_id'] = $this->orderId;
        }

        if (null !== $this->subOrderId) {
            $res['sub_order_id'] = $this->subOrderId;
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
        if (isset($map['order_id'])) {
            $model->orderId = $map['order_id'];
        }

        if (isset($map['sub_order_id'])) {
            $model->subOrderId = $map['sub_order_id'];
        }

        return $model;
    }
}
