<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribePriceResponse;

use AlibabaCloud\SDK\Ens\V20171110\Models\DescribePriceResponse\priceInfo\price;
use AlibabaCloud\Tea\Model;

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
        Model::validateRequired('price', $this->price, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->price) {
            $res['Price'] = null !== $this->price ? $this->price->toMap() : null;
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

        return $model;
    }
}
