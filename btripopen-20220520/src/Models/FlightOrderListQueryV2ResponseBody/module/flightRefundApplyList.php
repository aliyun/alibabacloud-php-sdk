<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightOrderListQueryV2ResponseBody\module;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightOrderListQueryV2ResponseBody\module\flightRefundApplyList\flightRefundApplyTicketList;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightOrderListQueryV2ResponseBody\module\flightRefundApplyList\flightRefundSegmentList;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightOrderListQueryV2ResponseBody\module\flightRefundApplyList\flightRefundUserFeeList;

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
     * @var string
     */
    public $refundApplyId;

    /**
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
     * @var string
     */
    public $refundReasonCode;

    /**
     * @var float
     */
    public $refundTotalAmount;

    /**
     * @var string
     */
    public $relateRefundApplyId;

    /**
     * @var string[]
     */
    public $userIdList;
    protected $_name = [
        'flightRefundApplyTicketList' => 'flight_refund_apply_ticket_list',
        'flightRefundSegmentList' => 'flight_refund_segment_list',
        'flightRefundUserFeeList' => 'flight_refund_user_fee_list',
        'refundApplyId' => 'refund_apply_id',
        'refundApproveId' => 'refund_approve_id',
        'refundCorpTotalAmount' => 'refund_corp_total_amount',
        'refundHandFee' => 'refund_hand_fee',
        'refundPersonTotalAmount' => 'refund_person_total_amount',
        'refundReason' => 'refund_reason',
        'refundReasonCode' => 'refund_reason_code',
        'refundTotalAmount' => 'refund_total_amount',
        'relateRefundApplyId' => 'relate_refund_apply_id',
        'userIdList' => 'user_id_list',
    ];

    public function validate()
    {
        if (\is_array($this->flightRefundApplyTicketList)) {
            Model::validateArray($this->flightRefundApplyTicketList);
        }
        if (\is_array($this->flightRefundSegmentList)) {
            Model::validateArray($this->flightRefundSegmentList);
        }
        if (\is_array($this->flightRefundUserFeeList)) {
            Model::validateArray($this->flightRefundUserFeeList);
        }
        if (\is_array($this->userIdList)) {
            Model::validateArray($this->userIdList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->flightRefundApplyTicketList) {
            if (\is_array($this->flightRefundApplyTicketList)) {
                $res['flight_refund_apply_ticket_list'] = [];
                $n1 = 0;
                foreach ($this->flightRefundApplyTicketList as $item1) {
                    $res['flight_refund_apply_ticket_list'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->flightRefundSegmentList) {
            if (\is_array($this->flightRefundSegmentList)) {
                $res['flight_refund_segment_list'] = [];
                $n1 = 0;
                foreach ($this->flightRefundSegmentList as $item1) {
                    $res['flight_refund_segment_list'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->flightRefundUserFeeList) {
            if (\is_array($this->flightRefundUserFeeList)) {
                $res['flight_refund_user_fee_list'] = [];
                $n1 = 0;
                foreach ($this->flightRefundUserFeeList as $item1) {
                    $res['flight_refund_user_fee_list'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
            if (\is_array($this->userIdList)) {
                $res['user_id_list'] = [];
                $n1 = 0;
                foreach ($this->userIdList as $item1) {
                    $res['user_id_list'][$n1] = $item1;
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
        if (isset($map['flight_refund_apply_ticket_list'])) {
            if (!empty($map['flight_refund_apply_ticket_list'])) {
                $model->flightRefundApplyTicketList = [];
                $n1 = 0;
                foreach ($map['flight_refund_apply_ticket_list'] as $item1) {
                    $model->flightRefundApplyTicketList[$n1] = flightRefundApplyTicketList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['flight_refund_segment_list'])) {
            if (!empty($map['flight_refund_segment_list'])) {
                $model->flightRefundSegmentList = [];
                $n1 = 0;
                foreach ($map['flight_refund_segment_list'] as $item1) {
                    $model->flightRefundSegmentList[$n1] = flightRefundSegmentList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['flight_refund_user_fee_list'])) {
            if (!empty($map['flight_refund_user_fee_list'])) {
                $model->flightRefundUserFeeList = [];
                $n1 = 0;
                foreach ($map['flight_refund_user_fee_list'] as $item1) {
                    $model->flightRefundUserFeeList[$n1] = flightRefundUserFeeList::fromMap($item1);
                    ++$n1;
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
                $model->userIdList = [];
                $n1 = 0;
                foreach ($map['user_id_list'] as $item1) {
                    $model->userIdList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
