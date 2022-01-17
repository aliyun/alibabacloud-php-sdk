<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Market\V20151101\Models\DescribeProductResponseBody;

use AlibabaCloud\SDK\Market\V20151101\Models\DescribeProductResponseBody\productSkus\productSku;
use AlibabaCloud\Tea\Model;

class productSkus extends Model
{
    /**
     * @var productSku[]
     */
    public $productSku;
    protected $_name = [
        'productSku' => 'ProductSku',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->productSku) {
            $res['ProductSku'] = [];
            if (null !== $this->productSku && \is_array($this->productSku)) {
                $n = 0;
                foreach ($this->productSku as $item) {
                    $res['ProductSku'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return productSkus
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ProductSku'])) {
            if (!empty($map['ProductSku'])) {
                $model->productSku = [];
                $n                 = 0;
                foreach ($map['ProductSku'] as $item) {
                    $model->productSku[$n++] = null !== $item ? productSku::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
