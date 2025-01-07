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
    public $fromCityAdCode;

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
     * @var string
     */
    public $middleCityAdCode;

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
    public $subFromCityAdCode;

    /**
     * @var string
     */
    public $subFromCityAdName;

    /**
     * @var string
     */
    public $subMiddleCityCode;

    /**
     * @var string
     */
    public $subMiddleCityName;

    /**
     * @var string
     */
    public $subToCityCode;

    /**
     * @var string
     */
    public $subToCityName;

    /**
     * @var string
     */
    public $toCityAdCode;

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
        'costTime'          => 'cost_time',
        'endTime'           => 'end_time',
        'fromCityAdCode'    => 'from_city_ad_code',
        'fromCityName'      => 'from_city_name',
        'fromStationName'   => 'from_station_name',
        'middleCity'        => 'middle_city',
        'middleCityAdCode'  => 'middle_city_ad_code',
        'middleDate'        => 'middle_date',
        'middleStation'     => 'middle_station',
        'middleType'        => 'middle_type',
        'startTime'         => 'start_time',
        'subFromCityAdCode' => 'sub_from_city_ad_code',
        'subFromCityAdName' => 'sub_from_city_ad_name',
        'subMiddleCityCode' => 'sub_middle_city_code',
        'subMiddleCityName' => 'sub_middle_city_name',
        'subToCityCode'     => 'sub_to_city_code',
        'subToCityName'     => 'sub_to_city_name',
        'toCityAdCode'      => 'to_city_ad_code',
        'toCityName'        => 'to_city_name',
        'toStationName'     => 'to_station_name',
        'waitTime'          => 'wait_time',
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
        if (null !== $this->fromCityAdCode) {
            $res['from_city_ad_code'] = $this->fromCityAdCode;
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
        if (null !== $this->middleCityAdCode) {
            $res['middle_city_ad_code'] = $this->middleCityAdCode;
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
        if (null !== $this->subFromCityAdCode) {
            $res['sub_from_city_ad_code'] = $this->subFromCityAdCode;
        }
        if (null !== $this->subFromCityAdName) {
            $res['sub_from_city_ad_name'] = $this->subFromCityAdName;
        }
        if (null !== $this->subMiddleCityCode) {
            $res['sub_middle_city_code'] = $this->subMiddleCityCode;
        }
        if (null !== $this->subMiddleCityName) {
            $res['sub_middle_city_name'] = $this->subMiddleCityName;
        }
        if (null !== $this->subToCityCode) {
            $res['sub_to_city_code'] = $this->subToCityCode;
        }
        if (null !== $this->subToCityName) {
            $res['sub_to_city_name'] = $this->subToCityName;
        }
        if (null !== $this->toCityAdCode) {
            $res['to_city_ad_code'] = $this->toCityAdCode;
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
        if (isset($map['from_city_ad_code'])) {
            $model->fromCityAdCode = $map['from_city_ad_code'];
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
        if (isset($map['middle_city_ad_code'])) {
            $model->middleCityAdCode = $map['middle_city_ad_code'];
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
        if (isset($map['sub_from_city_ad_code'])) {
            $model->subFromCityAdCode = $map['sub_from_city_ad_code'];
        }
        if (isset($map['sub_from_city_ad_name'])) {
            $model->subFromCityAdName = $map['sub_from_city_ad_name'];
        }
        if (isset($map['sub_middle_city_code'])) {
            $model->subMiddleCityCode = $map['sub_middle_city_code'];
        }
        if (isset($map['sub_middle_city_name'])) {
            $model->subMiddleCityName = $map['sub_middle_city_name'];
        }
        if (isset($map['sub_to_city_code'])) {
            $model->subToCityCode = $map['sub_to_city_code'];
        }
        if (isset($map['sub_to_city_name'])) {
            $model->subToCityName = $map['sub_to_city_name'];
        }
        if (isset($map['to_city_ad_code'])) {
            $model->toCityAdCode = $map['to_city_ad_code'];
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
