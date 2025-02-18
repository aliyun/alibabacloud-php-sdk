<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20230930\Models\SearchProductsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Linkedmall\V20230930\Models\SearchProductsResponseBody\products\categoryChain;

class products extends Model
{
    /**
     * @var string
     */
    public $bandName;
    /**
     * @var string
     */
    public $canNotSellReason;
    /**
     * @var bool
     */
    public $canSell;
    /**
     * @var categoryChain[]
     */
    public $categoryChain;
    /**
     * @var string[]
     */
    public $credit;
    /**
     * @var string
     */
    public $diffPrice;
    /**
     * @var string
     */
    public $distributionPrice;
    /**
     * @var string
     */
    public $distributionPriceRatio;
    /**
     * @var string
     */
    public $externalPlatformType;
    /**
     * @var string
     */
    public $gmtCreate;
    /**
     * @var string
     */
    public $gmtModified;
    /**
     * @var bool
     */
    public $inGroup;
    /**
     * @var string
     */
    public $inGroupTime;
    /**
     * @var string
     */
    public $inventoryRiskLevel;
    /**
     * @var string
     */
    public $invoiceType;
    /**
     * @var string
     */
    public $lmItemId;
    /**
     * @var string
     */
    public $picUrl;
    /**
     * @var string
     */
    public $platformPrice;
    /**
     * @var string
     */
    public $platformReservePrice;
    /**
     * @var string
     */
    public $productId;
    /**
     * @var string
     */
    public $productName;
    /**
     * @var string
     */
    public $shopName;
    /**
     * @var string
     */
    public $soldQuantity;
    /**
     * @var string
     */
    public $taxCode;
    /**
     * @var int
     */
    public $taxRate;
    /**
     * @var string
     */
    public $tradeMode;
    protected $_name = [
        'bandName'               => 'bandName',
        'canNotSellReason'       => 'canNotSellReason',
        'canSell'                => 'canSell',
        'categoryChain'          => 'categoryChain',
        'credit'                 => 'credit',
        'diffPrice'              => 'diffPrice',
        'distributionPrice'      => 'distributionPrice',
        'distributionPriceRatio' => 'distributionPriceRatio',
        'externalPlatformType'   => 'externalPlatformType',
        'gmtCreate'              => 'gmtCreate',
        'gmtModified'            => 'gmtModified',
        'inGroup'                => 'inGroup',
        'inGroupTime'            => 'inGroupTime',
        'inventoryRiskLevel'     => 'inventoryRiskLevel',
        'invoiceType'            => 'invoiceType',
        'lmItemId'               => 'lmItemId',
        'picUrl'                 => 'picUrl',
        'platformPrice'          => 'platformPrice',
        'platformReservePrice'   => 'platformReservePrice',
        'productId'              => 'productId',
        'productName'            => 'productName',
        'shopName'               => 'shopName',
        'soldQuantity'           => 'soldQuantity',
        'taxCode'                => 'taxCode',
        'taxRate'                => 'taxRate',
        'tradeMode'              => 'tradeMode',
    ];

    public function validate()
    {
        if (\is_array($this->categoryChain)) {
            Model::validateArray($this->categoryChain);
        }
        if (\is_array($this->credit)) {
            Model::validateArray($this->credit);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bandName) {
            $res['bandName'] = $this->bandName;
        }

        if (null !== $this->canNotSellReason) {
            $res['canNotSellReason'] = $this->canNotSellReason;
        }

        if (null !== $this->canSell) {
            $res['canSell'] = $this->canSell;
        }

        if (null !== $this->categoryChain) {
            if (\is_array($this->categoryChain)) {
                $res['categoryChain'] = [];
                $n1                   = 0;
                foreach ($this->categoryChain as $item1) {
                    $res['categoryChain'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->credit) {
            if (\is_array($this->credit)) {
                $res['credit'] = [];
                $n1            = 0;
                foreach ($this->credit as $item1) {
                    $res['credit'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->diffPrice) {
            $res['diffPrice'] = $this->diffPrice;
        }

        if (null !== $this->distributionPrice) {
            $res['distributionPrice'] = $this->distributionPrice;
        }

        if (null !== $this->distributionPriceRatio) {
            $res['distributionPriceRatio'] = $this->distributionPriceRatio;
        }

        if (null !== $this->externalPlatformType) {
            $res['externalPlatformType'] = $this->externalPlatformType;
        }

        if (null !== $this->gmtCreate) {
            $res['gmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->gmtModified) {
            $res['gmtModified'] = $this->gmtModified;
        }

        if (null !== $this->inGroup) {
            $res['inGroup'] = $this->inGroup;
        }

        if (null !== $this->inGroupTime) {
            $res['inGroupTime'] = $this->inGroupTime;
        }

        if (null !== $this->inventoryRiskLevel) {
            $res['inventoryRiskLevel'] = $this->inventoryRiskLevel;
        }

        if (null !== $this->invoiceType) {
            $res['invoiceType'] = $this->invoiceType;
        }

        if (null !== $this->lmItemId) {
            $res['lmItemId'] = $this->lmItemId;
        }

        if (null !== $this->picUrl) {
            $res['picUrl'] = $this->picUrl;
        }

        if (null !== $this->platformPrice) {
            $res['platformPrice'] = $this->platformPrice;
        }

        if (null !== $this->platformReservePrice) {
            $res['platformReservePrice'] = $this->platformReservePrice;
        }

        if (null !== $this->productId) {
            $res['productId'] = $this->productId;
        }

        if (null !== $this->productName) {
            $res['productName'] = $this->productName;
        }

        if (null !== $this->shopName) {
            $res['shopName'] = $this->shopName;
        }

        if (null !== $this->soldQuantity) {
            $res['soldQuantity'] = $this->soldQuantity;
        }

        if (null !== $this->taxCode) {
            $res['taxCode'] = $this->taxCode;
        }

        if (null !== $this->taxRate) {
            $res['taxRate'] = $this->taxRate;
        }

        if (null !== $this->tradeMode) {
            $res['tradeMode'] = $this->tradeMode;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['bandName'])) {
            $model->bandName = $map['bandName'];
        }

        if (isset($map['canNotSellReason'])) {
            $model->canNotSellReason = $map['canNotSellReason'];
        }

        if (isset($map['canSell'])) {
            $model->canSell = $map['canSell'];
        }

        if (isset($map['categoryChain'])) {
            if (!empty($map['categoryChain'])) {
                $model->categoryChain = [];
                $n1                   = 0;
                foreach ($map['categoryChain'] as $item1) {
                    $model->categoryChain[$n1++] = categoryChain::fromMap($item1);
                }
            }
        }

        if (isset($map['credit'])) {
            if (!empty($map['credit'])) {
                $model->credit = [];
                $n1            = 0;
                foreach ($map['credit'] as $item1) {
                    $model->credit[$n1++] = $item1;
                }
            }
        }

        if (isset($map['diffPrice'])) {
            $model->diffPrice = $map['diffPrice'];
        }

        if (isset($map['distributionPrice'])) {
            $model->distributionPrice = $map['distributionPrice'];
        }

        if (isset($map['distributionPriceRatio'])) {
            $model->distributionPriceRatio = $map['distributionPriceRatio'];
        }

        if (isset($map['externalPlatformType'])) {
            $model->externalPlatformType = $map['externalPlatformType'];
        }

        if (isset($map['gmtCreate'])) {
            $model->gmtCreate = $map['gmtCreate'];
        }

        if (isset($map['gmtModified'])) {
            $model->gmtModified = $map['gmtModified'];
        }

        if (isset($map['inGroup'])) {
            $model->inGroup = $map['inGroup'];
        }

        if (isset($map['inGroupTime'])) {
            $model->inGroupTime = $map['inGroupTime'];
        }

        if (isset($map['inventoryRiskLevel'])) {
            $model->inventoryRiskLevel = $map['inventoryRiskLevel'];
        }

        if (isset($map['invoiceType'])) {
            $model->invoiceType = $map['invoiceType'];
        }

        if (isset($map['lmItemId'])) {
            $model->lmItemId = $map['lmItemId'];
        }

        if (isset($map['picUrl'])) {
            $model->picUrl = $map['picUrl'];
        }

        if (isset($map['platformPrice'])) {
            $model->platformPrice = $map['platformPrice'];
        }

        if (isset($map['platformReservePrice'])) {
            $model->platformReservePrice = $map['platformReservePrice'];
        }

        if (isset($map['productId'])) {
            $model->productId = $map['productId'];
        }

        if (isset($map['productName'])) {
            $model->productName = $map['productName'];
        }

        if (isset($map['shopName'])) {
            $model->shopName = $map['shopName'];
        }

        if (isset($map['soldQuantity'])) {
            $model->soldQuantity = $map['soldQuantity'];
        }

        if (isset($map['taxCode'])) {
            $model->taxCode = $map['taxCode'];
        }

        if (isset($map['taxRate'])) {
            $model->taxRate = $map['taxRate'];
        }

        if (isset($map['tradeMode'])) {
            $model->tradeMode = $map['tradeMode'];
        }

        return $model;
    }
}
