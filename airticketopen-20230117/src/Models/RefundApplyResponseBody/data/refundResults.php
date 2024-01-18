<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models\RefundApplyResponseBody\data;

use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\RefundApplyResponseBody\data\refundResults\refundPassengers;
use AlibabaCloud\Tea\Model;

class refundResults extends Model
{
    /**
     * @example desc reason
     *
     * @var string
     */
    public $failReason;

    /**
     * @example 4966***617202
     *
     * @var int
     */
    public $refundOrderNum;

    /**
     * @var refundPassengers[]
     */
    public $refundPassengers;

    /**
     * @example 0
     *
     * @var int
     */
    public $status;
    protected $_name = [
        'failReason'       => 'fail_reason',
        'refundOrderNum'   => 'refund_order_num',
        'refundPassengers' => 'refund_passengers',
        'status'           => 'status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->failReason) {
            $res['fail_reason'] = $this->failReason;
        }
        if (null !== $this->refundOrderNum) {
            $res['refund_order_num'] = $this->refundOrderNum;
        }
        if (null !== $this->refundPassengers) {
            $res['refund_passengers'] = [];
            if (null !== $this->refundPassengers && \is_array($this->refundPassengers)) {
                $n = 0;
                foreach ($this->refundPassengers as $item) {
                    $res['refund_passengers'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return refundResults
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['fail_reason'])) {
            $model->failReason = $map['fail_reason'];
        }
        if (isset($map['refund_order_num'])) {
            $model->refundOrderNum = $map['refund_order_num'];
        }
        if (isset($map['refund_passengers'])) {
            if (!empty($map['refund_passengers'])) {
                $model->refundPassengers = [];
                $n                       = 0;
                foreach ($map['refund_passengers'] as $item) {
                    $model->refundPassengers[$n++] = null !== $item ? refundPassengers::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        return $model;
    }
}
