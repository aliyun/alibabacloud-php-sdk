<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FC\V20230330\Models;

use AlibabaCloud\Tea\Model;

class ListAsyncTasksRequest extends Model
{
    /**
     * @description Specifies whether to return input parameters of the asynchronous tasks. Valid values:
     *
     *   true: returns the `invocationPayload` parameter in the response.
     *   false: does not return the `invocationPayload` parameter in the response.
     *
     * >  The `invocationPayload` parameter indicates the input parameters of an asynchronous task.
     * @example true
     *
     * @var bool
     */
    public $includePayload;

    /**
     * @description The number of asynchronous tasks to return. Valid values: [1,100]. Default value: 50.
     *
     * @example 10
     *
     * @var int
     */
    public $limit;

    /**
     * @description The pagination token that is used in the next request to retrieve a new page of results. You do not need to specify this parameter for the first request. You must specify the token that is obtained from the previous query as the value of NextToken.
     *
     * @example MTIzNCNhYmM=
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The ID prefix of asynchronous tasks. If this parameter is specified, a list of asynchronous tasks whose IDs match the prefix is returned.
     *
     * @example job-
     *
     * @var string
     */
    public $prefix;

    /**
     * @description The function version or alias.
     *
     * @example LATEST
     *
     * @var string
     */
    public $qualifier;

    /**
     * @description The order in which the returned asynchronous tasks are sorted.
     *
     *   asc: in ascending order.
     *   desc: in descending order.
     *
     * @example asc
     *
     * @var string
     */
    public $sortOrderByTime;

    /**
     * @description The start time of the period in which the asynchronous tasks are launched.
     *
     * @example 1640966400000
     *
     * @var int
     */
    public $startedTimeBegin;

    /**
     * @description The end time of the period in which the asynchronous tasks are launched.
     *
     * @example 1640966400000
     *
     * @var int
     */
    public $startedTimeEnd;

    /**
     * @description The state of asynchronous tasks. The following items list the states of an asynchronous task:
     *
     *   Enqueued: The asynchronous invocation is enqueued and is waiting to be executed.
     *   Succeeded: The invocation is successful.
     *   Failed: The invocation fails.
     *   Running: The invocation is being executed.
     *   Stopped: The invocation is terminated.
     *   Stopping: The invocation is being terminated.
     *   Invalid: The invocation is invalid and not executed due to specific reasons. For example, the function is deleted.
     *   Expired: The maximum validity period of messages is specified for asynchronous invocation. The invocation is discarded and not executed because the specified maximum validity period has elapsed.
     *   Retrying: The asynchronous invocation is being retried due to an execution error.
     *
     * @example Running
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'includePayload'   => 'includePayload',
        'limit'            => 'limit',
        'nextToken'        => 'nextToken',
        'prefix'           => 'prefix',
        'qualifier'        => 'qualifier',
        'sortOrderByTime'  => 'sortOrderByTime',
        'startedTimeBegin' => 'startedTimeBegin',
        'startedTimeEnd'   => 'startedTimeEnd',
        'status'           => 'status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->includePayload) {
            $res['includePayload'] = $this->includePayload;
        }
        if (null !== $this->limit) {
            $res['limit'] = $this->limit;
        }
        if (null !== $this->nextToken) {
            $res['nextToken'] = $this->nextToken;
        }
        if (null !== $this->prefix) {
            $res['prefix'] = $this->prefix;
        }
        if (null !== $this->qualifier) {
            $res['qualifier'] = $this->qualifier;
        }
        if (null !== $this->sortOrderByTime) {
            $res['sortOrderByTime'] = $this->sortOrderByTime;
        }
        if (null !== $this->startedTimeBegin) {
            $res['startedTimeBegin'] = $this->startedTimeBegin;
        }
        if (null !== $this->startedTimeEnd) {
            $res['startedTimeEnd'] = $this->startedTimeEnd;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListAsyncTasksRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['includePayload'])) {
            $model->includePayload = $map['includePayload'];
        }
        if (isset($map['limit'])) {
            $model->limit = $map['limit'];
        }
        if (isset($map['nextToken'])) {
            $model->nextToken = $map['nextToken'];
        }
        if (isset($map['prefix'])) {
            $model->prefix = $map['prefix'];
        }
        if (isset($map['qualifier'])) {
            $model->qualifier = $map['qualifier'];
        }
        if (isset($map['sortOrderByTime'])) {
            $model->sortOrderByTime = $map['sortOrderByTime'];
        }
        if (isset($map['startedTimeBegin'])) {
            $model->startedTimeBegin = $map['startedTimeBegin'];
        }
        if (isset($map['startedTimeEnd'])) {
            $model->startedTimeEnd = $map['startedTimeEnd'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        return $model;
    }
}
