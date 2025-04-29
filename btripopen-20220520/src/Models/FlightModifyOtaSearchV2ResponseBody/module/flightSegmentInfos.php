<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightModifyOtaSearchV2ResponseBody\module;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightModifyOtaSearchV2ResponseBody\module\flightSegmentInfos\airlineInfo;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightModifyOtaSearchV2ResponseBody\module\flightSegmentInfos\arrAirportInfo;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightModifyOtaSearchV2ResponseBody\module\flightSegmentInfos\depAirportInfo;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightModifyOtaSearchV2ResponseBody\module\flightSegmentInfos\flightSharedInfo;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightModifyOtaSearchV2ResponseBody\module\flightSegmentInfos\flightStopInfo;

class flightSegmentInfos extends Model
{
    /**
     * @var int
     */
    public $journeySeq;

    /**
     * @var int
     */
    public $segmentSeq;

    /**
     * @var string
     */
    public $flightNo;

    /**
     * @var string
     */
    public $depCityCode;

    /**
     * @var string
     */
    public $arrCityCode;

    /**
     * @var string
     */
    public $depCityName;

    /**
     * @var string
     */
    public $arrCityName;

    /**
     * @var depAirportInfo
     */
    public $depAirportInfo;

    /**
     * @var arrAirportInfo
     */
    public $arrAirportInfo;

    /**
     * @var string
     */
    public $depTime;

    /**
     * @var string
     */
    public $arrTime;

    /**
     * @var airlineInfo
     */
    public $airlineInfo;

    /**
     * @var bool
     */
    public $share;

    /**
     * @var flightSharedInfo
     */
    public $flightSharedInfo;

    /**
     * @var bool
     */
    public $stop;

    /**
     * @var flightStopInfo
     */
    public $flightStopInfo;

    /**
     * @var int
     */
    public $transferTime;

    /**
     * @var int
     */
    public $duration;

    /**
     * @var string
     */
    public $manufacturer;

    /**
     * @var string
     */
    public $flightType;

    /**
     * @var string
     */
    public $flightSize;

    /**
     * @var string
     */
    public $mealDesc;

    /**
     * @var string
     */
    public $onTimeRate;
    protected $_name = [
        'journeySeq' => 'journey_seq',
        'segmentSeq' => 'segment_seq',
        'flightNo' => 'flight_no',
        'depCityCode' => 'dep_city_code',
        'arrCityCode' => 'arr_city_code',
        'depCityName' => 'dep_city_name',
        'arrCityName' => 'arr_city_name',
        'depAirportInfo' => 'dep_airport_info',
        'arrAirportInfo' => 'arr_airport_info',
        'depTime' => 'dep_time',
        'arrTime' => 'arr_time',
        'airlineInfo' => 'airline_info',
        'share' => 'share',
        'flightSharedInfo' => 'flight_shared_info',
        'stop' => 'stop',
        'flightStopInfo' => 'flight_stop_info',
        'transferTime' => 'transfer_time',
        'duration' => 'duration',
        'manufacturer' => 'manufacturer',
        'flightType' => 'flight_type',
        'flightSize' => 'flight_size',
        'mealDesc' => 'meal_desc',
        'onTimeRate' => 'on_time_rate',
    ];

    public function validate()
    {
        if (null !== $this->depAirportInfo) {
            $this->depAirportInfo->validate();
        }
        if (null !== $this->arrAirportInfo) {
            $this->arrAirportInfo->validate();
        }
        if (null !== $this->airlineInfo) {
            $this->airlineInfo->validate();
        }
        if (null !== $this->flightSharedInfo) {
            $this->flightSharedInfo->validate();
        }
        if (null !== $this->flightStopInfo) {
            $this->flightStopInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->journeySeq) {
            $res['journey_seq'] = $this->journeySeq;
        }

        if (null !== $this->segmentSeq) {
            $res['segment_seq'] = $this->segmentSeq;
        }

        if (null !== $this->flightNo) {
            $res['flight_no'] = $this->flightNo;
        }

        if (null !== $this->depCityCode) {
            $res['dep_city_code'] = $this->depCityCode;
        }

        if (null !== $this->arrCityCode) {
            $res['arr_city_code'] = $this->arrCityCode;
        }

        if (null !== $this->depCityName) {
            $res['dep_city_name'] = $this->depCityName;
        }

        if (null !== $this->arrCityName) {
            $res['arr_city_name'] = $this->arrCityName;
        }

        if (null !== $this->depAirportInfo) {
            $res['dep_airport_info'] = null !== $this->depAirportInfo ? $this->depAirportInfo->toArray($noStream) : $this->depAirportInfo;
        }

        if (null !== $this->arrAirportInfo) {
            $res['arr_airport_info'] = null !== $this->arrAirportInfo ? $this->arrAirportInfo->toArray($noStream) : $this->arrAirportInfo;
        }

        if (null !== $this->depTime) {
            $res['dep_time'] = $this->depTime;
        }

        if (null !== $this->arrTime) {
            $res['arr_time'] = $this->arrTime;
        }

        if (null !== $this->airlineInfo) {
            $res['airline_info'] = null !== $this->airlineInfo ? $this->airlineInfo->toArray($noStream) : $this->airlineInfo;
        }

        if (null !== $this->share) {
            $res['share'] = $this->share;
        }

        if (null !== $this->flightSharedInfo) {
            $res['flight_shared_info'] = null !== $this->flightSharedInfo ? $this->flightSharedInfo->toArray($noStream) : $this->flightSharedInfo;
        }

        if (null !== $this->stop) {
            $res['stop'] = $this->stop;
        }

        if (null !== $this->flightStopInfo) {
            $res['flight_stop_info'] = null !== $this->flightStopInfo ? $this->flightStopInfo->toArray($noStream) : $this->flightStopInfo;
        }

        if (null !== $this->transferTime) {
            $res['transfer_time'] = $this->transferTime;
        }

        if (null !== $this->duration) {
            $res['duration'] = $this->duration;
        }

        if (null !== $this->manufacturer) {
            $res['manufacturer'] = $this->manufacturer;
        }

        if (null !== $this->flightType) {
            $res['flight_type'] = $this->flightType;
        }

        if (null !== $this->flightSize) {
            $res['flight_size'] = $this->flightSize;
        }

        if (null !== $this->mealDesc) {
            $res['meal_desc'] = $this->mealDesc;
        }

        if (null !== $this->onTimeRate) {
            $res['on_time_rate'] = $this->onTimeRate;
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
        if (isset($map['journey_seq'])) {
            $model->journeySeq = $map['journey_seq'];
        }

        if (isset($map['segment_seq'])) {
            $model->segmentSeq = $map['segment_seq'];
        }

        if (isset($map['flight_no'])) {
            $model->flightNo = $map['flight_no'];
        }

        if (isset($map['dep_city_code'])) {
            $model->depCityCode = $map['dep_city_code'];
        }

        if (isset($map['arr_city_code'])) {
            $model->arrCityCode = $map['arr_city_code'];
        }

        if (isset($map['dep_city_name'])) {
            $model->depCityName = $map['dep_city_name'];
        }

        if (isset($map['arr_city_name'])) {
            $model->arrCityName = $map['arr_city_name'];
        }

        if (isset($map['dep_airport_info'])) {
            $model->depAirportInfo = depAirportInfo::fromMap($map['dep_airport_info']);
        }

        if (isset($map['arr_airport_info'])) {
            $model->arrAirportInfo = arrAirportInfo::fromMap($map['arr_airport_info']);
        }

        if (isset($map['dep_time'])) {
            $model->depTime = $map['dep_time'];
        }

        if (isset($map['arr_time'])) {
            $model->arrTime = $map['arr_time'];
        }

        if (isset($map['airline_info'])) {
            $model->airlineInfo = airlineInfo::fromMap($map['airline_info']);
        }

        if (isset($map['share'])) {
            $model->share = $map['share'];
        }

        if (isset($map['flight_shared_info'])) {
            $model->flightSharedInfo = flightSharedInfo::fromMap($map['flight_shared_info']);
        }

        if (isset($map['stop'])) {
            $model->stop = $map['stop'];
        }

        if (isset($map['flight_stop_info'])) {
            $model->flightStopInfo = flightStopInfo::fromMap($map['flight_stop_info']);
        }

        if (isset($map['transfer_time'])) {
            $model->transferTime = $map['transfer_time'];
        }

        if (isset($map['duration'])) {
            $model->duration = $map['duration'];
        }

        if (isset($map['manufacturer'])) {
            $model->manufacturer = $map['manufacturer'];
        }

        if (isset($map['flight_type'])) {
            $model->flightType = $map['flight_type'];
        }

        if (isset($map['flight_size'])) {
            $model->flightSize = $map['flight_size'];
        }

        if (isset($map['meal_desc'])) {
            $model->mealDesc = $map['meal_desc'];
        }

        if (isset($map['on_time_rate'])) {
            $model->onTimeRate = $map['on_time_rate'];
        }

        return $model;
    }
}
