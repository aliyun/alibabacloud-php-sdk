<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models\EnrichRequest\journeyParamList;

use AlibabaCloud\Tea\Model;

class segmentParamList extends Model
{
    /**
     * @example MFM
     *
     * @var string
     */
    public $arrivalAirport;

    /**
     * @example MFM
     *
     * @var string
     */
    public $arrivalCity;

    /**
     * @example V
     *
     * @var string
     */
    public $cabin;

    /**
     * @example E
     *
     * @var string
     */
    public $childCabin;

    /**
     * @example PVG
     *
     * @var string
     */
    public $departureAirport;

    /**
     * @example SHA
     *
     * @var string
     */
    public $departureCity;

    /**
     * @example 2023-03-10 07:55:00
     *
     * @var string
     */
    public $departureTime;

    /**
     * @example HO1295
     *
     * @var string
     */
    public $marketingFlightNo;
    protected $_name = [
        'arrivalAirport'    => 'arrival_airport',
        'arrivalCity'       => 'arrival_city',
        'cabin'             => 'cabin',
        'childCabin'        => 'child_cabin',
        'departureAirport'  => 'departure_airport',
        'departureCity'     => 'departure_city',
        'departureTime'     => 'departure_time',
        'marketingFlightNo' => 'marketing_flight_no',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return segmentParamList
     */
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
