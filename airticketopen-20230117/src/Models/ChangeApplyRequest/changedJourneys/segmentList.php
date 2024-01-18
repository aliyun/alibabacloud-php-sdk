<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models\ChangeApplyRequest\changedJourneys;

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
     * @example T1
     *
     * @var string
     */
    public $arriveTerminal;

    /**
     * @example 1677232999000
     *
     * @var int
     */
    public $arriveTime;

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
     * @example 20230320
     *
     * @var string
     */
    public $departureDate;

    /**
     * @example T2
     *
     * @var string
     */
    public $departureTerminal;

    /**
     * @example 1677232998000
     *
     * @var int
     */
    public $departureTime;

    /**
     * @example HO1295
     *
     * @var string
     */
    public $marketingFlightNo;

    /**
     * @example HO1295
     *
     * @var string
     */
    public $operatingFlightNo;
    protected $_name = [
        'arrivalAirport'    => 'arrival_airport',
        'arrivalCity'       => 'arrival_city',
        'arriveTerminal'    => 'arrive_terminal',
        'arriveTime'        => 'arrive_time',
        'codeShare'         => 'code_share',
        'departureAirport'  => 'departure_airport',
        'departureCity'     => 'departure_city',
        'departureDate'     => 'departure_date',
        'departureTerminal' => 'departure_terminal',
        'departureTime'     => 'departure_time',
        'marketingFlightNo' => 'marketing_flight_no',
        'operatingFlightNo' => 'operating_flight_no',
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
        if (null !== $this->arriveTerminal) {
            $res['arrive_terminal'] = $this->arriveTerminal;
        }
        if (null !== $this->arriveTime) {
            $res['arrive_time'] = $this->arriveTime;
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
        if (null !== $this->departureDate) {
            $res['departure_date'] = $this->departureDate;
        }
        if (null !== $this->departureTerminal) {
            $res['departure_terminal'] = $this->departureTerminal;
        }
        if (null !== $this->departureTime) {
            $res['departure_time'] = $this->departureTime;
        }
        if (null !== $this->marketingFlightNo) {
            $res['marketing_flight_no'] = $this->marketingFlightNo;
        }
        if (null !== $this->operatingFlightNo) {
            $res['operating_flight_no'] = $this->operatingFlightNo;
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
        if (isset($map['arrive_terminal'])) {
            $model->arriveTerminal = $map['arrive_terminal'];
        }
        if (isset($map['arrive_time'])) {
            $model->arriveTime = $map['arrive_time'];
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
        if (isset($map['departure_date'])) {
            $model->departureDate = $map['departure_date'];
        }
        if (isset($map['departure_terminal'])) {
            $model->departureTerminal = $map['departure_terminal'];
        }
        if (isset($map['departure_time'])) {
            $model->departureTime = $map['departure_time'];
        }
        if (isset($map['marketing_flight_no'])) {
            $model->marketingFlightNo = $map['marketing_flight_no'];
        }
        if (isset($map['operating_flight_no'])) {
            $model->operatingFlightNo = $map['operating_flight_no'];
        }

        return $model;
    }
}
