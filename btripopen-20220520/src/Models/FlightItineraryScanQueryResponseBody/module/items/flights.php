<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightItineraryScanQueryResponseBody\module\items;

use AlibabaCloud\Tea\Model;

class flights extends Model
{
    /**
     * @description 航班至
     *
     * @var string
     */
    public $arrivalStation;

    /**
     * @description 座位等级
     *
     * @example M
     *
     * @var string
     */
    public $cabinClass;

    /**
     * @description 承运人
     *
     * @var string
     */
    public $carrier;

    /**
     * @description 航班从
     *
     * @var string
     */
    public $departureStation;

    /**
     * @description 日期
     *
     * @example 2018-11-18
     *
     * @var string
     */
    public $flightDate;

    /**
     * @description 航班号
     *
     * @example MU2271
     *
     * @var string
     */
    public $flightNumber;

    /**
     * @description 时间
     *
     * @example 18:25
     *
     * @var string
     */
    public $flightTime;

    /**
     * @description 免费行李
     *
     * @example 20K
     *
     * @var string
     */
    public $freeBaggageAllowance;

    /**
     * @description 行号
     *
     * @example 1
     *
     * @var string
     */
    public $index;

    /**
     * @description 客票级别
     *
     * @example M
     *
     * @var string
     */
    public $seatClass;

    /**
     * @description 客票生效日期
     *
     * @example 2023-01-01
     *
     * @var string
     */
    public $validFromDate;

    /**
     * @description 有效截止日期
     *
     * @example 2023-01-01
     *
     * @var string
     */
    public $validToDate;
    protected $_name = [
        'arrivalStation'       => 'arrival_station',
        'cabinClass'           => 'cabin_class',
        'carrier'              => 'carrier',
        'departureStation'     => 'departure_station',
        'flightDate'           => 'flight_date',
        'flightNumber'         => 'flight_number',
        'flightTime'           => 'flight_time',
        'freeBaggageAllowance' => 'free_baggage_allowance',
        'index'                => 'index',
        'seatClass'            => 'seat_class',
        'validFromDate'        => 'valid_from_date',
        'validToDate'          => 'valid_to_date',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->arrivalStation) {
            $res['arrival_station'] = $this->arrivalStation;
        }
        if (null !== $this->cabinClass) {
            $res['cabin_class'] = $this->cabinClass;
        }
        if (null !== $this->carrier) {
            $res['carrier'] = $this->carrier;
        }
        if (null !== $this->departureStation) {
            $res['departure_station'] = $this->departureStation;
        }
        if (null !== $this->flightDate) {
            $res['flight_date'] = $this->flightDate;
        }
        if (null !== $this->flightNumber) {
            $res['flight_number'] = $this->flightNumber;
        }
        if (null !== $this->flightTime) {
            $res['flight_time'] = $this->flightTime;
        }
        if (null !== $this->freeBaggageAllowance) {
            $res['free_baggage_allowance'] = $this->freeBaggageAllowance;
        }
        if (null !== $this->index) {
            $res['index'] = $this->index;
        }
        if (null !== $this->seatClass) {
            $res['seat_class'] = $this->seatClass;
        }
        if (null !== $this->validFromDate) {
            $res['valid_from_date'] = $this->validFromDate;
        }
        if (null !== $this->validToDate) {
            $res['valid_to_date'] = $this->validToDate;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return flights
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['arrival_station'])) {
            $model->arrivalStation = $map['arrival_station'];
        }
        if (isset($map['cabin_class'])) {
            $model->cabinClass = $map['cabin_class'];
        }
        if (isset($map['carrier'])) {
            $model->carrier = $map['carrier'];
        }
        if (isset($map['departure_station'])) {
            $model->departureStation = $map['departure_station'];
        }
        if (isset($map['flight_date'])) {
            $model->flightDate = $map['flight_date'];
        }
        if (isset($map['flight_number'])) {
            $model->flightNumber = $map['flight_number'];
        }
        if (isset($map['flight_time'])) {
            $model->flightTime = $map['flight_time'];
        }
        if (isset($map['free_baggage_allowance'])) {
            $model->freeBaggageAllowance = $map['free_baggage_allowance'];
        }
        if (isset($map['index'])) {
            $model->index = $map['index'];
        }
        if (isset($map['seat_class'])) {
            $model->seatClass = $map['seat_class'];
        }
        if (isset($map['valid_from_date'])) {
            $model->validFromDate = $map['valid_from_date'];
        }
        if (isset($map['valid_to_date'])) {
            $model->validToDate = $map['valid_to_date'];
        }

        return $model;
    }
}
