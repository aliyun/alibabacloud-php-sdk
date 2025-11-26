<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribePriceResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribePriceResponseBody\priceInfo\price;

class priceInfo extends Model
{
    /**
     * @var price
     */
    public $price;
    protected $_name = [
        'price' => 'Price',
    ];

    public function validate()
    {
        if (null !== $this->price) {
            $this->price->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->price) {
            $res['Price'] = null !== $this->price ? $this->price->toArray($noStream) : $this->price;
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

        return $model;
    }
}
