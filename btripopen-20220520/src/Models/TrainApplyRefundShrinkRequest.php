<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Tea\Model;

class TrainApplyRefundShrinkRequest extends Model
{
    /**
     * @example 1002145190081005400
     *
     * @var string
     */
    public $orderId;

    /**
     * @example 123456
     *
     * @var string
     */
    public $outOrderId;

    /**
     * @example 123456778
     *
     * @var string
     */
    public $outRefundId;

    /**
     * @var string
     */
    public $refundTrainInfosShrink;
    protected $_name = [
        'orderId'                => 'order_id',
        'outOrderId'             => 'out_order_id',
        'outRefundId'            => 'out_refund_id',
        'refundTrainInfosShrink' => 'refund_train_infos',
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
        if (null !== $this->outRefundId) {
            $res['out_refund_id'] = $this->outRefundId;
        }
        if (null !== $this->refundTrainInfosShrink) {
            $res['refund_train_infos'] = $this->refundTrainInfosShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return TrainApplyRefundShrinkRequest
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
        if (isset($map['out_refund_id'])) {
            $model->outRefundId = $map['out_refund_id'];
        }
        if (isset($map['refund_train_infos'])) {
            $model->refundTrainInfosShrink = $map['refund_train_infos'];
        }

        return $model;
    }
}
