<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\IFlightOrderListQueryResponseBody\module\flightModifyOrderList;

use AlibabaCloud\Dara\Model;

class flightModifySegmentList extends Model
{
    /**
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
    public $arrApt;

    /**
     * @var string
     */
    public $arrAptCode;

    /**
     * @var string
     */
    public $arrCity;

    /**
     * @var string
     */
    public $arrCityCode;

    /**
     * @var string
     */
    public $arrTerminal;

    /**
     * @var string
     */
    public $arrTime;

    /**
     * @var string
     */
    public $carrierAirlineCode;

    /**
     * @var string
     */
    public $carrierAirlineName;

    /**
     * @var string
     */
    public $depApt;

    /**
     * @var string
     */
    public $depAptCode;

    /**
     * @var string
     */
    public $depCity;

    /**
     * @var string
     */
    public $depCityCode;

    /**
     * @var string
     */
    public $depTerminal;

    /**
     * @var string
     */
    public $depTime;

    /**
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
     * @var bool
     */
    public $share;

    /**
     * @var string
     */
    public $stopAptCode;

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
    public $stopCityCode;

    /**
     * @var string
     */
    public $stopDepTime;
    protected $_name = [
        'airlineCode' => 'airline_code',
        'airlineName' => 'airline_name',
        'arrApt' => 'arr_apt',
        'arrAptCode' => 'arr_apt_code',
        'arrCity' => 'arr_city',
        'arrCityCode' => 'arr_city_code',
        'arrTerminal' => 'arr_terminal',
        'arrTime' => 'arr_time',
        'carrierAirlineCode' => 'carrier_airline_code',
        'carrierAirlineName' => 'carrier_airline_name',
        'depApt' => 'dep_apt',
        'depAptCode' => 'dep_apt_code',
        'depCity' => 'dep_city',
        'depCityCode' => 'dep_city_code',
        'depTerminal' => 'dep_terminal',
        'depTime' => 'dep_time',
        'flightNo' => 'flight_no',
        'journeyIndex' => 'journey_index',
        'segmentIndex' => 'segment_index',
        'share' => 'share',
        'stopAptCode' => 'stop_apt_code',
        'stopArrTime' => 'stop_arr_time',
        'stopCity' => 'stop_city',
        'stopCityCode' => 'stop_city_code',
        'stopDepTime' => 'stop_dep_time',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->airlineCode) {
            $res['airline_code'] = $this->airlineCode;
        }

        if (null !== $this->airlineName) {
            $res['airline_name'] = $this->airlineName;
        }

        if (null !== $this->arrApt) {
            $res['arr_apt'] = $this->arrApt;
        }

        if (null !== $this->arrAptCode) {
            $res['arr_apt_code'] = $this->arrAptCode;
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

        if (null !== $this->carrierAirlineCode) {
            $res['carrier_airline_code'] = $this->carrierAirlineCode;
        }

        if (null !== $this->carrierAirlineName) {
            $res['carrier_airline_name'] = $this->carrierAirlineName;
        }

        if (null !== $this->depApt) {
            $res['dep_apt'] = $this->depApt;
        }

        if (null !== $this->depAptCode) {
            $res['dep_apt_code'] = $this->depAptCode;
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

        if (null !== $this->journeyIndex) {
            $res['journey_index'] = $this->journeyIndex;
        }

        if (null !== $this->segmentIndex) {
            $res['segment_index'] = $this->segmentIndex;
        }

        if (null !== $this->share) {
            $res['share'] = $this->share;
        }

        if (null !== $this->stopAptCode) {
            $res['stop_apt_code'] = $this->stopAptCode;
        }

        if (null !== $this->stopArrTime) {
            $res['stop_arr_time'] = $this->stopArrTime;
        }

        if (null !== $this->stopCity) {
            $res['stop_city'] = $this->stopCity;
        }

        if (null !== $this->stopCityCode) {
            $res['stop_city_code'] = $this->stopCityCode;
        }

        if (null !== $this->stopDepTime) {
            $res['stop_dep_time'] = $this->stopDepTime;
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
        if (isset($map['airline_code'])) {
            $model->airlineCode = $map['airline_code'];
        }

        if (isset($map['airline_name'])) {
            $model->airlineName = $map['airline_name'];
        }

        if (isset($map['arr_apt'])) {
            $model->arrApt = $map['arr_apt'];
        }

        if (isset($map['arr_apt_code'])) {
            $model->arrAptCode = $map['arr_apt_code'];
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

        if (isset($map['carrier_airline_code'])) {
            $model->carrierAirlineCode = $map['carrier_airline_code'];
        }

        if (isset($map['carrier_airline_name'])) {
            $model->carrierAirlineName = $map['carrier_airline_name'];
        }

        if (isset($map['dep_apt'])) {
            $model->depApt = $map['dep_apt'];
        }

        if (isset($map['dep_apt_code'])) {
            $model->depAptCode = $map['dep_apt_code'];
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

        if (isset($map['journey_index'])) {
            $model->journeyIndex = $map['journey_index'];
        }

        if (isset($map['segment_index'])) {
            $model->segmentIndex = $map['segment_index'];
        }

        if (isset($map['share'])) {
            $model->share = $map['share'];
        }

        if (isset($map['stop_apt_code'])) {
            $model->stopAptCode = $map['stop_apt_code'];
        }

        if (isset($map['stop_arr_time'])) {
            $model->stopArrTime = $map['stop_arr_time'];
        }

        if (isset($map['stop_city'])) {
            $model->stopCity = $map['stop_city'];
        }

        if (isset($map['stop_city_code'])) {
            $model->stopCityCode = $map['stop_city_code'];
        }

        if (isset($map['stop_dep_time'])) {
            $model->stopDepTime = $map['stop_dep_time'];
        }

        return $model;
    }
}
