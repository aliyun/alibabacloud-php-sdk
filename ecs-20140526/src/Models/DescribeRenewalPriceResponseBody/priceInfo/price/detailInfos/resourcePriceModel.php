<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeRenewalPriceResponseBody\priceInfo\price\detailInfos;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeRenewalPriceResponseBody\priceInfo\price\detailInfos\resourcePriceModel\subRules;
use AlibabaCloud\Tea\Model;

class resourcePriceModel extends Model
{
    /**
     * @var string
     */
    public $resource;

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
     * @var subRules
     */
    public $subRules;
    protected $_name = [
        'resource'      => 'Resource',
        'discountPrice' => 'DiscountPrice',
        'tradePrice'    => 'TradePrice',
        'originalPrice' => 'OriginalPrice',
        'subRules'      => 'SubRules',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->resource) {
            $res['Resource'] = $this->resource;
        }
        if (null !== $this->discountPrice) {
            $res['DiscountPrice'] = $this->discountPrice;
        }
        if (null !== $this->tradePrice) {
            $res['TradePrice'] = $this->tradePrice;
        }
        if (null !== $this->originalPrice) {
            $res['OriginalPrice'] = $this->originalPrice;
        }
        if (null !== $this->subRules) {
            $res['SubRules'] = null !== $this->subRules ? $this->subRules->toMap() : null;
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
        if (isset($map['Resource'])) {
            $model->resource = $map['Resource'];
        }
        if (isset($map['DiscountPrice'])) {
            $model->discountPrice = $map['DiscountPrice'];
        }
        if (isset($map['TradePrice'])) {
            $model->tradePrice = $map['TradePrice'];
        }
        if (isset($map['OriginalPrice'])) {
            $model->originalPrice = $map['OriginalPrice'];
        }
        if (isset($map['SubRules'])) {
            $model->subRules = subRules::fromMap($map['SubRules']);
        }

        return $model;
    }
}
