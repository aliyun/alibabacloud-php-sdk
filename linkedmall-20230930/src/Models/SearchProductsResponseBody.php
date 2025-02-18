<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20230930\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Linkedmall\V20230930\Models\SearchProductsResponseBody\products;

class SearchProductsResponseBody extends Model
{
    /**
     * @var products[]
     */
    public $products;
    /**
     * @var int
     */
    public $total;
    protected $_name = [
        'products' => 'products',
        'total'    => 'total',
    ];

    public function validate()
    {
        if (\is_array($this->products)) {
            Model::validateArray($this->products);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->products) {
            if (\is_array($this->products)) {
                $res['products'] = [];
                $n1              = 0;
                foreach ($this->products as $item1) {
                    $res['products'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->total) {
            $res['total'] = $this->total;
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
        if (isset($map['products'])) {
            if (!empty($map['products'])) {
                $model->products = [];
                $n1              = 0;
                foreach ($map['products'] as $item1) {
                    $model->products[$n1++] = products::fromMap($item1);
                }
            }
        }

        if (isset($map['total'])) {
            $model->total = $map['total'];
        }

        return $model;
    }
}
