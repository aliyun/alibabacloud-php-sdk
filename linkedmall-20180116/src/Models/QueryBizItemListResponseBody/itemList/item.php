<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryBizItemListResponseBody\itemList;

use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryBizItemListResponseBody\itemList\item\skuList;
use AlibabaCloud\Tea\Model;

class item extends Model
{
    /**
     * @var bool
     */
    public $canSell;

    /**
     * @var int
     */
    public $categoryId;

    /**
     * @var string
     */
    public $customizedItemName;

    /**
     * @var string
     */
    public $extJson;

    /**
     * @var int
     */
    public $itemId;

    /**
     * @var string
     */
    public $itemTitle;

    /**
     * @var string
     */
    public $lmItemId;

    /**
     * @var string
     */
    public $mainPicUrl;

    /**
     * @var int
     */
    public $reservePrice;

    /**
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
    protected $_name = [
        'canSell'            => 'CanSell',
        'categoryId'         => 'CategoryId',
        'customizedItemName' => 'CustomizedItemName',
        'extJson'            => 'ExtJson',
        'itemId'             => 'ItemId',
        'itemTitle'          => 'ItemTitle',
        'lmItemId'           => 'LmItemId',
        'mainPicUrl'         => 'MainPicUrl',
        'reservePrice'       => 'ReservePrice',
        'sellerId'           => 'SellerId',
        'skuList'            => 'SkuList',
        'taobaoShopName'     => 'TaobaoShopName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->canSell) {
            $res['CanSell'] = $this->canSell;
        }
        if (null !== $this->categoryId) {
            $res['CategoryId'] = $this->categoryId;
        }
        if (null !== $this->customizedItemName) {
            $res['CustomizedItemName'] = $this->customizedItemName;
        }
        if (null !== $this->extJson) {
            $res['ExtJson'] = $this->extJson;
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
        if (null !== $this->mainPicUrl) {
            $res['MainPicUrl'] = $this->mainPicUrl;
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
        if (isset($map['CanSell'])) {
            $model->canSell = $map['CanSell'];
        }
        if (isset($map['CategoryId'])) {
            $model->categoryId = $map['CategoryId'];
        }
        if (isset($map['CustomizedItemName'])) {
            $model->customizedItemName = $map['CustomizedItemName'];
        }
        if (isset($map['ExtJson'])) {
            $model->extJson = $map['ExtJson'];
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
        if (isset($map['MainPicUrl'])) {
            $model->mainPicUrl = $map['MainPicUrl'];
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

        return $model;
    }
}
