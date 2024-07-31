<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelOrderInfoQueryResponseBody\module;

use AlibabaCloud\Tea\Model;

class hotelOrderRefundInfo extends Model
{
    /**
     * @example 1000
     *
     * @var int
     */
    public $cancelFine;

    /**
     * @example 1000000002578096
     *
     * @var int
     */
    public $refundApplyId;

    /**
     * @example 1721702353700
     *
     * @var int
     */
    public $refundEndTime;

    /**
     * @example 34000
     *
     * @var int
     */
    public $refundPrice;

    /**
     * @var string
     */
    public $refundReason;

    /**
     * @example 1721702353700
     *
     * @var int
     */
    public $refundStartTime;

    /**
     * @example 5
     *
     * @var int
     */
    public $refundType;
    protected $_name = [
        'cancelFine'      => 'cancel_fine',
        'refundApplyId'   => 'refund_apply_id',
        'refundEndTime'   => 'refund_end_time',
        'refundPrice'     => 'refund_price',
        'refundReason'    => 'refund_reason',
        'refundStartTime' => 'refund_start_time',
        'refundType'      => 'refund_type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cancelFine) {
            $res['cancel_fine'] = $this->cancelFine;
        }
        if (null !== $this->refundApplyId) {
            $res['refund_apply_id'] = $this->refundApplyId;
        }
        if (null !== $this->refundEndTime) {
            $res['refund_end_time'] = $this->refundEndTime;
        }
        if (null !== $this->refundPrice) {
            $res['refund_price'] = $this->refundPrice;
        }
        if (null !== $this->refundReason) {
            $res['refund_reason'] = $this->refundReason;
        }
        if (null !== $this->refundStartTime) {
            $res['refund_start_time'] = $this->refundStartTime;
        }
        if (null !== $this->refundType) {
            $res['refund_type'] = $this->refundType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return hotelOrderRefundInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['cancel_fine'])) {
            $model->cancelFine = $map['cancel_fine'];
        }
        if (isset($map['refund_apply_id'])) {
            $model->refundApplyId = $map['refund_apply_id'];
        }
        if (isset($map['refund_end_time'])) {
            $model->refundEndTime = $map['refund_end_time'];
        }
        if (isset($map['refund_price'])) {
            $model->refundPrice = $map['refund_price'];
        }
        if (isset($map['refund_reason'])) {
            $model->refundReason = $map['refund_reason'];
        }
        if (isset($map['refund_start_time'])) {
            $model->refundStartTime = $map['refund_start_time'];
        }
        if (isset($map['refund_type'])) {
            $model->refundType = $map['refund_type'];
        }

        return $model;
    }
}
