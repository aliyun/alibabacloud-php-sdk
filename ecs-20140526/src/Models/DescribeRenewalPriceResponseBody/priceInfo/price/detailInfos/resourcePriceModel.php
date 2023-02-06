<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeRenewalPriceResponseBody\priceInfo\price\detailInfos;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeRenewalPriceResponseBody\priceInfo\price\detailInfos\resourcePriceModel\subRules;
use AlibabaCloud\Tea\Model;

class resourcePriceModel extends Model
{
    /**
     * @description The discount.
     *
     * @example 655.2
     *
     * @var float
     */
    public $discountPrice;

    /**
     * @description The original price.
     *
     * @example 4368
     *
     * @var float
     */
    public $originalPrice;

    /**
     * @description The name of the resource that corresponds to the price.
     *
     * @example instance
     *
     * @var string
     */
    public $resource;

    /**
     * @description Details about the pricing rules.
     *
     * @var subRules
     */
    public $subRules;

    /**
     * @description The transaction price.
     *
     * @example 3712.8
     *
     * @var float
     */
    public $tradePrice;
    protected $_name = [
        'discountPrice' => 'DiscountPrice',
        'originalPrice' => 'OriginalPrice',
        'resource'      => 'Resource',
        'subRules'      => 'SubRules',
        'tradePrice'    => 'TradePrice',
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
        if (null !== $this->originalPrice) {
            $res['OriginalPrice'] = $this->originalPrice;
        }
        if (null !== $this->resource) {
            $res['Resource'] = $this->resource;
        }
        if (null !== $this->subRules) {
            $res['SubRules'] = null !== $this->subRules ? $this->subRules->toMap() : null;
        }
        if (null !== $this->tradePrice) {
            $res['TradePrice'] = $this->tradePrice;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resourcePriceModel
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DiscountPrice'])) {
            $model->discountPrice = $map['DiscountPrice'];
        }
        if (isset($map['OriginalPrice'])) {
            $model->originalPrice = $map['OriginalPrice'];
        }
        if (isset($map['Resource'])) {
            $model->resource = $map['Resource'];
        }
        if (isset($map['SubRules'])) {
            $model->subRules = subRules::fromMap($map['SubRules']);
        }
        if (isset($map['TradePrice'])) {
            $model->tradePrice = $map['TradePrice'];
        }

        return $model;
    }
}
