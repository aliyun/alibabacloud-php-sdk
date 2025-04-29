<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Dara\Model;

class OrderRefundDetailQueryRequest extends Model
{
    /**
     * @var string
     */
    public $cooperatorOrderId;

    /**
     * @var string
     */
    public $orderId;
    protected $_name = [
        'cooperatorOrderId' => 'cooperator_order_id',
        'orderId' => 'order_id',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cooperatorOrderId) {
            $res['cooperator_order_id'] = $this->cooperatorOrderId;
        }

        if (null !== $this->orderId) {
            $res['order_id'] = $this->orderId;
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
        if (isset($map['cooperator_order_id'])) {
            $model->cooperatorOrderId = $map['cooperator_order_id'];
        }

        if (isset($map['order_id'])) {
            $model->orderId = $map['order_id'];
        }

        return $model;
    }
}
