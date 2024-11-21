<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models\CollectFlightLowestPriceRequest;

use AlibabaCloud\Tea\Model;

class lowestPriceFlightInfoList extends Model
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
     * @example CA123,CA456
     *
     * @var string
     */
    public $departureFlightNumber;

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
     * @example CA123,CA456
     *
     * @var string
     */
    public $returnFlightNumber;

    /**
     * @description This parameter is required.
     *
     * @example eJwz8DeySEo0NjQ01TU3TU7TNTFINNO1SE5O0jVKM0hKNjEwTElLNYwz0A32cNT1dfPVNTIwMjYwNjRQ8/A3NLI01Q0Ic0cRBwBVFxJJ
     *
     * @var string
     */
    public $solutionId;

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
        'arrivalCity'           => 'arrival_city',
        'departureCity'         => 'departure_city',
        'departureDate'         => 'departure_date',
        'departureFlightNumber' => 'departure_flight_number',
        'marketTotalPrice'      => 'market_total_price',
        'requestId'             => 'request_id',
        'returnDate'            => 'return_date',
        'returnFlightNumber'    => 'return_flight_number',
        'solutionId'            => 'solution_id',
        'suezTotalPrice'        => 'suez_total_price',
        'tripType'              => 'trip_type',
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
        if (null !== $this->departureFlightNumber) {
            $res['departure_flight_number'] = $this->departureFlightNumber;
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
        if (null !== $this->returnFlightNumber) {
            $res['return_flight_number'] = $this->returnFlightNumber;
        }
        if (null !== $this->solutionId) {
            $res['solution_id'] = $this->solutionId;
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
     * @return lowestPriceFlightInfoList
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
        if (isset($map['departure_flight_number'])) {
            $model->departureFlightNumber = $map['departure_flight_number'];
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
        if (isset($map['return_flight_number'])) {
            $model->returnFlightNumber = $map['return_flight_number'];
        }
        if (isset($map['solution_id'])) {
            $model->solutionId = $map['solution_id'];
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
