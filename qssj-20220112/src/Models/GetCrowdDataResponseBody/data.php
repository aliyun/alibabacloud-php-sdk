<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qssj\V20220112\Models\GetCrowdDataResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 22
     *
     * @var int
     */
    public $age;

    /**
     * @example 555
     *
     * @var int
     */
    public $buyerId;

    /**
     * @example 1623
     *
     * @var int
     */
    public $cateId;

    /**
     * @var string
     */
    public $cateName;

    /**
     * @var string
     */
    public $classification;

    /**
     * @example “-1”
     *
     * @var string
     */
    public $classificationNew;

    /**
     * @example “F”
     *
     * @var string
     */
    public $gender;

    /**
     * @example 20220531
     *
     * @var string
     */
    public $onlineDate;

    /**
     * @example 4123.2
     *
     * @var float
     */
    public $orderAmount;

    /**
     * @example 421
     *
     * @var int
     */
    public $orderQuantity;

    /**
     * @var string
     */
    public $province;

    /**
     * @example 61522
     *
     * @var int
     */
    public $searchVolume;

    /**
     * @var string
     */
    public $trendLevel;
    protected $_name = [
        'age'               => 'Age',
        'buyerId'           => 'BuyerId',
        'cateId'            => 'CateId',
        'cateName'          => 'CateName',
        'classification'    => 'Classification',
        'classificationNew' => 'ClassificationNew',
        'gender'            => 'Gender',
        'onlineDate'        => 'OnlineDate',
        'orderAmount'       => 'OrderAmount',
        'orderQuantity'     => 'OrderQuantity',
        'province'          => 'Province',
        'searchVolume'      => 'SearchVolume',
        'trendLevel'        => 'TrendLevel',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->age) {
            $res['Age'] = $this->age;
        }
        if (null !== $this->buyerId) {
            $res['BuyerId'] = $this->buyerId;
        }
        if (null !== $this->cateId) {
            $res['CateId'] = $this->cateId;
        }
        if (null !== $this->cateName) {
            $res['CateName'] = $this->cateName;
        }
        if (null !== $this->classification) {
            $res['Classification'] = $this->classification;
        }
        if (null !== $this->classificationNew) {
            $res['ClassificationNew'] = $this->classificationNew;
        }
        if (null !== $this->gender) {
            $res['Gender'] = $this->gender;
        }
        if (null !== $this->onlineDate) {
            $res['OnlineDate'] = $this->onlineDate;
        }
        if (null !== $this->orderAmount) {
            $res['OrderAmount'] = $this->orderAmount;
        }
        if (null !== $this->orderQuantity) {
            $res['OrderQuantity'] = $this->orderQuantity;
        }
        if (null !== $this->province) {
            $res['Province'] = $this->province;
        }
        if (null !== $this->searchVolume) {
            $res['SearchVolume'] = $this->searchVolume;
        }
        if (null !== $this->trendLevel) {
            $res['TrendLevel'] = $this->trendLevel;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Age'])) {
            $model->age = $map['Age'];
        }
        if (isset($map['BuyerId'])) {
            $model->buyerId = $map['BuyerId'];
        }
        if (isset($map['CateId'])) {
            $model->cateId = $map['CateId'];
        }
        if (isset($map['CateName'])) {
            $model->cateName = $map['CateName'];
        }
        if (isset($map['Classification'])) {
            $model->classification = $map['Classification'];
        }
        if (isset($map['ClassificationNew'])) {
            $model->classificationNew = $map['ClassificationNew'];
        }
        if (isset($map['Gender'])) {
            $model->gender = $map['Gender'];
        }
        if (isset($map['OnlineDate'])) {
            $model->onlineDate = $map['OnlineDate'];
        }
        if (isset($map['OrderAmount'])) {
            $model->orderAmount = $map['OrderAmount'];
        }
        if (isset($map['OrderQuantity'])) {
            $model->orderQuantity = $map['OrderQuantity'];
        }
        if (isset($map['Province'])) {
            $model->province = $map['Province'];
        }
        if (isset($map['SearchVolume'])) {
            $model->searchVolume = $map['SearchVolume'];
        }
        if (isset($map['TrendLevel'])) {
            $model->trendLevel = $map['TrendLevel'];
        }

        return $model;
    }
}
