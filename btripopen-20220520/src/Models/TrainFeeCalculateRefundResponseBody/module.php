<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainFeeCalculateRefundResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainFeeCalculateRefundResponseBody\module\refundTrainDetails;

class module extends Model
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
     * @var refundTrainDetails[]
     */
    public $refundTrainDetails;
    protected $_name = [
        'distributeOrderId' => 'distribute_order_id',
        'orderId' => 'order_id',
        'refundTrainDetails' => 'refund_train_details',
    ];

    public function validate()
    {
        if (\is_array($this->refundTrainDetails)) {
            Model::validateArray($this->refundTrainDetails);
        }
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

        if (null !== $this->refundTrainDetails) {
            if (\is_array($this->refundTrainDetails)) {
                $res['refund_train_details'] = [];
                $n1 = 0;
                foreach ($this->refundTrainDetails as $item1) {
                    $res['refund_train_details'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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

        if (isset($map['refund_train_details'])) {
            if (!empty($map['refund_train_details'])) {
                $model->refundTrainDetails = [];
                $n1 = 0;
                foreach ($map['refund_train_details'] as $item1) {
                    $model->refundTrainDetails[$n1] = refundTrainDetails::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
