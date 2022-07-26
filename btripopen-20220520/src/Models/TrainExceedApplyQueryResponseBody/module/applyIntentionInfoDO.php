<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainExceedApplyQueryResponseBody\module;

use AlibabaCloud\Tea\Model;

class applyIntentionInfoDO extends Model
{
    /**
     * @var string
     */
    public $arrCity;

    /**
     * @var string
     */
    public $arrCityName;

    /**
     * @var string
     */
    public $arrStation;

    /**
     * @var string
     */
    public $arrTime;

    /**
     * @var string
     */
    public $depCity;

    /**
     * @var string
     */
    public $depCityName;

    /**
     * @var string
     */
    public $depStation;

    /**
     * @var string
     */
    public $depTime;

    /**
     * @var int
     */
    public $price;

    /**
     * @var string
     */
    public $seatName;

    /**
     * @var string
     */
    public $trainNo;

    /**
     * @var string
     */
    public $trainTypeDesc;

    /**
     * @var int
     */
    public $type;
    protected $_name = [
        'arrCity'       => 'arr_city',
        'arrCityName'   => 'arr_city_name',
        'arrStation'    => 'arr_station',
        'arrTime'       => 'arr_time',
        'depCity'       => 'dep_city',
        'depCityName'   => 'dep_city_name',
        'depStation'    => 'dep_station',
        'depTime'       => 'dep_time',
        'price'         => 'price',
        'seatName'      => 'seat_name',
        'trainNo'       => 'train_no',
        'trainTypeDesc' => 'train_type_desc',
        'type'          => 'type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->arrCity) {
            $res['arr_city'] = $this->arrCity;
        }
        if (null !== $this->arrCityName) {
            $res['arr_city_name'] = $this->arrCityName;
        }
        if (null !== $this->arrStation) {
            $res['arr_station'] = $this->arrStation;
        }
        if (null !== $this->arrTime) {
            $res['arr_time'] = $this->arrTime;
        }
        if (null !== $this->depCity) {
            $res['dep_city'] = $this->depCity;
        }
        if (null !== $this->depCityName) {
            $res['dep_city_name'] = $this->depCityName;
        }
        if (null !== $this->depStation) {
            $res['dep_station'] = $this->depStation;
        }
        if (null !== $this->depTime) {
            $res['dep_time'] = $this->depTime;
        }
        if (null !== $this->price) {
            $res['price'] = $this->price;
        }
        if (null !== $this->seatName) {
            $res['seat_name'] = $this->seatName;
        }
        if (null !== $this->trainNo) {
            $res['train_no'] = $this->trainNo;
        }
        if (null !== $this->trainTypeDesc) {
            $res['train_type_desc'] = $this->trainTypeDesc;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return applyIntentionInfoDO
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['arr_city'])) {
            $model->arrCity = $map['arr_city'];
        }
        if (isset($map['arr_city_name'])) {
            $model->arrCityName = $map['arr_city_name'];
        }
        if (isset($map['arr_station'])) {
            $model->arrStation = $map['arr_station'];
        }
        if (isset($map['arr_time'])) {
            $model->arrTime = $map['arr_time'];
        }
        if (isset($map['dep_city'])) {
            $model->depCity = $map['dep_city'];
        }
        if (isset($map['dep_city_name'])) {
            $model->depCityName = $map['dep_city_name'];
        }
        if (isset($map['dep_station'])) {
            $model->depStation = $map['dep_station'];
        }
        if (isset($map['dep_time'])) {
            $model->depTime = $map['dep_time'];
        }
        if (isset($map['price'])) {
            $model->price = $map['price'];
        }
        if (isset($map['seat_name'])) {
            $model->seatName = $map['seat_name'];
        }
        if (isset($map['train_no'])) {
            $model->trainNo = $map['train_no'];
        }
        if (isset($map['train_type_desc'])) {
            $model->trainTypeDesc = $map['train_type_desc'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
