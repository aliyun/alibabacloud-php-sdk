<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryBizItemListResponseBody\itemList\item\skuList\sku\gradePriceModels;

use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryBizItemListResponseBody\itemList\item\skuList\sku\gradePriceModels\gradePriceModel\userLabelList;
use AlibabaCloud\Tea\Model;

class gradePriceModel extends Model
{
    /**
     * @var bool
     */
    public $recommend;

    /**
     * @var string
     */
    public $showName;

    /**
     * @var int
     */
    public $priceCent;

    /**
     * @var string
     */
    public $icon;

    /**
     * @var int
     */
    public $pointPrice;

    /**
     * @var bool
     */
    public $exclusive;

    /**
     * @var string
     */
    public $characteristicName;

    /**
     * @var string
     */
    public $accessUrl;

    /**
     * @var string
     */
    public $subBizCode;

    /**
     * @var string
     */
    public $characteristicCode;

    /**
     * @var int
     */
    public $points;

    /**
     * @var bool
     */
    public $canBuy;

    /**
     * @var int
     */
    public $pointsAmount;

    /**
     * @var userLabelList
     */
    public $userLabelList;
    protected $_name = [
        'recommend'          => 'Recommend',
        'showName'           => 'ShowName',
        'priceCent'          => 'PriceCent',
        'icon'               => 'Icon',
        'pointPrice'         => 'PointPrice',
        'exclusive'          => 'Exclusive',
        'characteristicName' => 'CharacteristicName',
        'accessUrl'          => 'AccessUrl',
        'subBizCode'         => 'SubBizCode',
        'characteristicCode' => 'CharacteristicCode',
        'points'             => 'Points',
        'canBuy'             => 'CanBuy',
        'pointsAmount'       => 'PointsAmount',
        'userLabelList'      => 'UserLabelList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->recommend) {
            $res['Recommend'] = $this->recommend;
        }
        if (null !== $this->showName) {
            $res['ShowName'] = $this->showName;
        }
        if (null !== $this->priceCent) {
            $res['PriceCent'] = $this->priceCent;
        }
        if (null !== $this->icon) {
            $res['Icon'] = $this->icon;
        }
        if (null !== $this->pointPrice) {
            $res['PointPrice'] = $this->pointPrice;
        }
        if (null !== $this->exclusive) {
            $res['Exclusive'] = $this->exclusive;
        }
        if (null !== $this->characteristicName) {
            $res['CharacteristicName'] = $this->characteristicName;
        }
        if (null !== $this->accessUrl) {
            $res['AccessUrl'] = $this->accessUrl;
        }
        if (null !== $this->subBizCode) {
            $res['SubBizCode'] = $this->subBizCode;
        }
        if (null !== $this->characteristicCode) {
            $res['CharacteristicCode'] = $this->characteristicCode;
        }
        if (null !== $this->points) {
            $res['Points'] = $this->points;
        }
        if (null !== $this->canBuy) {
            $res['CanBuy'] = $this->canBuy;
        }
        if (null !== $this->pointsAmount) {
            $res['PointsAmount'] = $this->pointsAmount;
        }
        if (null !== $this->userLabelList) {
            $res['UserLabelList'] = null !== $this->userLabelList ? $this->userLabelList->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return gradePriceModel
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Recommend'])) {
            $model->recommend = $map['Recommend'];
        }
        if (isset($map['ShowName'])) {
            $model->showName = $map['ShowName'];
        }
        if (isset($map['PriceCent'])) {
            $model->priceCent = $map['PriceCent'];
        }
        if (isset($map['Icon'])) {
            $model->icon = $map['Icon'];
        }
        if (isset($map['PointPrice'])) {
            $model->pointPrice = $map['PointPrice'];
        }
        if (isset($map['Exclusive'])) {
            $model->exclusive = $map['Exclusive'];
        }
        if (isset($map['CharacteristicName'])) {
            $model->characteristicName = $map['CharacteristicName'];
        }
        if (isset($map['AccessUrl'])) {
            $model->accessUrl = $map['AccessUrl'];
        }
        if (isset($map['SubBizCode'])) {
            $model->subBizCode = $map['SubBizCode'];
        }
        if (isset($map['CharacteristicCode'])) {
            $model->characteristicCode = $map['CharacteristicCode'];
        }
        if (isset($map['Points'])) {
            $model->points = $map['Points'];
        }
        if (isset($map['CanBuy'])) {
            $model->canBuy = $map['CanBuy'];
        }
        if (isset($map['PointsAmount'])) {
            $model->pointsAmount = $map['PointsAmount'];
        }
        if (isset($map['UserLabelList'])) {
            $model->userLabelList = userLabelList::fromMap($map['UserLabelList']);
        }

        return $model;
    }
}
