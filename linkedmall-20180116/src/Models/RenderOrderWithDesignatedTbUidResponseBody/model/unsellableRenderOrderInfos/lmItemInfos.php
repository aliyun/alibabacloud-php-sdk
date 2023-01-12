<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models\RenderOrderWithDesignatedTbUidResponseBody\model\unsellableRenderOrderInfos;

use AlibabaCloud\SDK\Linkedmall\V20180116\Models\RenderOrderWithDesignatedTbUidResponseBody\model\unsellableRenderOrderInfos\lmItemInfos\itemPromInstVOS;
use AlibabaCloud\Tea\Model;

class lmItemInfos extends Model
{
    /**
     * @var int
     */
    public $actualPrice;

    /**
     * @var bool
     */
    public $canSell;

    /**
     * @var int
     */
    public $cash;

    /**
     * @var string[]
     */
    public $features;

    /**
     * @var int
     */
    public $itemId;

    /**
     * @var string
     */
    public $itemName;

    /**
     * @var string
     */
    public $itemPicUrl;

    /**
     * @var itemPromInstVOS[]
     */
    public $itemPromInstVOS;

    /**
     * @var string
     */
    public $itemUrl;

    /**
     * @var string
     */
    public $lmItemId;

    /**
     * @var string
     */
    public $message;

    /**
     * @var int
     */
    public $pointPrice;

    /**
     * @var int
     */
    public $points;

    /**
     * @var int
     */
    public $promotionFee;

    /**
     * @var int
     */
    public $quantity;

    /**
     * @var int
     */
    public $reservePrice;

    /**
     * @var int
     */
    public $sellerId;

    /**
     * @var string
     */
    public $sellerNick;

    /**
     * @var int
     */
    public $skuId;

    /**
     * @var string
     */
    public $skuName;

    /**
     * @var string
     */
    public $tbShopName;

    /**
     * @var string
     */
    public $virtualItemType;
    protected $_name = [
        'actualPrice'     => 'ActualPrice',
        'canSell'         => 'CanSell',
        'cash'            => 'Cash',
        'features'        => 'Features',
        'itemId'          => 'ItemId',
        'itemName'        => 'ItemName',
        'itemPicUrl'      => 'ItemPicUrl',
        'itemPromInstVOS' => 'ItemPromInstVOS',
        'itemUrl'         => 'ItemUrl',
        'lmItemId'        => 'LmItemId',
        'message'         => 'Message',
        'pointPrice'      => 'PointPrice',
        'points'          => 'Points',
        'promotionFee'    => 'PromotionFee',
        'quantity'        => 'Quantity',
        'reservePrice'    => 'ReservePrice',
        'sellerId'        => 'SellerId',
        'sellerNick'      => 'SellerNick',
        'skuId'           => 'SkuId',
        'skuName'         => 'SkuName',
        'tbShopName'      => 'TbShopName',
        'virtualItemType' => 'VirtualItemType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->actualPrice) {
            $res['ActualPrice'] = $this->actualPrice;
        }
        if (null !== $this->canSell) {
            $res['CanSell'] = $this->canSell;
        }
        if (null !== $this->cash) {
            $res['Cash'] = $this->cash;
        }
        if (null !== $this->features) {
            $res['Features'] = $this->features;
        }
        if (null !== $this->itemId) {
            $res['ItemId'] = $this->itemId;
        }
        if (null !== $this->itemName) {
            $res['ItemName'] = $this->itemName;
        }
        if (null !== $this->itemPicUrl) {
            $res['ItemPicUrl'] = $this->itemPicUrl;
        }
        if (null !== $this->itemPromInstVOS) {
            $res['ItemPromInstVOS'] = [];
            if (null !== $this->itemPromInstVOS && \is_array($this->itemPromInstVOS)) {
                $n = 0;
                foreach ($this->itemPromInstVOS as $item) {
                    $res['ItemPromInstVOS'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->itemUrl) {
            $res['ItemUrl'] = $this->itemUrl;
        }
        if (null !== $this->lmItemId) {
            $res['LmItemId'] = $this->lmItemId;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->pointPrice) {
            $res['PointPrice'] = $this->pointPrice;
        }
        if (null !== $this->points) {
            $res['Points'] = $this->points;
        }
        if (null !== $this->promotionFee) {
            $res['PromotionFee'] = $this->promotionFee;
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
        if (null !== $this->sellerNick) {
            $res['SellerNick'] = $this->sellerNick;
        }
        if (null !== $this->skuId) {
            $res['SkuId'] = $this->skuId;
        }
        if (null !== $this->skuName) {
            $res['SkuName'] = $this->skuName;
        }
        if (null !== $this->tbShopName) {
            $res['TbShopName'] = $this->tbShopName;
        }
        if (null !== $this->virtualItemType) {
            $res['VirtualItemType'] = $this->virtualItemType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return lmItemInfos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ActualPrice'])) {
            $model->actualPrice = $map['ActualPrice'];
        }
        if (isset($map['CanSell'])) {
            $model->canSell = $map['CanSell'];
        }
        if (isset($map['Cash'])) {
            $model->cash = $map['Cash'];
        }
        if (isset($map['Features'])) {
            $model->features = $map['Features'];
        }
        if (isset($map['ItemId'])) {
            $model->itemId = $map['ItemId'];
        }
        if (isset($map['ItemName'])) {
            $model->itemName = $map['ItemName'];
        }
        if (isset($map['ItemPicUrl'])) {
            $model->itemPicUrl = $map['ItemPicUrl'];
        }
        if (isset($map['ItemPromInstVOS'])) {
            if (!empty($map['ItemPromInstVOS'])) {
                $model->itemPromInstVOS = [];
                $n                      = 0;
                foreach ($map['ItemPromInstVOS'] as $item) {
                    $model->itemPromInstVOS[$n++] = null !== $item ? itemPromInstVOS::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ItemUrl'])) {
            $model->itemUrl = $map['ItemUrl'];
        }
        if (isset($map['LmItemId'])) {
            $model->lmItemId = $map['LmItemId'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['PointPrice'])) {
            $model->pointPrice = $map['PointPrice'];
        }
        if (isset($map['Points'])) {
            $model->points = $map['Points'];
        }
        if (isset($map['PromotionFee'])) {
            $model->promotionFee = $map['PromotionFee'];
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
        if (isset($map['SellerNick'])) {
            $model->sellerNick = $map['SellerNick'];
        }
        if (isset($map['SkuId'])) {
            $model->skuId = $map['SkuId'];
        }
        if (isset($map['SkuName'])) {
            $model->skuName = $map['SkuName'];
        }
        if (isset($map['TbShopName'])) {
            $model->tbShopName = $map['TbShopName'];
        }
        if (isset($map['VirtualItemType'])) {
            $model->virtualItemType = $map['VirtualItemType'];
        }

        return $model;
    }
}
