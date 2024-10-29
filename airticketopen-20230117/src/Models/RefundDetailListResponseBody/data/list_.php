<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models\RefundDetailListResponseBody\data;

use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @description whether it is a supplementary refund order (if the refund amount is not enough, you can use RefundApply to create a supplementary refund order)
     *
     * @example true
     *
     * @var bool
     */
    public $isMultiRefund;

    /**
     * @description order number that returned by Book
     *
     * @example 49884*****2345
     *
     * @var int
     */
    public $orderNum;

    /**
     * @description refund order number that returned by RefundApply
     *
     * @example 49884*****950
     *
     * @var int
     */
    public $refundOrderNum;

    /**
     * @description refund order status
     *
     * 3: refund succeeded
     * @example 1
     *
     * @var int
     */
    public $refundOrderStatus;

    /**
     * @description the original refund order number associated with this supplementary refund order, only avaliable when is_multi_refund=true
     *
     * @example 49884*****2387
     *
     * @var string
     */
    public $relatedRefundOrderNum;

    /**
     * @description transaction number
     *
     * @example 49884**tde-95za
     *
     * @var string
     */
    public $transactionNo;

    /**
     * @description refund time(timestamp)
     *
     * @example 1677229002000
     *
     * @var int
     */
    public $utcCreateTime;
    protected $_name = [
        'isMultiRefund'         => 'is_multi_refund',
        'orderNum'              => 'order_num',
        'refundOrderNum'        => 'refund_order_num',
        'refundOrderStatus'     => 'refund_order_status',
        'relatedRefundOrderNum' => 'related_refund_order_num',
        'transactionNo'         => 'transaction_no',
        'utcCreateTime'         => 'utc_create_time',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return list_
     */
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
