<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Dara\Model;

class IntlFlightReShopApplyShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $asyncApplyKey;

    /**
     * @var bool
     */
    public $asyncApplyMode;

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
    public $outReShopApplyId;

    /**
     * @var string
     */
    public $passengerJourneyGroupKey;

    /**
     * @var string
     */
    public $reShopReasonCode;

    /**
     * @var string
     */
    public $selectedJourneysShrink;

    /**
     * @var string
     */
    public $selectedPassengersShrink;

    /**
     * @var string
     */
    public $userIntentionMemo;
    protected $_name = [
        'asyncApplyKey' => 'async_apply_key',
        'asyncApplyMode' => 'async_apply_mode',
        'orderId' => 'order_id',
        'outOrderId' => 'out_order_id',
        'outReShopApplyId' => 'out_re_shop_apply_id',
        'passengerJourneyGroupKey' => 'passenger_journey_group_key',
        'reShopReasonCode' => 're_shop_reason_code',
        'selectedJourneysShrink' => 'selected_journeys',
        'selectedPassengersShrink' => 'selected_passengers',
        'userIntentionMemo' => 'user_intention_memo',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->asyncApplyKey) {
            $res['async_apply_key'] = $this->asyncApplyKey;
        }

        if (null !== $this->asyncApplyMode) {
            $res['async_apply_mode'] = $this->asyncApplyMode;
        }

        if (null !== $this->orderId) {
            $res['order_id'] = $this->orderId;
        }

        if (null !== $this->outOrderId) {
            $res['out_order_id'] = $this->outOrderId;
        }

        if (null !== $this->outReShopApplyId) {
            $res['out_re_shop_apply_id'] = $this->outReShopApplyId;
        }

        if (null !== $this->passengerJourneyGroupKey) {
            $res['passenger_journey_group_key'] = $this->passengerJourneyGroupKey;
        }

        if (null !== $this->reShopReasonCode) {
            $res['re_shop_reason_code'] = $this->reShopReasonCode;
        }

        if (null !== $this->selectedJourneysShrink) {
            $res['selected_journeys'] = $this->selectedJourneysShrink;
        }

        if (null !== $this->selectedPassengersShrink) {
            $res['selected_passengers'] = $this->selectedPassengersShrink;
        }

        if (null !== $this->userIntentionMemo) {
            $res['user_intention_memo'] = $this->userIntentionMemo;
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
        if (isset($map['async_apply_key'])) {
            $model->asyncApplyKey = $map['async_apply_key'];
        }

        if (isset($map['async_apply_mode'])) {
            $model->asyncApplyMode = $map['async_apply_mode'];
        }

        if (isset($map['order_id'])) {
            $model->orderId = $map['order_id'];
        }

        if (isset($map['out_order_id'])) {
            $model->outOrderId = $map['out_order_id'];
        }

        if (isset($map['out_re_shop_apply_id'])) {
            $model->outReShopApplyId = $map['out_re_shop_apply_id'];
        }

        if (isset($map['passenger_journey_group_key'])) {
            $model->passengerJourneyGroupKey = $map['passenger_journey_group_key'];
        }

        if (isset($map['re_shop_reason_code'])) {
            $model->reShopReasonCode = $map['re_shop_reason_code'];
        }

        if (isset($map['selected_journeys'])) {
            $model->selectedJourneysShrink = $map['selected_journeys'];
        }

        if (isset($map['selected_passengers'])) {
            $model->selectedPassengersShrink = $map['selected_passengers'];
        }

        if (isset($map['user_intention_memo'])) {
            $model->userIntentionMemo = $map['user_intention_memo'];
        }

        return $model;
    }
}
