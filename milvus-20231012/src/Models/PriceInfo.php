<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Milvus\V20231012\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Milvus\V20231012\Models\PriceInfo\priceModules;
use AlibabaCloud\SDK\Milvus\V20231012\Models\PriceInfo\rules;

class PriceInfo extends Model
{
    /**
     * @var string
     */
    public $currency;

    /**
     * @var string
     */
    public $discountAmount;

    /**
     * @var PromotionInfo[]
     */
    public $optionalPromotions;

    /**
     * @var string
     */
    public $originalAmount;

    /**
     * @var priceModules[]
     */
    public $priceModules;

    /**
     * @var rules[]
     */
    public $rules;

    /**
     * @var string
     */
    public $taxAmount;

    /**
     * @var string
     */
    public $tradeAmount;
    protected $_name = [
        'currency' => 'currency',
        'discountAmount' => 'discountAmount',
        'optionalPromotions' => 'optionalPromotions',
        'originalAmount' => 'originalAmount',
        'priceModules' => 'priceModules',
        'rules' => 'rules',
        'taxAmount' => 'taxAmount',
        'tradeAmount' => 'tradeAmount',
    ];

    public function validate()
    {
        if (\is_array($this->optionalPromotions)) {
            Model::validateArray($this->optionalPromotions);
        }
        if (\is_array($this->priceModules)) {
            Model::validateArray($this->priceModules);
        }
        if (\is_array($this->rules)) {
            Model::validateArray($this->rules);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->currency) {
            $res['currency'] = $this->currency;
        }

        if (null !== $this->discountAmount) {
            $res['discountAmount'] = $this->discountAmount;
        }

        if (null !== $this->optionalPromotions) {
            if (\is_array($this->optionalPromotions)) {
                $res['optionalPromotions'] = [];
                $n1 = 0;
                foreach ($this->optionalPromotions as $item1) {
                    $res['optionalPromotions'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->originalAmount) {
            $res['originalAmount'] = $this->originalAmount;
        }

        if (null !== $this->priceModules) {
            if (\is_array($this->priceModules)) {
                $res['priceModules'] = [];
                $n1 = 0;
                foreach ($this->priceModules as $item1) {
                    $res['priceModules'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->rules) {
            if (\is_array($this->rules)) {
                $res['rules'] = [];
                $n1 = 0;
                foreach ($this->rules as $item1) {
                    $res['rules'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->taxAmount) {
            $res['taxAmount'] = $this->taxAmount;
        }

        if (null !== $this->tradeAmount) {
            $res['tradeAmount'] = $this->tradeAmount;
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
        if (isset($map['currency'])) {
            $model->currency = $map['currency'];
        }

        if (isset($map['discountAmount'])) {
            $model->discountAmount = $map['discountAmount'];
        }

        if (isset($map['optionalPromotions'])) {
            if (!empty($map['optionalPromotions'])) {
                $model->optionalPromotions = [];
                $n1 = 0;
                foreach ($map['optionalPromotions'] as $item1) {
                    $model->optionalPromotions[$n1] = PromotionInfo::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['originalAmount'])) {
            $model->originalAmount = $map['originalAmount'];
        }

        if (isset($map['priceModules'])) {
            if (!empty($map['priceModules'])) {
                $model->priceModules = [];
                $n1 = 0;
                foreach ($map['priceModules'] as $item1) {
                    $model->priceModules[$n1] = priceModules::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['rules'])) {
            if (!empty($map['rules'])) {
                $model->rules = [];
                $n1 = 0;
                foreach ($map['rules'] as $item1) {
                    $model->rules[$n1] = rules::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['taxAmount'])) {
            $model->taxAmount = $map['taxAmount'];
        }

        if (isset($map['tradeAmount'])) {
            $model->tradeAmount = $map['tradeAmount'];
        }

        return $model;
    }
}
