<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\IFlightOrderListQueryResponseBody\module;

use AlibabaCloud\SDK\BtripOpen\V20220520\Models\IFlightOrderListQueryResponseBody\module\flightRefundOrderList\flightOrderRefundTicketList;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\IFlightOrderListQueryResponseBody\module\flightRefundOrderList\flightRefundSegmentList;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\IFlightOrderListQueryResponseBody\module\flightRefundOrderList\passengerFee;
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
     * @var flightRefundSegmentList[]
     */
    public $flightRefundSegmentList;

    /**
     * @var passengerFee[]
     */
    public $passengerFee;

    /**
     * @var string[]
     */
    public $passengerInfo;

    /**
     * @var int
     */
    public $personRefundAmount;

    /**
     * @var int
     */
    public $refundAmount;

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
     * @var int
     */
    public $serviceFee;
    protected $_name = [
        'corpRefundAmount'            => 'corp_refund_Amount',
        'flightOrderRefundTicketList' => 'flight_order_refund_ticket_list',
        'flightRefundSegmentList'     => 'flight_refund_segment_list',
        'passengerFee'                => 'passenger_fee',
        'passengerInfo'               => 'passenger_info',
        'personRefundAmount'          => 'person_refund_Amount',
        'refundAmount'                => 'refund_Amount',
        'refundApplyId'               => 'refund_apply_id',
        'refundHandFee'               => 'refund_hand_fee',
        'serviceFee'                  => 'service_fee',
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
        if (null !== $this->flightRefundSegmentList) {
            $res['flight_refund_segment_list'] = [];
            if (null !== $this->flightRefundSegmentList && \is_array($this->flightRefundSegmentList)) {
                $n = 0;
                foreach ($this->flightRefundSegmentList as $item) {
                    $res['flight_refund_segment_list'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->passengerFee) {
            $res['passenger_fee'] = [];
            if (null !== $this->passengerFee && \is_array($this->passengerFee)) {
                $n = 0;
                foreach ($this->passengerFee as $item) {
                    $res['passenger_fee'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->passengerInfo) {
            $res['passenger_info'] = $this->passengerInfo;
        }
        if (null !== $this->personRefundAmount) {
            $res['person_refund_Amount'] = $this->personRefundAmount;
        }
        if (null !== $this->refundAmount) {
            $res['refund_Amount'] = $this->refundAmount;
        }
        if (null !== $this->refundApplyId) {
            $res['refund_apply_id'] = $this->refundApplyId;
        }
        if (null !== $this->refundHandFee) {
            $res['refund_hand_fee'] = $this->refundHandFee;
        }
        if (null !== $this->serviceFee) {
            $res['service_fee'] = $this->serviceFee;
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
        if (isset($map['flight_refund_segment_list'])) {
            if (!empty($map['flight_refund_segment_list'])) {
                $model->flightRefundSegmentList = [];
                $n                              = 0;
                foreach ($map['flight_refund_segment_list'] as $item) {
                    $model->flightRefundSegmentList[$n++] = null !== $item ? flightRefundSegmentList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['passenger_fee'])) {
            if (!empty($map['passenger_fee'])) {
                $model->passengerFee = [];
                $n                   = 0;
                foreach ($map['passenger_fee'] as $item) {
                    $model->passengerFee[$n++] = null !== $item ? passengerFee::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['passenger_info'])) {
            if (!empty($map['passenger_info'])) {
                $model->passengerInfo = $map['passenger_info'];
            }
        }
        if (isset($map['person_refund_Amount'])) {
            $model->personRefundAmount = $map['person_refund_Amount'];
        }
        if (isset($map['refund_Amount'])) {
            $model->refundAmount = $map['refund_Amount'];
        }
        if (isset($map['refund_apply_id'])) {
            $model->refundApplyId = $map['refund_apply_id'];
        }
        if (isset($map['refund_hand_fee'])) {
            $model->refundHandFee = $map['refund_hand_fee'];
        }
        if (isset($map['service_fee'])) {
            $model->serviceFee = $map['service_fee'];
        }

        return $model;
    }
}
