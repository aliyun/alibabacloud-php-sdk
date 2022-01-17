<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Market\V20151101\Models\DescribeProductsResponseBody;

use AlibabaCloud\SDK\Market\V20151101\Models\DescribeProductsResponseBody\productItems\productItem;
use AlibabaCloud\Tea\Model;

class productItems extends Model
{
    /**
     * @var productItem[]
     */
    public $productItem;
    protected $_name = [
        'productItem' => 'ProductItem',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->productItem) {
            $res['ProductItem'] = [];
            if (null !== $this->productItem && \is_array($this->productItem)) {
                $n = 0;
                foreach ($this->productItem as $item) {
                    $res['ProductItem'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return productItems
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ProductItem'])) {
            if (!empty($map['ProductItem'])) {
                $model->productItem = [];
                $n                  = 0;
                foreach ($map['ProductItem'] as $item) {
                    $model->productItem[$n++] = null !== $item ? productItem::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
