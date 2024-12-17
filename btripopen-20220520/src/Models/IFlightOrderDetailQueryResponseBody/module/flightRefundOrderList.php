<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\IFlightOrderDetailQueryResponseBody\module;

use AlibabaCloud\SDK\BtripOpen\V20220520\Models\IFlightOrderDetailQueryResponseBody\module\flightRefundOrderList\flightOrderRefundTicketList;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\IFlightOrderDetailQueryResponseBody\module\flightRefundOrderList\flightPassengerFee;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\IFlightOrderDetailQueryResponseBody\module\flightRefundOrderList\flightRefundSegmentList;
use AlibabaCloud\Tea\Model;

class flightRefundOrderList extends Model
{
    /**
     * @var int
     */
    public $corpRefundAmount;

    /**
     * @var flightOrderRefundTicketList[]
     */
    public $flightOrderRefundTicketList;

    /**
     * @var flightPassengerFee[]
     */
    public $flightPassengerFee;

    /**
     * @var flightRefundSegmentList[]
     */
    public $flightRefundSegmentList;

    /**
     * @var string[]
     */
    public $passengerList;

    /**
     * @var int
     */
    public $personRefundAmount;

    /**
     * @example 1006200138737069
     *
     * @var int
     */
    public $refundApplyId;

    /**
     * @var int
     */
    public $refundHandFee;

    /**
     * @example 3
     *
     * @var int
     */
    public $refundOrderStatus;

    /**
     * @var int
     */
    public $refundServiceFee;

    /**
     * @var int
     */
    public $refundTotalAmount;

    /**
     * @var int[]
     */
    public $relateModifyApplyId;

    /**
     * @example 10062001387370
     *
     * @var int
     */
    public $relateRefundApplyId;

    /**
     * @var bool
     */
    public $repeatRefund;

    /**
     * @example 2024-10-26 11:25:00
     *
     * @var string
     */
    public $submitRefundTime;

    /**
     * @var bool
     */
    public $voluntary;
    protected $_name = [
        'corpRefundAmount'            => 'corp_refund_Amount',
        'flightOrderRefundTicketList' => 'flight_order_refund_ticket_list',
        'flightPassengerFee'          => 'flight_passenger_fee',
        'flightRefundSegmentList'     => 'flight_refund_segment_list',
        'passengerList'               => 'passenger_list',
        'personRefundAmount'          => 'person_refund_Amount',
        'refundApplyId'               => 'refund_apply_id',
        'refundHandFee'               => 'refund_hand_fee',
        'refundOrderStatus'           => 'refund_order_status',
        'refundServiceFee'            => 'refund_service_fee',
        'refundTotalAmount'           => 'refund_total_Amount',
        'relateModifyApplyId'         => 'relate_modify_apply_id',
        'relateRefundApplyId'         => 'relate_refund_apply_id',
        'repeatRefund'                => 'repeat_refund',
        'submitRefundTime'            => 'submit_refund_time',
        'voluntary'                   => 'voluntary',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->corpRefundAmount) {
            $res['corp_refund_Amount'] = $this->corpRefundAmount;
        }
        if (null !== $this->flightOrderRefundTicketList) {
            $res['flight_order_refund_ticket_list'] = [];
            if (null !== $this->flightOrderRefundTicketList && \is_array($this->flightOrderRefundTicketList)) {
                $n = 0;
                foreach ($this->flightOrderRefundTicketList as $item) {
                    $res['flight_order_refund_ticket_list'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->flightPassengerFee) {
            $res['flight_passenger_fee'] = [];
            if (null !== $this->flightPassengerFee && \is_array($this->flightPassengerFee)) {
                $n = 0;
                foreach ($this->flightPassengerFee as $item) {
                    $res['flight_passenger_fee'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (null !== $this->passengerList) {
            $res['passenger_list'] = $this->passengerList;
        }
        if (null !== $this->personRefundAmount) {
            $res['person_refund_Amount'] = $this->personRefundAmount;
        }
        if (null !== $this->refundApplyId) {
            $res['refund_apply_id'] = $this->refundApplyId;
        }
        if (null !== $this->refundHandFee) {
            $res['refund_hand_fee'] = $this->refundHandFee;
        }
        if (null !== $this->refundOrderStatus) {
            $res['refund_order_status'] = $this->refundOrderStatus;
        }
        if (null !== $this->refundServiceFee) {
            $res['refund_service_fee'] = $this->refundServiceFee;
        }
        if (null !== $this->refundTotalAmount) {
            $res['refund_total_Amount'] = $this->refundTotalAmount;
        }
        if (null !== $this->relateModifyApplyId) {
            $res['relate_modify_apply_id'] = $this->relateModifyApplyId;
        }
        if (null !== $this->relateRefundApplyId) {
            $res['relate_refund_apply_id'] = $this->relateRefundApplyId;
        }
        if (null !== $this->repeatRefund) {
            $res['repeat_refund'] = $this->repeatRefund;
        }
        if (null !== $this->submitRefundTime) {
            $res['submit_refund_time'] = $this->submitRefundTime;
        }
        if (null !== $this->voluntary) {
            $res['voluntary'] = $this->voluntary;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return flightRefundOrderList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['corp_refund_Amount'])) {
            $model->corpRefundAmount = $map['corp_refund_Amount'];
        }
        if (isset($map['flight_order_refund_ticket_list'])) {
            if (!empty($map['flight_order_refund_ticket_list'])) {
                $model->flightOrderRefundTicketList = [];
                $n                                  = 0;
                foreach ($map['flight_order_refund_ticket_list'] as $item) {
                    $model->flightOrderRefundTicketList[$n++] = null !== $item ? flightOrderRefundTicketList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['flight_passenger_fee'])) {
            if (!empty($map['flight_passenger_fee'])) {
                $model->flightPassengerFee = [];
                $n                         = 0;
                foreach ($map['flight_passenger_fee'] as $item) {
                    $model->flightPassengerFee[$n++] = null !== $item ? flightPassengerFee::fromMap($item) : $item;
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
        if (isset($map['passenger_list'])) {
            if (!empty($map['passenger_list'])) {
                $model->passengerList = $map['passenger_list'];
            }
        }
        if (isset($map['person_refund_Amount'])) {
            $model->personRefundAmount = $map['person_refund_Amount'];
        }
        if (isset($map['refund_apply_id'])) {
            $model->refundApplyId = $map['refund_apply_id'];
        }
        if (isset($map['refund_hand_fee'])) {
            $model->refundHandFee = $map['refund_hand_fee'];
        }
        if (isset($map['refund_order_status'])) {
            $model->refundOrderStatus = $map['refund_order_status'];
        }
        if (isset($map['refund_service_fee'])) {
            $model->refundServiceFee = $map['refund_service_fee'];
        }
        if (isset($map['refund_total_Amount'])) {
            $model->refundTotalAmount = $map['refund_total_Amount'];
        }
        if (isset($map['relate_modify_apply_id'])) {
            if (!empty($map['relate_modify_apply_id'])) {
                $model->relateModifyApplyId = $map['relate_modify_apply_id'];
            }
        }
        if (isset($map['relate_refund_apply_id'])) {
            $model->relateRefundApplyId = $map['relate_refund_apply_id'];
        }
        if (isset($map['repeat_refund'])) {
            $model->repeatRefund = $map['repeat_refund'];
        }
        if (isset($map['submit_refund_time'])) {
            $model->submitRefundTime = $map['submit_refund_time'];
        }
        if (isset($map['voluntary'])) {
            $model->voluntary = $map['voluntary'];
        }

        return $model;
    }
}
