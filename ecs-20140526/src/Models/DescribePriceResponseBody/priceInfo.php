<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribePriceResponseBody;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribePriceResponseBody\priceInfo\price;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribePriceResponseBody\priceInfo\relatedPrice;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribePriceResponseBody\priceInfo\rules;
use AlibabaCloud\Tea\Model;

class priceInfo extends Model
{
    /**
     * @description The price.
     *
     * @var price
     */
    public $price;

    /**
     * @description The related price.
     *
     * @var relatedPrice
     */
    public $relatedPrice;

    /**
     * @description The information about the promotion rules.
     *
     * @var rules
     */
    public $rules;
    protected $_name = [
        'price'        => 'Price',
        'relatedPrice' => 'RelatedPrice',
        'rules'        => 'Rules',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->price) {
            $res['Price'] = null !== $this->price ? $this->price->toMap() : null;
        }
        if (null !== $this->relatedPrice) {
            $res['RelatedPrice'] = null !== $this->relatedPrice ? $this->relatedPrice->toMap() : null;
        }
        if (null !== $this->rules) {
            $res['Rules'] = null !== $this->rules ? $this->rules->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return priceInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Price'])) {
            $model->price = price::fromMap($map['Price']);
        }
        if (isset($map['RelatedPrice'])) {
            $model->relatedPrice = relatedPrice::fromMap($map['RelatedPrice']);
        }
        if (isset($map['Rules'])) {
            $model->rules = rules::fromMap($map['Rules']);
        }

        return $model;
    }
}
