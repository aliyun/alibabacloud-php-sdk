<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models;

use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeRecommendIndexResponseBody\recommendIndex;
use AlibabaCloud\Tea\Model;

class DescribeRecommendIndexResponseBody extends Model
{
    /**
     * @var recommendIndex
     */
    public $recommendIndex;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'recommendIndex' => 'RecommendIndex',
        'requestId'      => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->recommendIndex) {
            $res['RecommendIndex'] = null !== $this->recommendIndex ? $this->recommendIndex->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeRecommendIndexResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RecommendIndex'])) {
            $model->recommendIndex = recommendIndex::fromMap($map['RecommendIndex']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
