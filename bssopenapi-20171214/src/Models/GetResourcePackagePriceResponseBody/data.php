<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\GetResourcePackagePriceResponseBody;

use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\GetResourcePackagePriceResponseBody\data\promotions;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $currency;

    /**
     * @var float
     */
    public $originalPrice;

    /**
     * @var float
     */
    public $tradePrice;

    /**
     * @var float
     */
    public $discountPrice;

    /**
     * @var promotions
     */
    public $promotions;
    protected $_name = [
        'currency'      => 'Currency',
        'originalPrice' => 'OriginalPrice',
        'tradePrice'    => 'TradePrice',
        'discountPrice' => 'DiscountPrice',
        'promotions'    => 'Promotions',
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
        if (null !== $this->originalPrice) {
            $res['OriginalPrice'] = $this->originalPrice;
        }
        if (null !== $this->tradePrice) {
            $res['TradePrice'] = $this->tradePrice;
        }
        if (null !== $this->discountPrice) {
            $res['DiscountPrice'] = $this->discountPrice;
        }
        if (null !== $this->promotions) {
            $res['Promotions'] = null !== $this->promotions ? $this->promotions->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Currency'])) {
            $model->currency = $map['Currency'];
        }
        if (isset($map['OriginalPrice'])) {
            $model->originalPrice = $map['OriginalPrice'];
        }
        if (isset($map['TradePrice'])) {
            $model->tradePrice = $map['TradePrice'];
        }
        if (isset($map['DiscountPrice'])) {
            $model->discountPrice = $map['DiscountPrice'];
        }
        if (isset($map['Promotions'])) {
            $model->promotions = promotions::fromMap($map['Promotions']);
        }

        return $model;
    }
}
