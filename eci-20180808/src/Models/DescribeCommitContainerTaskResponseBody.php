<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eci\V20180808\Models;

use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeCommitContainerTaskResponseBody\commitTasks;
use AlibabaCloud\Tea\Model;

class DescribeCommitContainerTaskResponseBody extends Model
{
    /**
     * @description Details of the task.
     *
     * @var commitTasks[]
     */
    public $commitTasks;

    /**
     * @description The number of entries returned per page.
     *
     * @example 20
     *
     * @var string
     */
    public $maxResults;

    /**
     * @description The query token that is returned in this request.
     *
     * @example AAAAAdDWBF2****
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The ID of the request.
     *
     * @example 45D5B0AD-3B00-4A9B-9911-6D5303B06712
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The total number of entries returned.
     *
     * @example 5
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'commitTasks' => 'CommitTasks',
        'maxResults'  => 'MaxResults',
        'nextToken'   => 'NextToken',
        'requestId'   => 'RequestId',
        'totalCount'  => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->commitTasks) {
            $res['CommitTasks'] = [];
            if (null !== $this->commitTasks && \is_array($this->commitTasks)) {
                $n = 0;
                foreach ($this->commitTasks as $item) {
                    $res['CommitTasks'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return DescribeCommitContainerTaskResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CommitTasks'])) {
            if (!empty($map['CommitTasks'])) {
                $model->commitTasks = [];
                $n                  = 0;
                foreach ($map['CommitTasks'] as $item) {
                    $model->commitTasks[$n++] = null !== $item ? commitTasks::fromMap($item) : $item;
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
