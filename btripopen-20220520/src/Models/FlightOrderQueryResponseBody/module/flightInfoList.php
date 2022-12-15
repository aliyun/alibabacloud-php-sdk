<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightOrderQueryResponseBody\module;

use AlibabaCloud\Tea\Model;

class flightInfoList extends Model
{
    /**
     * @example MU
     *
     * @var string
     */
    public $airlineCode;

    /**
     * @var string
     */
    public $airlineName;

    /**
     * @example LHW
     *
     * @var string
     */
    public $arrAirportCode;

    /**
     * @var string
     */
    public $arrAirportName;

    /**
     * @example LHW
     *
     * @var string
     */
    public $arrCityCode;

    /**
     * @var string
     */
    public $arrCityName;

    /**
     * @example 2022-07-20T10:40Z
     *
     * @var string
     */
    public $arrTime;

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
    public $cabinLevel;

    /**
     * @example NGB
     *
     * @var string
     */
    public $depAirportCode;

    /**
     * @var string
     */
    public $depAirportName;

    /**
     * @example NGB
     *
     * @var string
     */
    public $depCityCode;

    /**
     * @var string
     */
    public $depCityName;

    /**
     * @example 2022-07-20T10:40Z
     *
     * @var string
     */
    public $depTime;

    /**
     * @example 900
     *
     * @var int
     */
    public $flightMile;

    /**
     * @example MU3849
     *
     * @var string
     */
    public $flightNo;
    protected $_name = [
        'airlineCode'    => 'airline_code',
        'airlineName'    => 'airline_name',
        'arrAirportCode' => 'arr_airport_code',
        'arrAirportName' => 'arr_airport_name',
        'arrCityCode'    => 'arr_city_code',
        'arrCityName'    => 'arr_city_name',
        'arrTime'        => 'arr_time',
        'cabin'          => 'cabin',
        'cabinLevel'     => 'cabin_level',
        'depAirportCode' => 'dep_airport_code',
        'depAirportName' => 'dep_airport_name',
        'depCityCode'    => 'dep_city_code',
        'depCityName'    => 'dep_city_name',
        'depTime'        => 'dep_time',
        'flightMile'     => 'flight_mile',
        'flightNo'       => 'flight_no',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->airlineCode) {
            $res['airline_code'] = $this->airlineCode;
        }
        if (null !== $this->airlineName) {
            $res['airline_name'] = $this->airlineName;
        }
        if (null !== $this->arrAirportCode) {
            $res['arr_airport_code'] = $this->arrAirportCode;
        }
        if (null !== $this->arrAirportName) {
            $res['arr_airport_name'] = $this->arrAirportName;
        }
        if (null !== $this->arrCityCode) {
            $res['arr_city_code'] = $this->arrCityCode;
        }
        if (null !== $this->arrCityName) {
            $res['arr_city_name'] = $this->arrCityName;
        }
        if (null !== $this->arrTime) {
            $res['arr_time'] = $this->arrTime;
        }
        if (null !== $this->cabin) {
            $res['cabin'] = $this->cabin;
        }
        if (null !== $this->cabinLevel) {
            $res['cabin_level'] = $this->cabinLevel;
        }
        if (null !== $this->depAirportCode) {
            $res['dep_airport_code'] = $this->depAirportCode;
        }
        if (null !== $this->depAirportName) {
            $res['dep_airport_name'] = $this->depAirportName;
        }
        if (null !== $this->depCityCode) {
            $res['dep_city_code'] = $this->depCityCode;
        }
        if (null !== $this->depCityName) {
            $res['dep_city_name'] = $this->depCityName;
        }
        if (null !== $this->depTime) {
            $res['dep_time'] = $this->depTime;
        }
        if (null !== $this->flightMile) {
            $res['flight_mile'] = $this->flightMile;
        }
        if (null !== $this->flightNo) {
            $res['flight_no'] = $this->flightNo;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return flightInfoList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['airline_code'])) {
            $model->airlineCode = $map['airline_code'];
        }
        if (isset($map['airline_name'])) {
            $model->airlineName = $map['airline_name'];
        }
        if (isset($map['arr_airport_code'])) {
            $model->arrAirportCode = $map['arr_airport_code'];
        }
        if (isset($map['arr_airport_name'])) {
            $model->arrAirportName = $map['arr_airport_name'];
        }
        if (isset($map['arr_city_code'])) {
            $model->arrCityCode = $map['arr_city_code'];
        }
        if (isset($map['arr_city_name'])) {
            $model->arrCityName = $map['arr_city_name'];
        }
        if (isset($map['arr_time'])) {
            $model->arrTime = $map['arr_time'];
        }
        if (isset($map['cabin'])) {
            $model->cabin = $map['cabin'];
        }
        if (isset($map['cabin_level'])) {
            $model->cabinLevel = $map['cabin_level'];
        }
        if (isset($map['dep_airport_code'])) {
            $model->depAirportCode = $map['dep_airport_code'];
        }
        if (isset($map['dep_airport_name'])) {
            $model->depAirportName = $map['dep_airport_name'];
        }
        if (isset($map['dep_city_code'])) {
            $model->depCityCode = $map['dep_city_code'];
        }
        if (isset($map['dep_city_name'])) {
            $model->depCityName = $map['dep_city_name'];
        }
        if (isset($map['dep_time'])) {
            $model->depTime = $map['dep_time'];
        }
        if (isset($map['flight_mile'])) {
            $model->flightMile = $map['flight_mile'];
        }
        if (isset($map['flight_no'])) {
            $model->flightNo = $map['flight_no'];
        }

        return $model;
    }
}
