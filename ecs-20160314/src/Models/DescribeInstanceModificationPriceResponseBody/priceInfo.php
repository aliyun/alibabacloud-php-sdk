<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeInstanceModificationPriceResponseBody;

use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeInstanceModificationPriceResponseBody\priceInfo\price;
use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeInstanceModificationPriceResponseBody\priceInfo\rules;
use AlibabaCloud\Tea\Model;

class priceInfo extends Model
{
    /**
     * @var price
     */
    public $price;

    /**
     * @var rules
     */
    public $rules;
    protected $_name = [
        'price' => 'Price',
        'rules' => 'Rules',
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
        if (isset($map['Rules'])) {
            $model->rules = rules::fromMap($map['Rules']);
        }

        return $model;
    }
}
