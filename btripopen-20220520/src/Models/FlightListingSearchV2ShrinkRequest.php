<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Dara\Model;

class FlightListingSearchV2ShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $airlineCode;

    /**
     * @var string
     */
    public $cabinTypeListShrink;

    /**
     * @var bool
     */
    public $directOnly;

    /**
     * @var string
     */
    public $isvName;

    /**
     * @var bool
     */
    public $needMultiClassPrice;

    /**
     * @var bool
     */
    public $needQueryServiceFee;

    /**
     * @var bool
     */
    public $needShareFlight;

    /**
     * @var bool
     */
    public $needYCBestPrice;

    /**
     * @var string
     */
    public $searchJourneysShrink;

    /**
     * @var int
     */
    public $searchMode;

    /**
     * @var int
     */
    public $tripType;
    protected $_name = [
        'airlineCode' => 'airline_code',
        'cabinTypeListShrink' => 'cabin_type_list',
        'directOnly' => 'direct_only',
        'isvName' => 'isv_name',
        'needMultiClassPrice' => 'need_multi_class_price',
        'needQueryServiceFee' => 'need_query_service_fee',
        'needShareFlight' => 'need_share_flight',
        'needYCBestPrice' => 'need_y_c_best_price',
        'searchJourneysShrink' => 'search_journeys',
        'searchMode' => 'search_mode',
        'tripType' => 'trip_type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->airlineCode) {
            $res['airline_code'] = $this->airlineCode;
        }

        if (null !== $this->cabinTypeListShrink) {
            $res['cabin_type_list'] = $this->cabinTypeListShrink;
        }

        if (null !== $this->directOnly) {
            $res['direct_only'] = $this->directOnly;
        }

        if (null !== $this->isvName) {
            $res['isv_name'] = $this->isvName;
        }

        if (null !== $this->needMultiClassPrice) {
            $res['need_multi_class_price'] = $this->needMultiClassPrice;
        }

        if (null !== $this->needQueryServiceFee) {
            $res['need_query_service_fee'] = $this->needQueryServiceFee;
        }

        if (null !== $this->needShareFlight) {
            $res['need_share_flight'] = $this->needShareFlight;
        }

        if (null !== $this->needYCBestPrice) {
            $res['need_y_c_best_price'] = $this->needYCBestPrice;
        }

        if (null !== $this->searchJourneysShrink) {
            $res['search_journeys'] = $this->searchJourneysShrink;
        }

        if (null !== $this->searchMode) {
            $res['search_mode'] = $this->searchMode;
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
        if (isset($map['airline_code'])) {
            $model->airlineCode = $map['airline_code'];
        }

        if (isset($map['cabin_type_list'])) {
            $model->cabinTypeListShrink = $map['cabin_type_list'];
        }

        if (isset($map['direct_only'])) {
            $model->directOnly = $map['direct_only'];
        }

        if (isset($map['isv_name'])) {
            $model->isvName = $map['isv_name'];
        }

        if (isset($map['need_multi_class_price'])) {
            $model->needMultiClassPrice = $map['need_multi_class_price'];
        }

        if (isset($map['need_query_service_fee'])) {
            $model->needQueryServiceFee = $map['need_query_service_fee'];
        }

        if (isset($map['need_share_flight'])) {
            $model->needShareFlight = $map['need_share_flight'];
        }

        if (isset($map['need_y_c_best_price'])) {
            $model->needYCBestPrice = $map['need_y_c_best_price'];
        }

        if (isset($map['search_journeys'])) {
            $model->searchJourneysShrink = $map['search_journeys'];
        }

        if (isset($map['search_mode'])) {
            $model->searchMode = $map['search_mode'];
        }

        if (isset($map['trip_type'])) {
            $model->tripType = $map['trip_type'];
        }

        return $model;
    }
}
