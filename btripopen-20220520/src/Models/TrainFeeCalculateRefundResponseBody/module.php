<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainFeeCalculateRefundResponseBody;

use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainFeeCalculateRefundResponseBody\module\refundTrainDetails;
use AlibabaCloud\Tea\Model;

class module extends Model
{
    /**
     * @example 123445
     *
     * @var string
     */
    public $distributeOrderId;

    /**
     * @example 1017002195370467200
     *
     * @var string
     */
    public $orderId;

    /**
     * @var refundTrainDetails[]
     */
    public $refundTrainDetails;
    protected $_name = [
        'distributeOrderId'  => 'distribute_order_id',
        'orderId'            => 'order_id',
        'refundTrainDetails' => 'refund_train_details',
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
        if (null !== $this->refundTrainDetails) {
            $res['refund_train_details'] = [];
            if (null !== $this->refundTrainDetails && \is_array($this->refundTrainDetails)) {
                $n = 0;
                foreach ($this->refundTrainDetails as $item) {
                    $res['refund_train_details'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['distribute_order_id'])) {
            $model->distributeOrderId = $map['distribute_order_id'];
        }
        if (isset($map['order_id'])) {
            $model->orderId = $map['order_id'];
        }
        if (isset($map['refund_train_details'])) {
            if (!empty($map['refund_train_details'])) {
                $model->refundTrainDetails = [];
                $n                         = 0;
                foreach ($map['refund_train_details'] as $item) {
                    $model->refundTrainDetails[$n++] = null !== $item ? refundTrainDetails::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
