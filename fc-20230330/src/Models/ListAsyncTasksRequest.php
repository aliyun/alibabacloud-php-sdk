<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FC\V20230330\Models;

use AlibabaCloud\Dara\Model;

class ListAsyncTasksRequest extends Model
{
    /**
     * @var bool
     */
    public $includePayload;

    /**
     * @var int
     */
    public $limit;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $prefix;

    /**
     * @var string
     */
    public $qualifier;

    /**
     * @var string
     */
    public $sortOrderByTime;

    /**
     * @var int
     */
    public $startedTimeBegin;

    /**
     * @var int
     */
    public $startedTimeEnd;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'includePayload' => 'includePayload',
        'limit' => 'limit',
        'nextToken' => 'nextToken',
        'prefix' => 'prefix',
        'qualifier' => 'qualifier',
        'sortOrderByTime' => 'sortOrderByTime',
        'startedTimeBegin' => 'startedTimeBegin',
        'startedTimeEnd' => 'startedTimeEnd',
        'status' => 'status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
