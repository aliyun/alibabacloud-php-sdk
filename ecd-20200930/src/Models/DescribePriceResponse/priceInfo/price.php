<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\DescribePriceResponse\priceInfo;

use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribePriceResponse\priceInfo\price\promotions;
use AlibabaCloud\Tea\Model;

class price extends Model
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
     * @var float
     */
    public $originalPrice;

    /**
     * @var float
     */
    public $tradePrice;

    /**
     * @var promotions[]
     */
    public $promotions;
    protected $_name = [
        'currency'      => 'Currency',
        'discountPrice' => 'DiscountPrice',
        'originalPrice' => 'OriginalPrice',
        'tradePrice'    => 'TradePrice',
        'promotions'    => 'Promotions',
    ];

    public function validate()
    {
        Model::validateRequired('currency', $this->currency, true);
        Model::validateRequired('discountPrice', $this->discountPrice, true);
        Model::validateRequired('originalPrice', $this->originalPrice, true);
        Model::validateRequired('tradePrice', $this->tradePrice, true);
        Model::validateRequired('promotions', $this->promotions, true);
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
        if (null !== $this->tradePrice) {
            $res['TradePrice'] = $this->tradePrice;
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
        if (isset($map['TradePrice'])) {
            $model->tradePrice = $map['TradePrice'];
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

        return $model;
    }
}
