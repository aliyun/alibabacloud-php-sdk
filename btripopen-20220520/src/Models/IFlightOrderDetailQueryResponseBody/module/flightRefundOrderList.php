<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\IFlightOrderDetailQueryResponseBody\module;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\IFlightOrderDetailQueryResponseBody\module\flightRefundOrderList\flightOrderRefundTicketList;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\IFlightOrderDetailQueryResponseBody\module\flightRefundOrderList\flightPassengerFee;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\IFlightOrderDetailQueryResponseBody\module\flightRefundOrderList\flightRefundSegmentList;

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
     * @var int
     */
    public $relateRefundApplyId;

    /**
     * @var bool
     */
    public $repeatRefund;

    /**
     * @var string
     */
    public $submitRefundTime;

    /**
     * @var bool
     */
    public $voluntary;
    protected $_name = [
        'corpRefundAmount' => 'corp_refund_Amount',
        'flightOrderRefundTicketList' => 'flight_order_refund_ticket_list',
        'flightPassengerFee' => 'flight_passenger_fee',
        'flightRefundSegmentList' => 'flight_refund_segment_list',
        'passengerList' => 'passenger_list',
        'personRefundAmount' => 'person_refund_Amount',
        'refundApplyId' => 'refund_apply_id',
        'refundHandFee' => 'refund_hand_fee',
        'refundOrderStatus' => 'refund_order_status',
        'refundServiceFee' => 'refund_service_fee',
        'refundTotalAmount' => 'refund_total_Amount',
        'relateModifyApplyId' => 'relate_modify_apply_id',
        'relateRefundApplyId' => 'relate_refund_apply_id',
        'repeatRefund' => 'repeat_refund',
        'submitRefundTime' => 'submit_refund_time',
        'voluntary' => 'voluntary',
    ];

    public function validate()
    {
        if (\is_array($this->flightOrderRefundTicketList)) {
            Model::validateArray($this->flightOrderRefundTicketList);
        }
        if (\is_array($this->flightPassengerFee)) {
            Model::validateArray($this->flightPassengerFee);
        }
        if (\is_array($this->flightRefundSegmentList)) {
            Model::validateArray($this->flightRefundSegmentList);
        }
        if (\is_array($this->passengerList)) {
            Model::validateArray($this->passengerList);
        }
        if (\is_array($this->relateModifyApplyId)) {
            Model::validateArray($this->relateModifyApplyId);
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
                    $res['flight_order_refund_ticket_list'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->flightPassengerFee) {
            if (\is_array($this->flightPassengerFee)) {
                $res['flight_passenger_fee'] = [];
                $n1 = 0;
                foreach ($this->flightPassengerFee as $item1) {
                    $res['flight_passenger_fee'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->flightRefundSegmentList) {
            if (\is_array($this->flightRefundSegmentList)) {
                $res['flight_refund_segment_list'] = [];
                $n1 = 0;
                foreach ($this->flightRefundSegmentList as $item1) {
                    $res['flight_refund_segment_list'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->passengerList) {
            if (\is_array($this->passengerList)) {
                $res['passenger_list'] = [];
                $n1 = 0;
                foreach ($this->passengerList as $item1) {
                    $res['passenger_list'][$n1++] = $item1;
                }
            }
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
            if (\is_array($this->relateModifyApplyId)) {
                $res['relate_modify_apply_id'] = [];
                $n1 = 0;
                foreach ($this->relateModifyApplyId as $item1) {
                    $res['relate_modify_apply_id'][$n1++] = $item1;
                }
            }
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
                    $model->flightOrderRefundTicketList[$n1++] = flightOrderRefundTicketList::fromMap($item1);
                }
            }
        }

        if (isset($map['flight_passenger_fee'])) {
            if (!empty($map['flight_passenger_fee'])) {
                $model->flightPassengerFee = [];
                $n1 = 0;
                foreach ($map['flight_passenger_fee'] as $item1) {
                    $model->flightPassengerFee[$n1++] = flightPassengerFee::fromMap($item1);
                }
            }
        }

        if (isset($map['flight_refund_segment_list'])) {
            if (!empty($map['flight_refund_segment_list'])) {
                $model->flightRefundSegmentList = [];
                $n1 = 0;
                foreach ($map['flight_refund_segment_list'] as $item1) {
                    $model->flightRefundSegmentList[$n1++] = flightRefundSegmentList::fromMap($item1);
                }
            }
        }

        if (isset($map['passenger_list'])) {
            if (!empty($map['passenger_list'])) {
                $model->passengerList = [];
                $n1 = 0;
                foreach ($map['passenger_list'] as $item1) {
                    $model->passengerList[$n1++] = $item1;
                }
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
                $model->relateModifyApplyId = [];
                $n1 = 0;
                foreach ($map['relate_modify_apply_id'] as $item1) {
                    $model->relateModifyApplyId[$n1++] = $item1;
                }
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
