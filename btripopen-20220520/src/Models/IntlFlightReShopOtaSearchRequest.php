<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightReShopOtaSearchRequest\searchJourneys;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightReShopOtaSearchRequest\selectedPassengers;

class IntlFlightReShopOtaSearchRequest extends Model
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
     * @var searchJourneys[]
     */
    public $searchJourneys;

    /**
     * @var selectedPassengers[]
     */
    public $selectedPassengers;

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
        'searchJourneys' => 'search_journeys',
        'selectedPassengers' => 'selected_passengers',
        'token' => 'token',
    ];

    public function validate()
    {
        if (\is_array($this->searchJourneys)) {
            Model::validateArray($this->searchJourneys);
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

        if (null !== $this->outWheelSearch) {
            $res['out_wheel_search'] = $this->outWheelSearch;
        }

        if (null !== $this->passengerJourneyGroupKey) {
            $res['passenger_journey_group_key'] = $this->passengerJourneyGroupKey;
        }

        if (null !== $this->reShopReasonCode) {
            $res['re_shop_reason_code'] = $this->reShopReasonCode;
        }

        if (null !== $this->searchJourneys) {
            if (\is_array($this->searchJourneys)) {
                $res['search_journeys'] = [];
                $n1 = 0;
                foreach ($this->searchJourneys as $item1) {
                    $res['search_journeys'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
            if (!empty($map['search_journeys'])) {
                $model->searchJourneys = [];
                $n1 = 0;
                foreach ($map['search_journeys'] as $item1) {
                    $model->searchJourneys[$n1] = searchJourneys::fromMap($item1);
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

        if (isset($map['token'])) {
            $model->token = $map['token'];
        }

        return $model;
    }
}
