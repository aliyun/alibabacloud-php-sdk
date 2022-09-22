<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeRecommendProductResponseBody\recommendProducts;

use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeRecommendProductResponseBody\recommendProducts\recommendProduct\recommendInstanceTypes;
use AlibabaCloud\Tea\Model;

class recommendProduct extends Model
{
    /**
     * @var recommendInstanceTypes
     */
    public $recommendInstanceTypes;

    /**
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'recommendInstanceTypes' => 'RecommendInstanceTypes',
        'zoneId'                 => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->recommendInstanceTypes) {
            $res['RecommendInstanceTypes'] = null !== $this->recommendInstanceTypes ? $this->recommendInstanceTypes->toMap() : null;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
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
        if (isset($map['RecommendInstanceTypes'])) {
            $model->recommendInstanceTypes = recommendInstanceTypes::fromMap($map['RecommendInstanceTypes']);
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
