<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models;

use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\ListServiceTestTaskLogsResponseBody\taskLogs;
use AlibabaCloud\Tea\Model;

class ListServiceTestTaskLogsResponseBody extends Model
{
    /**
     * @description The number of items to return per page when paginating results. The maximum is 100, and the default is 20.
     *
     * @example 20
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description The pagination token that is used in the next request to retrieve a new page of results. You do not need to specify this parameter for the first request. You must specify the token that is obtained from the previous query as the value of NextToken.
     *
     * @example AAAAAW8kZY+u1sYOaYf5JmgmDQQ=
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The request ID.
     *
     * @example EDEE055B-D5F4-5B92-8F21-999D408F1214
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The service test task logs.
     *
     * @var taskLogs[]
     */
    public $taskLogs;
    protected $_name = [
        'maxResults' => 'MaxResults',
        'nextToken'  => 'NextToken',
        'requestId'  => 'RequestId',
        'taskLogs'   => 'TaskLogs',
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
        if (null !== $this->taskLogs) {
            $res['TaskLogs'] = [];
            if (null !== $this->taskLogs && \is_array($this->taskLogs)) {
                $n = 0;
                foreach ($this->taskLogs as $item) {
                    $res['TaskLogs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListServiceTestTaskLogsResponseBody
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
        if (isset($map['TaskLogs'])) {
            if (!empty($map['TaskLogs'])) {
                $model->taskLogs = [];
                $n               = 0;
                foreach ($map['TaskLogs'] as $item) {
                    $model->taskLogs[$n++] = null !== $item ? taskLogs::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
