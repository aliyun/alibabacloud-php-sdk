<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribePriceResponseBody\priceInfo\relatedPrice;

use AlibabaCloud\Dara\Model;

class marketplaceImagePrice extends Model
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
    protected $_name = [
        'currency'      => 'Currency',
        'discountPrice' => 'DiscountPrice',
        'originalPrice' => 'OriginalPrice',
        'tradePrice'    => 'TradePrice',
    ];

    public function validate()
    {
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

        if (isset($map['TradePrice'])) {
            $model->tradePrice = $map['TradePrice'];
        }

        return $model;
    }
}
