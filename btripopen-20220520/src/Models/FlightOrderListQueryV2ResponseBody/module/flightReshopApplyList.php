<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightOrderListQueryV2ResponseBody\module;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightOrderListQueryV2ResponseBody\module\flightReshopApplyList\flightReshopApplyTicketList;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightOrderListQueryV2ResponseBody\module\flightReshopApplyList\flightReshopSegmentList;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightOrderListQueryV2ResponseBody\module\flightReshopApplyList\flightReshopUserFeeList;

class flightReshopApplyList extends Model
{
    /**
     * @var flightReshopApplyTicketList[]
     */
    public $flightReshopApplyTicketList;

    /**
     * @var flightReshopSegmentList[]
     */
    public $flightReshopSegmentList;

    /**
     * @var flightReshopUserFeeList[]
     */
    public $flightReshopUserFeeList;

    /**
     * @var int
     */
    public $relateReshopApplyId;

    /**
     * @var int
     */
    public $reshopApplyId;

    /**
     * @var string
     */
    public $reshopApproveId;

    /**
     * @var float
     */
    public $reshopCorpTotalAmount;

    /**
     * @var float
     */
    public $reshopPersonTotalAmount;

    /**
     * @var string
     */
    public $reshopReason;

    /**
     * @var string
     */
    public $reshopReasonCode;

    /**
     * @var float
     */
    public $reshopTotalAmount;

    /**
     * @var string[]
     */
    public $userIdList;
    protected $_name = [
        'flightReshopApplyTicketList' => 'flight_reshop_apply_ticket_list',
        'flightReshopSegmentList' => 'flight_reshop_segment_list',
        'flightReshopUserFeeList' => 'flight_reshop_user_fee_list',
        'relateReshopApplyId' => 'relate_reshop_apply_id',
        'reshopApplyId' => 'reshop_apply_id',
        'reshopApproveId' => 'reshop_approve_id',
        'reshopCorpTotalAmount' => 'reshop_corp_total_amount',
        'reshopPersonTotalAmount' => 'reshop_person_total_amount',
        'reshopReason' => 'reshop_reason',
        'reshopReasonCode' => 'reshop_reason_code',
        'reshopTotalAmount' => 'reshop_total_amount',
        'userIdList' => 'user_id_list',
    ];

    public function validate()
    {
        if (\is_array($this->flightReshopApplyTicketList)) {
            Model::validateArray($this->flightReshopApplyTicketList);
        }
        if (\is_array($this->flightReshopSegmentList)) {
            Model::validateArray($this->flightReshopSegmentList);
        }
        if (\is_array($this->flightReshopUserFeeList)) {
            Model::validateArray($this->flightReshopUserFeeList);
        }
        if (\is_array($this->userIdList)) {
            Model::validateArray($this->userIdList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->flightReshopApplyTicketList) {
            if (\is_array($this->flightReshopApplyTicketList)) {
                $res['flight_reshop_apply_ticket_list'] = [];
                $n1 = 0;
                foreach ($this->flightReshopApplyTicketList as $item1) {
                    $res['flight_reshop_apply_ticket_list'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->flightReshopSegmentList) {
            if (\is_array($this->flightReshopSegmentList)) {
                $res['flight_reshop_segment_list'] = [];
                $n1 = 0;
                foreach ($this->flightReshopSegmentList as $item1) {
                    $res['flight_reshop_segment_list'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->flightReshopUserFeeList) {
            if (\is_array($this->flightReshopUserFeeList)) {
                $res['flight_reshop_user_fee_list'] = [];
                $n1 = 0;
                foreach ($this->flightReshopUserFeeList as $item1) {
                    $res['flight_reshop_user_fee_list'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->relateReshopApplyId) {
            $res['relate_reshop_apply_id'] = $this->relateReshopApplyId;
        }

        if (null !== $this->reshopApplyId) {
            $res['reshop_apply_id'] = $this->reshopApplyId;
        }

        if (null !== $this->reshopApproveId) {
            $res['reshop_approve_id'] = $this->reshopApproveId;
        }

        if (null !== $this->reshopCorpTotalAmount) {
            $res['reshop_corp_total_amount'] = $this->reshopCorpTotalAmount;
        }

        if (null !== $this->reshopPersonTotalAmount) {
            $res['reshop_person_total_amount'] = $this->reshopPersonTotalAmount;
        }

        if (null !== $this->reshopReason) {
            $res['reshop_reason'] = $this->reshopReason;
        }

        if (null !== $this->reshopReasonCode) {
            $res['reshop_reason_code'] = $this->reshopReasonCode;
        }

        if (null !== $this->reshopTotalAmount) {
            $res['reshop_total_amount'] = $this->reshopTotalAmount;
        }

        if (null !== $this->userIdList) {
            if (\is_array($this->userIdList)) {
                $res['user_id_list'] = [];
                $n1 = 0;
                foreach ($this->userIdList as $item1) {
                    $res['user_id_list'][$n1++] = $item1;
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
        if (isset($map['flight_reshop_apply_ticket_list'])) {
            if (!empty($map['flight_reshop_apply_ticket_list'])) {
                $model->flightReshopApplyTicketList = [];
                $n1 = 0;
                foreach ($map['flight_reshop_apply_ticket_list'] as $item1) {
                    $model->flightReshopApplyTicketList[$n1++] = flightReshopApplyTicketList::fromMap($item1);
                }
            }
        }

        if (isset($map['flight_reshop_segment_list'])) {
            if (!empty($map['flight_reshop_segment_list'])) {
                $model->flightReshopSegmentList = [];
                $n1 = 0;
                foreach ($map['flight_reshop_segment_list'] as $item1) {
                    $model->flightReshopSegmentList[$n1++] = flightReshopSegmentList::fromMap($item1);
                }
            }
        }

        if (isset($map['flight_reshop_user_fee_list'])) {
            if (!empty($map['flight_reshop_user_fee_list'])) {
                $model->flightReshopUserFeeList = [];
                $n1 = 0;
                foreach ($map['flight_reshop_user_fee_list'] as $item1) {
                    $model->flightReshopUserFeeList[$n1++] = flightReshopUserFeeList::fromMap($item1);
                }
            }
        }

        if (isset($map['relate_reshop_apply_id'])) {
            $model->relateReshopApplyId = $map['relate_reshop_apply_id'];
        }

        if (isset($map['reshop_apply_id'])) {
            $model->reshopApplyId = $map['reshop_apply_id'];
        }

        if (isset($map['reshop_approve_id'])) {
            $model->reshopApproveId = $map['reshop_approve_id'];
        }

        if (isset($map['reshop_corp_total_amount'])) {
            $model->reshopCorpTotalAmount = $map['reshop_corp_total_amount'];
        }

        if (isset($map['reshop_person_total_amount'])) {
            $model->reshopPersonTotalAmount = $map['reshop_person_total_amount'];
        }

        if (isset($map['reshop_reason'])) {
            $model->reshopReason = $map['reshop_reason'];
        }

        if (isset($map['reshop_reason_code'])) {
            $model->reshopReasonCode = $map['reshop_reason_code'];
        }

        if (isset($map['reshop_total_amount'])) {
            $model->reshopTotalAmount = $map['reshop_total_amount'];
        }

        if (isset($map['user_id_list'])) {
            if (!empty($map['user_id_list'])) {
                $model->userIdList = [];
                $n1 = 0;
                foreach ($map['user_id_list'] as $item1) {
                    $model->userIdList[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
