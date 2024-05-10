<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainApplyRefundRequest\refundTrainInfos;
use AlibabaCloud\Tea\Model;

class TrainApplyRefundRequest extends Model
{
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
     * @example 123456
     *
     * @var string
     */
    public $outOrderId;

    /**
     * @description This parameter is required.
     *
     * @example 123456778
     *
     * @var string
     */
    public $outRefundId;

    /**
     * @description This parameter is required.
     *
     * @var refundTrainInfos[]
     */
    public $refundTrainInfos;
    protected $_name = [
        'orderId'          => 'order_id',
        'outOrderId'       => 'out_order_id',
        'outRefundId'      => 'out_refund_id',
        'refundTrainInfos' => 'refund_train_infos',
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
        if (null !== $this->refundTrainInfos) {
            $res['refund_train_infos'] = [];
            if (null !== $this->refundTrainInfos && \is_array($this->refundTrainInfos)) {
                $n = 0;
                foreach ($this->refundTrainInfos as $item) {
                    $res['refund_train_infos'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return TrainApplyRefundRequest
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
            if (!empty($map['refund_train_infos'])) {
                $model->refundTrainInfos = [];
                $n                       = 0;
                foreach ($map['refund_train_infos'] as $item) {
                    $model->refundTrainInfos[$n++] = null !== $item ? refundTrainInfos::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
