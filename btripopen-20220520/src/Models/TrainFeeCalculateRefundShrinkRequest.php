<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Tea\Model;

class TrainFeeCalculateRefundShrinkRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 12345
     *
     * @var string
     */
    public $distributeOrderId;

    /**
     * @description This parameter is required.
     *
     * @example 1002145190081005400
     *
     * @var string
     */
    public $orderId;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $refundTrainInfosShrink;
    protected $_name = [
        'distributeOrderId'      => 'distribute_order_id',
        'orderId'                => 'order_id',
        'refundTrainInfosShrink' => 'refund_train_infos',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return TrainFeeCalculateRefundShrinkRequest
     */
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
