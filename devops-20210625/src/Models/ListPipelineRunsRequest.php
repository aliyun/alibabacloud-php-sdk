<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models;

use AlibabaCloud\Tea\Model;

class ListPipelineRunsRequest extends Model
{
    /**
     * @example 1586863220000
     *
     * @var int
     */
    public $endTime;

    /**
     * @example 20
     *
     * @var int
     */
    public $maxResults;

    /**
     * @example aaaaaa
     *
     * @var string
     */
    public $nextToken;

    /**
     * @example 1586863220000
     *
     * @var int
     */
    public $startTime;

    /**
     * @example RUNNING
     *
     * @var string
     */
    public $status;

    /**
     * @example 1
     *
     * @var int
     */
    public $triggerMode;
    protected $_name = [
        'endTime'     => 'endTime',
        'maxResults'  => 'maxResults',
        'nextToken'   => 'nextToken',
        'startTime'   => 'startTime',
        'status'      => 'status',
        'triggerMode' => 'triggerMode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['endTime'] = $this->endTime;
        }
        if (null !== $this->maxResults) {
            $res['maxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['nextToken'] = $this->nextToken;
        }
        if (null !== $this->startTime) {
            $res['startTime'] = $this->startTime;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->triggerMode) {
            $res['triggerMode'] = $this->triggerMode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListPipelineRunsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['endTime'])) {
            $model->endTime = $map['endTime'];
        }
        if (isset($map['maxResults'])) {
            $model->maxResults = $map['maxResults'];
        }
        if (isset($map['nextToken'])) {
            $model->nextToken = $map['nextToken'];
        }
        if (isset($map['startTime'])) {
            $model->startTime = $map['startTime'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }
        if (isset($map['triggerMode'])) {
            $model->triggerMode = $map['triggerMode'];
        }

        return $model;
    }
}
