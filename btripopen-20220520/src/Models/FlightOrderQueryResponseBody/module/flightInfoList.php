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
     * @var string
     */
    public $arrCityAdCode;

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
     * @var string
     */
    public $arrTerminal;

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
     * @var string
     */
    public $depCityAdCode;

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
     * @var string
     */
    public $depTerminal;

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

    /**
     * @var int
     */
    public $journeyIndex;

    /**
     * @var int
     */
    public $segmentIndex;

    /**
     * @var string[]
     */
    public $stopCity;
    protected $_name = [
        'airlineCode'    => 'airline_code',
        'airlineName'    => 'airline_name',
        'arrAirportCode' => 'arr_airport_code',
        'arrAirportName' => 'arr_airport_name',
        'arrCityAdCode'  => 'arr_city_ad_code',
        'arrCityCode'    => 'arr_city_code',
        'arrCityName'    => 'arr_city_name',
        'arrTerminal'    => 'arr_terminal',
        'arrTime'        => 'arr_time',
        'cabin'          => 'cabin',
        'cabinLevel'     => 'cabin_level',
        'depAirportCode' => 'dep_airport_code',
        'depAirportName' => 'dep_airport_name',
        'depCityAdCode'  => 'dep_city_ad_code',
        'depCityCode'    => 'dep_city_code',
        'depCityName'    => 'dep_city_name',
        'depTerminal'    => 'dep_terminal',
        'depTime'        => 'dep_time',
        'flightMile'     => 'flight_mile',
        'flightNo'       => 'flight_no',
        'journeyIndex'   => 'journey_index',
        'segmentIndex'   => 'segment_index',
        'stopCity'       => 'stop_city',
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
        if (null !== $this->arrCityAdCode) {
            $res['arr_city_ad_code'] = $this->arrCityAdCode;
        }
        if (null !== $this->arrCityCode) {
            $res['arr_city_code'] = $this->arrCityCode;
        }
        if (null !== $this->arrCityName) {
            $res['arr_city_name'] = $this->arrCityName;
        }
        if (null !== $this->arrTerminal) {
            $res['arr_terminal'] = $this->arrTerminal;
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
        if (null !== $this->depCityAdCode) {
            $res['dep_city_ad_code'] = $this->depCityAdCode;
        }
        if (null !== $this->depCityCode) {
            $res['dep_city_code'] = $this->depCityCode;
        }
        if (null !== $this->depCityName) {
            $res['dep_city_name'] = $this->depCityName;
        }
        if (null !== $this->depTerminal) {
            $res['dep_terminal'] = $this->depTerminal;
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
        if (null !== $this->journeyIndex) {
            $res['journey_index'] = $this->journeyIndex;
        }
        if (null !== $this->segmentIndex) {
            $res['segment_index'] = $this->segmentIndex;
        }
        if (null !== $this->stopCity) {
            $res['stop_city'] = $this->stopCity;
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
        if (isset($map['arr_city_ad_code'])) {
            $model->arrCityAdCode = $map['arr_city_ad_code'];
        }
        if (isset($map['arr_city_code'])) {
            $model->arrCityCode = $map['arr_city_code'];
        }
        if (isset($map['arr_city_name'])) {
            $model->arrCityName = $map['arr_city_name'];
        }
        if (isset($map['arr_terminal'])) {
            $model->arrTerminal = $map['arr_terminal'];
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
        if (isset($map['dep_city_ad_code'])) {
            $model->depCityAdCode = $map['dep_city_ad_code'];
        }
        if (isset($map['dep_city_code'])) {
            $model->depCityCode = $map['dep_city_code'];
        }
        if (isset($map['dep_city_name'])) {
            $model->depCityName = $map['dep_city_name'];
        }
        if (isset($map['dep_terminal'])) {
            $model->depTerminal = $map['dep_terminal'];
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
        if (isset($map['journey_index'])) {
            $model->journeyIndex = $map['journey_index'];
        }
        if (isset($map['segment_index'])) {
            $model->segmentIndex = $map['segment_index'];
        }
        if (isset($map['stop_city'])) {
            if (!empty($map['stop_city'])) {
                $model->stopCity = $map['stop_city'];
            }
        }

        return $model;
    }
}
