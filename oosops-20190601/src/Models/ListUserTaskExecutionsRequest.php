<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oosops\V20190601\Models;

use AlibabaCloud\Tea\Model;

class ListUserTaskExecutionsRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $aliUid;

    /**
     * @var string
     */
    public $endDateAfter;

    /**
     * @var string
     */
    public $endDateBefore;

    /**
     * @var string
     */
    public $executionId;

    /**
     * @var bool
     */
    public $includeChildTaskExecution;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $parentTaskExecutionId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $sortField;

    /**
     * @var string
     */
    public $sortOrder;

    /**
     * @var string
     */
    public $startDateAfter;

    /**
     * @var string
     */
    public $startDateBefore;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $taskAction;

    /**
     * @var string
     */
    public $taskExecutionId;

    /**
     * @var string
     */
    public $taskName;
    protected $_name = [
        'aliUid'                    => 'AliUid',
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
        if (null !== $this->aliUid) {
            $res['AliUid'] = $this->aliUid;
        }
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
     * @return ListUserTaskExecutionsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AliUid'])) {
            $model->aliUid = $map['AliUid'];
        }
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
