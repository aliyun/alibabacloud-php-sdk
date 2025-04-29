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
     * @var bool
     */
    public $directOnly;

    /**
     * @var string
     */
    public $isvName;

    /**
     * @var string
     */
    public $language;

    /**
     * @var bool
     */
    public $needShareFlight;

    /**
     * @var searchJourneys[]
     */
    public $searchJourneys;

    /**
     * @var searchPassengerList[]
     */
    public $searchPassengerList;

    /**
     * @var string
     */
    public $supplierCode;

    /**
     * @var int
     */
    public $tripType;
    protected $_name = [
        'btripUserId' => 'btrip_user_id',
        'buyerName' => 'buyer_name',
        'cabinType' => 'cabin_type',
        'directOnly' => 'direct_only',
        'isvName' => 'isv_name',
        'language' => 'language',
        'needShareFlight' => 'need_share_flight',
        'searchJourneys' => 'search_journeys',
        'searchPassengerList' => 'search_passenger_list',
        'supplierCode' => 'supplier_code',
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

        if (null !== $this->directOnly) {
            $res['direct_only'] = $this->directOnly;
        }

        if (null !== $this->isvName) {
            $res['isv_name'] = $this->isvName;
        }

        if (null !== $this->language) {
            $res['language'] = $this->language;
        }

        if (null !== $this->needShareFlight) {
            $res['need_share_flight'] = $this->needShareFlight;
        }

        if (null !== $this->searchJourneys) {
            if (\is_array($this->searchJourneys)) {
                $res['search_journeys'] = [];
                $n1 = 0;
                foreach ($this->searchJourneys as $item1) {
                    $res['search_journeys'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->searchPassengerList) {
            if (\is_array($this->searchPassengerList)) {
                $res['search_passenger_list'] = [];
                $n1 = 0;
                foreach ($this->searchPassengerList as $item1) {
                    $res['search_passenger_list'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->supplierCode) {
            $res['supplier_code'] = $this->supplierCode;
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

        if (isset($map['direct_only'])) {
            $model->directOnly = $map['direct_only'];
        }

        if (isset($map['isv_name'])) {
            $model->isvName = $map['isv_name'];
        }

        if (isset($map['language'])) {
            $model->language = $map['language'];
        }

        if (isset($map['need_share_flight'])) {
            $model->needShareFlight = $map['need_share_flight'];
        }

        if (isset($map['search_journeys'])) {
            if (!empty($map['search_journeys'])) {
                $model->searchJourneys = [];
                $n1 = 0;
                foreach ($map['search_journeys'] as $item1) {
                    $model->searchJourneys[$n1++] = searchJourneys::fromMap($item1);
                }
            }
        }

        if (isset($map['search_passenger_list'])) {
            if (!empty($map['search_passenger_list'])) {
                $model->searchPassengerList = [];
                $n1 = 0;
                foreach ($map['search_passenger_list'] as $item1) {
                    $model->searchPassengerList[$n1++] = searchPassengerList::fromMap($item1);
                }
            }
        }

        if (isset($map['supplier_code'])) {
            $model->supplierCode = $map['supplier_code'];
        }

        if (isset($map['trip_type'])) {
            $model->tripType = $map['trip_type'];
        }

        return $model;
    }
}
