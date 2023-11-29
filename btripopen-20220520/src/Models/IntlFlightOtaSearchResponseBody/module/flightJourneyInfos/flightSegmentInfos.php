<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightOtaSearchResponseBody\module\flightJourneyInfos;

use AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightOtaSearchResponseBody\module\flightJourneyInfos\flightSegmentInfos\airlineInfo;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightOtaSearchResponseBody\module\flightJourneyInfos\flightSegmentInfos\arrAirportInfo;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightOtaSearchResponseBody\module\flightJourneyInfos\flightSegmentInfos\depAirportInfo;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightOtaSearchResponseBody\module\flightJourneyInfos\flightSegmentInfos\flightShareInfo;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightOtaSearchResponseBody\module\flightJourneyInfos\flightSegmentInfos\flightStopInfo;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightOtaSearchResponseBody\module\flightJourneyInfos\flightSegmentInfos\luggageDirectInfo;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightOtaSearchResponseBody\module\flightJourneyInfos\flightSegmentInfos\segmentVisaRemark;
use AlibabaCloud\Tea\Model;

class flightSegmentInfos extends Model
{
    /**
     * @var airlineInfo
     */
    public $airlineInfo;

    /**
     * @var arrAirportInfo
     */
    public $arrAirportInfo;

    /**
     * @example BJS
     *
     * @var string
     */
    public $arrCityCode;

    /**
     * @var string
     */
    public $arrCityName;

    /**
     * @example 2023-08-13 09:45
     *
     * @var string
     */
    public $arrTime;

    /**
     * @var string
     */
    public $baggageDesc;

    /**
     * @var depAirportInfo
     */
    public $depAirportInfo;

    /**
     * @example HGH
     *
     * @var string
     */
    public $depCityCode;

    /**
     * @var string
     */
    public $depCityName;

    /**
     * @example 2023-08-13 07:25
     *
     * @var string
     */
    public $depTime;

    /**
     * @example 140
     *
     * @var int
     */
    public $duration;

    /**
     * @example MU5131
     *
     * @var string
     */
    public $flightNo;

    /**
     * @var flightShareInfo
     */
    public $flightShareInfo;

    /**
     * @var string
     */
    public $flightSize;

    /**
     * @var flightStopInfo
     */
    public $flightStopInfo;

    /**
     * @example 320
     *
     * @var string
     */
    public $flightType;

    /**
     * @var luggageDirectInfo
     */
    public $luggageDirectInfo;

    /**
     * @var string
     */
    public $manufacturer;

    /**
     * @var string
     */
    public $mealDesc;

    /**
     * @example 1200
     *
     * @var int
     */
    public $miles;

    /**
     * @example 80%
     *
     * @var string
     */
    public $onTimeRate;

    /**
     * @example 0
     *
     * @var int
     */
    public $oneMore;

    /**
     * @var string
     */
    public $oneMoreShow;

    /**
     * @example 0
     *
     * @var int
     */
    public $segmentIndex;

    /**
     * @example KN6728HGHPKX0725
     *
     * @var string
     */
    public $segmentKey;

    /**
     * @var segmentVisaRemark
     */
    public $segmentVisaRemark;

    /**
     * @example false
     *
     * @var bool
     */
    public $share;

    /**
     * @var string
     */
    public $shortFlightSize;

    /**
     * @example false
     *
     * @var bool
     */
    public $stop;

    /**
     * @var string
     */
    public $totalTime;

    /**
     * @var string
     */
    public $transferTime;

    /**
     * @example 120
     *
     * @var int
     */
    public $transferTimeNumber;
    protected $_name = [
        'airlineInfo'        => 'airline_info',
        'arrAirportInfo'     => 'arr_airport_info',
        'arrCityCode'        => 'arr_city_code',
        'arrCityName'        => 'arr_city_name',
        'arrTime'            => 'arr_time',
        'baggageDesc'        => 'baggage_desc',
        'depAirportInfo'     => 'dep_airport_info',
        'depCityCode'        => 'dep_city_code',
        'depCityName'        => 'dep_city_name',
        'depTime'            => 'dep_time',
        'duration'           => 'duration',
        'flightNo'           => 'flight_no',
        'flightShareInfo'    => 'flight_share_info',
        'flightSize'         => 'flight_size',
        'flightStopInfo'     => 'flight_stop_info',
        'flightType'         => 'flight_type',
        'luggageDirectInfo'  => 'luggage_direct_info',
        'manufacturer'       => 'manufacturer',
        'mealDesc'           => 'meal_desc',
        'miles'              => 'miles',
        'onTimeRate'         => 'on_time_rate',
        'oneMore'            => 'one_more',
        'oneMoreShow'        => 'one_more_show',
        'segmentIndex'       => 'segment_index',
        'segmentKey'         => 'segment_key',
        'segmentVisaRemark'  => 'segment_visa_remark',
        'share'              => 'share',
        'shortFlightSize'    => 'short_flight_size',
        'stop'               => 'stop',
        'totalTime'          => 'total_time',
        'transferTime'       => 'transfer_time',
        'transferTimeNumber' => 'transfer_time_number',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->airlineInfo) {
            $res['airline_info'] = null !== $this->airlineInfo ? $this->airlineInfo->toMap() : null;
        }
        if (null !== $this->arrAirportInfo) {
            $res['arr_airport_info'] = null !== $this->arrAirportInfo ? $this->arrAirportInfo->toMap() : null;
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
        if (null !== $this->baggageDesc) {
            $res['baggage_desc'] = $this->baggageDesc;
        }
        if (null !== $this->depAirportInfo) {
            $res['dep_airport_info'] = null !== $this->depAirportInfo ? $this->depAirportInfo->toMap() : null;
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
        if (null !== $this->duration) {
            $res['duration'] = $this->duration;
        }
        if (null !== $this->flightNo) {
            $res['flight_no'] = $this->flightNo;
        }
        if (null !== $this->flightShareInfo) {
            $res['flight_share_info'] = null !== $this->flightShareInfo ? $this->flightShareInfo->toMap() : null;
        }
        if (null !== $this->flightSize) {
            $res['flight_size'] = $this->flightSize;
        }
        if (null !== $this->flightStopInfo) {
            $res['flight_stop_info'] = null !== $this->flightStopInfo ? $this->flightStopInfo->toMap() : null;
        }
        if (null !== $this->flightType) {
            $res['flight_type'] = $this->flightType;
        }
        if (null !== $this->luggageDirectInfo) {
            $res['luggage_direct_info'] = null !== $this->luggageDirectInfo ? $this->luggageDirectInfo->toMap() : null;
        }
        if (null !== $this->manufacturer) {
            $res['manufacturer'] = $this->manufacturer;
        }
        if (null !== $this->mealDesc) {
            $res['meal_desc'] = $this->mealDesc;
        }
        if (null !== $this->miles) {
            $res['miles'] = $this->miles;
        }
        if (null !== $this->onTimeRate) {
            $res['on_time_rate'] = $this->onTimeRate;
        }
        if (null !== $this->oneMore) {
            $res['one_more'] = $this->oneMore;
        }
        if (null !== $this->oneMoreShow) {
            $res['one_more_show'] = $this->oneMoreShow;
        }
        if (null !== $this->segmentIndex) {
            $res['segment_index'] = $this->segmentIndex;
        }
        if (null !== $this->segmentKey) {
            $res['segment_key'] = $this->segmentKey;
        }
        if (null !== $this->segmentVisaRemark) {
            $res['segment_visa_remark'] = null !== $this->segmentVisaRemark ? $this->segmentVisaRemark->toMap() : null;
        }
        if (null !== $this->share) {
            $res['share'] = $this->share;
        }
        if (null !== $this->shortFlightSize) {
            $res['short_flight_size'] = $this->shortFlightSize;
        }
        if (null !== $this->stop) {
            $res['stop'] = $this->stop;
        }
        if (null !== $this->totalTime) {
            $res['total_time'] = $this->totalTime;
        }
        if (null !== $this->transferTime) {
            $res['transfer_time'] = $this->transferTime;
        }
        if (null !== $this->transferTimeNumber) {
            $res['transfer_time_number'] = $this->transferTimeNumber;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return flightSegmentInfos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['airline_info'])) {
            $model->airlineInfo = airlineInfo::fromMap($map['airline_info']);
        }
        if (isset($map['arr_airport_info'])) {
            $model->arrAirportInfo = arrAirportInfo::fromMap($map['arr_airport_info']);
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
        if (isset($map['baggage_desc'])) {
            $model->baggageDesc = $map['baggage_desc'];
        }
        if (isset($map['dep_airport_info'])) {
            $model->depAirportInfo = depAirportInfo::fromMap($map['dep_airport_info']);
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
        if (isset($map['duration'])) {
            $model->duration = $map['duration'];
        }
        if (isset($map['flight_no'])) {
            $model->flightNo = $map['flight_no'];
        }
        if (isset($map['flight_share_info'])) {
            $model->flightShareInfo = flightShareInfo::fromMap($map['flight_share_info']);
        }
        if (isset($map['flight_size'])) {
            $model->flightSize = $map['flight_size'];
        }
        if (isset($map['flight_stop_info'])) {
            $model->flightStopInfo = flightStopInfo::fromMap($map['flight_stop_info']);
        }
        if (isset($map['flight_type'])) {
            $model->flightType = $map['flight_type'];
        }
        if (isset($map['luggage_direct_info'])) {
            $model->luggageDirectInfo = luggageDirectInfo::fromMap($map['luggage_direct_info']);
        }
        if (isset($map['manufacturer'])) {
            $model->manufacturer = $map['manufacturer'];
        }
        if (isset($map['meal_desc'])) {
            $model->mealDesc = $map['meal_desc'];
        }
        if (isset($map['miles'])) {
            $model->miles = $map['miles'];
        }
        if (isset($map['on_time_rate'])) {
            $model->onTimeRate = $map['on_time_rate'];
        }
        if (isset($map['one_more'])) {
            $model->oneMore = $map['one_more'];
        }
        if (isset($map['one_more_show'])) {
            $model->oneMoreShow = $map['one_more_show'];
        }
        if (isset($map['segment_index'])) {
            $model->segmentIndex = $map['segment_index'];
        }
        if (isset($map['segment_key'])) {
            $model->segmentKey = $map['segment_key'];
        }
        if (isset($map['segment_visa_remark'])) {
            $model->segmentVisaRemark = segmentVisaRemark::fromMap($map['segment_visa_remark']);
        }
        if (isset($map['share'])) {
            $model->share = $map['share'];
        }
        if (isset($map['short_flight_size'])) {
            $model->shortFlightSize = $map['short_flight_size'];
        }
        if (isset($map['stop'])) {
            $model->stop = $map['stop'];
        }
        if (isset($map['total_time'])) {
            $model->totalTime = $map['total_time'];
        }
        if (isset($map['transfer_time'])) {
            $model->transferTime = $map['transfer_time'];
        }
        if (isset($map['transfer_time_number'])) {
            $model->transferTimeNumber = $map['transfer_time_number'];
        }

        return $model;
    }
}
