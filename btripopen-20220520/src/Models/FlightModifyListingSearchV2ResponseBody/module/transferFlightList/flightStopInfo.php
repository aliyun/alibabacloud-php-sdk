<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightModifyListingSearchV2ResponseBody\module\transferFlightList;

use AlibabaCloud\Tea\Model;

class flightStopInfo extends Model
{
    /**
     * @var string
     */
    public $stopAirport;

    /**
     * @var string
     */
    public $stopArrTerm;

    /**
     * @var string
     */
    public $stopArrTime;

    /**
     * @var string
     */
    public $stopCityCode;

    /**
     * @var string
     */
    public $stopCityName;

    /**
     * @var string
     */
    public $stopDepTerm;

    /**
     * @var string
     */
    public $stopDepTime;
    protected $_name = [
        'stopAirport'  => 'stop_airport',
        'stopArrTerm'  => 'stop_arr_term',
        'stopArrTime'  => 'stop_arr_time',
        'stopCityCode' => 'stop_city_code',
        'stopCityName' => 'stop_city_name',
        'stopDepTerm'  => 'stop_dep_term',
        'stopDepTime'  => 'stop_dep_time',
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
        if (null !== $this->stopDepTerm) {
            $res['stop_dep_term'] = $this->stopDepTerm;
        }
        if (null !== $this->stopDepTime) {
            $res['stop_dep_time'] = $this->stopDepTime;
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
        if (isset($map['stop_dep_term'])) {
            $model->stopDepTerm = $map['stop_dep_term'];
        }
        if (isset($map['stop_dep_time'])) {
            $model->stopDepTime = $map['stop_dep_time'];
        }

        return $model;
    }
}
