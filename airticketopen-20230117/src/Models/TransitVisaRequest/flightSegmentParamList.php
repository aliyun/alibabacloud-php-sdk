<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models\TransitVisaRequest;

use AlibabaCloud\Tea\Model;

class flightSegmentParamList extends Model
{
    /**
     * @example SIN
     *
     * @var string
     */
    public $arrivalAirport;

    /**
     * @example T1
     *
     * @var string
     */
    public $arrivalTerminal;

    /**
     * @example 1705285430445
     *
     * @var int
     */
    public $arrivalTime;

    /**
     * @example true
     *
     * @var bool
     */
    public $codeShare;

    /**
     * @example HGH
     *
     * @var string
     */
    public $departureAirport;

    /**
     * @example T1
     *
     * @var string
     */
    public $departureTerminal;

    /**
     * @example 1705285430445
     *
     * @var int
     */
    public $departureTime;

    /**
     * @example CZ
     *
     * @var string
     */
    public $marketingAirline;

    /**
     * @example CZ616
     *
     * @var string
     */
    public $marketingFlightNo;

    /**
     * @example CZ
     *
     * @var string
     */
    public $operatingAirline;

    /**
     * @example SEL,HKG
     *
     * @var string
     */
    public $stopCityList;

    /**
     * @example CZ
     *
     * @var string
     */
    public $ticketingAirline;
    protected $_name = [
        'arrivalAirport'    => 'arrival_airport',
        'arrivalTerminal'   => 'arrival_terminal',
        'arrivalTime'       => 'arrival_time',
        'codeShare'         => 'code_share',
        'departureAirport'  => 'departure_airport',
        'departureTerminal' => 'departure_terminal',
        'departureTime'     => 'departure_time',
        'marketingAirline'  => 'marketing_airline',
        'marketingFlightNo' => 'marketing_flight_no',
        'operatingAirline'  => 'operating_airline',
        'stopCityList'      => 'stop_city_list',
        'ticketingAirline'  => 'ticketing_airline',
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
        if (null !== $this->arrivalTerminal) {
            $res['arrival_terminal'] = $this->arrivalTerminal;
        }
        if (null !== $this->arrivalTime) {
            $res['arrival_time'] = $this->arrivalTime;
        }
        if (null !== $this->codeShare) {
            $res['code_share'] = $this->codeShare;
        }
        if (null !== $this->departureAirport) {
            $res['departure_airport'] = $this->departureAirport;
        }
        if (null !== $this->departureTerminal) {
            $res['departure_terminal'] = $this->departureTerminal;
        }
        if (null !== $this->departureTime) {
            $res['departure_time'] = $this->departureTime;
        }
        if (null !== $this->marketingAirline) {
            $res['marketing_airline'] = $this->marketingAirline;
        }
        if (null !== $this->marketingFlightNo) {
            $res['marketing_flight_no'] = $this->marketingFlightNo;
        }
        if (null !== $this->operatingAirline) {
            $res['operating_airline'] = $this->operatingAirline;
        }
        if (null !== $this->stopCityList) {
            $res['stop_city_list'] = $this->stopCityList;
        }
        if (null !== $this->ticketingAirline) {
            $res['ticketing_airline'] = $this->ticketingAirline;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return flightSegmentParamList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['arrival_airport'])) {
            $model->arrivalAirport = $map['arrival_airport'];
        }
        if (isset($map['arrival_terminal'])) {
            $model->arrivalTerminal = $map['arrival_terminal'];
        }
        if (isset($map['arrival_time'])) {
            $model->arrivalTime = $map['arrival_time'];
        }
        if (isset($map['code_share'])) {
            $model->codeShare = $map['code_share'];
        }
        if (isset($map['departure_airport'])) {
            $model->departureAirport = $map['departure_airport'];
        }
        if (isset($map['departure_terminal'])) {
            $model->departureTerminal = $map['departure_terminal'];
        }
        if (isset($map['departure_time'])) {
            $model->departureTime = $map['departure_time'];
        }
        if (isset($map['marketing_airline'])) {
            $model->marketingAirline = $map['marketing_airline'];
        }
        if (isset($map['marketing_flight_no'])) {
            $model->marketingFlightNo = $map['marketing_flight_no'];
        }
        if (isset($map['operating_airline'])) {
            $model->operatingAirline = $map['operating_airline'];
        }
        if (isset($map['stop_city_list'])) {
            $model->stopCityList = $map['stop_city_list'];
        }
        if (isset($map['ticketing_airline'])) {
            $model->ticketingAirline = $map['ticketing_airline'];
        }

        return $model;
    }
}
