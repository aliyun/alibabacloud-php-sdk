<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightOrderListQueryV2ResponseBody\module;

use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightOrderListQueryV2ResponseBody\module\flightRefundApplyList\flightRefundApplyTicketList;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightOrderListQueryV2ResponseBody\module\flightRefundApplyList\flightRefundSegmentList;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightOrderListQueryV2ResponseBody\module\flightRefundApplyList\flightRefundUserFeeList;
use AlibabaCloud\Tea\Model;

class flightRefundApplyList extends Model
{
    /**
     * @var flightRefundApplyTicketList[]
     */
    public $flightRefundApplyTicketList;

    /**
     * @var flightRefundSegmentList[]
     */
    public $flightRefundSegmentList;

    /**
     * @var flightRefundUserFeeList[]
     */
    public $flightRefundUserFeeList;

    /**
     * @example 232213
     *
     * @var string
     */
    public $refundApplyId;

    /**
     * @example 2024122312
     *
     * @var string
     */
    public $refundApproveId;

    /**
     * @var float
     */
    public $refundCorpTotalAmount;

    /**
     * @var float
     */
    public $refundHandFee;

    /**
     * @var float
     */
    public $refundPersonTotalAmount;

    /**
     * @var string
     */
    public $refundReason;

    /**
     * @example 0
     *
     * @var string
     */
    public $refundReasonCode;

    /**
     * @var float
     */
    public $refundTotalAmount;

    /**
     * @example 232218
     *
     * @var string
     */
    public $relateRefundApplyId;

    /**
     * @var string[]
     */
    public $userIdList;
    protected $_name = [
        'flightRefundApplyTicketList' => 'flight_refund_apply_ticket_list',
        'flightRefundSegmentList'     => 'flight_refund_segment_list',
        'flightRefundUserFeeList'     => 'flight_refund_user_fee_list',
        'refundApplyId'               => 'refund_apply_id',
        'refundApproveId'             => 'refund_approve_id',
        'refundCorpTotalAmount'       => 'refund_corp_total_amount',
        'refundHandFee'               => 'refund_hand_fee',
        'refundPersonTotalAmount'     => 'refund_person_total_amount',
        'refundReason'                => 'refund_reason',
        'refundReasonCode'            => 'refund_reason_code',
        'refundTotalAmount'           => 'refund_total_amount',
        'relateRefundApplyId'         => 'relate_refund_apply_id',
        'userIdList'                  => 'user_id_list',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->flightRefundApplyTicketList) {
            $res['flight_refund_apply_ticket_list'] = [];
            if (null !== $this->flightRefundApplyTicketList && \is_array($this->flightRefundApplyTicketList)) {
                $n = 0;
                foreach ($this->flightRefundApplyTicketList as $item) {
                    $res['flight_refund_apply_ticket_list'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->flightRefundSegmentList) {
            $res['flight_refund_segment_list'] = [];
            if (null !== $this->flightRefundSegmentList && \is_array($this->flightRefundSegmentList)) {
                $n = 0;
                foreach ($this->flightRefundSegmentList as $item) {
                    $res['flight_refund_segment_list'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->flightRefundUserFeeList) {
            $res['flight_refund_user_fee_list'] = [];
            if (null !== $this->flightRefundUserFeeList && \is_array($this->flightRefundUserFeeList)) {
                $n = 0;
                foreach ($this->flightRefundUserFeeList as $item) {
                    $res['flight_refund_user_fee_list'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->refundApplyId) {
            $res['refund_apply_id'] = $this->refundApplyId;
        }
        if (null !== $this->refundApproveId) {
            $res['refund_approve_id'] = $this->refundApproveId;
        }
        if (null !== $this->refundCorpTotalAmount) {
            $res['refund_corp_total_amount'] = $this->refundCorpTotalAmount;
        }
        if (null !== $this->refundHandFee) {
            $res['refund_hand_fee'] = $this->refundHandFee;
        }
        if (null !== $this->refundPersonTotalAmount) {
            $res['refund_person_total_amount'] = $this->refundPersonTotalAmount;
        }
        if (null !== $this->refundReason) {
            $res['refund_reason'] = $this->refundReason;
        }
        if (null !== $this->refundReasonCode) {
            $res['refund_reason_code'] = $this->refundReasonCode;
        }
        if (null !== $this->refundTotalAmount) {
            $res['refund_total_amount'] = $this->refundTotalAmount;
        }
        if (null !== $this->relateRefundApplyId) {
            $res['relate_refund_apply_id'] = $this->relateRefundApplyId;
        }
        if (null !== $this->userIdList) {
            $res['user_id_list'] = $this->userIdList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return flightRefundApplyList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['flight_refund_apply_ticket_list'])) {
            if (!empty($map['flight_refund_apply_ticket_list'])) {
                $model->flightRefundApplyTicketList = [];
                $n                                  = 0;
                foreach ($map['flight_refund_apply_ticket_list'] as $item) {
                    $model->flightRefundApplyTicketList[$n++] = null !== $item ? flightRefundApplyTicketList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['flight_refund_segment_list'])) {
            if (!empty($map['flight_refund_segment_list'])) {
                $model->flightRefundSegmentList = [];
                $n                              = 0;
                foreach ($map['flight_refund_segment_list'] as $item) {
                    $model->flightRefundSegmentList[$n++] = null !== $item ? flightRefundSegmentList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['flight_refund_user_fee_list'])) {
            if (!empty($map['flight_refund_user_fee_list'])) {
                $model->flightRefundUserFeeList = [];
                $n                              = 0;
                foreach ($map['flight_refund_user_fee_list'] as $item) {
                    $model->flightRefundUserFeeList[$n++] = null !== $item ? flightRefundUserFeeList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['refund_apply_id'])) {
            $model->refundApplyId = $map['refund_apply_id'];
        }
        if (isset($map['refund_approve_id'])) {
            $model->refundApproveId = $map['refund_approve_id'];
        }
        if (isset($map['refund_corp_total_amount'])) {
            $model->refundCorpTotalAmount = $map['refund_corp_total_amount'];
        }
        if (isset($map['refund_hand_fee'])) {
            $model->refundHandFee = $map['refund_hand_fee'];
        }
        if (isset($map['refund_person_total_amount'])) {
            $model->refundPersonTotalAmount = $map['refund_person_total_amount'];
        }
        if (isset($map['refund_reason'])) {
            $model->refundReason = $map['refund_reason'];
        }
        if (isset($map['refund_reason_code'])) {
            $model->refundReasonCode = $map['refund_reason_code'];
        }
        if (isset($map['refund_total_amount'])) {
            $model->refundTotalAmount = $map['refund_total_amount'];
        }
        if (isset($map['relate_refund_apply_id'])) {
            $model->relateRefundApplyId = $map['relate_refund_apply_id'];
        }
        if (isset($map['user_id_list'])) {
            if (!empty($map['user_id_list'])) {
                $model->userIdList = $map['user_id_list'];
            }
        }

        return $model;
    }
}
