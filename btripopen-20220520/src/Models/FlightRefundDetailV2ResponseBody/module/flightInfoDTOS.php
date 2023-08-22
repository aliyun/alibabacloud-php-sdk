<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightRefundDetailV2ResponseBody\module;

use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightRefundDetailV2ResponseBody\module\flightInfoDTOS\segmentPosition;
use AlibabaCloud\Tea\Model;

class flightInfoDTOS extends Model
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
    public $airlineIconUrl;

    /**
     * @var string
     */
    public $airlineName;

    /**
     * @example HGH
     *
     * @var string
     */
    public $arrAirportCode;

    /**
     * @var string
     */
    public $arrAirportName;

    /**
     * @example HGH
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
     * @example 2023-10-03 09:30:00
     *
     * @var string
     */
    public $arrTime;

    /**
     * @example Y
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
     * @var string
     */
    public $cabinClassName;

    /**
     * @example 10
     *
     * @var int
     */
    public $cabinDiscount;

    /**
     * @var string
     */
    public $carrierAirlineCode;

    /**
     * @var string
     */
    public $carrierAirlineIconUrl;

    /**
     * @var string
     */
    public $carrierAirlineName;

    /**
     * @var string
     */
    public $carrierFlightNo;

    /**
     * @example PKX
     *
     * @var string
     */
    public $depAirportCode;

    /**
     * @var string
     */
    public $depAirportName;

    /**
     * @example BJS
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
     * @example 2023-10-03 07:30:00
     *
     * @var string
     */
    public $depTime;

    /**
     * @example MU5193
     *
     * @var string
     */
    public $flightNo;

    /**
     * @var string
     */
    public $flightType;

    /**
     * @var string
     */
    public $mealDesc;

    /**
     * @example 1194012
     *
     * @var string
     */
    public $segmentId;

    /**
     * @var segmentPosition
     */
    public $segmentPosition;

    /**
     * @var string
     */
    public $stopArrTime;

    /**
     * @var string
     */
    public $stopCity;

    /**
     * @var string
     */
    public $stopDepTime;
    protected $_name = [
        'airlineCode'           => 'airline_code',
        'airlineIconUrl'        => 'airline_icon_url',
        'airlineName'           => 'airline_name',
        'arrAirportCode'        => 'arr_airport_code',
        'arrAirportName'        => 'arr_airport_name',
        'arrCityCode'           => 'arr_city_code',
        'arrCityName'           => 'arr_city_name',
        'arrTerminal'           => 'arr_terminal',
        'arrTime'               => 'arr_time',
        'cabin'                 => 'cabin',
        'cabinClass'            => 'cabin_class',
        'cabinClassName'        => 'cabin_class_name',
        'cabinDiscount'         => 'cabin_discount',
        'carrierAirlineCode'    => 'carrier_airline_code',
        'carrierAirlineIconUrl' => 'carrier_airline_icon_url',
        'carrierAirlineName'    => 'carrier_airline_name',
        'carrierFlightNo'       => 'carrier_flight_no',
        'depAirportCode'        => 'dep_airport_code',
        'depAirportName'        => 'dep_airport_name',
        'depCityCode'           => 'dep_city_code',
        'depCityName'           => 'dep_city_name',
        'depTerminal'           => 'dep_terminal',
        'depTime'               => 'dep_time',
        'flightNo'              => 'flight_no',
        'flightType'            => 'flight_type',
        'mealDesc'              => 'meal_desc',
        'segmentId'             => 'segment_id',
        'segmentPosition'       => 'segment_position',
        'stopArrTime'           => 'stop_arr_time',
        'stopCity'              => 'stop_city',
        'stopDepTime'           => 'stop_dep_time',
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
        if (null !== $this->airlineIconUrl) {
            $res['airline_icon_url'] = $this->airlineIconUrl;
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
        if (null !== $this->arrTerminal) {
            $res['arr_terminal'] = $this->arrTerminal;
        }
        if (null !== $this->arrTime) {
            $res['arr_time'] = $this->arrTime;
        }
        if (null !== $this->cabin) {
            $res['cabin'] = $this->cabin;
        }
        if (null !== $this->cabinClass) {
            $res['cabin_class'] = $this->cabinClass;
        }
        if (null !== $this->cabinClassName) {
            $res['cabin_class_name'] = $this->cabinClassName;
        }
        if (null !== $this->cabinDiscount) {
            $res['cabin_discount'] = $this->cabinDiscount;
        }
        if (null !== $this->carrierAirlineCode) {
            $res['carrier_airline_code'] = $this->carrierAirlineCode;
        }
        if (null !== $this->carrierAirlineIconUrl) {
            $res['carrier_airline_icon_url'] = $this->carrierAirlineIconUrl;
        }
        if (null !== $this->carrierAirlineName) {
            $res['carrier_airline_name'] = $this->carrierAirlineName;
        }
        if (null !== $this->carrierFlightNo) {
            $res['carrier_flight_no'] = $this->carrierFlightNo;
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
        if (null !== $this->depTerminal) {
            $res['dep_terminal'] = $this->depTerminal;
        }
        if (null !== $this->depTime) {
            $res['dep_time'] = $this->depTime;
        }
        if (null !== $this->flightNo) {
            $res['flight_no'] = $this->flightNo;
        }
        if (null !== $this->flightType) {
            $res['flight_type'] = $this->flightType;
        }
        if (null !== $this->mealDesc) {
            $res['meal_desc'] = $this->mealDesc;
        }
        if (null !== $this->segmentId) {
            $res['segment_id'] = $this->segmentId;
        }
        if (null !== $this->segmentPosition) {
            $res['segment_position'] = null !== $this->segmentPosition ? $this->segmentPosition->toMap() : null;
        }
        if (null !== $this->stopArrTime) {
            $res['stop_arr_time'] = $this->stopArrTime;
        }
        if (null !== $this->stopCity) {
            $res['stop_city'] = $this->stopCity;
        }
        if (null !== $this->stopDepTime) {
            $res['stop_dep_time'] = $this->stopDepTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return flightInfoDTOS
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['airline_code'])) {
            $model->airlineCode = $map['airline_code'];
        }
        if (isset($map['airline_icon_url'])) {
            $model->airlineIconUrl = $map['airline_icon_url'];
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
        if (isset($map['arr_terminal'])) {
            $model->arrTerminal = $map['arr_terminal'];
        }
        if (isset($map['arr_time'])) {
            $model->arrTime = $map['arr_time'];
        }
        if (isset($map['cabin'])) {
            $model->cabin = $map['cabin'];
        }
        if (isset($map['cabin_class'])) {
            $model->cabinClass = $map['cabin_class'];
        }
        if (isset($map['cabin_class_name'])) {
            $model->cabinClassName = $map['cabin_class_name'];
        }
        if (isset($map['cabin_discount'])) {
            $model->cabinDiscount = $map['cabin_discount'];
        }
        if (isset($map['carrier_airline_code'])) {
            $model->carrierAirlineCode = $map['carrier_airline_code'];
        }
        if (isset($map['carrier_airline_icon_url'])) {
            $model->carrierAirlineIconUrl = $map['carrier_airline_icon_url'];
        }
        if (isset($map['carrier_airline_name'])) {
            $model->carrierAirlineName = $map['carrier_airline_name'];
        }
        if (isset($map['carrier_flight_no'])) {
            $model->carrierFlightNo = $map['carrier_flight_no'];
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
        if (isset($map['dep_terminal'])) {
            $model->depTerminal = $map['dep_terminal'];
        }
        if (isset($map['dep_time'])) {
            $model->depTime = $map['dep_time'];
        }
        if (isset($map['flight_no'])) {
            $model->flightNo = $map['flight_no'];
        }
        if (isset($map['flight_type'])) {
            $model->flightType = $map['flight_type'];
        }
        if (isset($map['meal_desc'])) {
            $model->mealDesc = $map['meal_desc'];
        }
        if (isset($map['segment_id'])) {
            $model->segmentId = $map['segment_id'];
        }
        if (isset($map['segment_position'])) {
            $model->segmentPosition = segmentPosition::fromMap($map['segment_position']);
        }
        if (isset($map['stop_arr_time'])) {
            $model->stopArrTime = $map['stop_arr_time'];
        }
        if (isset($map['stop_city'])) {
            $model->stopCity = $map['stop_city'];
        }
        if (isset($map['stop_dep_time'])) {
            $model->stopDepTime = $map['stop_dep_time'];
        }

        return $model;
    }
}
