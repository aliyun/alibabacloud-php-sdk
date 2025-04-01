<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeRecommendIndexResponseBody\recommendIndex;

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
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->recommendIndex) {
            $this->recommendIndex->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->recommendIndex) {
            $res['RecommendIndex'] = null !== $this->recommendIndex ? $this->recommendIndex->toArray($noStream) : $this->recommendIndex;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
