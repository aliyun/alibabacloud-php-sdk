<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightOtaSearchV2Request\searchJourneys;

use AlibabaCloud\Tea\Model;

class selectedFlights extends Model
{
    /**
     * @example HGH
     *
     * @var string
     */
    public $arrAirportCode;

    /**
     * @example HGH
     *
     * @var string
     */
    public $arrCityCode;

    /**
     * @example PKX
     *
     * @var string
     */
    public $depAirportCode;

    /**
     * @example BJS
     *
     * @var string
     */
    public $depCityCode;

    /**
     * @example 2023-09-01 07:10:00
     *
     * @var string
     */
    public $flightTime;

    /**
     * @description This parameter is required.
     *
     * @example HO3925
     *
     * @var string
     */
    public $marketFlightNo;

    /**
     * @example CX601
     *
     * @var string
     */
    public $operateFlightNo;
    protected $_name = [
        'arrAirportCode'  => 'arr_airport_code',
        'arrCityCode'     => 'arr_city_code',
        'depAirportCode'  => 'dep_airport_code',
        'depCityCode'     => 'dep_city_code',
        'flightTime'      => 'flight_time',
        'marketFlightNo'  => 'market_flight_no',
        'operateFlightNo' => 'operate_flight_no',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->arrAirportCode) {
            $res['arr_airport_code'] = $this->arrAirportCode;
        }
        if (null !== $this->arrCityCode) {
            $res['arr_city_code'] = $this->arrCityCode;
        }
        if (null !== $this->depAirportCode) {
            $res['dep_airport_code'] = $this->depAirportCode;
        }
        if (null !== $this->depCityCode) {
            $res['dep_city_code'] = $this->depCityCode;
        }
        if (null !== $this->flightTime) {
            $res['flight_time'] = $this->flightTime;
        }
        if (null !== $this->marketFlightNo) {
            $res['market_flight_no'] = $this->marketFlightNo;
        }
        if (null !== $this->operateFlightNo) {
            $res['operate_flight_no'] = $this->operateFlightNo;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return selectedFlights
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['arr_airport_code'])) {
            $model->arrAirportCode = $map['arr_airport_code'];
        }
        if (isset($map['arr_city_code'])) {
            $model->arrCityCode = $map['arr_city_code'];
        }
        if (isset($map['dep_airport_code'])) {
            $model->depAirportCode = $map['dep_airport_code'];
        }
        if (isset($map['dep_city_code'])) {
            $model->depCityCode = $map['dep_city_code'];
        }
        if (isset($map['flight_time'])) {
            $model->flightTime = $map['flight_time'];
        }
        if (isset($map['market_flight_no'])) {
            $model->marketFlightNo = $map['market_flight_no'];
        }
        if (isset($map['operate_flight_no'])) {
            $model->operateFlightNo = $map['operate_flight_no'];
        }

        return $model;
    }
}
