<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\OrderRefundDetailQueryResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\OrderRefundDetailQueryResponseBody\module\refundDetails;

class module extends Model
{
    /**
     * @var string
     */
    public $orderId;

    /**
     * @var refundDetails[]
     */
    public $refundDetails;

    /**
     * @var int
     */
    public $totalAmount;
    protected $_name = [
        'orderId' => 'order_id',
        'refundDetails' => 'refund_details',
        'totalAmount' => 'total_amount',
    ];

    public function validate()
    {
        if (\is_array($this->refundDetails)) {
            Model::validateArray($this->refundDetails);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->orderId) {
            $res['order_id'] = $this->orderId;
        }

        if (null !== $this->refundDetails) {
            if (\is_array($this->refundDetails)) {
                $res['refund_details'] = [];
                $n1 = 0;
                foreach ($this->refundDetails as $item1) {
                    $res['refund_details'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->totalAmount) {
            $res['total_amount'] = $this->totalAmount;
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

        if (isset($map['refund_details'])) {
            if (!empty($map['refund_details'])) {
                $model->refundDetails = [];
                $n1 = 0;
                foreach ($map['refund_details'] as $item1) {
                    $model->refundDetails[$n1++] = refundDetails::fromMap($item1);
                }
            }
        }

        if (isset($map['total_amount'])) {
            $model->totalAmount = $map['total_amount'];
        }

        return $model;
    }
}
