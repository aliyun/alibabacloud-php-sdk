<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20140828\Models;

use AlibabaCloud\SDK\Ess\V20140828\Models\DescribeLifecycleActionsResponseBody\lifecycleActions;
use AlibabaCloud\Tea\Model;

class DescribeLifecycleActionsResponseBody extends Model
{
    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var lifecycleActions
     */
    public $lifecycleActions;
    protected $_name = [
        'totalCount'       => 'TotalCount',
        'nextToken'        => 'NextToken',
        'requestId'        => 'RequestId',
        'maxResults'       => 'MaxResults',
        'lifecycleActions' => 'LifecycleActions',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->lifecycleActions) {
            $res['LifecycleActions'] = null !== $this->lifecycleActions ? $this->lifecycleActions->toMap() : null;
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
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['LifecycleActions'])) {
            $model->lifecycleActions = lifecycleActions::fromMap($map['LifecycleActions']);
        }

        return $model;
    }
}
