<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Tea\Model;

class QueryOrderPriceResponseBody extends Model
{
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
        'discountPrice' => 'discount_price',
        'originalPrice' => 'original_price',
        'tradePrice'    => 'trade_price',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->discountPrice) {
            $res['discount_price'] = $this->discountPrice;
        }
        if (null !== $this->originalPrice) {
            $res['original_price'] = $this->originalPrice;
        }
        if (null !== $this->tradePrice) {
            $res['trade_price'] = $this->tradePrice;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryOrderPriceResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['discount_price'])) {
            $model->discountPrice = $map['discount_price'];
        }
        if (isset($map['original_price'])) {
            $model->originalPrice = $map['original_price'];
        }
        if (isset($map['trade_price'])) {
            $model->tradePrice = $map['trade_price'];
        }

        return $model;
    }
}
