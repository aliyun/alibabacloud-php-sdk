<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribePriceResponseBody\priceInfo\price\detailInfos;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribePriceResponseBody\priceInfo\price\detailInfos\detailInfo\subRules;

class detailInfo extends Model
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
     * @var string
     */
    public $resource;

    /**
     * @var subRules
     */
    public $subRules;

    /**
     * @var float
     */
    public $tradePrice;
    protected $_name = [
        'discountPrice' => 'DiscountPrice',
        'originalPrice' => 'OriginalPrice',
        'resource' => 'Resource',
        'subRules' => 'SubRules',
        'tradePrice' => 'TradePrice',
    ];

    public function validate()
    {
        if (null !== $this->subRules) {
            $this->subRules->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            $res['SubRules'] = null !== $this->subRules ? $this->subRules->toArray($noStream) : $this->subRules;
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
