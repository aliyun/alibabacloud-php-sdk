<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\DescribePriceResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribePriceResponseBody\priceInfo\price;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribePriceResponseBody\priceInfo\rules;

class priceInfo extends Model
{
    /**
     * @var bool
     */
    public $freeCdsQuota;

    /**
     * @var int
     */
    public $freeCdsSize;

    /**
     * @var price
     */
    public $price;

    /**
     * @var rules[]
     */
    public $rules;
    protected $_name = [
        'freeCdsQuota' => 'FreeCdsQuota',
        'freeCdsSize' => 'FreeCdsSize',
        'price' => 'Price',
        'rules' => 'Rules',
    ];

    public function validate()
    {
        if (null !== $this->price) {
            $this->price->validate();
        }
        if (\is_array($this->rules)) {
            Model::validateArray($this->rules);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->freeCdsQuota) {
            $res['FreeCdsQuota'] = $this->freeCdsQuota;
        }

        if (null !== $this->freeCdsSize) {
            $res['FreeCdsSize'] = $this->freeCdsSize;
        }

        if (null !== $this->price) {
            $res['Price'] = null !== $this->price ? $this->price->toArray($noStream) : $this->price;
        }

        if (null !== $this->rules) {
            if (\is_array($this->rules)) {
                $res['Rules'] = [];
                $n1 = 0;
                foreach ($this->rules as $item1) {
                    $res['Rules'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['FreeCdsQuota'])) {
            $model->freeCdsQuota = $map['FreeCdsQuota'];
        }

        if (isset($map['FreeCdsSize'])) {
            $model->freeCdsSize = $map['FreeCdsSize'];
        }

        if (isset($map['Price'])) {
            $model->price = price::fromMap($map['Price']);
        }

        if (isset($map['Rules'])) {
            if (!empty($map['Rules'])) {
                $model->rules = [];
                $n1 = 0;
                foreach ($map['Rules'] as $item1) {
                    $model->rules[$n1++] = rules::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
