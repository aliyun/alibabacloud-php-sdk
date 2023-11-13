<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightOrderQueryResponseBody\module;

use AlibabaCloud\Tea\Model;

class flightRefundTicketInfoList extends Model
{
    /**
     * @var string
     */
    public $applyId;

    /**
     * @example 2022-07-20T10:40Z
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @example 2022-07-20T10:40Z
     *
     * @var string
     */
    public $gmtModify;

    /**
     * @var string
     */
    public $outApplyId;

    /**
     * @example 43667
     *
     * @var int
     */
    public $refundOrderId;

    /**
     * @var string
     */
    public $refundReason;

    /**
     * @example 100
     *
     * @var float
     */
    public $refundTicketFee;

    /**
     * @example 0
     *
     * @var int
     */
    public $refundType;

    /**
     * @example 000-13232
     *
     * @var string
     */
    public $ticketNo;
    protected $_name = [
        'applyId'         => 'apply_id',
        'gmtCreate'       => 'gmt_create',
        'gmtModify'       => 'gmt_modify',
        'outApplyId'      => 'out_apply_id',
        'refundOrderId'   => 'refund_order_id',
        'refundReason'    => 'refund_reason',
        'refundTicketFee' => 'refund_ticket_fee',
        'refundType'      => 'refund_type',
        'ticketNo'        => 'ticket_no',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->applyId) {
            $res['apply_id'] = $this->applyId;
        }
        if (null !== $this->gmtCreate) {
            $res['gmt_create'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModify) {
            $res['gmt_modify'] = $this->gmtModify;
        }
        if (null !== $this->outApplyId) {
            $res['out_apply_id'] = $this->outApplyId;
        }
        if (null !== $this->refundOrderId) {
            $res['refund_order_id'] = $this->refundOrderId;
        }
        if (null !== $this->refundReason) {
            $res['refund_reason'] = $this->refundReason;
        }
        if (null !== $this->refundTicketFee) {
            $res['refund_ticket_fee'] = $this->refundTicketFee;
        }
        if (null !== $this->refundType) {
            $res['refund_type'] = $this->refundType;
        }
        if (null !== $this->ticketNo) {
            $res['ticket_no'] = $this->ticketNo;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return flightRefundTicketInfoList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['apply_id'])) {
            $model->applyId = $map['apply_id'];
        }
        if (isset($map['gmt_create'])) {
            $model->gmtCreate = $map['gmt_create'];
        }
        if (isset($map['gmt_modify'])) {
            $model->gmtModify = $map['gmt_modify'];
        }
        if (isset($map['out_apply_id'])) {
            $model->outApplyId = $map['out_apply_id'];
        }
        if (isset($map['refund_order_id'])) {
            $model->refundOrderId = $map['refund_order_id'];
        }
        if (isset($map['refund_reason'])) {
            $model->refundReason = $map['refund_reason'];
        }
        if (isset($map['refund_ticket_fee'])) {
            $model->refundTicketFee = $map['refund_ticket_fee'];
        }
        if (isset($map['refund_type'])) {
            $model->refundType = $map['refund_type'];
        }
        if (isset($map['ticket_no'])) {
            $model->ticketNo = $map['ticket_no'];
        }

        return $model;
    }
}
