<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models;

use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeRecommendProductResponseBody\recommendProducts;
use AlibabaCloud\Tea\Model;

class DescribeRecommendProductResponseBody extends Model
{
    /**
     * @var recommendProducts
     */
    public $recommendProducts;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'recommendProducts' => 'RecommendProducts',
        'requestId'         => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->recommendProducts) {
            $res['RecommendProducts'] = null !== $this->recommendProducts ? $this->recommendProducts->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeRecommendProductResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RecommendProducts'])) {
            $model->recommendProducts = recommendProducts::fromMap($map['RecommendProducts']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
