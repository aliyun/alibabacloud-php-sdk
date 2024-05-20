<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EmrStudio\V20240430\Models;

use AlibabaCloud\Tea\Model;

class ListManualTaskInstancesRequest extends Model
{
    /**
     * @example 2024-03-27 00:00:00
     *
     * @var string
     */
    public $endTime;

    /**
     * @example 10
     *
     * @var int
     */
    public $maxResults;

    /**
     * @example 123abc***
     *
     * @var string
     */
    public $nextToken;

    /**
     * @example test
     *
     * @var string
     */
    public $searchVal;

    /**
     * @example 2024-03-27 00:00:00
     *
     * @var string
     */
    public $startTime;

    /**
     * @example SUCCESS
     *
     * @var string
     */
    public $status;

    /**
     * @description This parameter is required.
     *
     * @example 123***
     *
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'endTime'     => 'endTime',
        'maxResults'  => 'maxResults',
        'nextToken'   => 'nextToken',
        'searchVal'   => 'searchVal',
        'startTime'   => 'startTime',
        'status'      => 'status',
        'workspaceId' => 'workspaceId',
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
        if (null !== $this->searchVal) {
            $res['searchVal'] = $this->searchVal;
        }
        if (null !== $this->startTime) {
            $res['startTime'] = $this->startTime;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->workspaceId) {
            $res['workspaceId'] = $this->workspaceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListManualTaskInstancesRequest
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
        if (isset($map['searchVal'])) {
            $model->searchVal = $map['searchVal'];
        }
        if (isset($map['startTime'])) {
            $model->startTime = $map['startTime'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }
        if (isset($map['workspaceId'])) {
            $model->workspaceId = $map['workspaceId'];
        }

        return $model;
    }
}
