<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribePriceResponseBody\priceInfo\price;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribePriceResponseBody\priceInfo\price\detailInfos\subRules;
use AlibabaCloud\Tea\Model;

class detailInfos extends Model
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
     * @var subRules[]
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
            $res['SubRules'] = [];
            if (null !== $this->subRules && \is_array($this->subRules)) {
                $n = 0;
                foreach ($this->subRules as $item) {
                    $res['SubRules'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return detailInfos
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
            if (!empty($map['SubRules'])) {
                $model->subRules = [];
                $n               = 0;
                foreach ($map['SubRules'] as $item) {
                    $model->subRules[$n++] = null !== $item ? subRules::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
