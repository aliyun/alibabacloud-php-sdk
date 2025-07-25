<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightOtaSearchRequest\searchJourneys;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightOtaSearchRequest\searchPassengerList;

class IntlFlightOtaSearchRequest extends Model
{
    /**
     * @var string
     */
    public $btripUserId;

    /**
     * @var string
     */
    public $buyerName;

    /**
     * @var int
     */
    public $cabinType;

    /**
     * @var string
     */
    public $isvName;

    /**
     * @var searchJourneys[]
     */
    public $searchJourneys;

    /**
     * @var searchPassengerList[]
     */
    public $searchPassengerList;

    /**
     * @var int
     */
    public $tripType;
    protected $_name = [
        'btripUserId' => 'btrip_user_id',
        'buyerName' => 'buyer_name',
        'cabinType' => 'cabin_type',
        'isvName' => 'isv_name',
        'searchJourneys' => 'search_journeys',
        'searchPassengerList' => 'search_passenger_list',
        'tripType' => 'trip_type',
    ];

    public function validate()
    {
        if (\is_array($this->searchJourneys)) {
            Model::validateArray($this->searchJourneys);
        }
        if (\is_array($this->searchPassengerList)) {
            Model::validateArray($this->searchPassengerList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->btripUserId) {
            $res['btrip_user_id'] = $this->btripUserId;
        }

        if (null !== $this->buyerName) {
            $res['buyer_name'] = $this->buyerName;
        }

        if (null !== $this->cabinType) {
            $res['cabin_type'] = $this->cabinType;
        }

        if (null !== $this->isvName) {
            $res['isv_name'] = $this->isvName;
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

        if (null !== $this->searchPassengerList) {
            if (\is_array($this->searchPassengerList)) {
                $res['search_passenger_list'] = [];
                $n1 = 0;
                foreach ($this->searchPassengerList as $item1) {
                    $res['search_passenger_list'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->tripType) {
            $res['trip_type'] = $this->tripType;
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
        if (isset($map['btrip_user_id'])) {
            $model->btripUserId = $map['btrip_user_id'];
        }

        if (isset($map['buyer_name'])) {
            $model->buyerName = $map['buyer_name'];
        }

        if (isset($map['cabin_type'])) {
            $model->cabinType = $map['cabin_type'];
        }

        if (isset($map['isv_name'])) {
            $model->isvName = $map['isv_name'];
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

        if (isset($map['search_passenger_list'])) {
            if (!empty($map['search_passenger_list'])) {
                $model->searchPassengerList = [];
                $n1 = 0;
                foreach ($map['search_passenger_list'] as $item1) {
                    $model->searchPassengerList[$n1] = searchPassengerList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['trip_type'])) {
            $model->tripType = $map['trip_type'];
        }

        return $model;
    }
}
