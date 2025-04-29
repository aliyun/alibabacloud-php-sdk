<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainOrderListQueryResponseBody\module;

use AlibabaCloud\Dara\Model;

class priceInfoList extends Model
{
    /**
     * @var int
     */
    public $categoryCode;

    /**
     * @var int
     */
    public $categoryType;

    /**
     * @var string
     */
    public $endCity;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $originalTrainNo;

    /**
     * @var string
     */
    public $passengerName;

    /**
     * @var int
     */
    public $payType;

    /**
     * @var float
     */
    public $price;

    /**
     * @var string
     */
    public $seatType;

    /**
     * @var string
     */
    public $startCity;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $tradeId;

    /**
     * @var string
     */
    public $trainNo;

    /**
     * @var int
     */
    public $type;
    protected $_name = [
        'categoryCode' => 'category_code',
        'categoryType' => 'category_type',
        'endCity' => 'end_city',
        'endTime' => 'end_time',
        'gmtCreate' => 'gmt_create',
        'originalTrainNo' => 'original_train_no',
        'passengerName' => 'passenger_name',
        'payType' => 'pay_type',
        'price' => 'price',
        'seatType' => 'seat_type',
        'startCity' => 'start_city',
        'startTime' => 'start_time',
        'tradeId' => 'trade_id',
        'trainNo' => 'train_no',
        'type' => 'type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->categoryCode) {
            $res['category_code'] = $this->categoryCode;
        }

        if (null !== $this->categoryType) {
            $res['category_type'] = $this->categoryType;
        }

        if (null !== $this->endCity) {
            $res['end_city'] = $this->endCity;
        }

        if (null !== $this->endTime) {
            $res['end_time'] = $this->endTime;
        }

        if (null !== $this->gmtCreate) {
            $res['gmt_create'] = $this->gmtCreate;
        }

        if (null !== $this->originalTrainNo) {
            $res['original_train_no'] = $this->originalTrainNo;
        }

        if (null !== $this->passengerName) {
            $res['passenger_name'] = $this->passengerName;
        }

        if (null !== $this->payType) {
            $res['pay_type'] = $this->payType;
        }

        if (null !== $this->price) {
            $res['price'] = $this->price;
        }

        if (null !== $this->seatType) {
            $res['seat_type'] = $this->seatType;
        }

        if (null !== $this->startCity) {
            $res['start_city'] = $this->startCity;
        }

        if (null !== $this->startTime) {
            $res['start_time'] = $this->startTime;
        }

        if (null !== $this->tradeId) {
            $res['trade_id'] = $this->tradeId;
        }

        if (null !== $this->trainNo) {
            $res['train_no'] = $this->trainNo;
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
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
        if (isset($map['category_code'])) {
            $model->categoryCode = $map['category_code'];
        }

        if (isset($map['category_type'])) {
            $model->categoryType = $map['category_type'];
        }

        if (isset($map['end_city'])) {
            $model->endCity = $map['end_city'];
        }

        if (isset($map['end_time'])) {
            $model->endTime = $map['end_time'];
        }

        if (isset($map['gmt_create'])) {
            $model->gmtCreate = $map['gmt_create'];
        }

        if (isset($map['original_train_no'])) {
            $model->originalTrainNo = $map['original_train_no'];
        }

        if (isset($map['passenger_name'])) {
            $model->passengerName = $map['passenger_name'];
        }

        if (isset($map['pay_type'])) {
            $model->payType = $map['pay_type'];
        }

        if (isset($map['price'])) {
            $model->price = $map['price'];
        }

        if (isset($map['seat_type'])) {
            $model->seatType = $map['seat_type'];
        }

        if (isset($map['start_city'])) {
            $model->startCity = $map['start_city'];
        }

        if (isset($map['start_time'])) {
            $model->startTime = $map['start_time'];
        }

        if (isset($map['trade_id'])) {
            $model->tradeId = $map['trade_id'];
        }

        if (isset($map['train_no'])) {
            $model->trainNo = $map['train_no'];
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
