<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Tea\Model;

class IntlFlightOtaSearchShrinkRequest extends Model
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
     * @var string
     */
    public $searchJourneysShrink;

    /**
     * @var string
     */
    public $searchPassengerListShrink;

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
        'btripUserId'               => 'btrip_user_id',
        'buyerName'                 => 'buyer_name',
        'cabinType'                 => 'cabin_type',
        'directOnly'                => 'direct_only',
        'isvName'                   => 'isv_name',
        'language'                  => 'language',
        'needShareFlight'           => 'need_share_flight',
        'searchJourneysShrink'      => 'search_journeys',
        'searchPassengerListShrink' => 'search_passenger_list',
        'supplierCode'              => 'supplier_code',
        'tripType'                  => 'trip_type',
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
        if (null !== $this->searchJourneysShrink) {
            $res['search_journeys'] = $this->searchJourneysShrink;
        }
        if (null !== $this->searchPassengerListShrink) {
            $res['search_passenger_list'] = $this->searchPassengerListShrink;
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
     * @return IntlFlightOtaSearchShrinkRequest
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
        if (isset($map['search_journeys'])) {
            $model->searchJourneysShrink = $map['search_journeys'];
        }
        if (isset($map['search_passenger_list'])) {
            $model->searchPassengerListShrink = $map['search_passenger_list'];
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
