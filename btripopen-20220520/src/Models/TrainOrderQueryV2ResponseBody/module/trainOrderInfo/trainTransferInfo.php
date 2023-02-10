<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainOrderQueryV2ResponseBody\module\trainOrderInfo;

use AlibabaCloud\Tea\Model;

class trainTransferInfo extends Model
{
    /**
     * @example 200
     *
     * @var string
     */
    public $costTime;

    /**
     * @example 2022-11-15 00:00:00
     *
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $fromCityName;

    /**
     * @var string
     */
    public $fromStationName;

    /**
     * @var string
     */
    public $middleCity;

    /**
     * @example 2023-01-29 18:10:00
     *
     * @var string
     */
    public $middleDate;

    /**
     * @var string
     */
    public $middleStation;

    /**
     * @var string
     */
    public $middleType;

    /**
     * @example 2022-11-01 00:00:00
     *
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $toCityName;

    /**
     * @var string
     */
    public $toStationName;

    /**
     * @example 60
     *
     * @var string
     */
    public $waitTime;
    protected $_name = [
        'costTime'        => 'cost_time',
        'endTime'         => 'end_time',
        'fromCityName'    => 'from_city_name',
        'fromStationName' => 'from_station_name',
        'middleCity'      => 'middle_city',
        'middleDate'      => 'middle_date',
        'middleStation'   => 'middle_station',
        'middleType'      => 'middle_type',
        'startTime'       => 'start_time',
        'toCityName'      => 'to_city_name',
        'toStationName'   => 'to_station_name',
        'waitTime'        => 'wait_time',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->costTime) {
            $res['cost_time'] = $this->costTime;
        }
        if (null !== $this->endTime) {
            $res['end_time'] = $this->endTime;
        }
        if (null !== $this->fromCityName) {
            $res['from_city_name'] = $this->fromCityName;
        }
        if (null !== $this->fromStationName) {
            $res['from_station_name'] = $this->fromStationName;
        }
        if (null !== $this->middleCity) {
            $res['middle_city'] = $this->middleCity;
        }
        if (null !== $this->middleDate) {
            $res['middle_date'] = $this->middleDate;
        }
        if (null !== $this->middleStation) {
            $res['middle_station'] = $this->middleStation;
        }
        if (null !== $this->middleType) {
            $res['middle_type'] = $this->middleType;
        }
        if (null !== $this->startTime) {
            $res['start_time'] = $this->startTime;
        }
        if (null !== $this->toCityName) {
            $res['to_city_name'] = $this->toCityName;
        }
        if (null !== $this->toStationName) {
            $res['to_station_name'] = $this->toStationName;
        }
        if (null !== $this->waitTime) {
            $res['wait_time'] = $this->waitTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return trainTransferInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['cost_time'])) {
            $model->costTime = $map['cost_time'];
        }
        if (isset($map['end_time'])) {
            $model->endTime = $map['end_time'];
        }
        if (isset($map['from_city_name'])) {
            $model->fromCityName = $map['from_city_name'];
        }
        if (isset($map['from_station_name'])) {
            $model->fromStationName = $map['from_station_name'];
        }
        if (isset($map['middle_city'])) {
            $model->middleCity = $map['middle_city'];
        }
        if (isset($map['middle_date'])) {
            $model->middleDate = $map['middle_date'];
        }
        if (isset($map['middle_station'])) {
            $model->middleStation = $map['middle_station'];
        }
        if (isset($map['middle_type'])) {
            $model->middleType = $map['middle_type'];
        }
        if (isset($map['start_time'])) {
            $model->startTime = $map['start_time'];
        }
        if (isset($map['to_city_name'])) {
            $model->toCityName = $map['to_city_name'];
        }
        if (isset($map['to_station_name'])) {
            $model->toStationName = $map['to_station_name'];
        }
        if (isset($map['wait_time'])) {
            $model->waitTime = $map['wait_time'];
        }

        return $model;
    }
}
