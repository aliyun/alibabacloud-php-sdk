<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Starrocks\V20221019\Models\QueryModifyNodeNumberPriceResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\QueryModifyNodeNumberPriceResponseBody\data\componentPrices;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\QueryModifyNodeNumberPriceResponseBody\data\depreciateInfo;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\QueryModifyNodeNumberPriceResponseBody\data\optionalPromotions;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\QueryModifyNodeNumberPriceResponseBody\data\rules;

class data extends Model
{
    /**
     * @var componentPrices[]
     */
    public $componentPrices;

    /**
     * @var string
     */
    public $currency;

    /**
     * @var depreciateInfo
     */
    public $depreciateInfo;

    /**
     * @var float
     */
    public $discountAmount;

    /**
     * @var optionalPromotions[]
     */
    public $optionalPromotions;

    /**
     * @var float
     */
    public $originalAmount;

    /**
     * @var rules[]
     */
    public $rules;

    /**
     * @var float
     */
    public $standDiscountPrice;

    /**
     * @var float
     */
    public $standPrice;

    /**
     * @var float
     */
    public $tradeAmount;
    protected $_name = [
        'componentPrices' => 'ComponentPrices',
        'currency' => 'Currency',
        'depreciateInfo' => 'DepreciateInfo',
        'discountAmount' => 'DiscountAmount',
        'optionalPromotions' => 'OptionalPromotions',
        'originalAmount' => 'OriginalAmount',
        'rules' => 'Rules',
        'standDiscountPrice' => 'StandDiscountPrice',
        'standPrice' => 'StandPrice',
        'tradeAmount' => 'TradeAmount',
    ];

    public function validate()
    {
        if (\is_array($this->componentPrices)) {
            Model::validateArray($this->componentPrices);
        }
        if (null !== $this->depreciateInfo) {
            $this->depreciateInfo->validate();
        }
        if (\is_array($this->optionalPromotions)) {
            Model::validateArray($this->optionalPromotions);
        }
        if (\is_array($this->rules)) {
            Model::validateArray($this->rules);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->componentPrices) {
            if (\is_array($this->componentPrices)) {
                $res['ComponentPrices'] = [];
                $n1 = 0;
                foreach ($this->componentPrices as $item1) {
                    $res['ComponentPrices'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->currency) {
            $res['Currency'] = $this->currency;
        }

        if (null !== $this->depreciateInfo) {
            $res['DepreciateInfo'] = null !== $this->depreciateInfo ? $this->depreciateInfo->toArray($noStream) : $this->depreciateInfo;
        }

        if (null !== $this->discountAmount) {
            $res['DiscountAmount'] = $this->discountAmount;
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

        if (null !== $this->originalAmount) {
            $res['OriginalAmount'] = $this->originalAmount;
        }

        if (null !== $this->rules) {
            if (\is_array($this->rules)) {
                $res['Rules'] = [];
                $n1 = 0;
                foreach ($this->rules as $item1) {
                    $res['Rules'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->standDiscountPrice) {
            $res['StandDiscountPrice'] = $this->standDiscountPrice;
        }

        if (null !== $this->standPrice) {
            $res['StandPrice'] = $this->standPrice;
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
        if (isset($map['ComponentPrices'])) {
            if (!empty($map['ComponentPrices'])) {
                $model->componentPrices = [];
                $n1 = 0;
                foreach ($map['ComponentPrices'] as $item1) {
                    $model->componentPrices[$n1] = componentPrices::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Currency'])) {
            $model->currency = $map['Currency'];
        }

        if (isset($map['DepreciateInfo'])) {
            $model->depreciateInfo = depreciateInfo::fromMap($map['DepreciateInfo']);
        }

        if (isset($map['DiscountAmount'])) {
            $model->discountAmount = $map['DiscountAmount'];
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

        if (isset($map['OriginalAmount'])) {
            $model->originalAmount = $map['OriginalAmount'];
        }

        if (isset($map['Rules'])) {
            if (!empty($map['Rules'])) {
                $model->rules = [];
                $n1 = 0;
                foreach ($map['Rules'] as $item1) {
                    $model->rules[$n1] = rules::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['StandDiscountPrice'])) {
            $model->standDiscountPrice = $map['StandDiscountPrice'];
        }

        if (isset($map['StandPrice'])) {
            $model->standPrice = $map['StandPrice'];
        }

        if (isset($map['TradeAmount'])) {
            $model->tradeAmount = $map['TradeAmount'];
        }

        return $model;
    }
}
