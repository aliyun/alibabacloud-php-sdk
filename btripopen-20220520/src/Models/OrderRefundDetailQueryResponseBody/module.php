<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\OrderRefundDetailQueryResponseBody;

use AlibabaCloud\SDK\BtripOpen\V20220520\Models\OrderRefundDetailQueryResponseBody\module\refundDetails;
use AlibabaCloud\Tea\Model;

class module extends Model
{
    /**
     * @example 1017002195370467138
     *
     * @var string
     */
    public $orderId;

    /**
     * @var refundDetails[]
     */
    public $refundDetails;

    /**
     * @example 10000
     *
     * @var int
     */
    public $totalAmount;
    protected $_name = [
        'orderId'       => 'order_id',
        'refundDetails' => 'refund_details',
        'totalAmount'   => 'total_amount',
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
        if (null !== $this->refundDetails) {
            $res['refund_details'] = [];
            if (null !== $this->refundDetails && \is_array($this->refundDetails)) {
                $n = 0;
                foreach ($this->refundDetails as $item) {
                    $res['refund_details'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->totalAmount) {
            $res['total_amount'] = $this->totalAmount;
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
        if (isset($map['order_id'])) {
            $model->orderId = $map['order_id'];
        }
        if (isset($map['refund_details'])) {
            if (!empty($map['refund_details'])) {
                $model->refundDetails = [];
                $n                    = 0;
                foreach ($map['refund_details'] as $item) {
                    $model->refundDetails[$n++] = null !== $item ? refundDetails::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['total_amount'])) {
            $model->totalAmount = $map['total_amount'];
        }

        return $model;
    }
}
