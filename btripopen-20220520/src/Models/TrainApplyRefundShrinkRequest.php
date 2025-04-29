<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Dara\Model;

class TrainApplyRefundShrinkRequest extends Model
{
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
    public $outRefundId;

    /**
     * @var string
     */
    public $refundTrainInfosShrink;
    protected $_name = [
        'orderId' => 'order_id',
        'outOrderId' => 'out_order_id',
        'outRefundId' => 'out_refund_id',
        'refundTrainInfosShrink' => 'refund_train_infos',
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
