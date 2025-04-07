<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\GetResourceRenewPriceResponseBody\data;

use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\GetResourceRenewPriceResponseBody\data\price\promotions;
use AlibabaCloud\Tea\Model;

class price extends Model
{
    /**
     * @description The currency type.
     *
     * @example CNY
     *
     * @var string
     */
    public $currency;

    /**
     * @description The discount. The actual price is calculated based on the following formula: Actual price = Original price - Discount.
     *
     * @example 1
     *
     * @var string
     */
    public $discountPrice;

    /**
     * @description The original price.
     *
     * @example 11
     *
     * @var string
     */
    public $originalPrice;

    /**
     * @description The coupon description.
     *
     * @var promotions[]
     */
    public $promotions;

    /**
     * @description The actual price. The actual price is calculated based on the following formula: Actual price = Original price - Discount.
     *
     * @example 10
     *
     * @var string
     */
    public $tradePrice;
    protected $_name = [
        'currency' => 'Currency',
        'discountPrice' => 'DiscountPrice',
        'originalPrice' => 'OriginalPrice',
        'promotions' => 'Promotions',
        'tradePrice' => 'TradePrice',
    ];

    public function validate() {}

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
        if (null !== $this->promotions) {
            $res['Promotions'] = [];
            if (null !== $this->promotions && \is_array($this->promotions)) {
                $n = 0;
                foreach ($this->promotions as $item) {
                    $res['Promotions'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['OriginalPrice'])) {
            $model->originalPrice = $map['OriginalPrice'];
        }
        if (isset($map['Promotions'])) {
            if (!empty($map['Promotions'])) {
                $model->promotions = [];
                $n = 0;
                foreach ($map['Promotions'] as $item) {
                    $model->promotions[$n++] = null !== $item ? promotions::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TradePrice'])) {
            $model->tradePrice = $map['TradePrice'];
        }

        return $model;
    }
}
