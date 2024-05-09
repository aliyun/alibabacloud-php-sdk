<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainNoInfoSearchResponseBody\module\trainTransferStationSearchVO;

use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainNoInfoSearchResponseBody\module\trainTransferStationSearchVO\transferDetailList\seatInfos;
use AlibabaCloud\Tea\Model;

class transferDetailList extends Model
{
    /**
     * @example 1
     *
     * @var string
     */
    public $arrDayTag;

    /**
     * @example BDC
     *
     * @var string
     */
    public $arrStationCode;

    /**
     * @var string
     */
    public $arrStationName;

    /**
     * @example 2024-05-06 15:19:01
     *
     * @var string
     */
    public $arrTime;

    /**
     * @example 111
     *
     * @var string
     */
    public $costTime;

    /**
     * @example BTC
     *
     * @var string
     */
    public $depStationCode;

    /**
     * @var string
     */
    public $depStationName;

    /**
     * @example 2024-05-06 15:19:01
     *
     * @var string
     */
    public $depTime;

    /**
     * @example 1
     *
     * @var int
     */
    public $isEndStation;

    /**
     * @example 1
     *
     * @var int
     */
    public $isStartStation;

    /**
     * @example 54000
     *
     * @var string
     */
    public $price;

    /**
     * @example 1
     *
     * @var string
     */
    public $saleFlag;

    /**
     * @var seatInfos[]
     */
    public $seatInfos;

    /**
     * @example D1234
     *
     * @var string
     */
    public $trainNo;

    /**
     * @example 1
     *
     * @var string
     */
    public $trainType;
    protected $_name = [
        'arrDayTag'      => 'arr_day_tag',
        'arrStationCode' => 'arr_station_code',
        'arrStationName' => 'arr_station_name',
        'arrTime'        => 'arr_time',
        'costTime'       => 'cost_time',
        'depStationCode' => 'dep_station_code',
        'depStationName' => 'dep_station_name',
        'depTime'        => 'dep_time',
        'isEndStation'   => 'is_end_station',
        'isStartStation' => 'is_start_station',
        'price'          => 'price',
        'saleFlag'       => 'sale_flag',
        'seatInfos'      => 'seat_infos',
        'trainNo'        => 'train_no',
        'trainType'      => 'train_type',
    ];

    public function validate()
    {
    }

    public function toMap()
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
            $res['seat_infos'] = [];
            if (null !== $this->seatInfos && \is_array($this->seatInfos)) {
                $n = 0;
                foreach ($this->seatInfos as $item) {
                    $res['seat_infos'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return transferDetailList
     */
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
                $n                = 0;
                foreach ($map['seat_infos'] as $item) {
                    $model->seatInfos[$n++] = null !== $item ? seatInfos::fromMap($item) : $item;
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
