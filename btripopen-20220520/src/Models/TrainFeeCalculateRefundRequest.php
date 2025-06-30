<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainFeeCalculateRefundRequest\refundTrainInfos;

class TrainFeeCalculateRefundRequest extends Model
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
     * @var refundTrainInfos[]
     */
    public $refundTrainInfos;
    protected $_name = [
        'distributeOrderId' => 'distribute_order_id',
        'orderId' => 'order_id',
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
        if (null !== $this->distributeOrderId) {
            $res['distribute_order_id'] = $this->distributeOrderId;
        }

        if (null !== $this->orderId) {
            $res['order_id'] = $this->orderId;
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
        if (isset($map['distribute_order_id'])) {
            $model->distributeOrderId = $map['distribute_order_id'];
        }

        if (isset($map['order_id'])) {
            $model->orderId = $map['order_id'];
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
