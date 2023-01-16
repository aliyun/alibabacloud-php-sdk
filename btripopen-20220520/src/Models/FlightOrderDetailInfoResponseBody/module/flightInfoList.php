<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightOrderDetailInfoResponseBody\module;

use AlibabaCloud\Tea\Model;

class flightInfoList extends Model
{
    /**
     * @example CA
     *
     * @var string
     */
    public $airlineCode;

    /**
     * @var string
     */
    public $airlineName;

    /**
     * @var string
     */
    public $airlineSimpleName;

    /**
     * @var string
     */
    public $arrAirport;

    /**
     * @example LHW
     *
     * @var string
     */
    public $arrAirportCode;

    /**
     * @var string
     */
    public $arrAirportCodeName;

    /**
     * @example HGH
     *
     * @var string
     */
    public $arrCity;

    /**
     * @example LHW
     *
     * @var string
     */
    public $arrCityCode;

    /**
     * @var string
     */
    public $arrTerminal;

    /**
     * @example 2000-00-00 00:00:00
     *
     * @var string
     */
    public $arrTime;

    /**
     * @example “”
     *
     * @var string
     */
    public $baggage;

    /**
     * @example 100
     *
     * @var int
     */
    public $buildPrice;

    /**
     * @var string
     */
    public $cabin;

    /**
     * @var string
     */
    public $cabinClass;

    /**
     * @example "CA1351_PEK_CAN_2000-00-00 08:00
     *
     * @var string
     */
    public $carrier;

    /**
     * @var string
     */
    public $depAirport;

    /**
     * @example NGB
     *
     * @var string
     */
    public $depAirportCode;

    /**
     * @var string
     */
    public $depAirportCodeName;

    /**
     * @example BJS
     *
     * @var string
     */
    public $depCity;

    /**
     * @example NGB
     *
     * @var string
     */
    public $depCityCode;

    /**
     * @var string
     */
    public $depTerminal;

    /**
     * @example 2000-01-01 00:00:00
     *
     * @var string
     */
    public $depTime;

    /**
     * @example CA1351
     *
     * @var string
     */
    public $flightNo;

    /**
     * @example Y
     *
     * @var string
     */
    public $lastCabin;

    /**
     * @example CA1351
     *
     * @var string
     */
    public $lastFlightNo;

    /**
     * @var string
     */
    public $meal;

    /**
     * @example 100
     *
     * @var int
     */
    public $oilPrice;

    /**
     * @example 0
     *
     * @var int
     */
    public $segmentType;

    /**
     * @example 2000-00-00 00:00:00
     *
     * @var string
     */
    public $stopArrTime;

    /**
     * @example CAN
     *
     * @var string
     */
    public $stopCity;

    /**
     * @example 2000-00-00 00:00:00
     *
     * @var string
     */
    public $stopDepTime;

    /**
     * @example 100
     *
     * @var int
     */
    public $ticketPrice;

    /**
     * @example “”
     *
     * @var string
     */
    public $tuigaiqianInfo;
    protected $_name = [
        'airlineCode'        => 'airline_code',
        'airlineName'        => 'airline_name',
        'airlineSimpleName'  => 'airline_simple_name',
        'arrAirport'         => 'arr_airport',
        'arrAirportCode'     => 'arr_airport_code',
        'arrAirportCodeName' => 'arr_airport_code_name',
        'arrCity'            => 'arr_city',
        'arrCityCode'        => 'arr_city_code',
        'arrTerminal'        => 'arr_terminal',
        'arrTime'            => 'arr_time',
        'baggage'            => 'baggage',
        'buildPrice'         => 'build_price',
        'cabin'              => 'cabin',
        'cabinClass'         => 'cabin_class',
        'carrier'            => 'carrier',
        'depAirport'         => 'dep_airport',
        'depAirportCode'     => 'dep_airport_code',
        'depAirportCodeName' => 'dep_airport_code_name',
        'depCity'            => 'dep_city',
        'depCityCode'        => 'dep_city_code',
        'depTerminal'        => 'dep_terminal',
        'depTime'            => 'dep_time',
        'flightNo'           => 'flight_no',
        'lastCabin'          => 'last_cabin',
        'lastFlightNo'       => 'last_flight_no',
        'meal'               => 'meal',
        'oilPrice'           => 'oil_price',
        'segmentType'        => 'segment_type',
        'stopArrTime'        => 'stop_arr_time',
        'stopCity'           => 'stop_city',
        'stopDepTime'        => 'stop_dep_time',
        'ticketPrice'        => 'ticket_price',
        'tuigaiqianInfo'     => 'tuigaiqian_info',
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
        if (null !== $this->airlineSimpleName) {
            $res['airline_simple_name'] = $this->airlineSimpleName;
        }
        if (null !== $this->arrAirport) {
            $res['arr_airport'] = $this->arrAirport;
        }
        if (null !== $this->arrAirportCode) {
            $res['arr_airport_code'] = $this->arrAirportCode;
        }
        if (null !== $this->arrAirportCodeName) {
            $res['arr_airport_code_name'] = $this->arrAirportCodeName;
        }
        if (null !== $this->arrCity) {
            $res['arr_city'] = $this->arrCity;
        }
        if (null !== $this->arrCityCode) {
            $res['arr_city_code'] = $this->arrCityCode;
        }
        if (null !== $this->arrTerminal) {
            $res['arr_terminal'] = $this->arrTerminal;
        }
        if (null !== $this->arrTime) {
            $res['arr_time'] = $this->arrTime;
        }
        if (null !== $this->baggage) {
            $res['baggage'] = $this->baggage;
        }
        if (null !== $this->buildPrice) {
            $res['build_price'] = $this->buildPrice;
        }
        if (null !== $this->cabin) {
            $res['cabin'] = $this->cabin;
        }
        if (null !== $this->cabinClass) {
            $res['cabin_class'] = $this->cabinClass;
        }
        if (null !== $this->carrier) {
            $res['carrier'] = $this->carrier;
        }
        if (null !== $this->depAirport) {
            $res['dep_airport'] = $this->depAirport;
        }
        if (null !== $this->depAirportCode) {
            $res['dep_airport_code'] = $this->depAirportCode;
        }
        if (null !== $this->depAirportCodeName) {
            $res['dep_airport_code_name'] = $this->depAirportCodeName;
        }
        if (null !== $this->depCity) {
            $res['dep_city'] = $this->depCity;
        }
        if (null !== $this->depCityCode) {
            $res['dep_city_code'] = $this->depCityCode;
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
        if (null !== $this->lastCabin) {
            $res['last_cabin'] = $this->lastCabin;
        }
        if (null !== $this->lastFlightNo) {
            $res['last_flight_no'] = $this->lastFlightNo;
        }
        if (null !== $this->meal) {
            $res['meal'] = $this->meal;
        }
        if (null !== $this->oilPrice) {
            $res['oil_price'] = $this->oilPrice;
        }
        if (null !== $this->segmentType) {
            $res['segment_type'] = $this->segmentType;
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
        if (null !== $this->ticketPrice) {
            $res['ticket_price'] = $this->ticketPrice;
        }
        if (null !== $this->tuigaiqianInfo) {
            $res['tuigaiqian_info'] = $this->tuigaiqianInfo;
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
        if (isset($map['airline_simple_name'])) {
            $model->airlineSimpleName = $map['airline_simple_name'];
        }
        if (isset($map['arr_airport'])) {
            $model->arrAirport = $map['arr_airport'];
        }
        if (isset($map['arr_airport_code'])) {
            $model->arrAirportCode = $map['arr_airport_code'];
        }
        if (isset($map['arr_airport_code_name'])) {
            $model->arrAirportCodeName = $map['arr_airport_code_name'];
        }
        if (isset($map['arr_city'])) {
            $model->arrCity = $map['arr_city'];
        }
        if (isset($map['arr_city_code'])) {
            $model->arrCityCode = $map['arr_city_code'];
        }
        if (isset($map['arr_terminal'])) {
            $model->arrTerminal = $map['arr_terminal'];
        }
        if (isset($map['arr_time'])) {
            $model->arrTime = $map['arr_time'];
        }
        if (isset($map['baggage'])) {
            $model->baggage = $map['baggage'];
        }
        if (isset($map['build_price'])) {
            $model->buildPrice = $map['build_price'];
        }
        if (isset($map['cabin'])) {
            $model->cabin = $map['cabin'];
        }
        if (isset($map['cabin_class'])) {
            $model->cabinClass = $map['cabin_class'];
        }
        if (isset($map['carrier'])) {
            $model->carrier = $map['carrier'];
        }
        if (isset($map['dep_airport'])) {
            $model->depAirport = $map['dep_airport'];
        }
        if (isset($map['dep_airport_code'])) {
            $model->depAirportCode = $map['dep_airport_code'];
        }
        if (isset($map['dep_airport_code_name'])) {
            $model->depAirportCodeName = $map['dep_airport_code_name'];
        }
        if (isset($map['dep_city'])) {
            $model->depCity = $map['dep_city'];
        }
        if (isset($map['dep_city_code'])) {
            $model->depCityCode = $map['dep_city_code'];
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
        if (isset($map['last_cabin'])) {
            $model->lastCabin = $map['last_cabin'];
        }
        if (isset($map['last_flight_no'])) {
            $model->lastFlightNo = $map['last_flight_no'];
        }
        if (isset($map['meal'])) {
            $model->meal = $map['meal'];
        }
        if (isset($map['oil_price'])) {
            $model->oilPrice = $map['oil_price'];
        }
        if (isset($map['segment_type'])) {
            $model->segmentType = $map['segment_type'];
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
        if (isset($map['ticket_price'])) {
            $model->ticketPrice = $map['ticket_price'];
        }
        if (isset($map['tuigaiqian_info'])) {
            $model->tuigaiqianInfo = $map['tuigaiqian_info'];
        }

        return $model;
    }
}
