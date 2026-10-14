<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentLoop\V20260520\Models;

use AlibabaCloud\Dara\Model;

class ListOptimizeRunsRequest extends Model
{
    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $windowStartTimeBegin;

    /**
     * @var int
     */
    public $windowStartTimeEnd;
    protected $_name = [
        'maxResults' => 'maxResults',
        'nextToken' => 'nextToken',
        'status' => 'status',
        'windowStartTimeBegin' => 'windowStartTimeBegin',
        'windowStartTimeEnd' => 'windowStartTimeEnd',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->maxResults) {
            $res['maxResults'] = $this->maxResults;
        }

        if (null !== $this->nextToken) {
            $res['nextToken'] = $this->nextToken;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->windowStartTimeBegin) {
            $res['windowStartTimeBegin'] = $this->windowStartTimeBegin;
        }

        if (null !== $this->windowStartTimeEnd) {
            $res['windowStartTimeEnd'] = $this->windowStartTimeEnd;
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
        if (isset($map['maxResults'])) {
            $model->maxResults = $map['maxResults'];
        }

        if (isset($map['nextToken'])) {
            $model->nextToken = $map['nextToken'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['windowStartTimeBegin'])) {
            $model->windowStartTimeBegin = $map['windowStartTimeBegin'];
        }

        if (isset($map['windowStartTimeEnd'])) {
            $model->windowStartTimeEnd = $map['windowStartTimeEnd'];
        }

        return $model;
    }
}
