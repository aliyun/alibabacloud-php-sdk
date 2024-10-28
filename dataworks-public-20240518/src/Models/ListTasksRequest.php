<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Tea\Model;

class ListTasksRequest extends Model
{
    /**
     * @var string
     */
    public $name;

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
     * @example ODPS_SQL
     *
     * @var string
     */
    public $taskType;

    /**
     * @example Normal
     *
     * @var string
     */
    public $triggerRecurrence;

    /**
     * @example Scheduler
     *
     * @var string
     */
    public $triggerType;

    /**
     * @example 1234
     *
     * @var int
     */
    public $workflowId;
    protected $_name = [
        'name'              => 'Name',
        'owner'             => 'Owner',
        'pageNumber'        => 'PageNumber',
        'pageSize'          => 'PageSize',
        'projectEnv'        => 'ProjectEnv',
        'projectId'         => 'ProjectId',
        'runtimeResource'   => 'RuntimeResource',
        'sortBy'            => 'SortBy',
        'taskType'          => 'TaskType',
        'triggerRecurrence' => 'TriggerRecurrence',
        'triggerType'       => 'TriggerType',
        'workflowId'        => 'WorkflowId',
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
        if (null !== $this->taskType) {
            $res['TaskType'] = $this->taskType;
        }
        if (null !== $this->triggerRecurrence) {
            $res['TriggerRecurrence'] = $this->triggerRecurrence;
        }
        if (null !== $this->triggerType) {
            $res['TriggerType'] = $this->triggerType;
        }
        if (null !== $this->workflowId) {
            $res['WorkflowId'] = $this->workflowId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListTasksRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
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
        if (isset($map['TaskType'])) {
            $model->taskType = $map['TaskType'];
        }
        if (isset($map['TriggerRecurrence'])) {
            $model->triggerRecurrence = $map['TriggerRecurrence'];
        }
        if (isset($map['TriggerType'])) {
            $model->triggerType = $map['TriggerType'];
        }
        if (isset($map['WorkflowId'])) {
            $model->workflowId = $map['WorkflowId'];
        }

        return $model;
    }
}
