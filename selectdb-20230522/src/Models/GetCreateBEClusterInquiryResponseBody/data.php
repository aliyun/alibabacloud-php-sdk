<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Selectdb\V20230522\Models\GetCreateBEClusterInquiryResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Selectdb\V20230522\Models\GetCreateBEClusterInquiryResponseBody\data\optionalPromotions;

class data extends Model
{
    /**
     * @var string
     */
    public $currency;

    /**
     * @var optionalPromotions[]
     */
    public $optionalPromotions;

    /**
     * @var string[]
     */
    public $pricingRules;

    /**
     * @var string
     */
    public $tradeAmount;
    protected $_name = [
        'currency' => 'Currency',
        'optionalPromotions' => 'OptionalPromotions',
        'pricingRules' => 'PricingRules',
        'tradeAmount' => 'TradeAmount',
    ];

    public function validate()
    {
        if (\is_array($this->optionalPromotions)) {
            Model::validateArray($this->optionalPromotions);
        }
        if (\is_array($this->pricingRules)) {
            Model::validateArray($this->pricingRules);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->currency) {
            $res['Currency'] = $this->currency;
        }

        if (null !== $this->optionalPromotions) {
            if (\is_array($this->optionalPromotions)) {
                $res['OptionalPromotions'] = [];
                $n1 = 0;
                foreach ($this->optionalPromotions as $item1) {
                    $res['OptionalPromotions'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->pricingRules) {
            if (\is_array($this->pricingRules)) {
                $res['PricingRules'] = [];
                foreach ($this->pricingRules as $key1 => $value1) {
                    $res['PricingRules'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->tradeAmount) {
            $res['TradeAmount'] = $this->tradeAmount;
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

        if (isset($map['OptionalPromotions'])) {
            if (!empty($map['OptionalPromotions'])) {
                $model->optionalPromotions = [];
                $n1 = 0;
                foreach ($map['OptionalPromotions'] as $item1) {
                    $model->optionalPromotions[$n1] = optionalPromotions::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['PricingRules'])) {
            if (!empty($map['PricingRules'])) {
                $model->pricingRules = [];
                foreach ($map['PricingRules'] as $key1 => $value1) {
                    $model->pricingRules[$key1] = $value1;
                }
            }
        }

        if (isset($map['TradeAmount'])) {
            $model->tradeAmount = $map['TradeAmount'];
        }

        return $model;
    }
}
