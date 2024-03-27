<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EmrStudio\V20231009\Models;

use AlibabaCloud\Tea\Model;

class ListWorkflowInstancesRequest extends Model
{
    /**
     * @example 2023-06-27 00:00:00
     *
     * @var string
     */
    public $endDate;

    /**
     * @example 20
     *
     * @var int
     */
    public $maxResults;

    /**
     * @example 8bj81uI8nls=
     *
     * @var string
     */
    public $nextToken;

    /**
     * @example 2024-02-04 00:00:00
     *
     * @var string
     */
    public $startDate;

    /**
     * @example 1231311
     *
     * @var int
     */
    public $workflowId;

    /**
     * @example 12345
     *
     * @var int
     */
    public $workspaceId;
    protected $_name = [
        'endDate'     => 'endDate',
        'maxResults'  => 'maxResults',
        'nextToken'   => 'nextToken',
        'startDate'   => 'startDate',
        'workflowId'  => 'workflowId',
        'workspaceId' => 'workspaceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endDate) {
            $res['endDate'] = $this->endDate;
        }
        if (null !== $this->maxResults) {
            $res['maxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['nextToken'] = $this->nextToken;
        }
        if (null !== $this->startDate) {
            $res['startDate'] = $this->startDate;
        }
        if (null !== $this->workflowId) {
            $res['workflowId'] = $this->workflowId;
        }
        if (null !== $this->workspaceId) {
            $res['workspaceId'] = $this->workspaceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListWorkflowInstancesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['endDate'])) {
            $model->endDate = $map['endDate'];
        }
        if (isset($map['maxResults'])) {
            $model->maxResults = $map['maxResults'];
        }
        if (isset($map['nextToken'])) {
            $model->nextToken = $map['nextToken'];
        }
        if (isset($map['startDate'])) {
            $model->startDate = $map['startDate'];
        }
        if (isset($map['workflowId'])) {
            $model->workflowId = $map['workflowId'];
        }
        if (isset($map['workspaceId'])) {
            $model->workspaceId = $map['workspaceId'];
        }

        return $model;
    }
}
