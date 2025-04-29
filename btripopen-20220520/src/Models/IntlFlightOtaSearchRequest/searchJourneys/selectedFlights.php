<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightOtaSearchRequest\searchJourneys;

use AlibabaCloud\Dara\Model;

class selectedFlights extends Model
{
    /**
     * @var string
     */
    public $arrAirportCode;

    /**
     * @var string
     */
    public $arrCityCode;

    /**
     * @var int
     */
    public $cabinType;

    /**
     * @var string
     */
    public $depAirportCode;

    /**
     * @var string
     */
    public $depCityCode;

    /**
     * @var string
     */
    public $flightTime;

    /**
     * @var string
     */
    public $marketFlightNo;

    /**
     * @var string
     */
    public $operateFlightNo;
    protected $_name = [
        'arrAirportCode' => 'arr_airport_code',
        'arrCityCode' => 'arr_city_code',
        'cabinType' => 'cabin_type',
        'depAirportCode' => 'dep_airport_code',
        'depCityCode' => 'dep_city_code',
        'flightTime' => 'flight_time',
        'marketFlightNo' => 'market_flight_no',
        'operateFlightNo' => 'operate_flight_no',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->arrAirportCode) {
            $res['arr_airport_code'] = $this->arrAirportCode;
        }

        if (null !== $this->arrCityCode) {
            $res['arr_city_code'] = $this->arrCityCode;
        }

        if (null !== $this->cabinType) {
            $res['cabin_type'] = $this->cabinType;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['arr_airport_code'])) {
            $model->arrAirportCode = $map['arr_airport_code'];
        }

        if (isset($map['arr_city_code'])) {
            $model->arrCityCode = $map['arr_city_code'];
        }

        if (isset($map['cabin_type'])) {
            $model->cabinType = $map['cabin_type'];
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
