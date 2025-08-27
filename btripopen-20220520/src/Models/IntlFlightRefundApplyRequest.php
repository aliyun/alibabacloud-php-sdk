<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightRefundApplyRequest\refundSegmentList;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightRefundApplyRequest\selectedPassengers;

class IntlFlightRefundApplyRequest extends Model
{
    /**
     * @var string
     */
    public $orderId;

    /**
     * @var string
     */
    public $outOrderId;

    /**
     * @var string
     */
    public $outRefundApplyId;

    /**
     * @var string
     */
    public $passengerJourneyGroupKey;

    /**
     * @var string
     */
    public $refundReasonCode;

    /**
     * @var refundSegmentList[]
     */
    public $refundSegmentList;

    /**
     * @var selectedPassengers[]
     */
    public $selectedPassengers;
    protected $_name = [
        'orderId' => 'order_id',
        'outOrderId' => 'out_order_id',
        'outRefundApplyId' => 'out_refund_apply_id',
        'passengerJourneyGroupKey' => 'passenger_journey_group_key',
        'refundReasonCode' => 'refund_reason_code',
        'refundSegmentList' => 'refund_segment_list',
        'selectedPassengers' => 'selected_passengers',
    ];

    public function validate()
    {
        if (\is_array($this->refundSegmentList)) {
            Model::validateArray($this->refundSegmentList);
        }
        if (\is_array($this->selectedPassengers)) {
            Model::validateArray($this->selectedPassengers);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->orderId) {
            $res['order_id'] = $this->orderId;
        }

        if (null !== $this->outOrderId) {
            $res['out_order_id'] = $this->outOrderId;
        }

        if (null !== $this->outRefundApplyId) {
            $res['out_refund_apply_id'] = $this->outRefundApplyId;
        }

        if (null !== $this->passengerJourneyGroupKey) {
            $res['passenger_journey_group_key'] = $this->passengerJourneyGroupKey;
        }

        if (null !== $this->refundReasonCode) {
            $res['refund_reason_code'] = $this->refundReasonCode;
        }

        if (null !== $this->refundSegmentList) {
            if (\is_array($this->refundSegmentList)) {
                $res['refund_segment_list'] = [];
                $n1 = 0;
                foreach ($this->refundSegmentList as $item1) {
                    $res['refund_segment_list'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->selectedPassengers) {
            if (\is_array($this->selectedPassengers)) {
                $res['selected_passengers'] = [];
                $n1 = 0;
                foreach ($this->selectedPassengers as $item1) {
                    $res['selected_passengers'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['order_id'])) {
            $model->orderId = $map['order_id'];
        }

        if (isset($map['out_order_id'])) {
            $model->outOrderId = $map['out_order_id'];
        }

        if (isset($map['out_refund_apply_id'])) {
            $model->outRefundApplyId = $map['out_refund_apply_id'];
        }

        if (isset($map['passenger_journey_group_key'])) {
            $model->passengerJourneyGroupKey = $map['passenger_journey_group_key'];
        }

        if (isset($map['refund_reason_code'])) {
            $model->refundReasonCode = $map['refund_reason_code'];
        }

        if (isset($map['refund_segment_list'])) {
            if (!empty($map['refund_segment_list'])) {
                $model->refundSegmentList = [];
                $n1 = 0;
                foreach ($map['refund_segment_list'] as $item1) {
                    $model->refundSegmentList[$n1] = refundSegmentList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['selected_passengers'])) {
            if (!empty($map['selected_passengers'])) {
                $model->selectedPassengers = [];
                $n1 = 0;
                foreach ($map['selected_passengers'] as $item1) {
                    $model->selectedPassengers[$n1] = selectedPassengers::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
