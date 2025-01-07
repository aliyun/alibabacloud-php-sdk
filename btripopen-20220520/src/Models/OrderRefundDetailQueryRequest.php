<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Tea\Model;

class OrderRefundDetailQueryRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example ZLJD12241231000002
     *
     * @var string
     */
    public $cooperatorOrderId;

    /**
     * @description This parameter is required.
     *
     * @example 1012000000000000
     *
     * @var string
     */
    public $orderId;
    protected $_name = [
        'cooperatorOrderId' => 'cooperator_order_id',
        'orderId'           => 'order_id',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return OrderRefundDetailQueryRequest
     */
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
