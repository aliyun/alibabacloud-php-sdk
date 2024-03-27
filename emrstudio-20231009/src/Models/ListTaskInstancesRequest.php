<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EmrStudio\V20231009\Models;

use AlibabaCloud\Tea\Model;

class ListTaskInstancesRequest extends Model
{
    /**
     * @example 2024-03-27 00:00:00
     *
     * @var string
     */
    public $endTime;

    /**
     * @example SUCCESS
     *
     * @var string
     */
    public $executionStatus;

    /**
     * @example 25
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
     * @example 123abc***
     *
     * @var string
     */
    public $workflowInstanceId;

    /**
     * @example 100
     *
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'endTime'            => 'endTime',
        'executionStatus'    => 'executionStatus',
        'maxResults'         => 'maxResults',
        'nextToken'          => 'nextToken',
        'searchVal'          => 'searchVal',
        'startTime'          => 'startTime',
        'workflowInstanceId' => 'workflowInstanceId',
        'workspaceId'        => 'workspaceId',
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
        if (null !== $this->executionStatus) {
            $res['executionStatus'] = $this->executionStatus;
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
        if (null !== $this->workflowInstanceId) {
            $res['workflowInstanceId'] = $this->workflowInstanceId;
        }
        if (null !== $this->workspaceId) {
            $res['workspaceId'] = $this->workspaceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListTaskInstancesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['endTime'])) {
            $model->endTime = $map['endTime'];
        }
        if (isset($map['executionStatus'])) {
            $model->executionStatus = $map['executionStatus'];
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
        if (isset($map['workflowInstanceId'])) {
            $model->workflowInstanceId = $map['workflowInstanceId'];
        }
        if (isset($map['workspaceId'])) {
            $model->workspaceId = $map['workspaceId'];
        }

        return $model;
    }
}
