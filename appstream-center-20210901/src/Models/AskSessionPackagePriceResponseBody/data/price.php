<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\AskSessionPackagePriceResponseBody\data;

use AlibabaCloud\Tea\Model;

class price extends Model
{
    /**
     * @example CNY
     *
     * @var string
     */
    public $currency;

    /**
     * @example 0.0
     *
     * @var float
     */
    public $discountPrice;

    /**
     * @example 2000.0
     *
     * @var float
     */
    public $originalPrice;

    /**
     * @example 2000.0
     *
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

        return $model;
    }
}
