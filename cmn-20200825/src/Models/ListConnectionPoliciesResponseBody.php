<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models;

use AlibabaCloud\SDK\Cmn\V20200825\Models\ListConnectionPoliciesResponseBody\connectionPolicy;
use AlibabaCloud\Tea\Model;

class ListConnectionPoliciesResponseBody extends Model
{
    /**
     * @var connectionPolicy[]
     */
    public $connectionPolicy;

    /**
     * @example 10
     *
     * @var int
     */
    public $maxResults;

    /**
     * @var int
     */
    public $nextToken;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'connectionPolicy' => 'ConnectionPolicy',
        'maxResults'       => 'MaxResults',
        'nextToken'        => 'NextToken',
        'requestId'        => 'RequestId',
        'totalCount'       => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->connectionPolicy) {
            $res['ConnectionPolicy'] = [];
            if (null !== $this->connectionPolicy && \is_array($this->connectionPolicy)) {
                $n = 0;
                foreach ($this->connectionPolicy as $item) {
                    $res['ConnectionPolicy'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListConnectionPoliciesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConnectionPolicy'])) {
            if (!empty($map['ConnectionPolicy'])) {
                $model->connectionPolicy = [];
                $n                       = 0;
                foreach ($map['ConnectionPolicy'] as $item) {
                    $model->connectionPolicy[$n++] = null !== $item ? connectionPolicy::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
