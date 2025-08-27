<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightReShopApplyRequest\selectedJourneys;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightReShopApplyRequest\selectedPassengers;

class IntlFlightReShopApplyRequest extends Model
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
     * @var selectedJourneys[]
     */
    public $selectedJourneys;

    /**
     * @var selectedPassengers[]
     */
    public $selectedPassengers;

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
        'selectedJourneys' => 'selected_journeys',
        'selectedPassengers' => 'selected_passengers',
        'userIntentionMemo' => 'user_intention_memo',
    ];

    public function validate()
    {
        if (\is_array($this->selectedJourneys)) {
            Model::validateArray($this->selectedJourneys);
        }
        if (\is_array($this->selectedPassengers)) {
            Model::validateArray($this->selectedPassengers);
        }
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

        if (null !== $this->selectedJourneys) {
            if (\is_array($this->selectedJourneys)) {
                $res['selected_journeys'] = [];
                $n1 = 0;
                foreach ($this->selectedJourneys as $item1) {
                    $res['selected_journeys'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
            if (!empty($map['selected_journeys'])) {
                $model->selectedJourneys = [];
                $n1 = 0;
                foreach ($map['selected_journeys'] as $item1) {
                    $model->selectedJourneys[$n1] = selectedJourneys::fromMap($item1);
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

        if (isset($map['user_intention_memo'])) {
            $model->userIntentionMemo = $map['user_intention_memo'];
        }

        return $model;
    }
}
