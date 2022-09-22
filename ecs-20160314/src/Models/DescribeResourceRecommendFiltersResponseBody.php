<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models;

use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeResourceRecommendFiltersResponseBody\recommendFilters;
use AlibabaCloud\Tea\Model;

class DescribeResourceRecommendFiltersResponseBody extends Model
{
    /**
     * @var recommendFilters
     */
    public $recommendFilters;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'recommendFilters' => 'RecommendFilters',
        'requestId'        => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->recommendFilters) {
            $res['RecommendFilters'] = null !== $this->recommendFilters ? $this->recommendFilters->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeResourceRecommendFiltersResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RecommendFilters'])) {
            $model->recommendFilters = recommendFilters::fromMap($map['RecommendFilters']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
