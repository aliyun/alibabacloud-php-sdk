<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainNoInfoSearchResponseBody\module;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainNoInfoSearchResponseBody\module\trainStationSearchVO\seatInfos;

class trainStationSearchVO extends Model
{
    /**
     * @var string
     */
    public $arrDayTag;

    /**
     * @var string
     */
    public $arrStationCode;

    /**
     * @var string
     */
    public $arrStationName;

    /**
     * @var string
     */
    public $arrTime;

    /**
     * @var string
     */
    public $costTime;

    /**
     * @var string
     */
    public $depStationCode;

    /**
     * @var string
     */
    public $depStationName;

    /**
     * @var string
     */
    public $depTime;

    /**
     * @var int
     */
    public $isEndStation;

    /**
     * @var int
     */
    public $isStartStation;

    /**
     * @var string
     */
    public $price;

    /**
     * @var string
     */
    public $saleFlag;

    /**
     * @var seatInfos[]
     */
    public $seatInfos;

    /**
     * @var string
     */
    public $trainNo;

    /**
     * @var string
     */
    public $trainType;
    protected $_name = [
        'arrDayTag' => 'arr_day_tag',
        'arrStationCode' => 'arr_station_code',
        'arrStationName' => 'arr_station_name',
        'arrTime' => 'arr_time',
        'costTime' => 'cost_time',
        'depStationCode' => 'dep_station_code',
        'depStationName' => 'dep_station_name',
        'depTime' => 'dep_time',
        'isEndStation' => 'is_end_station',
        'isStartStation' => 'is_start_station',
        'price' => 'price',
        'saleFlag' => 'sale_flag',
        'seatInfos' => 'seat_infos',
        'trainNo' => 'train_no',
        'trainType' => 'train_type',
    ];

    public function validate()
    {
        if (\is_array($this->seatInfos)) {
            Model::validateArray($this->seatInfos);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->arrDayTag) {
            $res['arr_day_tag'] = $this->arrDayTag;
        }

        if (null !== $this->arrStationCode) {
            $res['arr_station_code'] = $this->arrStationCode;
        }

        if (null !== $this->arrStationName) {
            $res['arr_station_name'] = $this->arrStationName;
        }

        if (null !== $this->arrTime) {
            $res['arr_time'] = $this->arrTime;
        }

        if (null !== $this->costTime) {
            $res['cost_time'] = $this->costTime;
        }

        if (null !== $this->depStationCode) {
            $res['dep_station_code'] = $this->depStationCode;
        }

        if (null !== $this->depStationName) {
            $res['dep_station_name'] = $this->depStationName;
        }

        if (null !== $this->depTime) {
            $res['dep_time'] = $this->depTime;
        }

        if (null !== $this->isEndStation) {
            $res['is_end_station'] = $this->isEndStation;
        }

        if (null !== $this->isStartStation) {
            $res['is_start_station'] = $this->isStartStation;
        }

        if (null !== $this->price) {
            $res['price'] = $this->price;
        }

        if (null !== $this->saleFlag) {
            $res['sale_flag'] = $this->saleFlag;
        }

        if (null !== $this->seatInfos) {
            if (\is_array($this->seatInfos)) {
                $res['seat_infos'] = [];
                $n1 = 0;
                foreach ($this->seatInfos as $item1) {
                    $res['seat_infos'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->trainNo) {
            $res['train_no'] = $this->trainNo;
        }

        if (null !== $this->trainType) {
            $res['train_type'] = $this->trainType;
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
        if (isset($map['arr_day_tag'])) {
            $model->arrDayTag = $map['arr_day_tag'];
        }

        if (isset($map['arr_station_code'])) {
            $model->arrStationCode = $map['arr_station_code'];
        }

        if (isset($map['arr_station_name'])) {
            $model->arrStationName = $map['arr_station_name'];
        }

        if (isset($map['arr_time'])) {
            $model->arrTime = $map['arr_time'];
        }

        if (isset($map['cost_time'])) {
            $model->costTime = $map['cost_time'];
        }

        if (isset($map['dep_station_code'])) {
            $model->depStationCode = $map['dep_station_code'];
        }

        if (isset($map['dep_station_name'])) {
            $model->depStationName = $map['dep_station_name'];
        }

        if (isset($map['dep_time'])) {
            $model->depTime = $map['dep_time'];
        }

        if (isset($map['is_end_station'])) {
            $model->isEndStation = $map['is_end_station'];
        }

        if (isset($map['is_start_station'])) {
            $model->isStartStation = $map['is_start_station'];
        }

        if (isset($map['price'])) {
            $model->price = $map['price'];
        }

        if (isset($map['sale_flag'])) {
            $model->saleFlag = $map['sale_flag'];
        }

        if (isset($map['seat_infos'])) {
            if (!empty($map['seat_infos'])) {
                $model->seatInfos = [];
                $n1 = 0;
                foreach ($map['seat_infos'] as $item1) {
                    $model->seatInfos[$n1] = seatInfos::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['train_no'])) {
            $model->trainNo = $map['train_no'];
        }

        if (isset($map['train_type'])) {
            $model->trainType = $map['train_type'];
        }

        return $model;
    }
}
