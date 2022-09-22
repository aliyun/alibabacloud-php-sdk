<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeScenePurchaseRecommendResponseBody\recommendProducts;

use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeScenePurchaseRecommendResponseBody\recommendProducts\recommendProduct\recommendSpSpecs;
use AlibabaCloud\Tea\Model;

class recommendProduct extends Model
{
    /**
     * @var recommendSpSpecs
     */
    public $recommendSpSpecs;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'recommendSpSpecs' => 'RecommendSpSpecs',
        'regionId'         => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->recommendSpSpecs) {
            $res['RecommendSpSpecs'] = null !== $this->recommendSpSpecs ? $this->recommendSpSpecs->toMap() : null;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return recommendProduct
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RecommendSpSpecs'])) {
            $model->recommendSpSpecs = recommendSpSpecs::fromMap($map['RecommendSpSpecs']);
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
