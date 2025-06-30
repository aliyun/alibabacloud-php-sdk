<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainApplyRefundRequest\refundTrainInfos;

class TrainApplyRefundRequest extends Model
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
     * @var refundTrainInfos[]
     */
    public $refundTrainInfos;
    protected $_name = [
        'orderId' => 'order_id',
        'outOrderId' => 'out_order_id',
        'outRefundId' => 'out_refund_id',
        'refundTrainInfos' => 'refund_train_infos',
    ];

    public function validate()
    {
        if (\is_array($this->refundTrainInfos)) {
            Model::validateArray($this->refundTrainInfos);
        }
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

        if (null !== $this->refundTrainInfos) {
            if (\is_array($this->refundTrainInfos)) {
                $res['refund_train_infos'] = [];
                $n1 = 0;
                foreach ($this->refundTrainInfos as $item1) {
                    $res['refund_train_infos'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
                $n1 = 0;
                foreach ($map['refund_train_infos'] as $item1) {
                    $model->refundTrainInfos[$n1] = refundTrainInfos::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
