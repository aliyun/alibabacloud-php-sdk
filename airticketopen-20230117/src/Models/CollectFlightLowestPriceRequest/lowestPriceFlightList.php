<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models\CollectFlightLowestPriceRequest;

use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\CollectFlightLowestPriceRequest\lowestPriceFlightList\flightNumberInfo;
use AlibabaCloud\Tea\Model;

class lowestPriceFlightList extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example MFM
     *
     * @var string
     */
    public $arrivalCity;

    /**
     * @description This parameter is required.
     *
     * @example SHA
     *
     * @var string
     */
    public $departureCity;

    /**
     * @description This parameter is required.
     *
     * @example 2024-11-11
     *
     * @var string
     */
    public $departureDate;

    /**
     * @description This parameter is required.
     *
     * @var flightNumberInfo
     */
    public $flightNumberInfo;

    /**
     * @description This parameter is required.
     *
     * @example 100.0
     *
     * @var float
     */
    public $marketTotalPrice;

    /**
     * @example 123456789dacd
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 2024-11-11
     *
     * @var string
     */
    public $returnDate;

    /**
     * @description This parameter is required.
     *
     * @example 100.1
     *
     * @var float
     */
    public $suezTotalPrice;

    /**
     * @description This parameter is required.
     *
     * @example 1
     *
     * @var int
     */
    public $tripType;
    protected $_name = [
        'arrivalCity'      => 'arrival_city',
        'departureCity'    => 'departure_city',
        'departureDate'    => 'departure_date',
        'flightNumberInfo' => 'flight_number_info',
        'marketTotalPrice' => 'market_total_price',
        'requestId'        => 'request_id',
        'returnDate'       => 'return_date',
        'suezTotalPrice'   => 'suez_total_price',
        'tripType'         => 'trip_type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->arrivalCity) {
            $res['arrival_city'] = $this->arrivalCity;
        }
        if (null !== $this->departureCity) {
            $res['departure_city'] = $this->departureCity;
        }
        if (null !== $this->departureDate) {
            $res['departure_date'] = $this->departureDate;
        }
        if (null !== $this->flightNumberInfo) {
            $res['flight_number_info'] = null !== $this->flightNumberInfo ? $this->flightNumberInfo->toMap() : null;
        }
        if (null !== $this->marketTotalPrice) {
            $res['market_total_price'] = $this->marketTotalPrice;
        }
        if (null !== $this->requestId) {
            $res['request_id'] = $this->requestId;
        }
        if (null !== $this->returnDate) {
            $res['return_date'] = $this->returnDate;
        }
        if (null !== $this->suezTotalPrice) {
            $res['suez_total_price'] = $this->suezTotalPrice;
        }
        if (null !== $this->tripType) {
            $res['trip_type'] = $this->tripType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return lowestPriceFlightList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['arrival_city'])) {
            $model->arrivalCity = $map['arrival_city'];
        }
        if (isset($map['departure_city'])) {
            $model->departureCity = $map['departure_city'];
        }
        if (isset($map['departure_date'])) {
            $model->departureDate = $map['departure_date'];
        }
        if (isset($map['flight_number_info'])) {
            $model->flightNumberInfo = flightNumberInfo::fromMap($map['flight_number_info']);
        }
        if (isset($map['market_total_price'])) {
            $model->marketTotalPrice = $map['market_total_price'];
        }
        if (isset($map['request_id'])) {
            $model->requestId = $map['request_id'];
        }
        if (isset($map['return_date'])) {
            $model->returnDate = $map['return_date'];
        }
        if (isset($map['suez_total_price'])) {
            $model->suezTotalPrice = $map['suez_total_price'];
        }
        if (isset($map['trip_type'])) {
            $model->tripType = $map['trip_type'];
        }

        return $model;
    }
}
