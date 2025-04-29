<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightOrderDetailResponseBody\module\journeyList\segmentList;

use AlibabaCloud\Dara\Model;

class stopCityList extends Model
{
    /**
     * @var string
     */
    public $stopAirport;

    /**
     * @var string
     */
    public $stopAirportName;

    /**
     * @var string
     */
    public $stopArrTerminal;

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
    public $stopDepTerminal;

    /**
     * @var string
     */
    public $stopDepTime;
    protected $_name = [
        'stopAirport' => 'stop_airport',
        'stopAirportName' => 'stop_airport_name',
        'stopArrTerminal' => 'stop_arr_terminal',
        'stopArrTime' => 'stop_arr_time',
        'stopCityCode' => 'stop_city_code',
        'stopCityName' => 'stop_city_name',
        'stopDepTerminal' => 'stop_dep_terminal',
        'stopDepTime' => 'stop_dep_time',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->stopAirport) {
            $res['stop_airport'] = $this->stopAirport;
        }

        if (null !== $this->stopAirportName) {
            $res['stop_airport_name'] = $this->stopAirportName;
        }

        if (null !== $this->stopArrTerminal) {
            $res['stop_arr_terminal'] = $this->stopArrTerminal;
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

        if (null !== $this->stopDepTerminal) {
            $res['stop_dep_terminal'] = $this->stopDepTerminal;
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
        if (isset($map['stop_airport'])) {
            $model->stopAirport = $map['stop_airport'];
        }

        if (isset($map['stop_airport_name'])) {
            $model->stopAirportName = $map['stop_airport_name'];
        }

        if (isset($map['stop_arr_terminal'])) {
            $model->stopArrTerminal = $map['stop_arr_terminal'];
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

        if (isset($map['stop_dep_terminal'])) {
            $model->stopDepTerminal = $map['stop_dep_terminal'];
        }

        if (isset($map['stop_dep_time'])) {
            $model->stopDepTime = $map['stop_dep_time'];
        }

        return $model;
    }
}
