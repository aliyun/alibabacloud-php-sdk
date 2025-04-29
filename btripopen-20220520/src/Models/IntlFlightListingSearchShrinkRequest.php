<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Dara\Model;

class IntlFlightListingSearchShrinkRequest extends Model
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
     * @var bool
     */
    public $outWheelSearch;

    /**
     * @var string
     */
    public $queryRecordId;

    /**
     * @var string
     */
    public $searchJourneysShrink;

    /**
     * @var int
     */
    public $searchMode;

    /**
     * @var string
     */
    public $searchPassengerListShrink;

    /**
     * @var string
     */
    public $supplierCode;

    /**
     * @var string
     */
    public $token;

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
        'outWheelSearch' => 'out_wheel_search',
        'queryRecordId' => 'query_record_id',
        'searchJourneysShrink' => 'search_journeys',
        'searchMode' => 'search_mode',
        'searchPassengerListShrink' => 'search_passenger_list',
        'supplierCode' => 'supplier_code',
        'token' => 'token',
        'tripType' => 'trip_type',
    ];

    public function validate()
    {
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

        if (null !== $this->outWheelSearch) {
            $res['out_wheel_search'] = $this->outWheelSearch;
        }

        if (null !== $this->queryRecordId) {
            $res['query_record_id'] = $this->queryRecordId;
        }

        if (null !== $this->searchJourneysShrink) {
            $res['search_journeys'] = $this->searchJourneysShrink;
        }

        if (null !== $this->searchMode) {
            $res['search_mode'] = $this->searchMode;
        }

        if (null !== $this->searchPassengerListShrink) {
            $res['search_passenger_list'] = $this->searchPassengerListShrink;
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

        if (isset($map['out_wheel_search'])) {
            $model->outWheelSearch = $map['out_wheel_search'];
        }

        if (isset($map['query_record_id'])) {
            $model->queryRecordId = $map['query_record_id'];
        }

        if (isset($map['search_journeys'])) {
            $model->searchJourneysShrink = $map['search_journeys'];
        }

        if (isset($map['search_mode'])) {
            $model->searchMode = $map['search_mode'];
        }

        if (isset($map['search_passenger_list'])) {
            $model->searchPassengerListShrink = $map['search_passenger_list'];
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
