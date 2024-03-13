<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightListingSearchRequest\searchJourneys;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightListingSearchRequest\searchPassengerList;
use AlibabaCloud\Tea\Model;

class IntlFlightListingSearchRequest extends Model
{
    /**
     * @example 10001
     *
     * @var string
     */
    public $btripUserId;

    /**
     * @example ZHANGSAN
     *
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
     * @example TEST
     *
     * @var string
     */
    public $isvName;

    /**
     * @var string
     */
    public $language;

    /**
     * @example true
     *
     * @var bool
     */
    public $needShareFlight;

    /**
     * @example false
     *
     * @var bool
     */
    public $outWheelSearch;

    /**
     * @example 60b412-cc05-4d10-b570-
     *
     * @var string
     */
    public $queryRecordId;

    /**
     * @var searchJourneys[]
     */
    public $searchJourneys;

    /**
     * @example 0
     *
     * @var int
     */
    public $searchMode;

    /**
     * @var searchPassengerList[]
     */
    public $searchPassengerList;

    /**
     * @example JIANHANG
     *
     * @var string
     */
    public $supplierCode;

    /**
     * @example 9960b412-cc05-4d10-b570-93372d816807
     *
     * @var string
     */
    public $token;

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
        'language'            => 'language',
        'needShareFlight'     => 'need_share_flight',
        'outWheelSearch'      => 'out_wheel_search',
        'queryRecordId'       => 'query_record_id',
        'searchJourneys'      => 'search_journeys',
        'searchMode'          => 'search_mode',
        'searchPassengerList' => 'search_passenger_list',
        'supplierCode'        => 'supplier_code',
        'token'               => 'token',
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
        if (null !== $this->language) {
            $res['language'] = $this->language;
        }
        if (null !== $this->needShareFlight) {
            $res['need_share_flight'] = $this->needShareFlight;
        }
        if (null !== $this->outWheelSearch) {
            $res['out_wheel_search'] = $this->outWheelSearch;
        }
        if (null !== $this->queryRecordId) {
            $res['query_record_id'] = $this->queryRecordId;
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
        if (null !== $this->searchMode) {
            $res['search_mode'] = $this->searchMode;
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
        if (null !== $this->token) {
            $res['token'] = $this->token;
        }
        if (null !== $this->tripType) {
            $res['trip_type'] = $this->tripType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return IntlFlightListingSearchRequest
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
        if (isset($map['language'])) {
            $model->language = $map['language'];
        }
        if (isset($map['need_share_flight'])) {
            $model->needShareFlight = $map['need_share_flight'];
        }
        if (isset($map['out_wheel_search'])) {
            $model->outWheelSearch = $map['out_wheel_search'];
        }
        if (isset($map['query_record_id'])) {
            $model->queryRecordId = $map['query_record_id'];
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
        if (isset($map['search_mode'])) {
            $model->searchMode = $map['search_mode'];
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
        if (isset($map['token'])) {
            $model->token = $map['token'];
        }
        if (isset($map['trip_type'])) {
            $model->tripType = $map['trip_type'];
        }

        return $model;
    }
}
