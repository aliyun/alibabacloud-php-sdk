<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Dara\Model;

class ListTaskInstancesShrinkRequest extends Model
{
    /**
     * @var int
     */
    public $bizdate;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $idsShrink;

    /**
     * @var string
     */
    public $owner;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $projectEnv;

    /**
     * @var int
     */
    public $projectId;

    /**
     * @var string
     */
    public $runtimeResource;

    /**
     * @var string
     */
    public $sortBy;

    /**
     * @var int
     */
    public $taskId;

    /**
     * @var string
     */
    public $taskIdsShrink;

    /**
     * @var string
     */
    public $taskName;

    /**
     * @var string
     */
    public $taskType;

    /**
     * @var string
     */
    public $triggerRecurrence;

    /**
     * @var string
     */
    public $triggerType;

    /**
     * @var int
     */
    public $workflowId;

    /**
     * @var int
     */
    public $workflowInstanceId;

    /**
     * @var string
     */
    public $workflowInstanceType;
    protected $_name = [
        'bizdate' => 'Bizdate',
        'id' => 'Id',
        'idsShrink' => 'Ids',
        'owner' => 'Owner',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'projectEnv' => 'ProjectEnv',
        'projectId' => 'ProjectId',
        'runtimeResource' => 'RuntimeResource',
        'sortBy' => 'SortBy',
        'taskId' => 'TaskId',
        'taskIdsShrink' => 'TaskIds',
        'taskName' => 'TaskName',
        'taskType' => 'TaskType',
        'triggerRecurrence' => 'TriggerRecurrence',
        'triggerType' => 'TriggerType',
        'workflowId' => 'WorkflowId',
        'workflowInstanceId' => 'WorkflowInstanceId',
        'workflowInstanceType' => 'WorkflowInstanceType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bizdate) {
            $res['Bizdate'] = $this->bizdate;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->idsShrink) {
            $res['Ids'] = $this->idsShrink;
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

        if (null !== $this->taskIdsShrink) {
            $res['TaskIds'] = $this->taskIdsShrink;
        }

        if (null !== $this->taskName) {
            $res['TaskName'] = $this->taskName;
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

        if (null !== $this->workflowInstanceId) {
            $res['WorkflowInstanceId'] = $this->workflowInstanceId;
        }

        if (null !== $this->workflowInstanceType) {
            $res['WorkflowInstanceType'] = $this->workflowInstanceType;
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
        if (isset($map['Bizdate'])) {
            $model->bizdate = $map['Bizdate'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['Ids'])) {
            $model->idsShrink = $map['Ids'];
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
            $model->taskIdsShrink = $map['TaskIds'];
        }

        if (isset($map['TaskName'])) {
            $model->taskName = $map['TaskName'];
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

        if (isset($map['WorkflowInstanceId'])) {
            $model->workflowInstanceId = $map['WorkflowInstanceId'];
        }

        if (isset($map['WorkflowInstanceType'])) {
            $model->workflowInstanceType = $map['WorkflowInstanceType'];
        }

        return $model;
    }
}
