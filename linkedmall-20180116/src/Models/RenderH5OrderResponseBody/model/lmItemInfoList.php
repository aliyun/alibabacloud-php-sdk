<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models\RenderH5OrderResponseBody\model;

use AlibabaCloud\Tea\Model;

class lmItemInfoList extends Model
{
    /**
     * @var string
     */
    public $lmItemId;

    /**
     * @var int
     */
    public $sellerId;

    /**
     * @var string
     */
    public $tbShopName;

    /**
     * @var string
     */
    public $message;

    /**
     * @var int
     */
    public $itemId;

    /**
     * @var int
     */
    public $cash;

    /**
     * @var bool
     */
    public $canSell;

    /**
     * @var string
     */
    public $virtualItemType;

    /**
     * @var string
     */
    public $itemName;

    /**
     * @var string
     */
    public $skuName;

    /**
     * @var int
     */
    public $actualPrice;

    /**
     * @var int
     */
    public $skuId;

    /**
     * @var int
     */
    public $points;

    /**
     * @var string
     */
    public $itemUrl;

    /**
     * @var string
     */
    public $sellerNick;

    /**
     * @var int
     */
    public $quantity;

    /**
     * @var mixed[]
     */
    public $features;

    /**
     * @var string
     */
    public $itemPicUrl;
    protected $_name = [
        'lmItemId'        => 'LmItemId',
        'sellerId'        => 'SellerId',
        'tbShopName'      => 'TbShopName',
        'message'         => 'Message',
        'itemId'          => 'ItemId',
        'cash'            => 'Cash',
        'canSell'         => 'CanSell',
        'virtualItemType' => 'VirtualItemType',
        'itemName'        => 'ItemName',
        'skuName'         => 'SkuName',
        'actualPrice'     => 'ActualPrice',
        'skuId'           => 'SkuId',
        'points'          => 'Points',
        'itemUrl'         => 'ItemUrl',
        'sellerNick'      => 'SellerNick',
        'quantity'        => 'Quantity',
        'features'        => 'Features',
        'itemPicUrl'      => 'ItemPicUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lmItemId) {
            $res['LmItemId'] = $this->lmItemId;
        }
        if (null !== $this->sellerId) {
            $res['SellerId'] = $this->sellerId;
        }
        if (null !== $this->tbShopName) {
            $res['TbShopName'] = $this->tbShopName;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->itemId) {
            $res['ItemId'] = $this->itemId;
        }
        if (null !== $this->cash) {
            $res['Cash'] = $this->cash;
        }
        if (null !== $this->canSell) {
            $res['CanSell'] = $this->canSell;
        }
        if (null !== $this->virtualItemType) {
            $res['VirtualItemType'] = $this->virtualItemType;
        }
        if (null !== $this->itemName) {
            $res['ItemName'] = $this->itemName;
        }
        if (null !== $this->skuName) {
            $res['SkuName'] = $this->skuName;
        }
        if (null !== $this->actualPrice) {
            $res['ActualPrice'] = $this->actualPrice;
        }
        if (null !== $this->skuId) {
            $res['SkuId'] = $this->skuId;
        }
        if (null !== $this->points) {
            $res['Points'] = $this->points;
        }
        if (null !== $this->itemUrl) {
            $res['ItemUrl'] = $this->itemUrl;
        }
        if (null !== $this->sellerNick) {
            $res['SellerNick'] = $this->sellerNick;
        }
        if (null !== $this->quantity) {
            $res['Quantity'] = $this->quantity;
        }
        if (null !== $this->features) {
            $res['Features'] = $this->features;
        }
        if (null !== $this->itemPicUrl) {
            $res['ItemPicUrl'] = $this->itemPicUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return lmItemInfoList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LmItemId'])) {
            $model->lmItemId = $map['LmItemId'];
        }
        if (isset($map['SellerId'])) {
            $model->sellerId = $map['SellerId'];
        }
        if (isset($map['TbShopName'])) {
            $model->tbShopName = $map['TbShopName'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['ItemId'])) {
            $model->itemId = $map['ItemId'];
        }
        if (isset($map['Cash'])) {
            $model->cash = $map['Cash'];
        }
        if (isset($map['CanSell'])) {
            $model->canSell = $map['CanSell'];
        }
        if (isset($map['VirtualItemType'])) {
            $model->virtualItemType = $map['VirtualItemType'];
        }
        if (isset($map['ItemName'])) {
            $model->itemName = $map['ItemName'];
        }
        if (isset($map['SkuName'])) {
            $model->skuName = $map['SkuName'];
        }
        if (isset($map['ActualPrice'])) {
            $model->actualPrice = $map['ActualPrice'];
        }
        if (isset($map['SkuId'])) {
            $model->skuId = $map['SkuId'];
        }
        if (isset($map['Points'])) {
            $model->points = $map['Points'];
        }
        if (isset($map['ItemUrl'])) {
            $model->itemUrl = $map['ItemUrl'];
        }
        if (isset($map['SellerNick'])) {
            $model->sellerNick = $map['SellerNick'];
        }
        if (isset($map['Quantity'])) {
            $model->quantity = $map['Quantity'];
        }
        if (isset($map['Features'])) {
            $model->features = $map['Features'];
        }
        if (isset($map['ItemPicUrl'])) {
            $model->itemPicUrl = $map['ItemPicUrl'];
        }

        return $model;
    }
}
