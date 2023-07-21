<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\CarOrderQueryResponseBody\module;

use AlibabaCloud\Tea\Model;

class carInfo extends Model
{
    /**
     * @example TRAVEL
     *
     * @var string
     */
    public $businessCategory;

    /**
     * @example 1669274251000
     *
     * @var int
     */
    public $cancelTime;

    /**
     * @var string
     */
    public $carInfo;

    /**
     * @example 601
     *
     * @var int
     */
    public $carLevel;

    /**
     * @var string
     */
    public $driverCard;

    /**
     * @example 1669274251000
     *
     * @var int
     */
    public $driverConfirmTime;

    /**
     * @var string
     */
    public $driverName;

    /**
     * @example 2900
     *
     * @var int
     */
    public $estimatePrice;

    /**
     * @var string
     */
    public $fromAddress;

    /**
     * @var string
     */
    public $fromCityName;

    /**
     * @example true
     *
     * @var bool
     */
    public $isSpecial;

    /**
     * @var string
     */
    public $memo;

    /**
     * @example 1669274251000
     *
     * @var int
     */
    public $payTime;

    /**
     * @example 1669274251000
     *
     * @var int
     */
    public $publishTime;

    /**
     * @var string
     */
    public $realFromAddress;

    /**
     * @var string
     */
    public $realFromCityName;

    /**
     * @var string
     */
    public $realToAddress;

    /**
     * @var string
     */
    public $realToCityName;

    /**
     * @example 3
     *
     * @var int
     */
    public $serviceType;

    /**
     * @example v_sp_t_1,v_sp_t_2,v_sp_t_3,v_sp_t_4,v_sp_t_5
     *
     * @var string
     */
    public $specialTypes;

    /**
     * @example 1669274251000
     *
     * @var int
     */
    public $takenTime;

    /**
     * @var string
     */
    public $toAddress;

    /**
     * @var string
     */
    public $toCityName;

    /**
     * @example 12
     *
     * @var string
     */
    public $travelDistance;
    protected $_name = [
        'businessCategory'  => 'business_category',
        'cancelTime'        => 'cancel_time',
        'carInfo'           => 'car_info',
        'carLevel'          => 'car_level',
        'driverCard'        => 'driver_card',
        'driverConfirmTime' => 'driver_confirm_time',
        'driverName'        => 'driver_name',
        'estimatePrice'     => 'estimate_price',
        'fromAddress'       => 'from_address',
        'fromCityName'      => 'from_city_name',
        'isSpecial'         => 'is_special',
        'memo'              => 'memo',
        'payTime'           => 'pay_time',
        'publishTime'       => 'publish_time',
        'realFromAddress'   => 'real_from_address',
        'realFromCityName'  => 'real_from_city_name',
        'realToAddress'     => 'real_to_address',
        'realToCityName'    => 'real_to_city_name',
        'serviceType'       => 'service_type',
        'specialTypes'      => 'special_types',
        'takenTime'         => 'taken_time',
        'toAddress'         => 'to_address',
        'toCityName'        => 'to_city_name',
        'travelDistance'    => 'travel_distance',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->businessCategory) {
            $res['business_category'] = $this->businessCategory;
        }
        if (null !== $this->cancelTime) {
            $res['cancel_time'] = $this->cancelTime;
        }
        if (null !== $this->carInfo) {
            $res['car_info'] = $this->carInfo;
        }
        if (null !== $this->carLevel) {
            $res['car_level'] = $this->carLevel;
        }
        if (null !== $this->driverCard) {
            $res['driver_card'] = $this->driverCard;
        }
        if (null !== $this->driverConfirmTime) {
            $res['driver_confirm_time'] = $this->driverConfirmTime;
        }
        if (null !== $this->driverName) {
            $res['driver_name'] = $this->driverName;
        }
        if (null !== $this->estimatePrice) {
            $res['estimate_price'] = $this->estimatePrice;
        }
        if (null !== $this->fromAddress) {
            $res['from_address'] = $this->fromAddress;
        }
        if (null !== $this->fromCityName) {
            $res['from_city_name'] = $this->fromCityName;
        }
        if (null !== $this->isSpecial) {
            $res['is_special'] = $this->isSpecial;
        }
        if (null !== $this->memo) {
            $res['memo'] = $this->memo;
        }
        if (null !== $this->payTime) {
            $res['pay_time'] = $this->payTime;
        }
        if (null !== $this->publishTime) {
            $res['publish_time'] = $this->publishTime;
        }
        if (null !== $this->realFromAddress) {
            $res['real_from_address'] = $this->realFromAddress;
        }
        if (null !== $this->realFromCityName) {
            $res['real_from_city_name'] = $this->realFromCityName;
        }
        if (null !== $this->realToAddress) {
            $res['real_to_address'] = $this->realToAddress;
        }
        if (null !== $this->realToCityName) {
            $res['real_to_city_name'] = $this->realToCityName;
        }
        if (null !== $this->serviceType) {
            $res['service_type'] = $this->serviceType;
        }
        if (null !== $this->specialTypes) {
            $res['special_types'] = $this->specialTypes;
        }
        if (null !== $this->takenTime) {
            $res['taken_time'] = $this->takenTime;
        }
        if (null !== $this->toAddress) {
            $res['to_address'] = $this->toAddress;
        }
        if (null !== $this->toCityName) {
            $res['to_city_name'] = $this->toCityName;
        }
        if (null !== $this->travelDistance) {
            $res['travel_distance'] = $this->travelDistance;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return carInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['business_category'])) {
            $model->businessCategory = $map['business_category'];
        }
        if (isset($map['cancel_time'])) {
            $model->cancelTime = $map['cancel_time'];
        }
        if (isset($map['car_info'])) {
            $model->carInfo = $map['car_info'];
        }
        if (isset($map['car_level'])) {
            $model->carLevel = $map['car_level'];
        }
        if (isset($map['driver_card'])) {
            $model->driverCard = $map['driver_card'];
        }
        if (isset($map['driver_confirm_time'])) {
            $model->driverConfirmTime = $map['driver_confirm_time'];
        }
        if (isset($map['driver_name'])) {
            $model->driverName = $map['driver_name'];
        }
        if (isset($map['estimate_price'])) {
            $model->estimatePrice = $map['estimate_price'];
        }
        if (isset($map['from_address'])) {
            $model->fromAddress = $map['from_address'];
        }
        if (isset($map['from_city_name'])) {
            $model->fromCityName = $map['from_city_name'];
        }
        if (isset($map['is_special'])) {
            $model->isSpecial = $map['is_special'];
        }
        if (isset($map['memo'])) {
            $model->memo = $map['memo'];
        }
        if (isset($map['pay_time'])) {
            $model->payTime = $map['pay_time'];
        }
        if (isset($map['publish_time'])) {
            $model->publishTime = $map['publish_time'];
        }
        if (isset($map['real_from_address'])) {
            $model->realFromAddress = $map['real_from_address'];
        }
        if (isset($map['real_from_city_name'])) {
            $model->realFromCityName = $map['real_from_city_name'];
        }
        if (isset($map['real_to_address'])) {
            $model->realToAddress = $map['real_to_address'];
        }
        if (isset($map['real_to_city_name'])) {
            $model->realToCityName = $map['real_to_city_name'];
        }
        if (isset($map['service_type'])) {
            $model->serviceType = $map['service_type'];
        }
        if (isset($map['special_types'])) {
            $model->specialTypes = $map['special_types'];
        }
        if (isset($map['taken_time'])) {
            $model->takenTime = $map['taken_time'];
        }
        if (isset($map['to_address'])) {
            $model->toAddress = $map['to_address'];
        }
        if (isset($map['to_city_name'])) {
            $model->toCityName = $map['to_city_name'];
        }
        if (isset($map['travel_distance'])) {
            $model->travelDistance = $map['travel_distance'];
        }

        return $model;
    }
}
