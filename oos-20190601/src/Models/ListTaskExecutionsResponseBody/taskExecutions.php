<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models\ListTaskExecutionsResponseBody;

use AlibabaCloud\Tea\Model;

class taskExecutions extends Model
{
    /**
     * @description The output of the execution.
     *
     * @example exec-xxx
     *
     * @var string
     */
    public $childExecutionId;

    /**
     * @description The ID of the execution.
     *
     * @example 2019-05-16T10:26:14Z
     *
     * @var string
     */
    public $createDate;

    /**
     * @description The execution ID of the parent node.
     *
     * @example 2019-05-16T10:26:14Z
     *
     * @var string
     */
    public $endDate;

    /**
     * @description The action of the task.
     *
     * @example exec-44d32b45d2a449e49899
     *
     * @var string
     */
    public $executionId;

    /**
     * @description The Input parameters of the task execution.
     *
     * @example {                     "NotifyNote":""                 }
     *
     * @var mixed[]
     */
    public $extraData;

    /**
     * @description The ID of the template.
     *
     * @example {}
     *
     * @var mixed[]
     */
    public $loop;

    /**
     * @description The status information of the task execution.
     *
     * @example 2
     *
     * @var int
     */
    public $loopBatchNumber;

    /**
     * @description The time when the execution was created.
     *
     * @example i-1234566zxcvvb
     *
     * @var string
     */
    public $loopItem;

    /**
     * @description The status of the task.
     *
     * @example { "InstanceId":"i-xxx" }
     *
     * @var string
     */
    public $outputs;

    /**
     * @description The name of the task.
     *
     * @example task-exec-xxx
     *
     * @var string
     */
    public $parentTaskExecutionId;

    /**
     * @description Queries task executions. Multiple methods are supported to filter task executions.
     *
     * @example { "Status":"Running" }
     *
     * @var string
     */
    public $properties;

    /**
     * @description The elements in the loop task.
     *
     * @example 2019-05-16T10:26:14Z
     *
     * @var string
     */
    public $startDate;

    /**
     * @description The time when the task execution stopped running.
     *
     * @example Running
     *
     * @var string
     */
    public $status;

    /**
     * @description The additional information.
     *
     * @example ""
     *
     * @var string
     */
    public $statusMessage;

    /**
     * @description The execution ID of the task.
     *
     * @example ACS::Sleep
     *
     * @var string
     */
    public $taskAction;

    /**
     * @description The time when the execution was last updated.
     *
     * @example task-exec-xxx
     *
     * @var string
     */
    public $taskExecutionId;

    /**
     * @description The time when the execution started.
     *
     * @example describeInstance
     *
     * @var string
     */
    public $taskName;

    /**
     * @description The number of times for which the loop task is run.
     *
     * @example xxx
     *
     * @var string
     */
    public $templateId;

    /**
     * @description The configuration and statistics information of the loop task. This parameter is returned only for the parent node of the loop task.
     *
     * @example 2019-05-16T10:26:14Z
     *
     * @var string
     */
    public $updateDate;
    protected $_name = [
        'childExecutionId'      => 'ChildExecutionId',
        'createDate'            => 'CreateDate',
        'endDate'               => 'EndDate',
        'executionId'           => 'ExecutionId',
        'extraData'             => 'ExtraData',
        'loop'                  => 'Loop',
        'loopBatchNumber'       => 'LoopBatchNumber',
        'loopItem'              => 'LoopItem',
        'outputs'               => 'Outputs',
        'parentTaskExecutionId' => 'ParentTaskExecutionId',
        'properties'            => 'Properties',
        'startDate'             => 'StartDate',
        'status'                => 'Status',
        'statusMessage'         => 'StatusMessage',
        'taskAction'            => 'TaskAction',
        'taskExecutionId'       => 'TaskExecutionId',
        'taskName'              => 'TaskName',
        'templateId'            => 'TemplateId',
        'updateDate'            => 'UpdateDate',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->childExecutionId) {
            $res['ChildExecutionId'] = $this->childExecutionId;
        }
        if (null !== $this->createDate) {
            $res['CreateDate'] = $this->createDate;
        }
        if (null !== $this->endDate) {
            $res['EndDate'] = $this->endDate;
        }
        if (null !== $this->executionId) {
            $res['ExecutionId'] = $this->executionId;
        }
        if (null !== $this->extraData) {
            $res['ExtraData'] = $this->extraData;
        }
        if (null !== $this->loop) {
            $res['Loop'] = $this->loop;
        }
        if (null !== $this->loopBatchNumber) {
            $res['LoopBatchNumber'] = $this->loopBatchNumber;
        }
        if (null !== $this->loopItem) {
            $res['LoopItem'] = $this->loopItem;
        }
        if (null !== $this->outputs) {
            $res['Outputs'] = $this->outputs;
        }
        if (null !== $this->parentTaskExecutionId) {
            $res['ParentTaskExecutionId'] = $this->parentTaskExecutionId;
        }
        if (null !== $this->properties) {
            $res['Properties'] = $this->properties;
        }
        if (null !== $this->startDate) {
            $res['StartDate'] = $this->startDate;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->statusMessage) {
            $res['StatusMessage'] = $this->statusMessage;
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
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }
        if (null !== $this->updateDate) {
            $res['UpdateDate'] = $this->updateDate;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return taskExecutions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ChildExecutionId'])) {
            $model->childExecutionId = $map['ChildExecutionId'];
        }
        if (isset($map['CreateDate'])) {
            $model->createDate = $map['CreateDate'];
        }
        if (isset($map['EndDate'])) {
            $model->endDate = $map['EndDate'];
        }
        if (isset($map['ExecutionId'])) {
            $model->executionId = $map['ExecutionId'];
        }
        if (isset($map['ExtraData'])) {
            $model->extraData = $map['ExtraData'];
        }
        if (isset($map['Loop'])) {
            $model->loop = $map['Loop'];
        }
        if (isset($map['LoopBatchNumber'])) {
            $model->loopBatchNumber = $map['LoopBatchNumber'];
        }
        if (isset($map['LoopItem'])) {
            $model->loopItem = $map['LoopItem'];
        }
        if (isset($map['Outputs'])) {
            $model->outputs = $map['Outputs'];
        }
        if (isset($map['ParentTaskExecutionId'])) {
            $model->parentTaskExecutionId = $map['ParentTaskExecutionId'];
        }
        if (isset($map['Properties'])) {
            $model->properties = $map['Properties'];
        }
        if (isset($map['StartDate'])) {
            $model->startDate = $map['StartDate'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['StatusMessage'])) {
            $model->statusMessage = $map['StatusMessage'];
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
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }
        if (isset($map['UpdateDate'])) {
            $model->updateDate = $map['UpdateDate'];
        }

        return $model;
    }
}
