<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models;

use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeResourceAggregationsResponseBody\aggregations;
use AlibabaCloud\Tea\Model;

class DescribeResourceAggregationsResponseBody extends Model
{
    /**
     * @var aggregations
     */
    public $aggregations;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'aggregations' => 'Aggregations',
        'requestId'    => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aggregations) {
            $res['Aggregations'] = null !== $this->aggregations ? $this->aggregations->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeResourceAggregationsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Aggregations'])) {
            $model->aggregations = aggregations::fromMap($map['Aggregations']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
