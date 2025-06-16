<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models\RefundDetailListResponseBody\data;

use AlibabaCloud\Dara\Model;

class list_ extends Model
{
    /**
     * @var bool
     */
    public $isMultiRefund;

    /**
     * @var int
     */
    public $orderNum;

    /**
     * @var int
     */
    public $refundOrderNum;

    /**
     * @var int
     */
    public $refundOrderStatus;

    /**
     * @var string
     */
    public $relatedRefundOrderNum;

    /**
     * @var string
     */
    public $transactionNo;

    /**
     * @var int
     */
    public $utcCreateTime;
    protected $_name = [
        'isMultiRefund' => 'is_multi_refund',
        'orderNum' => 'order_num',
        'refundOrderNum' => 'refund_order_num',
        'refundOrderStatus' => 'refund_order_status',
        'relatedRefundOrderNum' => 'related_refund_order_num',
        'transactionNo' => 'transaction_no',
        'utcCreateTime' => 'utc_create_time',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->isMultiRefund) {
            $res['is_multi_refund'] = $this->isMultiRefund;
        }

        if (null !== $this->orderNum) {
            $res['order_num'] = $this->orderNum;
        }

        if (null !== $this->refundOrderNum) {
            $res['refund_order_num'] = $this->refundOrderNum;
        }

        if (null !== $this->refundOrderStatus) {
            $res['refund_order_status'] = $this->refundOrderStatus;
        }

        if (null !== $this->relatedRefundOrderNum) {
            $res['related_refund_order_num'] = $this->relatedRefundOrderNum;
        }

        if (null !== $this->transactionNo) {
            $res['transaction_no'] = $this->transactionNo;
        }

        if (null !== $this->utcCreateTime) {
            $res['utc_create_time'] = $this->utcCreateTime;
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
        if (isset($map['is_multi_refund'])) {
            $model->isMultiRefund = $map['is_multi_refund'];
        }

        if (isset($map['order_num'])) {
            $model->orderNum = $map['order_num'];
        }

        if (isset($map['refund_order_num'])) {
            $model->refundOrderNum = $map['refund_order_num'];
        }

        if (isset($map['refund_order_status'])) {
            $model->refundOrderStatus = $map['refund_order_status'];
        }

        if (isset($map['related_refund_order_num'])) {
            $model->relatedRefundOrderNum = $map['related_refund_order_num'];
        }

        if (isset($map['transaction_no'])) {
            $model->transactionNo = $map['transaction_no'];
        }

        if (isset($map['utc_create_time'])) {
            $model->utcCreateTime = $map['utc_create_time'];
        }

        return $model;
    }
}
