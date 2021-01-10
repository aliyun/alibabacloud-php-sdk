<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryBizItemsWithActivityResponseBody\itemList;

use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryBizItemsWithActivityResponseBody\itemList\item\activities;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryBizItemsWithActivityResponseBody\itemList\item\skuList;
use AlibabaCloud\Tea\Model;

class item extends Model
{
    /**
     * @var string
     */
    public $picUrl;

    /**
     * @var string
     */
    public $itemTitle;

    /**
     * @var int
     */
    public $sellerId;

    /**
     * @var string
     */
    public $lmItemId;

    /**
     * @var skuList
     */
    public $skuList;

    /**
     * @var int
     */
    public $itemId;

    /**
     * @var activities
     */
    public $activities;

    /**
     * @var string
     */
    public $taobaoShopName;

    /**
     * @var int
     */
    public $totalSoldQuantity;

    /**
     * @var int
     */
    public $maxAllowedCount;

    /**
     * @var int
     */
    public $categoryId;

    /**
     * @var int
     */
    public $reservePrice;

    /**
     * @var int
     */
    public $quantity;
    protected $_name = [
        'picUrl'            => 'PicUrl',
        'itemTitle'         => 'ItemTitle',
        'sellerId'          => 'SellerId',
        'lmItemId'          => 'LmItemId',
        'skuList'           => 'SkuList',
        'itemId'            => 'ItemId',
        'activities'        => 'Activities',
        'taobaoShopName'    => 'TaobaoShopName',
        'totalSoldQuantity' => 'TotalSoldQuantity',
        'maxAllowedCount'   => 'MaxAllowedCount',
        'categoryId'        => 'CategoryId',
        'reservePrice'      => 'ReservePrice',
        'quantity'          => 'Quantity',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->picUrl) {
            $res['PicUrl'] = $this->picUrl;
        }
        if (null !== $this->itemTitle) {
            $res['ItemTitle'] = $this->itemTitle;
        }
        if (null !== $this->sellerId) {
            $res['SellerId'] = $this->sellerId;
        }
        if (null !== $this->lmItemId) {
            $res['LmItemId'] = $this->lmItemId;
        }
        if (null !== $this->skuList) {
            $res['SkuList'] = null !== $this->skuList ? $this->skuList->toMap() : null;
        }
        if (null !== $this->itemId) {
            $res['ItemId'] = $this->itemId;
        }
        if (null !== $this->activities) {
            $res['Activities'] = null !== $this->activities ? $this->activities->toMap() : null;
        }
        if (null !== $this->taobaoShopName) {
            $res['TaobaoShopName'] = $this->taobaoShopName;
        }
        if (null !== $this->totalSoldQuantity) {
            $res['TotalSoldQuantity'] = $this->totalSoldQuantity;
        }
        if (null !== $this->maxAllowedCount) {
            $res['MaxAllowedCount'] = $this->maxAllowedCount;
        }
        if (null !== $this->categoryId) {
            $res['CategoryId'] = $this->categoryId;
        }
        if (null !== $this->reservePrice) {
            $res['ReservePrice'] = $this->reservePrice;
        }
        if (null !== $this->quantity) {
            $res['Quantity'] = $this->quantity;
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
        if (isset($map['PicUrl'])) {
            $model->picUrl = $map['PicUrl'];
        }
        if (isset($map['ItemTitle'])) {
            $model->itemTitle = $map['ItemTitle'];
        }
        if (isset($map['SellerId'])) {
            $model->sellerId = $map['SellerId'];
        }
        if (isset($map['LmItemId'])) {
            $model->lmItemId = $map['LmItemId'];
        }
        if (isset($map['SkuList'])) {
            $model->skuList = skuList::fromMap($map['SkuList']);
        }
        if (isset($map['ItemId'])) {
            $model->itemId = $map['ItemId'];
        }
        if (isset($map['Activities'])) {
            $model->activities = activities::fromMap($map['Activities']);
        }
        if (isset($map['TaobaoShopName'])) {
            $model->taobaoShopName = $map['TaobaoShopName'];
        }
        if (isset($map['TotalSoldQuantity'])) {
            $model->totalSoldQuantity = $map['TotalSoldQuantity'];
        }
        if (isset($map['MaxAllowedCount'])) {
            $model->maxAllowedCount = $map['MaxAllowedCount'];
        }
        if (isset($map['CategoryId'])) {
            $model->categoryId = $map['CategoryId'];
        }
        if (isset($map['ReservePrice'])) {
            $model->reservePrice = $map['ReservePrice'];
        }
        if (isset($map['Quantity'])) {
            $model->quantity = $map['Quantity'];
        }

        return $model;
    }
}
