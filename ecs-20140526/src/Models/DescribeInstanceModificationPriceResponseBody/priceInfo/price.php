<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceModificationPriceResponseBody\priceInfo;

use AlibabaCloud\Tea\Model;

class price extends Model
{
    /**
     * @var float
     */
    public $discountPrice;

    /**
     * @var float
     */
    public $tradePrice;

    /**
     * @var float
     */
    public $originalPrice;

    /**
     * @var string
     */
    public $currency;
    protected $_name = [
        'discountPrice' => 'DiscountPrice',
        'tradePrice'    => 'TradePrice',
        'originalPrice' => 'OriginalPrice',
        'currency'      => 'Currency',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->discountPrice) {
            $res['DiscountPrice'] = $this->discountPrice;
        }
        if (null !== $this->tradePrice) {
            $res['TradePrice'] = $this->tradePrice;
        }
        if (null !== $this->originalPrice) {
            $res['OriginalPrice'] = $this->originalPrice;
        }
        if (null !== $this->currency) {
            $res['Currency'] = $this->currency;
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
        if (isset($map['DiscountPrice'])) {
            $model->discountPrice = $map['DiscountPrice'];
        }
        if (isset($map['TradePrice'])) {
            $model->tradePrice = $map['TradePrice'];
        }
        if (isset($map['OriginalPrice'])) {
            $model->originalPrice = $map['OriginalPrice'];
        }
        if (isset($map['Currency'])) {
            $model->currency = $map['Currency'];
        }

        return $model;
    }
}
