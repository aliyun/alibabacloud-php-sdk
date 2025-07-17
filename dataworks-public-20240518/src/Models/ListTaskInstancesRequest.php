<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Tea\Model;

class ListTaskInstancesRequest extends Model
{
    /**
     * @description The data timestamp. The value of this parameter is 00:00:00 of the day before the scheduling time of the instance. The value is a UNIX timestamp. Unit: milliseconds. Example: 1743350400000.
     *
     * This parameter is required.
     *
     * @example 1710239005403
     *
     * @var int
     */
    public $bizdate;

    /**
     * @description The ID of the instance. The instance may be rerun. If the instance is rerun and you configure this parameter, the system returns the historical information of the instance, including the rerun information. You can use the RunNumber parameter to distinguish each entry in the historical information.
     *
     * @example 1234
     *
     * @var int
     */
    public $id;

    /**
     * @description The IDs of the instances. You can query multiple instances at a time by instance ID.
     *
     * @var int[]
     */
    public $ids;

    /**
     * @description The account ID of the task owner.
     *
     * @example 1000
     *
     * @var string
     */
    public $owner;

    /**
     * @description The page number. Pages start from page 1. Default value: 1.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries per page. Default value: 10.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The environment of the workspace. Valid values:
     *
     *   Prod: production environment
     *   Dev: development environment
     *
     * @example Prod
     *
     * @var string
     */
    public $projectEnv;

    /**
     * @description The DataWorks workspace ID.
     *
     * This parameter is required.
     *
     * @example 100
     *
     * @var int
     */
    public $projectId;

    /**
     * @description The information about the resource group. Set this parameter to the identifier of a resource group for scheduling.
     *
     * @example S_res_group_524258031846018_1684XXXXXXXXX
     *
     * @var string
     */
    public $runtimeResource;

    /**
     * @description The field used for sorting. Fields such as TriggerTime and StartedTime are supported. The value of this parameter is in the Sort field + Sort by (Desc/Asc) format. By default, results are sorted in ascending order. Valid values:
     *
     *   `TriggerTime (Desc/Asc)`
     *
     *   `StartedTime (Desc/Asc)`
     *
     *   `FinishedTime (Desc/Asc)`
     *
     *   `CreateTime (Desc/Asc)`
     *
     *   `Id (Desc/Asc)`
     *
     * Default value: `Id Desc`.
     *
     * @example Id Desc
     *
     * @var string
     */
    public $sortBy;

    /**
     * @example Success
     *
     * @var string
     */
    public $status;

    /**
     * @description The ID of the task for which the instance is generated.
     *
     * @example 1234
     *
     * @var int
     */
    public $taskId;

    /**
     * @description The IDs of the tasks. You can query multiple instances at a time by task ID.
     *
     * @var int[]
     */
    public $taskIds;

    /**
     * @description The name of the task. Fuzzy match is supported.
     *
     * @example SQL node
     *
     * @var string
     */
    public $taskName;

    /**
     * @description The type of the task for which the instance is generated.
     *
     * @example ODPS_SQL
     *
     * @var string
     */
    public $taskType;

    /**
     * @description The running mode of the instance after it is triggered. This parameter takes effect only if the TriggerType parameter is set to Scheduler. Valid values:
     *
     *   Pause
     *   Skip
     *   Normal
     *
     * @example Normal
     *
     * @var string
     */
    public $triggerRecurrence;

    /**
     * @description The trigger type. Valid values:
     *
     *   Scheduler: scheduling cycle-based trigger
     *   Manual: manual trigger
     *
     * @example Normal
     *
     * @var string
     */
    public $triggerType;

    /**
     * @description The ID of the workflow to which the instance belongs.
     *
     * @example 1234
     *
     * @var int
     */
    public $workflowId;

    /**
     * @description The workflow instance ID.
     *
     * @example 1234
     *
     * @var int
     */
    public $workflowInstanceId;

    /**
     * @description The type of the workflow instance. Valid values:
     *
     *   SmokeTest
     *   Manual
     *   SupplementData
     *   ManualWorkflow
     *   Normal
     *
     * @example Normal
     *
     * @var string
     */
    public $workflowInstanceType;
    protected $_name = [
        'bizdate' => 'Bizdate',
        'id' => 'Id',
        'ids' => 'Ids',
        'owner' => 'Owner',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'projectEnv' => 'ProjectEnv',
        'projectId' => 'ProjectId',
        'runtimeResource' => 'RuntimeResource',
        'sortBy' => 'SortBy',
        'status' => 'Status',
        'taskId' => 'TaskId',
        'taskIds' => 'TaskIds',
        'taskName' => 'TaskName',
        'taskType' => 'TaskType',
        'triggerRecurrence' => 'TriggerRecurrence',
        'triggerType' => 'TriggerType',
        'workflowId' => 'WorkflowId',
        'workflowInstanceId' => 'WorkflowInstanceId',
        'workflowInstanceType' => 'WorkflowInstanceType',
    ];

    public function validate() {}

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
        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
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
