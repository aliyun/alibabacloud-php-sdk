<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Tea\Model;

class QuerySimilarImageClustersResponseBody extends Model
{
    /**
     * @description The pagination token. If the total number of clusters is greater than the value of MaxResults, this token can be used to retrieve the next page. This parameter has a value only if not all the clusters that meet the condition are returned.
     *
     * Pass this value as the value of NextToken in the next query to return the subsequent clusters.
     * @example CAESEgoQCg4KClVwZGF0ZVRpbWUQARgBIs8ECgkAAJLUwUCAQ****
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The request ID.
     *
     * @example CA995EFD-083D-4F40-BE8A-BDF75FFF****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The list of similar image clusters.
     *
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
