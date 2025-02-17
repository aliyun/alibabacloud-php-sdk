<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribePriceResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribePriceResponseBody\priceInfo\price;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribePriceResponseBody\priceInfo\relatedPrice;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribePriceResponseBody\priceInfo\rules;

class priceInfo extends Model
{
    /**
     * @var price
     */
    public $price;
    /**
     * @var relatedPrice
     */
    public $relatedPrice;
    /**
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
        if (null !== $this->price) {
            $this->price->validate();
        }
        if (null !== $this->relatedPrice) {
            $this->relatedPrice->validate();
        }
        if (null !== $this->rules) {
            $this->rules->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->price) {
            $res['Price'] = null !== $this->price ? $this->price->toArray($noStream) : $this->price;
        }

        if (null !== $this->relatedPrice) {
            $res['RelatedPrice'] = null !== $this->relatedPrice ? $this->relatedPrice->toArray($noStream) : $this->relatedPrice;
        }

        if (null !== $this->rules) {
            $res['Rules'] = null !== $this->rules ? $this->rules->toArray($noStream) : $this->rules;
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
