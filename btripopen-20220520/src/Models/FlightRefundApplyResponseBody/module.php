<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightRefundApplyResponseBody;

use AlibabaCloud\Tea\Model;

class module extends Model
{
    /**
     * @example dis123
     *
     * @var string
     */
    public $disOrderId;

    /**
     * @example refun1234
     *
     * @var string
     */
    public $disSubOrderId;

    /**
     * @example 1231231
     *
     * @var int
     */
    public $refundApplyId;

    /**
     * @example 1000
     *
     * @var int
     */
    public $refundFee;

    /**
     * @example 100
     *
     * @var int
     */
    public $refundMoney;
    protected $_name = [
        'disOrderId'    => 'dis_order_id',
        'disSubOrderId' => 'dis_sub_order_id',
        'refundApplyId' => 'refund_apply_id',
        'refundFee'     => 'refund_fee',
        'refundMoney'   => 'refund_money',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->disOrderId) {
            $res['dis_order_id'] = $this->disOrderId;
        }
        if (null !== $this->disSubOrderId) {
            $res['dis_sub_order_id'] = $this->disSubOrderId;
        }
        if (null !== $this->refundApplyId) {
            $res['refund_apply_id'] = $this->refundApplyId;
        }
        if (null !== $this->refundFee) {
            $res['refund_fee'] = $this->refundFee;
        }
        if (null !== $this->refundMoney) {
            $res['refund_money'] = $this->refundMoney;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return module
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['dis_order_id'])) {
            $model->disOrderId = $map['dis_order_id'];
        }
        if (isset($map['dis_sub_order_id'])) {
            $model->disSubOrderId = $map['dis_sub_order_id'];
        }
        if (isset($map['refund_apply_id'])) {
            $model->refundApplyId = $map['refund_apply_id'];
        }
        if (isset($map['refund_fee'])) {
            $model->refundFee = $map['refund_fee'];
        }
        if (isset($map['refund_money'])) {
            $model->refundMoney = $map['refund_money'];
        }

        return $model;
    }
}
