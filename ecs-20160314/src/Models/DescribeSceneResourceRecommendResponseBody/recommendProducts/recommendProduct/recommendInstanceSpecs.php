<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeSceneResourceRecommendResponseBody\recommendProducts\recommendProduct;

use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeSceneResourceRecommendResponseBody\recommendProducts\recommendProduct\recommendInstanceSpecs\recommendInstanceSpec;
use AlibabaCloud\Tea\Model;

class recommendInstanceSpecs extends Model
{
    /**
     * @var recommendInstanceSpec[]
     */
    public $recommendInstanceSpec;
    protected $_name = [
        'recommendInstanceSpec' => 'RecommendInstanceSpec',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->recommendInstanceSpec) {
            $res['RecommendInstanceSpec'] = [];
            if (null !== $this->recommendInstanceSpec && \is_array($this->recommendInstanceSpec)) {
                $n = 0;
                foreach ($this->recommendInstanceSpec as $item) {
                    $res['RecommendInstanceSpec'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return recommendInstanceSpecs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RecommendInstanceSpec'])) {
            if (!empty($map['RecommendInstanceSpec'])) {
                $model->recommendInstanceSpec = [];
                $n                            = 0;
                foreach ($map['RecommendInstanceSpec'] as $item) {
                    $model->recommendInstanceSpec[$n++] = null !== $item ? recommendInstanceSpec::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
