<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightOrderDetailResponseBody\module\journeyList\segmentList;

use AlibabaCloud\Tea\Model;

class flightOtherInfo extends Model
{
    /**
     * @example 100
     *
     * @var string
     */
    public $aircraftAge;

    /**
     * @example 10
     *
     * @var string
     */
    public $avgDelayTime;

    /**
     * @example 32Q
     *
     * @var string
     */
    public $equipType;

    /**
     * @example 20
     *
     * @var string
     */
    public $flightCancelRate;

    /**
     * @example 195
     *
     * @var int
     */
    public $flightDistance;

    /**
     * @example 165
     *
     * @var int
     */
    public $flightDuration;

    /**
     * @var string
     */
    public $flightSize;

    /**
     * @example 70
     *
     * @var string
     */
    public $jetBridgeRate;

    /**
     * @var string
     */
    public $manufacturer;

    /**
     * @example 0
     *
     * @var int
     */
    public $meal;

    /**
     * @var string
     */
    public $mealDesc;

    /**
     * @example 80
     *
     * @var string
     */
    public $onTimeRate;

    /**
     * @example true
     *
     * @var bool
     */
    public $wifi;
    protected $_name = [
        'aircraftAge'      => 'aircraft_age',
        'avgDelayTime'     => 'avg_delay_time',
        'equipType'        => 'equip_type',
        'flightCancelRate' => 'flight_cancel_rate',
        'flightDistance'   => 'flight_distance',
        'flightDuration'   => 'flight_duration',
        'flightSize'       => 'flight_size',
        'jetBridgeRate'    => 'jet_bridge_rate',
        'manufacturer'     => 'manufacturer',
        'meal'             => 'meal',
        'mealDesc'         => 'meal_desc',
        'onTimeRate'       => 'on_time_rate',
        'wifi'             => 'wifi',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aircraftAge) {
            $res['aircraft_age'] = $this->aircraftAge;
        }
        if (null !== $this->avgDelayTime) {
            $res['avg_delay_time'] = $this->avgDelayTime;
        }
        if (null !== $this->equipType) {
            $res['equip_type'] = $this->equipType;
        }
        if (null !== $this->flightCancelRate) {
            $res['flight_cancel_rate'] = $this->flightCancelRate;
        }
        if (null !== $this->flightDistance) {
            $res['flight_distance'] = $this->flightDistance;
        }
        if (null !== $this->flightDuration) {
            $res['flight_duration'] = $this->flightDuration;
        }
        if (null !== $this->flightSize) {
            $res['flight_size'] = $this->flightSize;
        }
        if (null !== $this->jetBridgeRate) {
            $res['jet_bridge_rate'] = $this->jetBridgeRate;
        }
        if (null !== $this->manufacturer) {
            $res['manufacturer'] = $this->manufacturer;
        }
        if (null !== $this->meal) {
            $res['meal'] = $this->meal;
        }
        if (null !== $this->mealDesc) {
            $res['meal_desc'] = $this->mealDesc;
        }
        if (null !== $this->onTimeRate) {
            $res['on_time_rate'] = $this->onTimeRate;
        }
        if (null !== $this->wifi) {
            $res['wifi'] = $this->wifi;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return flightOtherInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['aircraft_age'])) {
            $model->aircraftAge = $map['aircraft_age'];
        }
        if (isset($map['avg_delay_time'])) {
            $model->avgDelayTime = $map['avg_delay_time'];
        }
        if (isset($map['equip_type'])) {
            $model->equipType = $map['equip_type'];
        }
        if (isset($map['flight_cancel_rate'])) {
            $model->flightCancelRate = $map['flight_cancel_rate'];
        }
        if (isset($map['flight_distance'])) {
            $model->flightDistance = $map['flight_distance'];
        }
        if (isset($map['flight_duration'])) {
            $model->flightDuration = $map['flight_duration'];
        }
        if (isset($map['flight_size'])) {
            $model->flightSize = $map['flight_size'];
        }
        if (isset($map['jet_bridge_rate'])) {
            $model->jetBridgeRate = $map['jet_bridge_rate'];
        }
        if (isset($map['manufacturer'])) {
            $model->manufacturer = $map['manufacturer'];
        }
        if (isset($map['meal'])) {
            $model->meal = $map['meal'];
        }
        if (isset($map['meal_desc'])) {
            $model->mealDesc = $map['meal_desc'];
        }
        if (isset($map['on_time_rate'])) {
            $model->onTimeRate = $map['on_time_rate'];
        }
        if (isset($map['wifi'])) {
            $model->wifi = $map['wifi'];
        }

        return $model;
    }
}
