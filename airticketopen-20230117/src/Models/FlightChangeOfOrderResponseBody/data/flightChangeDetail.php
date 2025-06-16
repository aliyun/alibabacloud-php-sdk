<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models\FlightChangeOfOrderResponseBody\data;

use AlibabaCloud\Dara\Model;

class flightChangeDetail extends Model
{
    /**
     * @var string
     */
    public $changeReason;

    /**
     * @var string
     */
    public $changeTime;

    /**
     * @var int
     */
    public $changeType;

    /**
     * @var string
     */
    public $newArrivalAirport;

    /**
     * @var string
     */
    public $newArrivalTime;

    /**
     * @var string
     */
    public $newDepartureAirport;

    /**
     * @var string
     */
    public $newDepartureTime;

    /**
     * @var string
     */
    public $newFlightNo;

    /**
     * @var string
     */
    public $oldArrivalAirport;

    /**
     * @var string
     */
    public $oldArrivalTime;

    /**
     * @var string
     */
    public $oldDepartureAirport;

    /**
     * @var string
     */
    public $oldDepartureTime;

    /**
     * @var string
     */
    public $oldFlightNo;
    protected $_name = [
        'changeReason' => 'change_reason',
        'changeTime' => 'change_time',
        'changeType' => 'change_type',
        'newArrivalAirport' => 'new_arrival_airport',
        'newArrivalTime' => 'new_arrival_time',
        'newDepartureAirport' => 'new_departure_airport',
        'newDepartureTime' => 'new_departure_time',
        'newFlightNo' => 'new_flight_no',
        'oldArrivalAirport' => 'old_arrival_airport',
        'oldArrivalTime' => 'old_arrival_time',
        'oldDepartureAirport' => 'old_departure_airport',
        'oldDepartureTime' => 'old_departure_time',
        'oldFlightNo' => 'old_flight_no',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->changeReason) {
            $res['change_reason'] = $this->changeReason;
        }

        if (null !== $this->changeTime) {
            $res['change_time'] = $this->changeTime;
        }

        if (null !== $this->changeType) {
            $res['change_type'] = $this->changeType;
        }

        if (null !== $this->newArrivalAirport) {
            $res['new_arrival_airport'] = $this->newArrivalAirport;
        }

        if (null !== $this->newArrivalTime) {
            $res['new_arrival_time'] = $this->newArrivalTime;
        }

        if (null !== $this->newDepartureAirport) {
            $res['new_departure_airport'] = $this->newDepartureAirport;
        }

        if (null !== $this->newDepartureTime) {
            $res['new_departure_time'] = $this->newDepartureTime;
        }

        if (null !== $this->newFlightNo) {
            $res['new_flight_no'] = $this->newFlightNo;
        }

        if (null !== $this->oldArrivalAirport) {
            $res['old_arrival_airport'] = $this->oldArrivalAirport;
        }

        if (null !== $this->oldArrivalTime) {
            $res['old_arrival_time'] = $this->oldArrivalTime;
        }

        if (null !== $this->oldDepartureAirport) {
            $res['old_departure_airport'] = $this->oldDepartureAirport;
        }

        if (null !== $this->oldDepartureTime) {
            $res['old_departure_time'] = $this->oldDepartureTime;
        }

        if (null !== $this->oldFlightNo) {
            $res['old_flight_no'] = $this->oldFlightNo;
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
        if (isset($map['change_reason'])) {
            $model->changeReason = $map['change_reason'];
        }

        if (isset($map['change_time'])) {
            $model->changeTime = $map['change_time'];
        }

        if (isset($map['change_type'])) {
            $model->changeType = $map['change_type'];
        }

        if (isset($map['new_arrival_airport'])) {
            $model->newArrivalAirport = $map['new_arrival_airport'];
        }

        if (isset($map['new_arrival_time'])) {
            $model->newArrivalTime = $map['new_arrival_time'];
        }

        if (isset($map['new_departure_airport'])) {
            $model->newDepartureAirport = $map['new_departure_airport'];
        }

        if (isset($map['new_departure_time'])) {
            $model->newDepartureTime = $map['new_departure_time'];
        }

        if (isset($map['new_flight_no'])) {
            $model->newFlightNo = $map['new_flight_no'];
        }

        if (isset($map['old_arrival_airport'])) {
            $model->oldArrivalAirport = $map['old_arrival_airport'];
        }

        if (isset($map['old_arrival_time'])) {
            $model->oldArrivalTime = $map['old_arrival_time'];
        }

        if (isset($map['old_departure_airport'])) {
            $model->oldDepartureAirport = $map['old_departure_airport'];
        }

        if (isset($map['old_departure_time'])) {
            $model->oldDepartureTime = $map['old_departure_time'];
        }

        if (isset($map['old_flight_no'])) {
            $model->oldFlightNo = $map['old_flight_no'];
        }

        return $model;
    }
}
