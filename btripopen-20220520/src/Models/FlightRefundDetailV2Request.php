<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Dara\Model;

class FlightRefundDetailV2Request extends Model
{
    /**
     * @var string
     */
    public $isvName;

    /**
     * @var string
     */
    public $orderId;

    /**
     * @var string
     */
    public $outOrderId;

    /**
     * @var string
     */
    public $outRefundApplyId;

    /**
     * @var string
     */
    public $refundApplyId;
    protected $_name = [
        'isvName' => 'isv_name',
        'orderId' => 'order_id',
        'outOrderId' => 'out_order_id',
        'outRefundApplyId' => 'out_refund_apply_id',
        'refundApplyId' => 'refund_apply_id',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->isvName) {
            $res['isv_name'] = $this->isvName;
        }

        if (null !== $this->orderId) {
            $res['order_id'] = $this->orderId;
        }

        if (null !== $this->outOrderId) {
            $res['out_order_id'] = $this->outOrderId;
        }

        if (null !== $this->outRefundApplyId) {
            $res['out_refund_apply_id'] = $this->outRefundApplyId;
        }

        if (null !== $this->refundApplyId) {
            $res['refund_apply_id'] = $this->refundApplyId;
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
        if (isset($map['isv_name'])) {
            $model->isvName = $map['isv_name'];
        }

        if (isset($map['order_id'])) {
            $model->orderId = $map['order_id'];
        }

        if (isset($map['out_order_id'])) {
            $model->outOrderId = $map['out_order_id'];
        }

        if (isset($map['out_refund_apply_id'])) {
            $model->outRefundApplyId = $map['out_refund_apply_id'];
        }

        if (isset($map['refund_apply_id'])) {
            $model->refundApplyId = $map['refund_apply_id'];
        }

        return $model;
    }
}
