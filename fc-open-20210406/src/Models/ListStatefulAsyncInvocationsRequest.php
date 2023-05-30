<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FCOpen\V20210406\Models;

use AlibabaCloud\Tea\Model;

class ListStatefulAsyncInvocationsRequest extends Model
{
    /**
     * @description You can search for API operations, call and debug API operations online, and dynamically generate executable sample code for SDKs.
     *
     * @example true
     *
     * @var bool
     */
    public $includePayload;

    /**
     * @description Alibaba Cloud provides SDKs for multiple programming languages to help you integrate Alibaba Cloud services by using APIs. We recommend that you use an SDK to call API operations. This frees you from manual signature verification.
     *
     * @example abcxxx
     *
     * @var string
     */
    public $invocationIdPrefix;

    /**
     * @description The list of events that trigger the asynchronous task.
     *
     * @example 20
     *
     * @var int
     */
    public $limit;

    /**
     * @description The ID of the instance that is used to run the asynchronous task.
     *
     * @example caeba0****be03f84eb48b699f0a4883
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The number of retries after the asynchronous task fails.
     *
     * @example LATEST
     *
     * @var string
     */
    public $qualifier;

    /**
     * @description StatefulAsyncInvocation: asynchronous task. Asynchronous tasks allow you to manage the states on the basis of common asynchronous invocations, which is more suitable for task scenarios.
     *
     * @example desc
     *
     * @var string
     */
    public $sortOrderByTime;

    /**
     * @description The structure of the asynchronous task.
     *
     * @example 1640966400000
     *
     * @var int
     */
    public $startedTimeBegin;

    /**
     * @description The latest version of Function Compute API.
     *
     * @example 1640966400000
     *
     * @var int
     */
    public $startedTimeEnd;

    /**
     * @description The request ID of the asynchronous task.
     *
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
