<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\GetResourcePriceResponseBody;

use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\GetResourcePriceResponseBody\priceList\price;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\GetResourcePriceResponseBody\priceList\rules;
use AlibabaCloud\Tea\Model;

class priceList extends Model
{
    /**
     * @var price
     */
    public $price;

    /**
     * @example Standby
     *
     * @var string
     */
    public $priceType;

    /**
     * @var rules[]
     */
    public $rules;
    protected $_name = [
        'price'     => 'Price',
        'priceType' => 'PriceType',
        'rules'     => 'Rules',
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
        if (null !== $this->priceType) {
            $res['PriceType'] = $this->priceType;
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
     * @return priceList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Price'])) {
            $model->price = price::fromMap($map['Price']);
        }
        if (isset($map['PriceType'])) {
            $model->priceType = $map['PriceType'];
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
