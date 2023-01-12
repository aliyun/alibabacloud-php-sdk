<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryBizItemsWithActivityResponseBody\itemList;

use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryBizItemsWithActivityResponseBody\itemList\item\activities;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryBizItemsWithActivityResponseBody\itemList\item\skuList;
use AlibabaCloud\Tea\Model;

class item extends Model
{
    /**
     * @var activities
     */
    public $activities;

    /**
     * @example 50018977
     *
     * @var int
     */
    public $categoryId;

    /**
     * @example 60716881****
     *
     * @var int
     */
    public $itemId;

    /**
     * @var string
     */
    public $itemTitle;

    /**
     * @example 10000230-60716881****
     *
     * @var string
     */
    public $lmItemId;

    /**
     * @example -1
     *
     * @var int
     */
    public $maxAllowedCount;

    /**
     * @example https://img.alicdn.com/******.jpg
     *
     * @var string
     */
    public $picUrl;

    /**
     * @example 1000
     *
     * @var int
     */
    public $quantity;

    /**
     * @example 2990
     *
     * @var int
     */
    public $reservePrice;

    /**
     * @example 284324****
     *
     * @var int
     */
    public $sellerId;

    /**
     * @var skuList
     */
    public $skuList;

    /**
     * @var string
     */
    public $taobaoShopName;

    /**
     * @example 900
     *
     * @var int
     */
    public $totalSoldQuantity;
    protected $_name = [
        'activities'        => 'Activities',
        'categoryId'        => 'CategoryId',
        'itemId'            => 'ItemId',
        'itemTitle'         => 'ItemTitle',
        'lmItemId'          => 'LmItemId',
        'maxAllowedCount'   => 'MaxAllowedCount',
        'picUrl'            => 'PicUrl',
        'quantity'          => 'Quantity',
        'reservePrice'      => 'ReservePrice',
        'sellerId'          => 'SellerId',
        'skuList'           => 'SkuList',
        'taobaoShopName'    => 'TaobaoShopName',
        'totalSoldQuantity' => 'TotalSoldQuantity',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->activities) {
            $res['Activities'] = null !== $this->activities ? $this->activities->toMap() : null;
        }
        if (null !== $this->categoryId) {
            $res['CategoryId'] = $this->categoryId;
        }
        if (null !== $this->itemId) {
            $res['ItemId'] = $this->itemId;
        }
        if (null !== $this->itemTitle) {
            $res['ItemTitle'] = $this->itemTitle;
        }
        if (null !== $this->lmItemId) {
            $res['LmItemId'] = $this->lmItemId;
        }
        if (null !== $this->maxAllowedCount) {
            $res['MaxAllowedCount'] = $this->maxAllowedCount;
        }
        if (null !== $this->picUrl) {
            $res['PicUrl'] = $this->picUrl;
        }
        if (null !== $this->quantity) {
            $res['Quantity'] = $this->quantity;
        }
        if (null !== $this->reservePrice) {
            $res['ReservePrice'] = $this->reservePrice;
        }
        if (null !== $this->sellerId) {
            $res['SellerId'] = $this->sellerId;
        }
        if (null !== $this->skuList) {
            $res['SkuList'] = null !== $this->skuList ? $this->skuList->toMap() : null;
        }
        if (null !== $this->taobaoShopName) {
            $res['TaobaoShopName'] = $this->taobaoShopName;
        }
        if (null !== $this->totalSoldQuantity) {
            $res['TotalSoldQuantity'] = $this->totalSoldQuantity;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return item
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Activities'])) {
            $model->activities = activities::fromMap($map['Activities']);
        }
        if (isset($map['CategoryId'])) {
            $model->categoryId = $map['CategoryId'];
        }
        if (isset($map['ItemId'])) {
            $model->itemId = $map['ItemId'];
        }
        if (isset($map['ItemTitle'])) {
            $model->itemTitle = $map['ItemTitle'];
        }
        if (isset($map['LmItemId'])) {
            $model->lmItemId = $map['LmItemId'];
        }
        if (isset($map['MaxAllowedCount'])) {
            $model->maxAllowedCount = $map['MaxAllowedCount'];
        }
        if (isset($map['PicUrl'])) {
            $model->picUrl = $map['PicUrl'];
        }
        if (isset($map['Quantity'])) {
            $model->quantity = $map['Quantity'];
        }
        if (isset($map['ReservePrice'])) {
            $model->reservePrice = $map['ReservePrice'];
        }
        if (isset($map['SellerId'])) {
            $model->sellerId = $map['SellerId'];
        }
        if (isset($map['SkuList'])) {
            $model->skuList = skuList::fromMap($map['SkuList']);
        }
        if (isset($map['TaobaoShopName'])) {
            $model->taobaoShopName = $map['TaobaoShopName'];
        }
        if (isset($map['TotalSoldQuantity'])) {
            $model->totalSoldQuantity = $map['TotalSoldQuantity'];
        }

        return $model;
    }
}
