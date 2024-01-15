<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\DescribePriceResponseBody\priceInfo;

use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribePriceResponseBody\priceInfo\price\promotions;
use AlibabaCloud\Tea\Model;

class price extends Model
{
    /**
     * @description The unit of the currency.
     *
     * @example CNY
     *
     * @var string
     */
    public $currency;

    /**
     * @description The discounted price.
     *
     * @example 0
     *
     * @var float
     */
    public $discountPrice;

    /**
     * @var string[]
     */
    public $orderLines;

    /**
     * @description The original price.
     *
     * @example 2.796
     *
     * @var float
     */
    public $originalPrice;

    /**
     * @description The details of the promotion.
     *
     * @var promotions[]
     */
    public $promotions;

    /**
     * @var int
     */
    public $spPrice;

    /**
     * @description The actual price that is paid. The original price minus the discounted part equals the actual price.
     *
     * @example 2.796
     *
     * @var float
     */
    public $tradePrice;
    protected $_name = [
        'currency'      => 'Currency',
        'discountPrice' => 'DiscountPrice',
        'orderLines'    => 'OrderLines',
        'originalPrice' => 'OriginalPrice',
        'promotions'    => 'Promotions',
        'spPrice'       => 'SpPrice',
        'tradePrice'    => 'TradePrice',
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
        if (null !== $this->orderLines) {
            $res['OrderLines'] = $this->orderLines;
        }
        if (null !== $this->originalPrice) {
            $res['OriginalPrice'] = $this->originalPrice;
        }
        if (null !== $this->promotions) {
            $res['Promotions'] = [];
            if (null !== $this->promotions && \is_array($this->promotions)) {
                $n = 0;
                foreach ($this->promotions as $item) {
                    $res['Promotions'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->spPrice) {
            $res['SpPrice'] = $this->spPrice;
        }
        if (null !== $this->tradePrice) {
            $res['TradePrice'] = $this->tradePrice;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return price
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
        if (isset($map['OrderLines'])) {
            $model->orderLines = $map['OrderLines'];
        }
        if (isset($map['OriginalPrice'])) {
            $model->originalPrice = $map['OriginalPrice'];
        }
        if (isset($map['Promotions'])) {
            if (!empty($map['Promotions'])) {
                $model->promotions = [];
                $n                 = 0;
                foreach ($map['Promotions'] as $item) {
                    $model->promotions[$n++] = null !== $item ? promotions::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['SpPrice'])) {
            $model->spPrice = $map['SpPrice'];
        }
        if (isset($map['TradePrice'])) {
            $model->tradePrice = $map['TradePrice'];
        }

        return $model;
    }
}
