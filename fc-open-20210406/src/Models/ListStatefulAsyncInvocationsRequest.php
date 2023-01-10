<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FCOpen\V20210406\Models;

use AlibabaCloud\Tea\Model;

class ListStatefulAsyncInvocationsRequest extends Model
{
    /**
     * @description - **true**: returns the invocationPayload parameter in the response.
     * - **false**: does not return the invocationPayload parameter in the response.
     *
     * > The `invocationPayload` parameter indicates the input parameters of an asynchronous task.
     * @example true
     *
     * @var bool
     */
    public $includePayload;

    /**
     * @description The name prefix of the asynchronous invocation. The names of returned resources must contain the prefix. For example, if invocationidPrefix is set to job, the names of returned resources must start with job.
     *
     * @example abcxxx
     *
     * @var string
     */
    public $invocationIdPrefix;

    /**
     * @description The maximum number of asynchronous invocations to return. Valid values: [1, 100]. Default value: 50.
     *
     * @example 20
     *
     * @var int
     */
    public $limit;

    /**
     * @description The token used to obtain more results. If the number of resources exceeds the limit, the nextToken parameter is returned. You can include the parameter in subsequent calls to obtain more results. You do not need to provide this parameter in the first call.
     *
     * @example caeba0****be03f84eb48b699f0a4883
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The version or alias of the service to which the asynchronous task belongs.
     *
     * @example LATEST
     *
     * @var string
     */
    public $qualifier;

    /**
     * @description The order in which the returned asynchronous invocations are sorted. Valid values:
     *
     * - **asc**: in ascending order
     * - **desc**: in descending order
     * @example desc
     *
     * @var string
     */
    public $sortOrderByTime;

    /**
     * @description The start time of the asynchronous task.
     *
     * @example 1640966400000
     *
     * @var int
     */
    public $startedTimeBegin;

    /**
     * @description The end time of the asynchronous task.
     *
     * @example 1640966400000
     *
     * @var int
     */
    public $startedTimeEnd;

    /**
     * @description The status of the asynchronous task.
     *
     * - **Enqueued**: The asynchronous invocation is enqueued and is waiting to be executed.
     * - **Succeeded**: The invocation is successful.
     * - **Failed**: The invocation fails.
     * - **Running**: The invocation is being executed.
     * - **Stopped**: The invocation is terminated.
     * - **Stopping**: The invocation is being terminated.
     * - **Invalid**: The invocation is invalid and not executed due to specific reasons. For example, the function is deleted.
     * - **Expired**: The maximum validity period of messages is specified for asynchronous invocation. The invocation is discarded and not executed because the specified maximum validity period of messages expires.
     * - **Retrying**: The asynchronous invocation is being retried due to an execution error.
     * @example Running
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'includePayload'     => 'includePayload',
        'invocationIdPrefix' => 'invocationIdPrefix',
        'limit'              => 'limit',
        'nextToken'          => 'nextToken',
        'qualifier'          => 'qualifier',
        'sortOrderByTime'    => 'sortOrderByTime',
        'startedTimeBegin'   => 'startedTimeBegin',
        'startedTimeEnd'     => 'startedTimeEnd',
        'status'             => 'status',
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
        if (null !== $this->invocationIdPrefix) {
            $res['invocationIdPrefix'] = $this->invocationIdPrefix;
        }
        if (null !== $this->limit) {
            $res['limit'] = $this->limit;
        }
        if (null !== $this->nextToken) {
            $res['nextToken'] = $this->nextToken;
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
     * @return ListStatefulAsyncInvocationsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['includePayload'])) {
            $model->includePayload = $map['includePayload'];
        }
        if (isset($map['invocationIdPrefix'])) {
            $model->invocationIdPrefix = $map['invocationIdPrefix'];
        }
        if (isset($map['limit'])) {
            $model->limit = $map['limit'];
        }
        if (isset($map['nextToken'])) {
            $model->nextToken = $map['nextToken'];
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
