<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20180724\Models;

use AlibabaCloud\SDK\Trademark\V20180724\Models\QueryTrademarkPriceResponseBody\prices;
use AlibabaCloud\Tea\Model;

class QueryTrademarkPriceResponseBody extends Model
{
    /**
     * @var float
     */
    public $originalPrice;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var float
     */
    public $discountPrice;

    /**
     * @var string
     */
    public $currency;

    /**
     * @var float
     */
    public $tradePrice;

    /**
     * @var prices
     */
    public $prices;
    protected $_name = [
        'originalPrice' => 'OriginalPrice',
        'requestId'     => 'RequestId',
        'discountPrice' => 'DiscountPrice',
        'currency'      => 'Currency',
        'tradePrice'    => 'TradePrice',
        'prices'        => 'Prices',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->originalPrice) {
            $res['OriginalPrice'] = $this->originalPrice;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->discountPrice) {
            $res['DiscountPrice'] = $this->discountPrice;
        }
        if (null !== $this->currency) {
            $res['Currency'] = $this->currency;
        }
        if (null !== $this->tradePrice) {
            $res['TradePrice'] = $this->tradePrice;
        }
        if (null !== $this->prices) {
            $res['Prices'] = null !== $this->prices ? $this->prices->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryTrademarkPriceResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OriginalPrice'])) {
            $model->originalPrice = $map['OriginalPrice'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['DiscountPrice'])) {
            $model->discountPrice = $map['DiscountPrice'];
        }
        if (isset($map['Currency'])) {
            $model->currency = $map['Currency'];
        }
        if (isset($map['TradePrice'])) {
            $model->tradePrice = $map['TradePrice'];
        }
        if (isset($map['Prices'])) {
            $model->prices = prices::fromMap($map['Prices']);
        }

        return $model;
    }
}
