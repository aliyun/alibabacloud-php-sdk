<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models;

use AlibabaCloud\Tea\Model;

class ListTaskExecutionsRequest extends Model
{
    /**
     * @description The execution ID of the task.
     *
     * @example 2019-05-16T10:26:14Z
     *
     * @var string
     */
    public $endDateAfter;

    /**
     * @description Specifies to query task executions that stop running at or later than the specified time.
     *
     * @example 2019-05-16T10:26:14Z
     *
     * @var string
     */
    public $endDateBefore;

    /**
     * @description The status of the execution. Valid values: Running, Started, Success, Failed, Waiting, Cancelled, Pending, and Skipped.
     *
     * @example exec-xxx
     *
     * @var string
     */
    public $executionId;

    /**
     * @description The number of entries to return on each page. Valid values: 20 to 100. Default value: 50.
     *
     * @example false
     *
     * @var bool
     */
    public $includeChildTaskExecution;

    /**
     * @description The token that is used to retrieve the next page of results.
     *
     * @example 50
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description Sorts the task executions to query. Valid values:
     *
     *   **StartDate**: specifies that the task executions are sorted based on the time when they are created. This is the default value.
     *   **EndDate**: specifies that the task executions are sorted based on the time when the time when they stop running.
     *   **Status**: specifies that the task executions are sorted based on their statuses.
     *
     * @example MTRBMDc0NjAtRUJFNy00N0NBLTk3NTctMTJDQzQ3NjFENDdB
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description Specifies whether to show the child nodes in the loop task. Default value: False.
     *
     * @example task-exec-xxx
     *
     * @var string
     */
    public $parentTaskExecutionId;

    /**
     * @description The ID of the execution.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The order in which you want to sort the task executions to query. Valid values:
     *
     *   **Ascending**: ascending order.
     *   **Descending**: descending order. This is the default value.
     *
     * @example StartDate
     *
     * @var string
     */
    public $sortField;

    /**
     * @description The token that is used to retrieve the next page of results.
     *
     * @example Ascending
     *
     * @var string
     */
    public $sortOrder;

    /**
     * @description Specifies to query task executions that stop running at or before the specified time.
     *
     * @example 2019-05-16T10:26:14Z
     *
     * @var string
     */
    public $startDateAfter;

    /**
     * @description Specifies to query task executions that start to run at or later than the specified time.
     *
     * @example 2019-05-16T10:26:14Z
     *
     * @var string
     */
    public $startDateBefore;

    /**
     * @description Specifies to query task executions that start to run at or before the specified time.
     *
     * @example Running
     *
     * @var string
     */
    public $status;

    /**
     * @description The execution ID of the parent node. In a loop task, set this parameter to the execution ID of the parent node.
     *
     * @example ACS::Sleep
     *
     * @var string
     */
    public $taskAction;

    /**
     * @description The name of the task.
     *
     * @example task-exec-xxx
     *
     * @var string
     */
    public $taskExecutionId;

    /**
     * @description The action of the task.
     *
     * @example describeInstance
     *
     * @var string
     */
    public $taskName;
    protected $_name = [
        'endDateAfter'              => 'EndDateAfter',
        'endDateBefore'             => 'EndDateBefore',
        'executionId'               => 'ExecutionId',
        'includeChildTaskExecution' => 'IncludeChildTaskExecution',
        'maxResults'                => 'MaxResults',
        'nextToken'                 => 'NextToken',
        'parentTaskExecutionId'     => 'ParentTaskExecutionId',
        'regionId'                  => 'RegionId',
        'sortField'                 => 'SortField',
        'sortOrder'                 => 'SortOrder',
        'startDateAfter'            => 'StartDateAfter',
        'startDateBefore'           => 'StartDateBefore',
        'status'                    => 'Status',
        'taskAction'                => 'TaskAction',
        'taskExecutionId'           => 'TaskExecutionId',
        'taskName'                  => 'TaskName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endDateAfter) {
            $res['EndDateAfter'] = $this->endDateAfter;
        }
        if (null !== $this->endDateBefore) {
            $res['EndDateBefore'] = $this->endDateBefore;
        }
        if (null !== $this->executionId) {
            $res['ExecutionId'] = $this->executionId;
        }
        if (null !== $this->includeChildTaskExecution) {
            $res['IncludeChildTaskExecution'] = $this->includeChildTaskExecution;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->parentTaskExecutionId) {
            $res['ParentTaskExecutionId'] = $this->parentTaskExecutionId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->sortField) {
            $res['SortField'] = $this->sortField;
        }
        if (null !== $this->sortOrder) {
            $res['SortOrder'] = $this->sortOrder;
        }
        if (null !== $this->startDateAfter) {
            $res['StartDateAfter'] = $this->startDateAfter;
        }
        if (null !== $this->startDateBefore) {
            $res['StartDateBefore'] = $this->startDateBefore;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->taskAction) {
            $res['TaskAction'] = $this->taskAction;
        }
        if (null !== $this->taskExecutionId) {
            $res['TaskExecutionId'] = $this->taskExecutionId;
        }
        if (null !== $this->taskName) {
            $res['TaskName'] = $this->taskName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListTaskExecutionsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndDateAfter'])) {
            $model->endDateAfter = $map['EndDateAfter'];
        }
        if (isset($map['EndDateBefore'])) {
            $model->endDateBefore = $map['EndDateBefore'];
        }
        if (isset($map['ExecutionId'])) {
            $model->executionId = $map['ExecutionId'];
        }
        if (isset($map['IncludeChildTaskExecution'])) {
            $model->includeChildTaskExecution = $map['IncludeChildTaskExecution'];
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['ParentTaskExecutionId'])) {
            $model->parentTaskExecutionId = $map['ParentTaskExecutionId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['SortField'])) {
            $model->sortField = $map['SortField'];
        }
        if (isset($map['SortOrder'])) {
            $model->sortOrder = $map['SortOrder'];
        }
        if (isset($map['StartDateAfter'])) {
            $model->startDateAfter = $map['StartDateAfter'];
        }
        if (isset($map['StartDateBefore'])) {
            $model->startDateBefore = $map['StartDateBefore'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TaskAction'])) {
            $model->taskAction = $map['TaskAction'];
        }
        if (isset($map['TaskExecutionId'])) {
            $model->taskExecutionId = $map['TaskExecutionId'];
        }
        if (isset($map['TaskName'])) {
            $model->taskName = $map['TaskName'];
        }

        return $model;
    }
}
