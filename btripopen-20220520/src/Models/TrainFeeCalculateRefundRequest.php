<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainFeeCalculateRefundRequest\refundTrainInfos;
use AlibabaCloud\Tea\Model;

class TrainFeeCalculateRefundRequest extends Model
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
     * @var refundTrainInfos[]
     */
    public $refundTrainInfos;
    protected $_name = [
        'distributeOrderId' => 'distribute_order_id',
        'orderId'           => 'order_id',
        'refundTrainInfos'  => 'refund_train_infos',
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
     * @return TrainFeeCalculateRefundRequest
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
