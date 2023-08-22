<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightModifyListingSearchV2ResponseBody\module;

use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightModifyListingSearchV2ResponseBody\module\directFlightList\airlineInfo;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightModifyListingSearchV2ResponseBody\module\directFlightList\arrAirportInfo;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightModifyListingSearchV2ResponseBody\module\directFlightList\depAirportInfo;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightModifyListingSearchV2ResponseBody\module\directFlightList\flightShareInfo;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightModifyListingSearchV2ResponseBody\module\directFlightList\flightStopInfo;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightModifyListingSearchV2ResponseBody\module\directFlightList\flightTransferInfo;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightModifyListingSearchV2ResponseBody\module\directFlightList\priceInfoDTO;
use AlibabaCloud\Tea\Model;

class directFlightList extends Model
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
     * @example 2023-09-18 10:25:00
     *
     * @var string
     */
    public $arrTime;

    /**
     * @var depAirportInfo
     */
    public $depAirportInfo;

    /**
     * @example XIL
     *
     * @var string
     */
    public $depCityCode;

    /**
     * @example 2023-09-18 09:10:00
     *
     * @var string
     */
    public $depTime;

    /**
     * @example 240
     *
     * @var int
     */
    public $duration;

    /**
     * @example CA1110
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
     * @var flightTransferInfo
     */
    public $flightTransferInfo;

    /**
     * @example ARJ
     *
     * @var string
     */
    public $flightType;

    /**
     * @example 0
     *
     * @var int
     */
    public $journeySeq;

    /**
     * @example 8
     *
     * @var string
     */
    public $leftNum;

    /**
     * @var string
     */
    public $manufacturer;

    /**
     * @var string
     */
    public $mealDesc;

    /**
     * @var priceInfoDTO
     */
    public $priceInfoDTO;

    /**
     * @example 0
     *
     * @var int
     */
    public $segmentSeq;

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
     * @var string
     */
    public $spanDay;

    /**
     * @example false
     *
     * @var bool
     */
    public $stop;

    /**
     * @example false
     *
     * @var bool
     */
    public $transfer;
    protected $_name = [
        'airlineInfo'        => 'airline_info',
        'arrAirportInfo'     => 'arr_airport_info',
        'arrCityCode'        => 'arr_city_code',
        'arrTime'            => 'arr_time',
        'depAirportInfo'     => 'dep_airport_info',
        'depCityCode'        => 'dep_city_code',
        'depTime'            => 'dep_time',
        'duration'           => 'duration',
        'flightNo'           => 'flight_no',
        'flightShareInfo'    => 'flight_share_info',
        'flightSize'         => 'flight_size',
        'flightStopInfo'     => 'flight_stop_info',
        'flightTransferInfo' => 'flight_transfer_info',
        'flightType'         => 'flight_type',
        'journeySeq'         => 'journey_seq',
        'leftNum'            => 'left_num',
        'manufacturer'       => 'manufacturer',
        'mealDesc'           => 'meal_desc',
        'priceInfoDTO'       => 'price_info_d_t_o',
        'segmentSeq'         => 'segment_seq',
        'share'              => 'share',
        'shortFlightSize'    => 'short_flight_size',
        'spanDay'            => 'span_day',
        'stop'               => 'stop',
        'transfer'           => 'transfer',
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
        if (null !== $this->arrTime) {
            $res['arr_time'] = $this->arrTime;
        }
        if (null !== $this->depAirportInfo) {
            $res['dep_airport_info'] = null !== $this->depAirportInfo ? $this->depAirportInfo->toMap() : null;
        }
        if (null !== $this->depCityCode) {
            $res['dep_city_code'] = $this->depCityCode;
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
        if (null !== $this->flightTransferInfo) {
            $res['flight_transfer_info'] = null !== $this->flightTransferInfo ? $this->flightTransferInfo->toMap() : null;
        }
        if (null !== $this->flightType) {
            $res['flight_type'] = $this->flightType;
        }
        if (null !== $this->journeySeq) {
            $res['journey_seq'] = $this->journeySeq;
        }
        if (null !== $this->leftNum) {
            $res['left_num'] = $this->leftNum;
        }
        if (null !== $this->manufacturer) {
            $res['manufacturer'] = $this->manufacturer;
        }
        if (null !== $this->mealDesc) {
            $res['meal_desc'] = $this->mealDesc;
        }
        if (null !== $this->priceInfoDTO) {
            $res['price_info_d_t_o'] = null !== $this->priceInfoDTO ? $this->priceInfoDTO->toMap() : null;
        }
        if (null !== $this->segmentSeq) {
            $res['segment_seq'] = $this->segmentSeq;
        }
        if (null !== $this->share) {
            $res['share'] = $this->share;
        }
        if (null !== $this->shortFlightSize) {
            $res['short_flight_size'] = $this->shortFlightSize;
        }
        if (null !== $this->spanDay) {
            $res['span_day'] = $this->spanDay;
        }
        if (null !== $this->stop) {
            $res['stop'] = $this->stop;
        }
        if (null !== $this->transfer) {
            $res['transfer'] = $this->transfer;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return directFlightList
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
        if (isset($map['arr_time'])) {
            $model->arrTime = $map['arr_time'];
        }
        if (isset($map['dep_airport_info'])) {
            $model->depAirportInfo = depAirportInfo::fromMap($map['dep_airport_info']);
        }
        if (isset($map['dep_city_code'])) {
            $model->depCityCode = $map['dep_city_code'];
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
        if (isset($map['flight_transfer_info'])) {
            $model->flightTransferInfo = flightTransferInfo::fromMap($map['flight_transfer_info']);
        }
        if (isset($map['flight_type'])) {
            $model->flightType = $map['flight_type'];
        }
        if (isset($map['journey_seq'])) {
            $model->journeySeq = $map['journey_seq'];
        }
        if (isset($map['left_num'])) {
            $model->leftNum = $map['left_num'];
        }
        if (isset($map['manufacturer'])) {
            $model->manufacturer = $map['manufacturer'];
        }
        if (isset($map['meal_desc'])) {
            $model->mealDesc = $map['meal_desc'];
        }
        if (isset($map['price_info_d_t_o'])) {
            $model->priceInfoDTO = priceInfoDTO::fromMap($map['price_info_d_t_o']);
        }
        if (isset($map['segment_seq'])) {
            $model->segmentSeq = $map['segment_seq'];
        }
        if (isset($map['share'])) {
            $model->share = $map['share'];
        }
        if (isset($map['short_flight_size'])) {
            $model->shortFlightSize = $map['short_flight_size'];
        }
        if (isset($map['span_day'])) {
            $model->spanDay = $map['span_day'];
        }
        if (isset($map['stop'])) {
            $model->stop = $map['stop'];
        }
        if (isset($map['transfer'])) {
            $model->transfer = $map['transfer'];
        }

        return $model;
    }
}
