<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Dara\Model;

class TrainFeeCalculateRefundShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $distributeOrderId;

    /**
     * @var string
     */
    public $orderId;

    /**
     * @var string
     */
    public $refundTrainInfosShrink;
    protected $_name = [
        'distributeOrderId' => 'distribute_order_id',
        'orderId' => 'order_id',
        'refundTrainInfosShrink' => 'refund_train_infos',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->distributeOrderId) {
            $res['distribute_order_id'] = $this->distributeOrderId;
        }

        if (null !== $this->orderId) {
            $res['order_id'] = $this->orderId;
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
        if (isset($map['distribute_order_id'])) {
            $model->distributeOrderId = $map['distribute_order_id'];
        }

        if (isset($map['order_id'])) {
            $model->orderId = $map['order_id'];
        }

        if (isset($map['refund_train_infos'])) {
            $model->refundTrainInfosShrink = $map['refund_train_infos'];
        }

        return $model;
    }
}
