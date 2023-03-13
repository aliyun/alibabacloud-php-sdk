<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Tea\Model;

class QuerySimilarImageClustersResponseBody extends Model
{
    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var SimilarImageCluster[]
     */
    public $similarImageClusters;
    protected $_name = [
        'nextToken'            => 'NextToken',
        'requestId'            => 'RequestId',
        'similarImageClusters' => 'SimilarImageClusters',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->similarImageClusters) {
            $res['SimilarImageClusters'] = [];
            if (null !== $this->similarImageClusters && \is_array($this->similarImageClusters)) {
                $n = 0;
                foreach ($this->similarImageClusters as $item) {
                    $res['SimilarImageClusters'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QuerySimilarImageClustersResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SimilarImageClusters'])) {
            if (!empty($map['SimilarImageClusters'])) {
                $model->similarImageClusters = [];
                $n                           = 0;
                foreach ($map['SimilarImageClusters'] as $item) {
                    $model->similarImageClusters[$n++] = null !== $item ? SimilarImageCluster::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
