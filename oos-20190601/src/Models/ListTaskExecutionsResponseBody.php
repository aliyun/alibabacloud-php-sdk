<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models;

use AlibabaCloud\SDK\Oos\V20190601\Models\ListTaskExecutionsResponseBody\taskExecutions;
use AlibabaCloud\Tea\Model;

class ListTaskExecutionsResponseBody extends Model
{
    /**
     * @description The details of the task executions.
     *
     * @example 50
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description The ID of the request.
     *
     * @example MTRBMDc0NjAtRUJFNy00N0NBLTk3NTctMTJDQzQ3NjFENDdB
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The number of entries returned on each page.
     *
     * @example CDABABABAB-FC28-4D9C-8FB5-68DC6F0486FC
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The execution ID of the child node.
     *
     * @var taskExecutions[]
     */
    public $taskExecutions;
    protected $_name = [
        'maxResults'     => 'MaxResults',
        'nextToken'      => 'NextToken',
        'requestId'      => 'RequestId',
        'taskExecutions' => 'TaskExecutions',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->taskExecutions) {
            $res['TaskExecutions'] = [];
            if (null !== $this->taskExecutions && \is_array($this->taskExecutions)) {
                $n = 0;
                foreach ($this->taskExecutions as $item) {
                    $res['TaskExecutions'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListTaskExecutionsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TaskExecutions'])) {
            if (!empty($map['TaskExecutions'])) {
                $model->taskExecutions = [];
                $n                     = 0;
                foreach ($map['TaskExecutions'] as $item) {
                    $model->taskExecutions[$n++] = null !== $item ? taskExecutions::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
