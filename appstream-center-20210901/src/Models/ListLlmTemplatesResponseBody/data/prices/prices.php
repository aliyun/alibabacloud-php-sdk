<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListLlmTemplatesResponseBody\data\prices;

use AlibabaCloud\Dara\Model;

class prices extends Model
{
    /**
     * @var string
     */
    public $price;

    /**
     * @var string
     */
    public $priceName;

    /**
     * @var string
     */
    public $priceUnit;
    protected $_name = [
        'price' => 'Price',
        'priceName' => 'PriceName',
        'priceUnit' => 'PriceUnit',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->price) {
            $res['Price'] = $this->price;
        }

        if (null !== $this->priceName) {
            $res['PriceName'] = $this->priceName;
        }

        if (null !== $this->priceUnit) {
            $res['PriceUnit'] = $this->priceUnit;
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
            $model->price = $map['Price'];
        }

        if (isset($map['PriceName'])) {
            $model->priceName = $map['PriceName'];
        }

        if (isset($map['PriceUnit'])) {
            $model->priceUnit = $map['PriceUnit'];
        }

        return $model;
    }
}
