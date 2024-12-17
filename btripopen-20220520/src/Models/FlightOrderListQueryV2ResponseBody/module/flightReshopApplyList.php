<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightOrderListQueryV2ResponseBody\module;

use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightOrderListQueryV2ResponseBody\module\flightReshopApplyList\flightReshopApplyTicketList;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightOrderListQueryV2ResponseBody\module\flightReshopApplyList\flightReshopSegmentList;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightOrderListQueryV2ResponseBody\module\flightReshopApplyList\flightReshopUserFeeList;
use AlibabaCloud\Tea\Model;

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
     * @example 100231231
     *
     * @var int
     */
    public $relateReshopApplyId;

    /**
     * @example 123232323
     *
     * @var int
     */
    public $reshopApplyId;

    /**
     * @example 122312
     *
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
     * @example 1002
     *
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
        'flightReshopSegmentList'     => 'flight_reshop_segment_list',
        'flightReshopUserFeeList'     => 'flight_reshop_user_fee_list',
        'relateReshopApplyId'         => 'relate_reshop_apply_id',
        'reshopApplyId'               => 'reshop_apply_id',
        'reshopApproveId'             => 'reshop_approve_id',
        'reshopCorpTotalAmount'       => 'reshop_corp_total_amount',
        'reshopPersonTotalAmount'     => 'reshop_person_total_amount',
        'reshopReason'                => 'reshop_reason',
        'reshopReasonCode'            => 'reshop_reason_code',
        'reshopTotalAmount'           => 'reshop_total_amount',
        'userIdList'                  => 'user_id_list',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->flightReshopApplyTicketList) {
            $res['flight_reshop_apply_ticket_list'] = [];
            if (null !== $this->flightReshopApplyTicketList && \is_array($this->flightReshopApplyTicketList)) {
                $n = 0;
                foreach ($this->flightReshopApplyTicketList as $item) {
                    $res['flight_reshop_apply_ticket_list'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->flightReshopSegmentList) {
            $res['flight_reshop_segment_list'] = [];
            if (null !== $this->flightReshopSegmentList && \is_array($this->flightReshopSegmentList)) {
                $n = 0;
                foreach ($this->flightReshopSegmentList as $item) {
                    $res['flight_reshop_segment_list'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->flightReshopUserFeeList) {
            $res['flight_reshop_user_fee_list'] = [];
            if (null !== $this->flightReshopUserFeeList && \is_array($this->flightReshopUserFeeList)) {
                $n = 0;
                foreach ($this->flightReshopUserFeeList as $item) {
                    $res['flight_reshop_user_fee_list'][$n++] = null !== $item ? $item->toMap() : $item;
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
            $res['user_id_list'] = $this->userIdList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return flightReshopApplyList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['flight_reshop_apply_ticket_list'])) {
            if (!empty($map['flight_reshop_apply_ticket_list'])) {
                $model->flightReshopApplyTicketList = [];
                $n                                  = 0;
                foreach ($map['flight_reshop_apply_ticket_list'] as $item) {
                    $model->flightReshopApplyTicketList[$n++] = null !== $item ? flightReshopApplyTicketList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['flight_reshop_segment_list'])) {
            if (!empty($map['flight_reshop_segment_list'])) {
                $model->flightReshopSegmentList = [];
                $n                              = 0;
                foreach ($map['flight_reshop_segment_list'] as $item) {
                    $model->flightReshopSegmentList[$n++] = null !== $item ? flightReshopSegmentList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['flight_reshop_user_fee_list'])) {
            if (!empty($map['flight_reshop_user_fee_list'])) {
                $model->flightReshopUserFeeList = [];
                $n                              = 0;
                foreach ($map['flight_reshop_user_fee_list'] as $item) {
                    $model->flightReshopUserFeeList[$n++] = null !== $item ? flightReshopUserFeeList::fromMap($item) : $item;
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
                $model->userIdList = $map['user_id_list'];
            }
        }

        return $model;
    }
}
