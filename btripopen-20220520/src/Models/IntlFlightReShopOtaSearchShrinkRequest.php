<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Dara\Model;

class IntlFlightReShopOtaSearchShrinkRequest extends Model
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
     * @var bool
     */
    public $outWheelSearch;

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
    public $searchJourneysShrink;

    /**
     * @var string
     */
    public $selectedPassengersShrink;

    /**
     * @var string
     */
    public $token;
    protected $_name = [
        'orderId' => 'order_id',
        'outOrderId' => 'out_order_id',
        'outWheelSearch' => 'out_wheel_search',
        'passengerJourneyGroupKey' => 'passenger_journey_group_key',
        'reShopReasonCode' => 're_shop_reason_code',
        'searchJourneysShrink' => 'search_journeys',
        'selectedPassengersShrink' => 'selected_passengers',
        'token' => 'token',
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

        if (null !== $this->outWheelSearch) {
            $res['out_wheel_search'] = $this->outWheelSearch;
        }

        if (null !== $this->passengerJourneyGroupKey) {
            $res['passenger_journey_group_key'] = $this->passengerJourneyGroupKey;
        }

        if (null !== $this->reShopReasonCode) {
            $res['re_shop_reason_code'] = $this->reShopReasonCode;
        }

        if (null !== $this->searchJourneysShrink) {
            $res['search_journeys'] = $this->searchJourneysShrink;
        }

        if (null !== $this->selectedPassengersShrink) {
            $res['selected_passengers'] = $this->selectedPassengersShrink;
        }

        if (null !== $this->token) {
            $res['token'] = $this->token;
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

        if (isset($map['out_wheel_search'])) {
            $model->outWheelSearch = $map['out_wheel_search'];
        }

        if (isset($map['passenger_journey_group_key'])) {
            $model->passengerJourneyGroupKey = $map['passenger_journey_group_key'];
        }

        if (isset($map['re_shop_reason_code'])) {
            $model->reShopReasonCode = $map['re_shop_reason_code'];
        }

        if (isset($map['search_journeys'])) {
            $model->searchJourneysShrink = $map['search_journeys'];
        }

        if (isset($map['selected_passengers'])) {
            $model->selectedPassengersShrink = $map['selected_passengers'];
        }

        if (isset($map['token'])) {
            $model->token = $map['token'];
        }

        return $model;
    }
}
