<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Dara\Model;

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
        'nextToken' => 'NextToken',
        'requestId' => 'RequestId',
        'similarImageClusters' => 'SimilarImageClusters',
    ];

    public function validate()
    {
        if (\is_array($this->similarImageClusters)) {
            Model::validateArray($this->similarImageClusters);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->similarImageClusters) {
            if (\is_array($this->similarImageClusters)) {
                $res['SimilarImageClusters'] = [];
                $n1 = 0;
                foreach ($this->similarImageClusters as $item1) {
                    $res['SimilarImageClusters'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['SimilarImageClusters'])) {
            if (!empty($map['SimilarImageClusters'])) {
                $model->similarImageClusters = [];
                $n1 = 0;
                foreach ($map['SimilarImageClusters'] as $item1) {
                    $model->similarImageClusters[$n1] = SimilarImageCluster::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
