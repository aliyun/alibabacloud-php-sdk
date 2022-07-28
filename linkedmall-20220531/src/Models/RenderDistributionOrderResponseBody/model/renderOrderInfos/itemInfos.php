<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20220531\Models\RenderDistributionOrderResponseBody\model\renderOrderInfos;

use AlibabaCloud\SDK\Linkedmall\V20220531\Models\RenderDistributionOrderResponseBody\model\renderOrderInfos\itemInfos\itemPromInstVOS;
use AlibabaCloud\Tea\Model;

class itemInfos extends Model
{
    /**
     * @var bool
     */
    public $canSell;

    /**
     * @var string
     */
    public $distributionMallId;

    /**
     * @var string
     */
    public $distributionSupplierId;

    /**
     * @var string
     */
    public $distributorId;

    /**
     * @var string[]
     */
    public $features;

    /**
     * @var string
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
    public $message;

    /**
     * @var int
     */
    public $price;

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
    public $skuId;

    /**
     * @var string
     */
    public $skuName;

    /**
     * @var string
     */
    public $virtualItemType;
    protected $_name = [
        'canSell'                => 'CanSell',
        'distributionMallId'     => 'DistributionMallId',
        'distributionSupplierId' => 'DistributionSupplierId',
        'distributorId'          => 'DistributorId',
        'features'               => 'Features',
        'itemId'                 => 'ItemId',
        'itemName'               => 'ItemName',
        'itemPicUrl'             => 'ItemPicUrl',
        'itemPromInstVOS'        => 'ItemPromInstVOS',
        'itemUrl'                => 'ItemUrl',
        'message'                => 'Message',
        'price'                  => 'Price',
        'promotionFee'           => 'PromotionFee',
        'quantity'               => 'Quantity',
        'reservePrice'           => 'ReservePrice',
        'skuId'                  => 'SkuId',
        'skuName'                => 'SkuName',
        'virtualItemType'        => 'VirtualItemType',
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
        if (null !== $this->distributionMallId) {
            $res['DistributionMallId'] = $this->distributionMallId;
        }
        if (null !== $this->distributionSupplierId) {
            $res['DistributionSupplierId'] = $this->distributionSupplierId;
        }
        if (null !== $this->distributorId) {
            $res['DistributorId'] = $this->distributorId;
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
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->price) {
            $res['Price'] = $this->price;
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
        if (null !== $this->skuId) {
            $res['SkuId'] = $this->skuId;
        }
        if (null !== $this->skuName) {
            $res['SkuName'] = $this->skuName;
        }
        if (null !== $this->virtualItemType) {
            $res['VirtualItemType'] = $this->virtualItemType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return itemInfos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CanSell'])) {
            $model->canSell = $map['CanSell'];
        }
        if (isset($map['DistributionMallId'])) {
            $model->distributionMallId = $map['DistributionMallId'];
        }
        if (isset($map['DistributionSupplierId'])) {
            $model->distributionSupplierId = $map['DistributionSupplierId'];
        }
        if (isset($map['DistributorId'])) {
            $model->distributorId = $map['DistributorId'];
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
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['Price'])) {
            $model->price = $map['Price'];
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
        if (isset($map['SkuId'])) {
            $model->skuId = $map['SkuId'];
        }
        if (isset($map['SkuName'])) {
            $model->skuName = $map['SkuName'];
        }
        if (isset($map['VirtualItemType'])) {
            $model->virtualItemType = $map['VirtualItemType'];
        }

        return $model;
    }
}
