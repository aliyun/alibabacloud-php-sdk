<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models\CollectFlightLowestPriceRequest;

use AlibabaCloud\Dara\Model;

class lowestPriceFlightInfoList extends Model
{
    /**
     * @var string
     */
    public $arrivalCity;

    /**
     * @var string
     */
    public $departureCity;

    /**
     * @var string
     */
    public $departureDate;

    /**
     * @var string
     */
    public $departureFlightNumber;

    /**
     * @var float
     */
    public $marketTotalPrice;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $returnDate;

    /**
     * @var string
     */
    public $returnFlightNumber;

    /**
     * @var string
     */
    public $solutionId;

    /**
     * @var float
     */
    public $suezTotalPrice;

    /**
     * @var int
     */
    public $tripType;
    protected $_name = [
        'arrivalCity' => 'arrival_city',
        'departureCity' => 'departure_city',
        'departureDate' => 'departure_date',
        'departureFlightNumber' => 'departure_flight_number',
        'marketTotalPrice' => 'market_total_price',
        'requestId' => 'request_id',
        'returnDate' => 'return_date',
        'returnFlightNumber' => 'return_flight_number',
        'solutionId' => 'solution_id',
        'suezTotalPrice' => 'suez_total_price',
        'tripType' => 'trip_type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
