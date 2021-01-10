<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models\RenderOrderResponseBody\model\renderOrderInfos\renderOrderInfos\lmItemInfos;

use AlibabaCloud\Tea\Model;

class lmItemInfos extends Model
{
    /**
     * @var int
     */
    public $itemId;

    /**
     * @var int
     */
    public $skuId;

    /**
     * @var int
     */
    public $quantity;

    /**
     * @var bool
     */
    public $canSell;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $itemName;

    /**
     * @var string
     */
    public $skuName;

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
    public $sellerNick;

    /**
     * @var int
     */
    public $cash;

    /**
     * @var int
     */
    public $points;

    /**
     * @var int
     */
    public $actualPrice;

    /**
     * @var string
     */
    public $itemPicUrl;
    protected $_name = [
        'itemId'      => 'ItemId',
        'skuId'       => 'SkuId',
        'quantity'    => 'Quantity',
        'canSell'     => 'CanSell',
        'message'     => 'Message',
        'itemName'    => 'ItemName',
        'skuName'     => 'SkuName',
        'lmItemId'    => 'LmItemId',
        'sellerId'    => 'SellerId',
        'sellerNick'  => 'SellerNick',
        'cash'        => 'Cash',
        'points'      => 'Points',
        'actualPrice' => 'ActualPrice',
        'itemPicUrl'  => 'ItemPicUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->itemId) {
            $res['ItemId'] = $this->itemId;
        }
        if (null !== $this->skuId) {
            $res['SkuId'] = $this->skuId;
        }
        if (null !== $this->quantity) {
            $res['Quantity'] = $this->quantity;
        }
        if (null !== $this->canSell) {
            $res['CanSell'] = $this->canSell;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->itemName) {
            $res['ItemName'] = $this->itemName;
        }
        if (null !== $this->skuName) {
            $res['SkuName'] = $this->skuName;
        }
        if (null !== $this->lmItemId) {
            $res['LmItemId'] = $this->lmItemId;
        }
        if (null !== $this->sellerId) {
            $res['SellerId'] = $this->sellerId;
        }
        if (null !== $this->sellerNick) {
            $res['SellerNick'] = $this->sellerNick;
        }
        if (null !== $this->cash) {
            $res['Cash'] = $this->cash;
        }
        if (null !== $this->points) {
            $res['Points'] = $this->points;
        }
        if (null !== $this->actualPrice) {
            $res['ActualPrice'] = $this->actualPrice;
        }
        if (null !== $this->itemPicUrl) {
            $res['ItemPicUrl'] = $this->itemPicUrl;
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
        if (isset($map['ItemId'])) {
            $model->itemId = $map['ItemId'];
        }
        if (isset($map['SkuId'])) {
            $model->skuId = $map['SkuId'];
        }
        if (isset($map['Quantity'])) {
            $model->quantity = $map['Quantity'];
        }
        if (isset($map['CanSell'])) {
            $model->canSell = $map['CanSell'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['ItemName'])) {
            $model->itemName = $map['ItemName'];
        }
        if (isset($map['SkuName'])) {
            $model->skuName = $map['SkuName'];
        }
        if (isset($map['LmItemId'])) {
            $model->lmItemId = $map['LmItemId'];
        }
        if (isset($map['SellerId'])) {
            $model->sellerId = $map['SellerId'];
        }
        if (isset($map['SellerNick'])) {
            $model->sellerNick = $map['SellerNick'];
        }
        if (isset($map['Cash'])) {
            $model->cash = $map['Cash'];
        }
        if (isset($map['Points'])) {
            $model->points = $map['Points'];
        }
        if (isset($map['ActualPrice'])) {
            $model->actualPrice = $map['ActualPrice'];
        }
        if (isset($map['ItemPicUrl'])) {
            $model->itemPicUrl = $map['ItemPicUrl'];
        }

        return $model;
    }
}
