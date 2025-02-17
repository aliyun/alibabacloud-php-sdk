<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceModificationPriceResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceModificationPriceResponseBody\priceInfo\price;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceModificationPriceResponseBody\priceInfo\rules;

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
        if (null !== $this->price) {
            $this->price->validate();
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

        if (isset($map['Rules'])) {
            $model->rules = rules::fromMap($map['Rules']);
        }

        return $model;
    }
}
