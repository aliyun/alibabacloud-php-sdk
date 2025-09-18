<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models;

use AlibabaCloud\Dara\Model;

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
        'currency' => 'Currency',
        'discountPrice' => 'DiscountPrice',
        'originalPrice' => 'OriginalPrice',
        'payType' => 'PayType',
        'promotionResults' => 'PromotionResults',
        'resourceType' => 'ResourceType',
        'spotInstanceTypeOriginalPrice' => 'SpotInstanceTypeOriginalPrice',
        'spotInstanceTypePrice' => 'SpotInstanceTypePrice',
        'spotOriginalPrice' => 'SpotOriginalPrice',
        'spotPrice' => 'SpotPrice',
        'taxPrice' => 'TaxPrice',
        'tradePrice' => 'TradePrice',
    ];

    public function validate()
    {
        if (\is_array($this->promotionResults)) {
            Model::validateArray($this->promotionResults);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->promotionResults)) {
                $res['PromotionResults'] = [];
                $n1 = 0;
                foreach ($this->promotionResults as $item1) {
                    $res['PromotionResults'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $n1 = 0;
                foreach ($map['PromotionResults'] as $item1) {
                    $model->promotionResults[$n1] = PromotionInfo::fromMap($item1);
                    ++$n1;
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
