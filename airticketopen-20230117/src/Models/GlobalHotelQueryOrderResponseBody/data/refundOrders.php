<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models\GlobalHotelQueryOrderResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\GlobalHotelQueryOrderResponseBody\data\refundOrders\totalPenaltyAmount;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\GlobalHotelQueryOrderResponseBody\data\refundOrders\totalRefundAmount;

class refundOrders extends Model
{
    /**
     * @var int
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $refundTransactionId;

    /**
     * @var string
     */
    public $rejectReason;

    /**
     * @var string
     */
    public $sellRefundOrderNo;

    /**
     * @var string
     */
    public $status;

    /**
     * @var totalPenaltyAmount
     */
    public $totalPenaltyAmount;

    /**
     * @var totalRefundAmount
     */
    public $totalRefundAmount;
    protected $_name = [
        'gmtCreate' => 'GmtCreate',
        'refundTransactionId' => 'RefundTransactionId',
        'rejectReason' => 'RejectReason',
        'sellRefundOrderNo' => 'SellRefundOrderNo',
        'status' => 'Status',
        'totalPenaltyAmount' => 'TotalPenaltyAmount',
        'totalRefundAmount' => 'TotalRefundAmount',
    ];

    public function validate()
    {
        if (null !== $this->totalPenaltyAmount) {
            $this->totalPenaltyAmount->validate();
        }
        if (null !== $this->totalRefundAmount) {
            $this->totalRefundAmount->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->refundTransactionId) {
            $res['RefundTransactionId'] = $this->refundTransactionId;
        }

        if (null !== $this->rejectReason) {
            $res['RejectReason'] = $this->rejectReason;
        }

        if (null !== $this->sellRefundOrderNo) {
            $res['SellRefundOrderNo'] = $this->sellRefundOrderNo;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->totalPenaltyAmount) {
            $res['TotalPenaltyAmount'] = null !== $this->totalPenaltyAmount ? $this->totalPenaltyAmount->toArray($noStream) : $this->totalPenaltyAmount;
        }

        if (null !== $this->totalRefundAmount) {
            $res['TotalRefundAmount'] = null !== $this->totalRefundAmount ? $this->totalRefundAmount->toArray($noStream) : $this->totalRefundAmount;
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
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }

        if (isset($map['RefundTransactionId'])) {
            $model->refundTransactionId = $map['RefundTransactionId'];
        }

        if (isset($map['RejectReason'])) {
            $model->rejectReason = $map['RejectReason'];
        }

        if (isset($map['SellRefundOrderNo'])) {
            $model->sellRefundOrderNo = $map['SellRefundOrderNo'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['TotalPenaltyAmount'])) {
            $model->totalPenaltyAmount = totalPenaltyAmount::fromMap($map['TotalPenaltyAmount']);
        }

        if (isset($map['TotalRefundAmount'])) {
            $model->totalRefundAmount = totalRefundAmount::fromMap($map['TotalRefundAmount']);
        }

        return $model;
    }
}
