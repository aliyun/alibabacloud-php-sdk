<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models;

use AlibabaCloud\Tea\Model;

class PriceInfo extends Model
{
    /**
     * @var string
     */
    public $currency;

    /**
     * @var string
     */
    public $discountPrice;

    /**
     * @var string
     */
    public $originalPrice;

    /**
     * @var string
     */
    public $payType;

    /**
     * @var PromotionInfo[]
     */
    public $promotionResults;

    /**
     * @var string
     */
    public $resourceType;

    /**
     * @var string
     */
    public $spotInstanceTypeOriginalPrice;

    /**
     * @var string
     */
    public $spotInstanceTypePrice;

    /**
     * @var string
     */
    public $spotOriginalPrice;

    /**
     * @var string
     */
    public $spotPrice;

    /**
     * @var string
     */
    public $taxPrice;

    /**
     * @var string
     */
    public $tradePrice;
    protected $_name = [
        'currency'                      => 'Currency',
        'discountPrice'                 => 'DiscountPrice',
        'originalPrice'                 => 'OriginalPrice',
        'payType'                       => 'PayType',
        'promotionResults'              => 'PromotionResults',
        'resourceType'                  => 'ResourceType',
        'spotInstanceTypeOriginalPrice' => 'SpotInstanceTypeOriginalPrice',
        'spotInstanceTypePrice'         => 'SpotInstanceTypePrice',
        'spotOriginalPrice'             => 'SpotOriginalPrice',
        'spotPrice'                     => 'SpotPrice',
        'taxPrice'                      => 'TaxPrice',
        'tradePrice'                    => 'TradePrice',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->currency) {
            $res['Currency'] = $this->currency;
        }
        if (null !== $this->discountPrice) {
            $res['DiscountPrice'] = $this->discountPrice;
        }
        if (null !== $this->originalPrice) {
            $res['OriginalPrice'] = $this->originalPrice;
        }
        if (null !== $this->payType) {
            $res['PayType'] = $this->payType;
        }
        if (null !== $this->promotionResults) {
            $res['PromotionResults'] = [];
            if (null !== $this->promotionResults && \is_array($this->promotionResults)) {
                $n = 0;
                foreach ($this->promotionResults as $item) {
                    $res['PromotionResults'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }
        if (null !== $this->spotInstanceTypeOriginalPrice) {
            $res['SpotInstanceTypeOriginalPrice'] = $this->spotInstanceTypeOriginalPrice;
        }
        if (null !== $this->spotInstanceTypePrice) {
            $res['SpotInstanceTypePrice'] = $this->spotInstanceTypePrice;
        }
        if (null !== $this->spotOriginalPrice) {
            $res['SpotOriginalPrice'] = $this->spotOriginalPrice;
        }
        if (null !== $this->spotPrice) {
            $res['SpotPrice'] = $this->spotPrice;
        }
        if (null !== $this->taxPrice) {
            $res['TaxPrice'] = $this->taxPrice;
        }
        if (null !== $this->tradePrice) {
            $res['TradePrice'] = $this->tradePrice;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PriceInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Currency'])) {
            $model->currency = $map['Currency'];
        }
        if (isset($map['DiscountPrice'])) {
            $model->discountPrice = $map['DiscountPrice'];
        }
        if (isset($map['OriginalPrice'])) {
            $model->originalPrice = $map['OriginalPrice'];
        }
        if (isset($map['PayType'])) {
            $model->payType = $map['PayType'];
        }
        if (isset($map['PromotionResults'])) {
            if (!empty($map['PromotionResults'])) {
                $model->promotionResults = [];
                $n                       = 0;
                foreach ($map['PromotionResults'] as $item) {
                    $model->promotionResults[$n++] = null !== $item ? PromotionInfo::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }
        if (isset($map['SpotInstanceTypeOriginalPrice'])) {
            $model->spotInstanceTypeOriginalPrice = $map['SpotInstanceTypeOriginalPrice'];
        }
        if (isset($map['SpotInstanceTypePrice'])) {
            $model->spotInstanceTypePrice = $map['SpotInstanceTypePrice'];
        }
        if (isset($map['SpotOriginalPrice'])) {
            $model->spotOriginalPrice = $map['SpotOriginalPrice'];
        }
        if (isset($map['SpotPrice'])) {
            $model->spotPrice = $map['SpotPrice'];
        }
        if (isset($map['TaxPrice'])) {
            $model->taxPrice = $map['TaxPrice'];
        }
        if (isset($map['TradePrice'])) {
            $model->tradePrice = $map['TradePrice'];
        }

        return $model;
    }
}
