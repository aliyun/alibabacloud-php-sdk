<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\DescribePriceResponseBody;

use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribePriceResponseBody\priceInfo\price;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribePriceResponseBody\priceInfo\rules;
use AlibabaCloud\Tea\Model;

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
     * @description The information about the price.
     *
     * @var price
     */
    public $price;

    /**
     * @description The details of the promotion rules.
     *
     * @var rules[]
     */
    public $rules;
    protected $_name = [
        'freeCdsQuota' => 'FreeCdsQuota',
        'freeCdsSize'  => 'FreeCdsSize',
        'price'        => 'Price',
        'rules'        => 'Rules',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->freeCdsQuota) {
            $res['FreeCdsQuota'] = $this->freeCdsQuota;
        }
        if (null !== $this->freeCdsSize) {
            $res['FreeCdsSize'] = $this->freeCdsSize;
        }
        if (null !== $this->price) {
            $res['Price'] = null !== $this->price ? $this->price->toMap() : null;
        }
        if (null !== $this->rules) {
            $res['Rules'] = [];
            if (null !== $this->rules && \is_array($this->rules)) {
                $n = 0;
                foreach ($this->rules as $item) {
                    $res['Rules'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
                $n            = 0;
                foreach ($map['Rules'] as $item) {
                    $model->rules[$n++] = null !== $item ? rules::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
