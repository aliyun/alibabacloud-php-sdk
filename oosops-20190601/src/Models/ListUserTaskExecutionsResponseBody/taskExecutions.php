<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oosops\V20190601\Models\ListUserTaskExecutionsResponseBody;

use AlibabaCloud\Tea\Model;

class taskExecutions extends Model
{
    /**
     * @var string
     */
    public $childExecutionId;

    /**
     * @var string
     */
    public $createDate;

    /**
     * @var string
     */
    public $endDate;

    /**
     * @var string
     */
    public $executionId;

    /**
     * @var string
     */
    public $extraData;

    /**
     * @var string
     */
    public $loop;

    /**
     * @var int
     */
    public $loopBatchNumber;

    /**
     * @var string
     */
    public $loopItem;

    /**
     * @var string
     */
    public $outputs;

    /**
     * @var string
     */
    public $parentTaskExecutionId;

    /**
     * @var string
     */
    public $properties;

    /**
     * @var string
     */
    public $startDate;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $statusMessage;

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

    /**
     * @var string
     */
    public $templateId;

    /**
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
