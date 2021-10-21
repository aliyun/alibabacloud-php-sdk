<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20180724\Models\QueryTrademarkPriceResponseBody\prices;

use AlibabaCloud\Tea\Model;

class prices extends Model
{
    /**
     * @var float
     */
    public $originalPrice;

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
     * @var string
     */
    public $classificationCode;
    protected $_name = [
        'originalPrice'      => 'OriginalPrice',
        'discountPrice'      => 'DiscountPrice',
        'currency'           => 'Currency',
        'tradePrice'         => 'TradePrice',
        'classificationCode' => 'ClassificationCode',
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
        if (null !== $this->discountPrice) {
            $res['DiscountPrice'] = $this->discountPrice;
        }
        if (null !== $this->currency) {
            $res['Currency'] = $this->currency;
        }
        if (null !== $this->tradePrice) {
            $res['TradePrice'] = $this->tradePrice;
        }
        if (null !== $this->classificationCode) {
            $res['ClassificationCode'] = $this->classificationCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return prices
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OriginalPrice'])) {
            $model->originalPrice = $map['OriginalPrice'];
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
        if (isset($map['ClassificationCode'])) {
            $model->classificationCode = $map['ClassificationCode'];
        }

        return $model;
    }
}
