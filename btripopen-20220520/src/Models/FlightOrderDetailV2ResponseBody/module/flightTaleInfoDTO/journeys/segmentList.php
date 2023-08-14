<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightOrderDetailV2ResponseBody\module\flightTaleInfoDTO\journeys;

use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightOrderDetailV2ResponseBody\module\flightTaleInfoDTO\journeys\segmentList\flightChange;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightOrderDetailV2ResponseBody\module\flightTaleInfoDTO\journeys\segmentList\segmentPosition;
use AlibabaCloud\Tea\Model;

class segmentList extends Model
{
    /**
     * @example CA
     *
     * @var string
     */
    public $airLineCode;

    /**
     * @example Air China Limited
     *
     * @var string
     */
    public $airLineEnglishName;

    /**
     * @var string
     */
    public $airLineName;

    /**
     * @example 95583
     *
     * @var string
     */
    public $airLinePhone;

    /**
     * @example https://gw.alicdn.com/tfs/TB12fJAFHr1gK0jSZR0XXbP8XXa-450-450.png
     *
     * @var string
     */
    public $airlineIconUrl;

    /**
     * @var string
     */
    public $airlineShortName;

    /**
     * @example XIL
     *
     * @var string
     */
    public $arrAirportCode;

    /**
     * @var string
     */
    public $arrAirportName;

    /**
     * @example XIL
     *
     * @var string
     */
    public $arrCityCode;

    /**
     * @var string
     */
    public $arrCityName;

    /**
     * @example 2023-07-20 08:25:00
     *
     * @var string
     */
    public $arrTime;

    /**
     * @var string
     */
    public $arriveTerminal;

    /**
     * @description cabin
     *
     * @var string
     */
    public $cabin;

    /**
     * @var string
     */
    public $cabinAndDiscount;

    /**
     * @description cabin_class
     *
     * @example Y
     *
     * @var string
     */
    public $cabinClass;

    /**
     * @description cabin_class_name
     *
     * @var string
     */
    public $cabinClassName;

    /**
     * @example false
     *
     * @var bool
     */
    public $codeShare;

    /**
     * @var string
     */
    public $deadlineText;

    /**
     * @example PEK
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
     * @example 2023-07-29
     *
     * @var string
     */
    public $depDate;

    /**
     * @example 2023-07-20 07:00:00
     *
     * @var string
     */
    public $depTime;

    /**
     * @var string
     */
    public $departTerminal;

    /**
     * @example 0.4
     *
     * @var float
     */
    public $discount;

    /**
     * @var flightChange
     */
    public $flightChange;

    /**
     * @example CA1110
     *
     * @var string
     */
    public $flightNo;

    /**
     * @example ARJ
     *
     * @var string
     */
    public $flightType;

    /**
     * @var int
     */
    public $flyDuration;

    /**
     * @var string
     */
    public $manufacturer;

    /**
     * @var string
     */
    public $mealDesc;

    /**
     * @var string
     */
    public $onTimeRate;

    /**
     * @var string
     */
    public $operatingAirShortName;

    /**
     * @var string
     */
    public $operatingAirlineCode;

    /**
     * @var string
     */
    public $operatingAirlineEnglishName;

    /**
     * @var string
     */
    public $operatingAirlineIconUrl;

    /**
     * @var string
     */
    public $operatingAirlineName;

    /**
     * @var string
     */
    public $operatingAirlinePhone;

    /**
     * @var string
     */
    public $operatingFlightNo;

    /**
     * @var string
     */
    public $planeType;

    /**
     * @var int
     */
    public $raisePrice;

    /**
     * @var string
     */
    public $segmentId;

    /**
     * @description segmentIndex
     *
     * @example 0
     *
     * @var int
     */
    public $segmentIndex;

    /**
     * @var segmentPosition
     */
    public $segmentPosition;

    /**
     * @var string
     */
    public $stopAirport;

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
    public $stopCityName;

    /**
     * @var string
     */
    public $stopDepTime;

    /**
     * @var int
     */
    public $stopQuantity;
    protected $_name = [
        'airLineCode'                 => 'air_line_code',
        'airLineEnglishName'          => 'air_line_english_name',
        'airLineName'                 => 'air_line_name',
        'airLinePhone'                => 'air_line_phone',
        'airlineIconUrl'              => 'airline_icon_url',
        'airlineShortName'            => 'airline_short_name',
        'arrAirportCode'              => 'arr_airport_code',
        'arrAirportName'              => 'arr_airport_name',
        'arrCityCode'                 => 'arr_city_code',
        'arrCityName'                 => 'arr_city_name',
        'arrTime'                     => 'arr_time',
        'arriveTerminal'              => 'arrive_terminal',
        'cabin'                       => 'cabin',
        'cabinAndDiscount'            => 'cabin_and_discount',
        'cabinClass'                  => 'cabin_class',
        'cabinClassName'              => 'cabin_class_name',
        'codeShare'                   => 'code_share',
        'deadlineText'                => 'deadline_text',
        'depAirportCode'              => 'dep_airport_code',
        'depAirportName'              => 'dep_airport_name',
        'depCityCode'                 => 'dep_city_code',
        'depCityName'                 => 'dep_city_name',
        'depDate'                     => 'dep_date',
        'depTime'                     => 'dep_time',
        'departTerminal'              => 'depart_terminal',
        'discount'                    => 'discount',
        'flightChange'                => 'flight_change',
        'flightNo'                    => 'flight_no',
        'flightType'                  => 'flight_type',
        'flyDuration'                 => 'fly_duration',
        'manufacturer'                => 'manufacturer',
        'mealDesc'                    => 'meal_desc',
        'onTimeRate'                  => 'on_time_rate',
        'operatingAirShortName'       => 'operating_air_short_name',
        'operatingAirlineCode'        => 'operating_airline_code',
        'operatingAirlineEnglishName' => 'operating_airline_english_name',
        'operatingAirlineIconUrl'     => 'operating_airline_icon_url',
        'operatingAirlineName'        => 'operating_airline_name',
        'operatingAirlinePhone'       => 'operating_airline_phone',
        'operatingFlightNo'           => 'operating_flight_no',
        'planeType'                   => 'plane_type',
        'raisePrice'                  => 'raise_price',
        'segmentId'                   => 'segment_id',
        'segmentIndex'                => 'segment_index',
        'segmentPosition'             => 'segment_position',
        'stopAirport'                 => 'stop_airport',
        'stopArrTime'                 => 'stop_arr_time',
        'stopCity'                    => 'stop_city',
        'stopCityName'                => 'stop_city_name',
        'stopDepTime'                 => 'stop_dep_time',
        'stopQuantity'                => 'stop_quantity',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->airLineCode) {
            $res['air_line_code'] = $this->airLineCode;
        }
        if (null !== $this->airLineEnglishName) {
            $res['air_line_english_name'] = $this->airLineEnglishName;
        }
        if (null !== $this->airLineName) {
            $res['air_line_name'] = $this->airLineName;
        }
        if (null !== $this->airLinePhone) {
            $res['air_line_phone'] = $this->airLinePhone;
        }
        if (null !== $this->airlineIconUrl) {
            $res['airline_icon_url'] = $this->airlineIconUrl;
        }
        if (null !== $this->airlineShortName) {
            $res['airline_short_name'] = $this->airlineShortName;
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
        if (null !== $this->arriveTerminal) {
            $res['arrive_terminal'] = $this->arriveTerminal;
        }
        if (null !== $this->cabin) {
            $res['cabin'] = $this->cabin;
        }
        if (null !== $this->cabinAndDiscount) {
            $res['cabin_and_discount'] = $this->cabinAndDiscount;
        }
        if (null !== $this->cabinClass) {
            $res['cabin_class'] = $this->cabinClass;
        }
        if (null !== $this->cabinClassName) {
            $res['cabin_class_name'] = $this->cabinClassName;
        }
        if (null !== $this->codeShare) {
            $res['code_share'] = $this->codeShare;
        }
        if (null !== $this->deadlineText) {
            $res['deadline_text'] = $this->deadlineText;
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
        if (null !== $this->depDate) {
            $res['dep_date'] = $this->depDate;
        }
        if (null !== $this->depTime) {
            $res['dep_time'] = $this->depTime;
        }
        if (null !== $this->departTerminal) {
            $res['depart_terminal'] = $this->departTerminal;
        }
        if (null !== $this->discount) {
            $res['discount'] = $this->discount;
        }
        if (null !== $this->flightChange) {
            $res['flight_change'] = null !== $this->flightChange ? $this->flightChange->toMap() : null;
        }
        if (null !== $this->flightNo) {
            $res['flight_no'] = $this->flightNo;
        }
        if (null !== $this->flightType) {
            $res['flight_type'] = $this->flightType;
        }
        if (null !== $this->flyDuration) {
            $res['fly_duration'] = $this->flyDuration;
        }
        if (null !== $this->manufacturer) {
            $res['manufacturer'] = $this->manufacturer;
        }
        if (null !== $this->mealDesc) {
            $res['meal_desc'] = $this->mealDesc;
        }
        if (null !== $this->onTimeRate) {
            $res['on_time_rate'] = $this->onTimeRate;
        }
        if (null !== $this->operatingAirShortName) {
            $res['operating_air_short_name'] = $this->operatingAirShortName;
        }
        if (null !== $this->operatingAirlineCode) {
            $res['operating_airline_code'] = $this->operatingAirlineCode;
        }
        if (null !== $this->operatingAirlineEnglishName) {
            $res['operating_airline_english_name'] = $this->operatingAirlineEnglishName;
        }
        if (null !== $this->operatingAirlineIconUrl) {
            $res['operating_airline_icon_url'] = $this->operatingAirlineIconUrl;
        }
        if (null !== $this->operatingAirlineName) {
            $res['operating_airline_name'] = $this->operatingAirlineName;
        }
        if (null !== $this->operatingAirlinePhone) {
            $res['operating_airline_phone'] = $this->operatingAirlinePhone;
        }
        if (null !== $this->operatingFlightNo) {
            $res['operating_flight_no'] = $this->operatingFlightNo;
        }
        if (null !== $this->planeType) {
            $res['plane_type'] = $this->planeType;
        }
        if (null !== $this->raisePrice) {
            $res['raise_price'] = $this->raisePrice;
        }
        if (null !== $this->segmentId) {
            $res['segment_id'] = $this->segmentId;
        }
        if (null !== $this->segmentIndex) {
            $res['segment_index'] = $this->segmentIndex;
        }
        if (null !== $this->segmentPosition) {
            $res['segment_position'] = null !== $this->segmentPosition ? $this->segmentPosition->toMap() : null;
        }
        if (null !== $this->stopAirport) {
            $res['stop_airport'] = $this->stopAirport;
        }
        if (null !== $this->stopArrTime) {
            $res['stop_arr_time'] = $this->stopArrTime;
        }
        if (null !== $this->stopCity) {
            $res['stop_city'] = $this->stopCity;
        }
        if (null !== $this->stopCityName) {
            $res['stop_city_name'] = $this->stopCityName;
        }
        if (null !== $this->stopDepTime) {
            $res['stop_dep_time'] = $this->stopDepTime;
        }
        if (null !== $this->stopQuantity) {
            $res['stop_quantity'] = $this->stopQuantity;
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
        if (isset($map['air_line_code'])) {
            $model->airLineCode = $map['air_line_code'];
        }
        if (isset($map['air_line_english_name'])) {
            $model->airLineEnglishName = $map['air_line_english_name'];
        }
        if (isset($map['air_line_name'])) {
            $model->airLineName = $map['air_line_name'];
        }
        if (isset($map['air_line_phone'])) {
            $model->airLinePhone = $map['air_line_phone'];
        }
        if (isset($map['airline_icon_url'])) {
            $model->airlineIconUrl = $map['airline_icon_url'];
        }
        if (isset($map['airline_short_name'])) {
            $model->airlineShortName = $map['airline_short_name'];
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
        if (isset($map['arrive_terminal'])) {
            $model->arriveTerminal = $map['arrive_terminal'];
        }
        if (isset($map['cabin'])) {
            $model->cabin = $map['cabin'];
        }
        if (isset($map['cabin_and_discount'])) {
            $model->cabinAndDiscount = $map['cabin_and_discount'];
        }
        if (isset($map['cabin_class'])) {
            $model->cabinClass = $map['cabin_class'];
        }
        if (isset($map['cabin_class_name'])) {
            $model->cabinClassName = $map['cabin_class_name'];
        }
        if (isset($map['code_share'])) {
            $model->codeShare = $map['code_share'];
        }
        if (isset($map['deadline_text'])) {
            $model->deadlineText = $map['deadline_text'];
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
        if (isset($map['dep_date'])) {
            $model->depDate = $map['dep_date'];
        }
        if (isset($map['dep_time'])) {
            $model->depTime = $map['dep_time'];
        }
        if (isset($map['depart_terminal'])) {
            $model->departTerminal = $map['depart_terminal'];
        }
        if (isset($map['discount'])) {
            $model->discount = $map['discount'];
        }
        if (isset($map['flight_change'])) {
            $model->flightChange = flightChange::fromMap($map['flight_change']);
        }
        if (isset($map['flight_no'])) {
            $model->flightNo = $map['flight_no'];
        }
        if (isset($map['flight_type'])) {
            $model->flightType = $map['flight_type'];
        }
        if (isset($map['fly_duration'])) {
            $model->flyDuration = $map['fly_duration'];
        }
        if (isset($map['manufacturer'])) {
            $model->manufacturer = $map['manufacturer'];
        }
        if (isset($map['meal_desc'])) {
            $model->mealDesc = $map['meal_desc'];
        }
        if (isset($map['on_time_rate'])) {
            $model->onTimeRate = $map['on_time_rate'];
        }
        if (isset($map['operating_air_short_name'])) {
            $model->operatingAirShortName = $map['operating_air_short_name'];
        }
        if (isset($map['operating_airline_code'])) {
            $model->operatingAirlineCode = $map['operating_airline_code'];
        }
        if (isset($map['operating_airline_english_name'])) {
            $model->operatingAirlineEnglishName = $map['operating_airline_english_name'];
        }
        if (isset($map['operating_airline_icon_url'])) {
            $model->operatingAirlineIconUrl = $map['operating_airline_icon_url'];
        }
        if (isset($map['operating_airline_name'])) {
            $model->operatingAirlineName = $map['operating_airline_name'];
        }
        if (isset($map['operating_airline_phone'])) {
            $model->operatingAirlinePhone = $map['operating_airline_phone'];
        }
        if (isset($map['operating_flight_no'])) {
            $model->operatingFlightNo = $map['operating_flight_no'];
        }
        if (isset($map['plane_type'])) {
            $model->planeType = $map['plane_type'];
        }
        if (isset($map['raise_price'])) {
            $model->raisePrice = $map['raise_price'];
        }
        if (isset($map['segment_id'])) {
            $model->segmentId = $map['segment_id'];
        }
        if (isset($map['segment_index'])) {
            $model->segmentIndex = $map['segment_index'];
        }
        if (isset($map['segment_position'])) {
            $model->segmentPosition = segmentPosition::fromMap($map['segment_position']);
        }
        if (isset($map['stop_airport'])) {
            $model->stopAirport = $map['stop_airport'];
        }
        if (isset($map['stop_arr_time'])) {
            $model->stopArrTime = $map['stop_arr_time'];
        }
        if (isset($map['stop_city'])) {
            $model->stopCity = $map['stop_city'];
        }
        if (isset($map['stop_city_name'])) {
            $model->stopCityName = $map['stop_city_name'];
        }
        if (isset($map['stop_dep_time'])) {
            $model->stopDepTime = $map['stop_dep_time'];
        }
        if (isset($map['stop_quantity'])) {
            $model->stopQuantity = $map['stop_quantity'];
        }

        return $model;
    }
}
