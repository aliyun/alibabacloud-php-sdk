<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Market\V20151101\Models\DescribeProductResponseBody;

use AlibabaCloud\SDK\Market\V20151101\Models\DescribeProductResponseBody\productExtras\productExtra;
use AlibabaCloud\Tea\Model;

class productExtras extends Model
{
    /**
     * @var productExtra[]
     */
    public $productExtra;
    protected $_name = [
        'productExtra' => 'ProductExtra',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->productExtra) {
            $res['ProductExtra'] = [];
            if (null !== $this->productExtra && \is_array($this->productExtra)) {
                $n = 0;
                foreach ($this->productExtra as $item) {
                    $res['ProductExtra'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return productExtras
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ProductExtra'])) {
            if (!empty($map['ProductExtra'])) {
                $model->productExtra = [];
                $n                   = 0;
                foreach ($map['ProductExtra'] as $item) {
                    $model->productExtra[$n++] = null !== $item ? productExtra::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
