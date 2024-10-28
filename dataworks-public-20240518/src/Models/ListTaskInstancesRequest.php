<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Tea\Model;

class ListTaskInstancesRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 1710239005403
     *
     * @var int
     */
    public $bizdate;

    /**
     * @example 1234
     *
     * @var int
     */
    public $id;

    /**
     * @var int[]
     */
    public $ids;

    /**
     * @example 1000
     *
     * @var string
     */
    public $owner;

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
     * @example Prod
     *
     * @var string
     */
    public $projectEnv;

    /**
     * @description This parameter is required.
     *
     * @example 100
     *
     * @var int
     */
    public $projectId;

    /**
     * @example S_res_group_524258031846018_1684XXXXXXXXX
     *
     * @var string
     */
    public $runtimeResource;

    /**
     * @example Id Desc
     *
     * @var string
     */
    public $sortBy;

    /**
     * @example 1234
     *
     * @var int
     */
    public $taskId;

    /**
     * @var int[]
     */
    public $taskIds;

    /**
     * @var string
     */
    public $taskName;

    /**
     * @example ODPS_SQL
     *
     * @var int
     */
    public $taskType;

    /**
     * @example 1234
     *
     * @var int
     */
    public $workflowId;

    /**
     * @example 1234
     *
     * @var int
     */
    public $workflowInstanceId;

    /**
     * @example Normal
     *
     * @var string
     */
    public $workflowInstanceType;
    protected $_name = [
        'bizdate'              => 'Bizdate',
        'id'                   => 'Id',
        'ids'                  => 'Ids',
        'owner'                => 'Owner',
        'pageNumber'           => 'PageNumber',
        'pageSize'             => 'PageSize',
        'projectEnv'           => 'ProjectEnv',
        'projectId'            => 'ProjectId',
        'runtimeResource'      => 'RuntimeResource',
        'sortBy'               => 'SortBy',
        'taskId'               => 'TaskId',
        'taskIds'              => 'TaskIds',
        'taskName'             => 'TaskName',
        'taskType'             => 'TaskType',
        'workflowId'           => 'WorkflowId',
        'workflowInstanceId'   => 'WorkflowInstanceId',
        'workflowInstanceType' => 'WorkflowInstanceType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizdate) {
            $res['Bizdate'] = $this->bizdate;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->ids) {
            $res['Ids'] = $this->ids;
        }
        if (null !== $this->owner) {
            $res['Owner'] = $this->owner;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->projectEnv) {
            $res['ProjectEnv'] = $this->projectEnv;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->runtimeResource) {
            $res['RuntimeResource'] = $this->runtimeResource;
        }
        if (null !== $this->sortBy) {
            $res['SortBy'] = $this->sortBy;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->taskIds) {
            $res['TaskIds'] = $this->taskIds;
        }
        if (null !== $this->taskName) {
            $res['TaskName'] = $this->taskName;
        }
        if (null !== $this->taskType) {
            $res['TaskType'] = $this->taskType;
        }
        if (null !== $this->workflowId) {
            $res['WorkflowId'] = $this->workflowId;
        }
        if (null !== $this->workflowInstanceId) {
            $res['WorkflowInstanceId'] = $this->workflowInstanceId;
        }
        if (null !== $this->workflowInstanceType) {
            $res['WorkflowInstanceType'] = $this->workflowInstanceType;
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
        if (isset($map['Bizdate'])) {
            $model->bizdate = $map['Bizdate'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Ids'])) {
            if (!empty($map['Ids'])) {
                $model->ids = $map['Ids'];
            }
        }
        if (isset($map['Owner'])) {
            $model->owner = $map['Owner'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['ProjectEnv'])) {
            $model->projectEnv = $map['ProjectEnv'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['RuntimeResource'])) {
            $model->runtimeResource = $map['RuntimeResource'];
        }
        if (isset($map['SortBy'])) {
            $model->sortBy = $map['SortBy'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['TaskIds'])) {
            if (!empty($map['TaskIds'])) {
                $model->taskIds = $map['TaskIds'];
            }
        }
        if (isset($map['TaskName'])) {
            $model->taskName = $map['TaskName'];
        }
        if (isset($map['TaskType'])) {
            $model->taskType = $map['TaskType'];
        }
        if (isset($map['WorkflowId'])) {
            $model->workflowId = $map['WorkflowId'];
        }
        if (isset($map['WorkflowInstanceId'])) {
            $model->workflowInstanceId = $map['WorkflowInstanceId'];
        }
        if (isset($map['WorkflowInstanceType'])) {
            $model->workflowInstanceType = $map['WorkflowInstanceType'];
        }

        return $model;
    }
}
