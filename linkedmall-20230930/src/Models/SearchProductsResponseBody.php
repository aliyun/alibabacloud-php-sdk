<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20230930\Models;

use AlibabaCloud\SDK\Linkedmall\V20230930\Models\SearchProductsResponseBody\products;
use AlibabaCloud\Tea\Model;

class SearchProductsResponseBody extends Model
{
    /**
     * @var products[]
     */
    public $products;

    /**
     * @example 3
     *
     * @var int
     */
    public $total;
    protected $_name = [
        'products' => 'products',
        'total' => 'total',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->products) {
            $res['products'] = [];
            if (null !== $this->products && \is_array($this->products)) {
                $n = 0;
                foreach ($this->products as $item) {
                    $res['products'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->total) {
            $res['total'] = $this->total;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SearchProductsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['products'])) {
            if (!empty($map['products'])) {
                $model->products = [];
                $n = 0;
                foreach ($map['products'] as $item) {
                    $model->products[$n++] = null !== $item ? products::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['total'])) {
            $model->total = $map['total'];
        }

        return $model;
    }
}
