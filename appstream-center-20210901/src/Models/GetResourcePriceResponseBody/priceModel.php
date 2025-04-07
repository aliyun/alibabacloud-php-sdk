<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\GetResourcePriceResponseBody;

use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\GetResourcePriceResponseBody\priceModel\price;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\GetResourcePriceResponseBody\priceModel\rules;
use AlibabaCloud\Tea\Model;

class priceModel extends Model
{
    /**
     * @description The price details.
     *
     * @var price
     */
    public $price;

    /**
     * @description The price calculation rules.
     *
     * @var rules[]
     */
    public $rules;
    protected $_name = [
        'price' => 'Price',
        'rules' => 'Rules',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
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
     * @return priceModel
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Price'])) {
            $model->price = price::fromMap($map['Price']);
        }
        if (isset($map['Rules'])) {
            if (!empty($map['Rules'])) {
                $model->rules = [];
                $n = 0;
                foreach ($map['Rules'] as $item) {
                    $model->rules[$n++] = null !== $item ? rules::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
