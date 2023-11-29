<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightOtaSearchRequest\searchJourneys;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightOtaSearchRequest\searchPassengerList;
use AlibabaCloud\Tea\Model;

class IntlFlightOtaSearchRequest extends Model
{
    /**
     * @example 10023
     *
     * @var string
     */
    public $btripUserId;

    /**
     * @var string
     */
    public $buyerName;

    /**
     * @example 0
     *
     * @var int
     */
    public $cabinType;

    /**
     * @example false
     *
     * @var bool
     */
    public $directOnly;

    /**
     * @example open12igetbis4o07v10B1TlOWcM00
     *
     * @var string
     */
    public $isvName;

    /**
     * @example true
     *
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
     * @example TEST
     *
     * @var string
     */
    public $supplierCode;

    /**
     * @example 1
     *
     * @var int
     */
    public $tripType;
    protected $_name = [
        'btripUserId'         => 'btrip_user_id',
        'buyerName'           => 'buyer_name',
        'cabinType'           => 'cabin_type',
        'directOnly'          => 'direct_only',
        'isvName'             => 'isv_name',
        'needShareFlight'     => 'need_share_flight',
        'searchJourneys'      => 'search_journeys',
        'searchPassengerList' => 'search_passenger_list',
        'supplierCode'        => 'supplier_code',
        'tripType'            => 'trip_type',
    ];

    public function validate()
    {
    }

    public function toMap()
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
        if (null !== $this->needShareFlight) {
            $res['need_share_flight'] = $this->needShareFlight;
        }
        if (null !== $this->searchJourneys) {
            $res['search_journeys'] = [];
            if (null !== $this->searchJourneys && \is_array($this->searchJourneys)) {
                $n = 0;
                foreach ($this->searchJourneys as $item) {
                    $res['search_journeys'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->searchPassengerList) {
            $res['search_passenger_list'] = [];
            if (null !== $this->searchPassengerList && \is_array($this->searchPassengerList)) {
                $n = 0;
                foreach ($this->searchPassengerList as $item) {
                    $res['search_passenger_list'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return IntlFlightOtaSearchRequest
     */
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
        if (isset($map['need_share_flight'])) {
            $model->needShareFlight = $map['need_share_flight'];
        }
        if (isset($map['search_journeys'])) {
            if (!empty($map['search_journeys'])) {
                $model->searchJourneys = [];
                $n                     = 0;
                foreach ($map['search_journeys'] as $item) {
                    $model->searchJourneys[$n++] = null !== $item ? searchJourneys::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['search_passenger_list'])) {
            if (!empty($map['search_passenger_list'])) {
                $model->searchPassengerList = [];
                $n                          = 0;
                foreach ($map['search_passenger_list'] as $item) {
                    $model->searchPassengerList[$n++] = null !== $item ? searchPassengerList::fromMap($item) : $item;
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
