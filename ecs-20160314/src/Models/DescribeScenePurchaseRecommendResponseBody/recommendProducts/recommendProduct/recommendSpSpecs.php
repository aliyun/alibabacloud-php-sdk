<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeScenePurchaseRecommendResponseBody\recommendProducts\recommendProduct;

use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeScenePurchaseRecommendResponseBody\recommendProducts\recommendProduct\recommendSpSpecs\recommendSpSpec;
use AlibabaCloud\Tea\Model;

class recommendSpSpecs extends Model
{
    /**
     * @var recommendSpSpec[]
     */
    public $recommendSpSpec;
    protected $_name = [
        'recommendSpSpec' => 'RecommendSpSpec',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->recommendSpSpec) {
            $res['RecommendSpSpec'] = [];
            if (null !== $this->recommendSpSpec && \is_array($this->recommendSpSpec)) {
                $n = 0;
                foreach ($this->recommendSpSpec as $item) {
                    $res['RecommendSpSpec'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return recommendSpSpecs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RecommendSpSpec'])) {
            if (!empty($map['RecommendSpSpec'])) {
                $model->recommendSpSpec = [];
                $n                      = 0;
                foreach ($map['RecommendSpSpec'] as $item) {
                    $model->recommendSpSpec[$n++] = null !== $item ? recommendSpSpec::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
