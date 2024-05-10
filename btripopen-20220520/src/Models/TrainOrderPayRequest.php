<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Tea\Model;

class TrainOrderPayRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 1379598062646
     *
     * @var string
     */
    public $orderId;

    /**
     * @description This parameter is required.
     *
     * @example 123456
     *
     * @var string
     */
    public $outOrderId;

    /**
     * @description This parameter is required.
     *
     * @example 100
     *
     * @var int
     */
    public $payAmount;
    protected $_name = [
        'orderId'    => 'order_id',
        'outOrderId' => 'out_order_id',
        'payAmount'  => 'pay_amount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->orderId) {
            $res['order_id'] = $this->orderId;
        }
        if (null !== $this->outOrderId) {
            $res['out_order_id'] = $this->outOrderId;
        }
        if (null !== $this->payAmount) {
            $res['pay_amount'] = $this->payAmount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return TrainOrderPayRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['order_id'])) {
            $model->orderId = $map['order_id'];
        }
        if (isset($map['out_order_id'])) {
            $model->outOrderId = $map['out_order_id'];
        }
        if (isset($map['pay_amount'])) {
            $model->payAmount = $map['pay_amount'];
        }

        return $model;
    }
}
