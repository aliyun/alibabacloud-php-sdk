<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainOrderQueryResponseBody\module;

use AlibabaCloud\Tea\Model;

class trainInfo extends Model
{
    /**
     * @example 2022-05-15T22:27Z
     *
     * @var string
     */
    public $arrTime;

    /**
     * @example 2022-05-15T22:27Z
     *
     * @var string
     */
    public $depTime;

    /**
     * @var string
     */
    public $fromCityAdCode;

    /**
     * @var string
     */
    public $fromStationName;

    /**
     * @example 100
     *
     * @var int
     */
    public $runTime;

    /**
     * @var string
     */
    public $toCityAdCode;

    /**
     * @var string
     */
    public $toStationName;

    /**
     * @example CS-150
     *
     * @var string
     */
    public $trainNo;
    protected $_name = [
        'arrTime'         => 'arr_time',
        'depTime'         => 'dep_time',
        'fromCityAdCode'  => 'from_city_ad_code',
        'fromStationName' => 'from_station_name',
        'runTime'         => 'run_time',
        'toCityAdCode'    => 'to_city_ad_code',
        'toStationName'   => 'to_station_name',
        'trainNo'         => 'train_no',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->arrTime) {
            $res['arr_time'] = $this->arrTime;
        }
        if (null !== $this->depTime) {
            $res['dep_time'] = $this->depTime;
        }
        if (null !== $this->fromCityAdCode) {
            $res['from_city_ad_code'] = $this->fromCityAdCode;
        }
        if (null !== $this->fromStationName) {
            $res['from_station_name'] = $this->fromStationName;
        }
        if (null !== $this->runTime) {
            $res['run_time'] = $this->runTime;
        }
        if (null !== $this->toCityAdCode) {
            $res['to_city_ad_code'] = $this->toCityAdCode;
        }
        if (null !== $this->toStationName) {
            $res['to_station_name'] = $this->toStationName;
        }
        if (null !== $this->trainNo) {
            $res['train_no'] = $this->trainNo;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return trainInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['arr_time'])) {
            $model->arrTime = $map['arr_time'];
        }
        if (isset($map['dep_time'])) {
            $model->depTime = $map['dep_time'];
        }
        if (isset($map['from_city_ad_code'])) {
            $model->fromCityAdCode = $map['from_city_ad_code'];
        }
        if (isset($map['from_station_name'])) {
            $model->fromStationName = $map['from_station_name'];
        }
        if (isset($map['run_time'])) {
            $model->runTime = $map['run_time'];
        }
        if (isset($map['to_city_ad_code'])) {
            $model->toCityAdCode = $map['to_city_ad_code'];
        }
        if (isset($map['to_station_name'])) {
            $model->toStationName = $map['to_station_name'];
        }
        if (isset($map['train_no'])) {
            $model->trainNo = $map['train_no'];
        }

        return $model;
    }
}
