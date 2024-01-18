<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models\EnrichResponseBody\data\solutionList\journeyList;

use AlibabaCloud\Tea\Model;

class segmentList extends Model
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
     * @example null
     *
     * @var string
     */
    public $arrivalTerminal;

    /**
     * @example 2023-03-10 10:40:00
     *
     * @var string
     */
    public $arrivalTime;

    /**
     * @example 7
     *
     * @var string
     */
    public $availability;

    /**
     * @example V
     *
     * @var string
     */
    public $cabin;

    /**
     * @example Y
     *
     * @var string
     */
    public $cabinClass;

    /**
     * @example false
     *
     * @var bool
     */
    public $codeShare;

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
     * @example T2
     *
     * @var string
     */
    public $departureTerminal;

    /**
     * @example 2023-03-10 07:55:00
     *
     * @var string
     */
    public $departureTime;

    /**
     * @example 32Q
     *
     * @var string
     */
    public $equipType;

    /**
     * @example 165
     *
     * @var int
     */
    public $flightDuration;

    /**
     * @example HO
     *
     * @var string
     */
    public $marketingAirline;

    /**
     * @example HO1295
     *
     * @var string
     */
    public $marketingFlightNo;

    /**
     * @example 1295
     *
     * @var int
     */
    public $marketingFlightNoInt;

    /**
     * @example HO
     *
     * @var string
     */
    public $operatingAirline;

    /**
     * @example HO1295
     *
     * @var string
     */
    public $operatingFlightNo;

    /**
     * @example HO1295-PVG-MFM-20230310
     *
     * @var string
     */
    public $segmentId;

    /**
     * @example ""
     *
     * @var string
     */
    public $stopCityList;

    /**
     * @example 0
     *
     * @var int
     */
    public $stopQuantity;
    protected $_name = [
        'arrivalAirport'       => 'arrival_airport',
        'arrivalCity'          => 'arrival_city',
        'arrivalTerminal'      => 'arrival_terminal',
        'arrivalTime'          => 'arrival_time',
        'availability'         => 'availability',
        'cabin'                => 'cabin',
        'cabinClass'           => 'cabin_class',
        'codeShare'            => 'code_share',
        'departureAirport'     => 'departure_airport',
        'departureCity'        => 'departure_city',
        'departureTerminal'    => 'departure_terminal',
        'departureTime'        => 'departure_time',
        'equipType'            => 'equip_type',
        'flightDuration'       => 'flight_duration',
        'marketingAirline'     => 'marketing_airline',
        'marketingFlightNo'    => 'marketing_flight_no',
        'marketingFlightNoInt' => 'marketing_flight_no_int',
        'operatingAirline'     => 'operating_airline',
        'operatingFlightNo'    => 'operating_flight_no',
        'segmentId'            => 'segment_id',
        'stopCityList'         => 'stop_city_list',
        'stopQuantity'         => 'stop_quantity',
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
        if (null !== $this->arrivalTerminal) {
            $res['arrival_terminal'] = $this->arrivalTerminal;
        }
        if (null !== $this->arrivalTime) {
            $res['arrival_time'] = $this->arrivalTime;
        }
        if (null !== $this->availability) {
            $res['availability'] = $this->availability;
        }
        if (null !== $this->cabin) {
            $res['cabin'] = $this->cabin;
        }
        if (null !== $this->cabinClass) {
            $res['cabin_class'] = $this->cabinClass;
        }
        if (null !== $this->codeShare) {
            $res['code_share'] = $this->codeShare;
        }
        if (null !== $this->departureAirport) {
            $res['departure_airport'] = $this->departureAirport;
        }
        if (null !== $this->departureCity) {
            $res['departure_city'] = $this->departureCity;
        }
        if (null !== $this->departureTerminal) {
            $res['departure_terminal'] = $this->departureTerminal;
        }
        if (null !== $this->departureTime) {
            $res['departure_time'] = $this->departureTime;
        }
        if (null !== $this->equipType) {
            $res['equip_type'] = $this->equipType;
        }
        if (null !== $this->flightDuration) {
            $res['flight_duration'] = $this->flightDuration;
        }
        if (null !== $this->marketingAirline) {
            $res['marketing_airline'] = $this->marketingAirline;
        }
        if (null !== $this->marketingFlightNo) {
            $res['marketing_flight_no'] = $this->marketingFlightNo;
        }
        if (null !== $this->marketingFlightNoInt) {
            $res['marketing_flight_no_int'] = $this->marketingFlightNoInt;
        }
        if (null !== $this->operatingAirline) {
            $res['operating_airline'] = $this->operatingAirline;
        }
        if (null !== $this->operatingFlightNo) {
            $res['operating_flight_no'] = $this->operatingFlightNo;
        }
        if (null !== $this->segmentId) {
            $res['segment_id'] = $this->segmentId;
        }
        if (null !== $this->stopCityList) {
            $res['stop_city_list'] = $this->stopCityList;
        }
        if (null !== $this->stopQuantity) {
            $res['stop_quantity'] = $this->stopQuantity;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return segmentList
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
        if (isset($map['arrival_terminal'])) {
            $model->arrivalTerminal = $map['arrival_terminal'];
        }
        if (isset($map['arrival_time'])) {
            $model->arrivalTime = $map['arrival_time'];
        }
        if (isset($map['availability'])) {
            $model->availability = $map['availability'];
        }
        if (isset($map['cabin'])) {
            $model->cabin = $map['cabin'];
        }
        if (isset($map['cabin_class'])) {
            $model->cabinClass = $map['cabin_class'];
        }
        if (isset($map['code_share'])) {
            $model->codeShare = $map['code_share'];
        }
        if (isset($map['departure_airport'])) {
            $model->departureAirport = $map['departure_airport'];
        }
        if (isset($map['departure_city'])) {
            $model->departureCity = $map['departure_city'];
        }
        if (isset($map['departure_terminal'])) {
            $model->departureTerminal = $map['departure_terminal'];
        }
        if (isset($map['departure_time'])) {
            $model->departureTime = $map['departure_time'];
        }
        if (isset($map['equip_type'])) {
            $model->equipType = $map['equip_type'];
        }
        if (isset($map['flight_duration'])) {
            $model->flightDuration = $map['flight_duration'];
        }
        if (isset($map['marketing_airline'])) {
            $model->marketingAirline = $map['marketing_airline'];
        }
        if (isset($map['marketing_flight_no'])) {
            $model->marketingFlightNo = $map['marketing_flight_no'];
        }
        if (isset($map['marketing_flight_no_int'])) {
            $model->marketingFlightNoInt = $map['marketing_flight_no_int'];
        }
        if (isset($map['operating_airline'])) {
            $model->operatingAirline = $map['operating_airline'];
        }
        if (isset($map['operating_flight_no'])) {
            $model->operatingFlightNo = $map['operating_flight_no'];
        }
        if (isset($map['segment_id'])) {
            $model->segmentId = $map['segment_id'];
        }
        if (isset($map['stop_city_list'])) {
            $model->stopCityList = $map['stop_city_list'];
        }
        if (isset($map['stop_quantity'])) {
            $model->stopQuantity = $map['stop_quantity'];
        }

        return $model;
    }
}
