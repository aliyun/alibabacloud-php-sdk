<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eci\V20180808\Models\DescribeContainerGroupPriceResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeContainerGroupPriceResponseBody\priceInfo\price;
use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeContainerGroupPriceResponseBody\priceInfo\rules;
use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeContainerGroupPriceResponseBody\priceInfo\spotPrices;

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

    /**
     * @var spotPrices
     */
    public $spotPrices;
    protected $_name = [
        'price' => 'Price',
        'rules' => 'Rules',
        'spotPrices' => 'SpotPrices',
    ];

    public function validate()
    {
        if (null !== $this->price) {
            $this->price->validate();
        }
        if (null !== $this->rules) {
            $this->rules->validate();
        }
        if (null !== $this->spotPrices) {
            $this->spotPrices->validate();
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

        if (null !== $this->spotPrices) {
            $res['SpotPrices'] = null !== $this->spotPrices ? $this->spotPrices->toArray($noStream) : $this->spotPrices;
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

        if (isset($map['SpotPrices'])) {
            $model->spotPrices = spotPrices::fromMap($map['SpotPrices']);
        }

        return $model;
    }
}
