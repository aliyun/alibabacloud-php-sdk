<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PAIFlow\V20210202\Models;

use AlibabaCloud\Tea\Model;

class ListPipelineRunsRequest extends Model
{
    /**
     * @example testName
     *
     * @var string
     */
    public $name;

    /**
     * @example DESC
     *
     * @var string
     */
    public $order;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example flow-rer7**********0otv, flow-hynm**********sfef
     *
     * @var string
     */
    public $pipelineIds;

    /**
     * @var string
     */
    public $pipelineRunId;

    /**
     * @example PipelineId
     *
     * @var string
     */
    public $sortBy;

    /**
     * @example ybpy**********fb2z
     *
     * @var string
     */
    public $sourceId;

    /**
     * @example UNKNOWN
     *
     * @var string
     */
    public $sourceType;

    /**
     * @example Succeeded
     *
     * @var string
     */
    public $status;

    /**
     * @example 155**********904
     *
     * @var string
     */
    public $userId;

    /**
     * @example 104623
     *
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'name'          => 'Name',
        'order'         => 'Order',
        'pageNumber'    => 'PageNumber',
        'pageSize'      => 'PageSize',
        'pipelineIds'   => 'PipelineIds',
        'pipelineRunId' => 'PipelineRunId',
        'sortBy'        => 'SortBy',
        'sourceId'      => 'SourceId',
        'sourceType'    => 'SourceType',
        'status'        => 'Status',
        'userId'        => 'UserId',
        'workspaceId'   => 'WorkspaceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->order) {
            $res['Order'] = $this->order;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->pipelineIds) {
            $res['PipelineIds'] = $this->pipelineIds;
        }
        if (null !== $this->pipelineRunId) {
            $res['PipelineRunId'] = $this->pipelineRunId;
        }
        if (null !== $this->sortBy) {
            $res['SortBy'] = $this->sortBy;
        }
        if (null !== $this->sourceId) {
            $res['SourceId'] = $this->sourceId;
        }
        if (null !== $this->sourceType) {
            $res['SourceType'] = $this->sourceType;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
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
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Order'])) {
            $model->order = $map['Order'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['PipelineIds'])) {
            $model->pipelineIds = $map['PipelineIds'];
        }
        if (isset($map['PipelineRunId'])) {
            $model->pipelineRunId = $map['PipelineRunId'];
        }
        if (isset($map['SortBy'])) {
            $model->sortBy = $map['SortBy'];
        }
        if (isset($map['SourceId'])) {
            $model->sourceId = $map['SourceId'];
        }
        if (isset($map['SourceType'])) {
            $model->sourceType = $map['SourceType'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
