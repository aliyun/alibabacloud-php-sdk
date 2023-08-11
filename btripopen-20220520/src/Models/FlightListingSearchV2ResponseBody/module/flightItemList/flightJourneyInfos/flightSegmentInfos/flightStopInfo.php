<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightListingSearchV2ResponseBody\module\flightItemList\flightJourneyInfos\flightSegmentInfos;

use AlibabaCloud\Tea\Model;

class flightStopInfo extends Model
{
    /**
     * @example HGH
     *
     * @var string
     */
    public $stopAirport;

    /**
     * @var string
     */
    public $stopAirportName;

    /**
     * @example T3
     *
     * @var string
     */
    public $stopArrTerm;

    /**
     * @example BJS
     *
     * @var string
     */
    public $stopArrTime;

    /**
     * @example HGH
     *
     * @var string
     */
    public $stopCityCode;

    /**
     * @example HGH
     *
     * @var string
     */
    public $stopCityName;

    /**
     * @var string[]
     */
    public $stopCityNames;

    /**
     * @example T4
     *
     * @var string
     */
    public $stopDepTerm;

    /**
     * @example 2023-08-13 07:25
     *
     * @var string
     */
    public $stopDepTime;

    /**
     * @var string
     */
    public $stopTime;
    protected $_name = [
        'stopAirport'     => 'stop_airport',
        'stopAirportName' => 'stop_airport_name',
        'stopArrTerm'     => 'stop_arr_term',
        'stopArrTime'     => 'stop_arr_time',
        'stopCityCode'    => 'stop_city_code',
        'stopCityName'    => 'stop_city_name',
        'stopCityNames'   => 'stop_city_names',
        'stopDepTerm'     => 'stop_dep_term',
        'stopDepTime'     => 'stop_dep_time',
        'stopTime'        => 'stop_time',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->stopAirport) {
            $res['stop_airport'] = $this->stopAirport;
        }
        if (null !== $this->stopAirportName) {
            $res['stop_airport_name'] = $this->stopAirportName;
        }
        if (null !== $this->stopArrTerm) {
            $res['stop_arr_term'] = $this->stopArrTerm;
        }
        if (null !== $this->stopArrTime) {
            $res['stop_arr_time'] = $this->stopArrTime;
        }
        if (null !== $this->stopCityCode) {
            $res['stop_city_code'] = $this->stopCityCode;
        }
        if (null !== $this->stopCityName) {
            $res['stop_city_name'] = $this->stopCityName;
        }
        if (null !== $this->stopCityNames) {
            $res['stop_city_names'] = $this->stopCityNames;
        }
        if (null !== $this->stopDepTerm) {
            $res['stop_dep_term'] = $this->stopDepTerm;
        }
        if (null !== $this->stopDepTime) {
            $res['stop_dep_time'] = $this->stopDepTime;
        }
        if (null !== $this->stopTime) {
            $res['stop_time'] = $this->stopTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return flightStopInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['stop_airport'])) {
            $model->stopAirport = $map['stop_airport'];
        }
        if (isset($map['stop_airport_name'])) {
            $model->stopAirportName = $map['stop_airport_name'];
        }
        if (isset($map['stop_arr_term'])) {
            $model->stopArrTerm = $map['stop_arr_term'];
        }
        if (isset($map['stop_arr_time'])) {
            $model->stopArrTime = $map['stop_arr_time'];
        }
        if (isset($map['stop_city_code'])) {
            $model->stopCityCode = $map['stop_city_code'];
        }
        if (isset($map['stop_city_name'])) {
            $model->stopCityName = $map['stop_city_name'];
        }
        if (isset($map['stop_city_names'])) {
            if (!empty($map['stop_city_names'])) {
                $model->stopCityNames = $map['stop_city_names'];
            }
        }
        if (isset($map['stop_dep_term'])) {
            $model->stopDepTerm = $map['stop_dep_term'];
        }
        if (isset($map['stop_dep_time'])) {
            $model->stopDepTime = $map['stop_dep_time'];
        }
        if (isset($map['stop_time'])) {
            $model->stopTime = $map['stop_time'];
        }

        return $model;
    }
}
