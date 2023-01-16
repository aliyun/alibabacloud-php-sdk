<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Tea\Model;

class QueryLocationDateClustersResponseBody extends Model
{
    /**
     * @var LocationDateCluster[]
     */
    public $locationDateClusters;

    /**
     * @example MzQNjmY2MzYxNhNjk2ZNjEu****
     *
     * @var string
     */
    public $nextToken;

    /**
     * @example 7055FCF7-4D7B-098E-BD4D-DD2932B0****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'locationDateClusters' => 'LocationDateClusters',
        'nextToken'            => 'NextToken',
        'requestId'            => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->locationDateClusters) {
            $res['LocationDateClusters'] = [];
            if (null !== $this->locationDateClusters && \is_array($this->locationDateClusters)) {
                $n = 0;
                foreach ($this->locationDateClusters as $item) {
                    $res['LocationDateClusters'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryLocationDateClustersResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LocationDateClusters'])) {
            if (!empty($map['LocationDateClusters'])) {
                $model->locationDateClusters = [];
                $n                           = 0;
                foreach ($map['LocationDateClusters'] as $item) {
                    $model->locationDateClusters[$n++] = null !== $item ? LocationDateCluster::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
