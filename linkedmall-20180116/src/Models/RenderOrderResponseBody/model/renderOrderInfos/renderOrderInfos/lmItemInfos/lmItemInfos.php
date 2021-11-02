<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models\RenderOrderResponseBody\model\renderOrderInfos\renderOrderInfos\lmItemInfos;

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
    public $points;

    /**
     * @var int
     */
    public $quantity;

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
    protected $_name = [
        'actualPrice' => 'ActualPrice',
        'canSell'     => 'CanSell',
        'cash'        => 'Cash',
        'itemId'      => 'ItemId',
        'itemName'    => 'ItemName',
        'itemPicUrl'  => 'ItemPicUrl',
        'lmItemId'    => 'LmItemId',
        'message'     => 'Message',
        'points'      => 'Points',
        'quantity'    => 'Quantity',
        'sellerId'    => 'SellerId',
        'sellerNick'  => 'SellerNick',
        'skuId'       => 'SkuId',
        'skuName'     => 'SkuName',
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
        if (null !== $this->itemId) {
            $res['ItemId'] = $this->itemId;
        }
        if (null !== $this->itemName) {
            $res['ItemName'] = $this->itemName;
        }
        if (null !== $this->itemPicUrl) {
            $res['ItemPicUrl'] = $this->itemPicUrl;
        }
        if (null !== $this->lmItemId) {
            $res['LmItemId'] = $this->lmItemId;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->points) {
            $res['Points'] = $this->points;
        }
        if (null !== $this->quantity) {
            $res['Quantity'] = $this->quantity;
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
        if (isset($map['ItemId'])) {
            $model->itemId = $map['ItemId'];
        }
        if (isset($map['ItemName'])) {
            $model->itemName = $map['ItemName'];
        }
        if (isset($map['ItemPicUrl'])) {
            $model->itemPicUrl = $map['ItemPicUrl'];
        }
        if (isset($map['LmItemId'])) {
            $model->lmItemId = $map['LmItemId'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['Points'])) {
            $model->points = $map['Points'];
        }
        if (isset($map['Quantity'])) {
            $model->quantity = $map['Quantity'];
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

        return $model;
    }
}
