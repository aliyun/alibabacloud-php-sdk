<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SWASOPEN\V20200601\Models\DescribePriceResponseBody\priceInfo\price;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\DescribePriceResponseBody\priceInfo\price\subPrices\promotions;

class subPrices extends Model
{
    /**
     * @var float
     */
    public $discountPrice;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var bool
     */
    public $isContractPromotion;

    /**
     * @var float
     */
    public $originalPrice;

    /**
     * @var promotions[]
     */
    public $promotions;

    /**
     * @var int[]
     */
    public $ruleIds;

    /**
     * @var float
     */
    public $standardDiscountPrice;

    /**
     * @var float
     */
    public $standardPrice;

    /**
     * @var float
     */
    public $tradePrice;
    protected $_name = [
        'discountPrice' => 'DiscountPrice',
        'instanceId' => 'InstanceId',
        'isContractPromotion' => 'IsContractPromotion',
        'originalPrice' => 'OriginalPrice',
        'promotions' => 'Promotions',
        'ruleIds' => 'RuleIds',
        'standardDiscountPrice' => 'StandardDiscountPrice',
        'standardPrice' => 'StandardPrice',
        'tradePrice' => 'TradePrice',
    ];

    public function validate()
    {
        if (\is_array($this->promotions)) {
            Model::validateArray($this->promotions);
        }
        if (\is_array($this->ruleIds)) {
            Model::validateArray($this->ruleIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->discountPrice) {
            $res['DiscountPrice'] = $this->discountPrice;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->isContractPromotion) {
            $res['IsContractPromotion'] = $this->isContractPromotion;
        }

        if (null !== $this->originalPrice) {
            $res['OriginalPrice'] = $this->originalPrice;
        }

        if (null !== $this->promotions) {
            if (\is_array($this->promotions)) {
                $res['Promotions'] = [];
                $n1 = 0;
                foreach ($this->promotions as $item1) {
                    $res['Promotions'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->ruleIds) {
            if (\is_array($this->ruleIds)) {
                $res['RuleIds'] = [];
                $n1 = 0;
                foreach ($this->ruleIds as $item1) {
                    $res['RuleIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->standardDiscountPrice) {
            $res['StandardDiscountPrice'] = $this->standardDiscountPrice;
        }

        if (null !== $this->standardPrice) {
            $res['StandardPrice'] = $this->standardPrice;
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
        if (isset($map['DiscountPrice'])) {
            $model->discountPrice = $map['DiscountPrice'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['IsContractPromotion'])) {
            $model->isContractPromotion = $map['IsContractPromotion'];
        }

        if (isset($map['OriginalPrice'])) {
            $model->originalPrice = $map['OriginalPrice'];
        }

        if (isset($map['Promotions'])) {
            if (!empty($map['Promotions'])) {
                $model->promotions = [];
                $n1 = 0;
                foreach ($map['Promotions'] as $item1) {
                    $model->promotions[$n1] = promotions::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RuleIds'])) {
            if (!empty($map['RuleIds'])) {
                $model->ruleIds = [];
                $n1 = 0;
                foreach ($map['RuleIds'] as $item1) {
                    $model->ruleIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['StandardDiscountPrice'])) {
            $model->standardDiscountPrice = $map['StandardDiscountPrice'];
        }

        if (isset($map['StandardPrice'])) {
            $model->standardPrice = $map['StandardPrice'];
        }

        if (isset($map['TradePrice'])) {
            $model->tradePrice = $map['TradePrice'];
        }

        return $model;
    }
}
