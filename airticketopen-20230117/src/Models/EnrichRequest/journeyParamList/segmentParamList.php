<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models\EnrichRequest\journeyParamList;

use AlibabaCloud\Dara\Model;

class segmentParamList extends Model
{
    /**
     * @var string
     */
    public $arrivalAirport;

    /**
     * @var string
     */
    public $arrivalCity;

    /**
     * @var string
     */
    public $cabin;

    /**
     * @var string
     */
    public $childCabin;

    /**
     * @var string
     */
    public $departureAirport;

    /**
     * @var string
     */
    public $departureCity;

    /**
     * @var string
     */
    public $departureTime;

    /**
     * @var string
     */
    public $marketingFlightNo;
    protected $_name = [
        'arrivalAirport' => 'arrival_airport',
        'arrivalCity' => 'arrival_city',
        'cabin' => 'cabin',
        'childCabin' => 'child_cabin',
        'departureAirport' => 'departure_airport',
        'departureCity' => 'departure_city',
        'departureTime' => 'departure_time',
        'marketingFlightNo' => 'marketing_flight_no',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->arrivalAirport) {
            $res['arrival_airport'] = $this->arrivalAirport;
        }

        if (null !== $this->arrivalCity) {
            $res['arrival_city'] = $this->arrivalCity;
        }

        if (null !== $this->cabin) {
            $res['cabin'] = $this->cabin;
        }

        if (null !== $this->childCabin) {
            $res['child_cabin'] = $this->childCabin;
        }

        if (null !== $this->departureAirport) {
            $res['departure_airport'] = $this->departureAirport;
        }

        if (null !== $this->departureCity) {
            $res['departure_city'] = $this->departureCity;
        }

        if (null !== $this->departureTime) {
            $res['departure_time'] = $this->departureTime;
        }

        if (null !== $this->marketingFlightNo) {
            $res['marketing_flight_no'] = $this->marketingFlightNo;
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
        if (isset($map['arrival_airport'])) {
            $model->arrivalAirport = $map['arrival_airport'];
        }

        if (isset($map['arrival_city'])) {
            $model->arrivalCity = $map['arrival_city'];
        }

        if (isset($map['cabin'])) {
            $model->cabin = $map['cabin'];
        }

        if (isset($map['child_cabin'])) {
            $model->childCabin = $map['child_cabin'];
        }

        if (isset($map['departure_airport'])) {
            $model->departureAirport = $map['departure_airport'];
        }

        if (isset($map['departure_city'])) {
            $model->departureCity = $map['departure_city'];
        }

        if (isset($map['departure_time'])) {
            $model->departureTime = $map['departure_time'];
        }

        if (isset($map['marketing_flight_no'])) {
            $model->marketingFlightNo = $map['marketing_flight_no'];
        }

        return $model;
    }
}
