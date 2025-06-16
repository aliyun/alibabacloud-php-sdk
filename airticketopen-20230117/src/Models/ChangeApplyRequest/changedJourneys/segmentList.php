<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models\ChangeApplyRequest\changedJourneys;

use AlibabaCloud\Dara\Model;

class segmentList extends Model
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
    public $arriveTerminal;

    /**
     * @var int
     */
    public $arriveTime;

    /**
     * @var string
     */
    public $arriveTimeStr;

    /**
     * @var bool
     */
    public $codeShare;

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
    public $departureDate;

    /**
     * @var string
     */
    public $departureTerminal;

    /**
     * @var int
     */
    public $departureTime;

    /**
     * @var string
     */
    public $departureTimeStr;

    /**
     * @var string
     */
    public $marketingFlightNo;

    /**
     * @var string
     */
    public $operatingFlightNo;
    protected $_name = [
        'arrivalAirport' => 'arrival_airport',
        'arrivalCity' => 'arrival_city',
        'arriveTerminal' => 'arrive_terminal',
        'arriveTime' => 'arrive_time',
        'arriveTimeStr' => 'arrive_time_str',
        'codeShare' => 'code_share',
        'departureAirport' => 'departure_airport',
        'departureCity' => 'departure_city',
        'departureDate' => 'departure_date',
        'departureTerminal' => 'departure_terminal',
        'departureTime' => 'departure_time',
        'departureTimeStr' => 'departure_time_str',
        'marketingFlightNo' => 'marketing_flight_no',
        'operatingFlightNo' => 'operating_flight_no',
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

        if (null !== $this->arriveTerminal) {
            $res['arrive_terminal'] = $this->arriveTerminal;
        }

        if (null !== $this->arriveTime) {
            $res['arrive_time'] = $this->arriveTime;
        }

        if (null !== $this->arriveTimeStr) {
            $res['arrive_time_str'] = $this->arriveTimeStr;
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

        if (null !== $this->departureTimeStr) {
            $res['departure_time_str'] = $this->departureTimeStr;
        }

        if (null !== $this->marketingFlightNo) {
            $res['marketing_flight_no'] = $this->marketingFlightNo;
        }

        if (null !== $this->operatingFlightNo) {
            $res['operating_flight_no'] = $this->operatingFlightNo;
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

        if (isset($map['arrive_terminal'])) {
            $model->arriveTerminal = $map['arrive_terminal'];
        }

        if (isset($map['arrive_time'])) {
            $model->arriveTime = $map['arrive_time'];
        }

        if (isset($map['arrive_time_str'])) {
            $model->arriveTimeStr = $map['arrive_time_str'];
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

        if (isset($map['departure_time_str'])) {
            $model->departureTimeStr = $map['departure_time_str'];
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
