<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\IFlightOrderListQueryResponseBody\module;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\IFlightOrderListQueryResponseBody\module\flightRefundOrderList\flightOrderRefundTicketList;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\IFlightOrderListQueryResponseBody\module\flightRefundOrderList\flightRefundSegmentList;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\IFlightOrderListQueryResponseBody\module\flightRefundOrderList\passengerFee;

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
        'corpRefundAmount' => 'corp_refund_Amount',
        'flightOrderRefundTicketList' => 'flight_order_refund_ticket_list',
        'flightRefundSegmentList' => 'flight_refund_segment_list',
        'passengerFee' => 'passenger_fee',
        'passengerInfo' => 'passenger_info',
        'personRefundAmount' => 'person_refund_Amount',
        'refundAmount' => 'refund_Amount',
        'refundApplyId' => 'refund_apply_id',
        'refundHandFee' => 'refund_hand_fee',
        'serviceFee' => 'service_fee',
    ];

    public function validate()
    {
        if (\is_array($this->flightOrderRefundTicketList)) {
            Model::validateArray($this->flightOrderRefundTicketList);
        }
        if (\is_array($this->flightRefundSegmentList)) {
            Model::validateArray($this->flightRefundSegmentList);
        }
        if (\is_array($this->passengerFee)) {
            Model::validateArray($this->passengerFee);
        }
        if (\is_array($this->passengerInfo)) {
            Model::validateArray($this->passengerInfo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->corpRefundAmount) {
            $res['corp_refund_Amount'] = $this->corpRefundAmount;
        }

        if (null !== $this->flightOrderRefundTicketList) {
            if (\is_array($this->flightOrderRefundTicketList)) {
                $res['flight_order_refund_ticket_list'] = [];
                $n1 = 0;
                foreach ($this->flightOrderRefundTicketList as $item1) {
                    $res['flight_order_refund_ticket_list'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

        if (null !== $this->passengerFee) {
            if (\is_array($this->passengerFee)) {
                $res['passenger_fee'] = [];
                $n1 = 0;
                foreach ($this->passengerFee as $item1) {
                    $res['passenger_fee'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->passengerInfo) {
            if (\is_array($this->passengerInfo)) {
                $res['passenger_info'] = [];
                $n1 = 0;
                foreach ($this->passengerInfo as $item1) {
                    $res['passenger_info'][$n1] = $item1;
                    ++$n1;
                }
            }
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['corp_refund_Amount'])) {
            $model->corpRefundAmount = $map['corp_refund_Amount'];
        }

        if (isset($map['flight_order_refund_ticket_list'])) {
            if (!empty($map['flight_order_refund_ticket_list'])) {
                $model->flightOrderRefundTicketList = [];
                $n1 = 0;
                foreach ($map['flight_order_refund_ticket_list'] as $item1) {
                    $model->flightOrderRefundTicketList[$n1] = flightOrderRefundTicketList::fromMap($item1);
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

        if (isset($map['passenger_fee'])) {
            if (!empty($map['passenger_fee'])) {
                $model->passengerFee = [];
                $n1 = 0;
                foreach ($map['passenger_fee'] as $item1) {
                    $model->passengerFee[$n1] = passengerFee::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['passenger_info'])) {
            if (!empty($map['passenger_info'])) {
                $model->passengerInfo = [];
                $n1 = 0;
                foreach ($map['passenger_info'] as $item1) {
                    $model->passengerInfo[$n1] = $item1;
                    ++$n1;
                }
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
