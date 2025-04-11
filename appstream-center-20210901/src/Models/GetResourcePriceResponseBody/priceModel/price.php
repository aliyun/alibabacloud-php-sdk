<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\GetResourcePriceResponseBody\priceModel;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\GetResourcePriceResponseBody\priceModel\price\promotions;

class price extends Model
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
     * @var promotions[]
     */
    public $promotions;

    /**
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

    public function validate()
    {
        if (\is_array($this->promotions)) {
            Model::validateArray($this->promotions);
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

        if (null !== $this->promotions) {
            if (\is_array($this->promotions)) {
                $res['Promotions'] = [];
                $n1 = 0;
                foreach ($this->promotions as $item1) {
                    $res['Promotions'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

        if (isset($map['OriginalPrice'])) {
            $model->originalPrice = $map['OriginalPrice'];
        }

        if (isset($map['Promotions'])) {
            if (!empty($map['Promotions'])) {
                $model->promotions = [];
                $n1 = 0;
                foreach ($map['Promotions'] as $item1) {
                    $model->promotions[$n1++] = promotions::fromMap($item1);
                }
            }
        }

        if (isset($map['TradePrice'])) {
            $model->tradePrice = $map['TradePrice'];
        }

        return $model;
    }
}
