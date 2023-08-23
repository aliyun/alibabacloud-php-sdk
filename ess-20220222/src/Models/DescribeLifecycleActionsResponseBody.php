<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models;

use AlibabaCloud\SDK\Ess\V20220222\Models\DescribeLifecycleActionsResponseBody\lifecycleActions;
use AlibabaCloud\Tea\Model;

class DescribeLifecycleActionsResponseBody extends Model
{
    /**
     * @var lifecycleActions[]
     */
    public $lifecycleActions;

    /**
     * @example 3
     *
     * @var int
     */
    public $maxResults;

    /**
     * @example AAAAAcSz4VTb1Nq****
     *
     * @var string
     */
    public $nextToken;

    /**
     * @example 42A742EB-FCF3-459E-9C62-E107048C17E3
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 3
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'lifecycleActions' => 'LifecycleActions',
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
        if (null !== $this->lifecycleActions) {
            $res['LifecycleActions'] = [];
            if (null !== $this->lifecycleActions && \is_array($this->lifecycleActions)) {
                $n = 0;
                foreach ($this->lifecycleActions as $item) {
                    $res['LifecycleActions'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return DescribeLifecycleActionsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LifecycleActions'])) {
            if (!empty($map['LifecycleActions'])) {
                $model->lifecycleActions = [];
                $n                       = 0;
                foreach ($map['LifecycleActions'] as $item) {
                    $model->lifecycleActions[$n++] = null !== $item ? lifecycleActions::fromMap($item) : $item;
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
