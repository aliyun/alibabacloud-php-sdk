<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ga\V20191120\Models\DescribeCommodityPriceResponseBody\orderDetails;
use AlibabaCloud\SDK\Ga\V20191120\Models\DescribeCommodityPriceResponseBody\promotions;
use AlibabaCloud\SDK\Ga\V20191120\Models\DescribeCommodityPriceResponseBody\ruleDetails;

class DescribeCommodityPriceResponseBody extends Model
{
    /**
     * @var string
     */
    public $currency;

    /**
     * @var float
     */
    public $discountPrice;

    /**
     * @var orderDetails[]
     */
    public $orderDetails;

    /**
     * @var float
     */
    public $originalPrice;

    /**
     * @var promotions[]
     */
    public $promotions;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var ruleDetails[]
     */
    public $ruleDetails;

    /**
     * @var float
     */
    public $tradePrice;
    protected $_name = [
        'currency' => 'Currency',
        'discountPrice' => 'DiscountPrice',
        'orderDetails' => 'OrderDetails',
        'originalPrice' => 'OriginalPrice',
        'promotions' => 'Promotions',
        'requestId' => 'RequestId',
        'ruleDetails' => 'RuleDetails',
        'tradePrice' => 'TradePrice',
    ];

    public function validate()
    {
        if (\is_array($this->orderDetails)) {
            Model::validateArray($this->orderDetails);
        }
        if (\is_array($this->promotions)) {
            Model::validateArray($this->promotions);
        }
        if (\is_array($this->ruleDetails)) {
            Model::validateArray($this->ruleDetails);
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

        if (null !== $this->orderDetails) {
            if (\is_array($this->orderDetails)) {
                $res['OrderDetails'] = [];
                $n1 = 0;
                foreach ($this->orderDetails as $item1) {
                    $res['OrderDetails'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->ruleDetails) {
            if (\is_array($this->ruleDetails)) {
                $res['RuleDetails'] = [];
                $n1 = 0;
                foreach ($this->ruleDetails as $item1) {
                    $res['RuleDetails'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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

        if (isset($map['OrderDetails'])) {
            if (!empty($map['OrderDetails'])) {
                $model->orderDetails = [];
                $n1 = 0;
                foreach ($map['OrderDetails'] as $item1) {
                    $model->orderDetails[$n1] = orderDetails::fromMap($item1);
                    ++$n1;
                }
            }
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

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['RuleDetails'])) {
            if (!empty($map['RuleDetails'])) {
                $model->ruleDetails = [];
                $n1 = 0;
                foreach ($map['RuleDetails'] as $item1) {
                    $model->ruleDetails[$n1] = ruleDetails::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['TradePrice'])) {
            $model->tradePrice = $map['TradePrice'];
        }

        return $model;
    }
}
