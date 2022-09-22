<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeRecommendProductResponseBody;

use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeRecommendProductResponseBody\recommendProducts\recommendProduct;
use AlibabaCloud\Tea\Model;

class recommendProducts extends Model
{
    /**
     * @var recommendProduct[]
     */
    public $recommendProduct;
    protected $_name = [
        'recommendProduct' => 'RecommendProduct',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->recommendProduct) {
            $res['RecommendProduct'] = [];
            if (null !== $this->recommendProduct && \is_array($this->recommendProduct)) {
                $n = 0;
                foreach ($this->recommendProduct as $item) {
                    $res['RecommendProduct'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return recommendProducts
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RecommendProduct'])) {
            if (!empty($map['RecommendProduct'])) {
                $model->recommendProduct = [];
                $n                       = 0;
                foreach ($map['RecommendProduct'] as $item) {
                    $model->recommendProduct[$n++] = null !== $item ? recommendProduct::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
