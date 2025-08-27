<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Dara\Model;

class IntlFlightRefundApplyShrinkRequest extends Model
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
     * @var string
     */
    public $refundSegmentListShrink;

    /**
     * @var string
     */
    public $selectedPassengersShrink;
    protected $_name = [
        'orderId' => 'order_id',
        'outOrderId' => 'out_order_id',
        'outRefundApplyId' => 'out_refund_apply_id',
        'passengerJourneyGroupKey' => 'passenger_journey_group_key',
        'refundReasonCode' => 'refund_reason_code',
        'refundSegmentListShrink' => 'refund_segment_list',
        'selectedPassengersShrink' => 'selected_passengers',
    ];

    public function validate()
    {
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

        if (null !== $this->refundSegmentListShrink) {
            $res['refund_segment_list'] = $this->refundSegmentListShrink;
        }

        if (null !== $this->selectedPassengersShrink) {
            $res['selected_passengers'] = $this->selectedPassengersShrink;
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
            $model->refundSegmentListShrink = $map['refund_segment_list'];
        }

        if (isset($map['selected_passengers'])) {
            $model->selectedPassengersShrink = $map['selected_passengers'];
        }

        return $model;
    }
}
