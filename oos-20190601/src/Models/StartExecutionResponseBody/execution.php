<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models\StartExecutionResponseBody;

use AlibabaCloud\SDK\Oos\V20190601\Models\StartExecutionResponseBody\execution\currentTasks;
use AlibabaCloud\Tea\Model;

class execution extends Model
{
    /**
     * @description The number of executions.
     *
     * @example 1
     *
     * @var mixed[]
     */
    public $counters;

    /**
     * @description The time when the execution was created.
     *
     * @example 2019-05-16T10:26:14Z
     *
     * @var string
     */
    public $createDate;

    /**
     * @description The information about in-progress tasks.
     *
     * @var currentTasks[]
     */
    public $currentTasks;

    /**
     * @description The description of the execution.
     *
     * @example test execution.
     *
     * @var string
     */
    public $description;

    /**
     * @description The time when the execution stopped.
     *
     * @example 2019-05-16T10:26:14Z
     *
     * @var string
     */
    public $endDate;

    /**
     * @description The account ID of the user who started the execution of the template.
     *
     * @example root(13092080xx12344)
     *
     * @var string
     */
    public $executedBy;

    /**
     * @description The GUID of the execution.
     *
     * @example exec-xxxyyy
     *
     * @var string
     */
    public $executionId;

    /**
     * @description Indicates whether the execution is a parent execution.
     *
     * @example false
     *
     * @var bool
     */
    public $isParent;

    /**
     * @description The loop mode.
     *
     * @example Automatic
     *
     * @var string
     */
    public $loopMode;

    /**
     * @description The execution mode.
     *
     * @example Automatic
     *
     * @var string
     */
    public $mode;

    /**
     * @description The output of the execution.
     *
     * @example { "InstanceId":"i-xxx" }
     *
     * @var string
     */
    public $outputs;

    /**
     * @description The input parameters of the execution.
     *
     * @example { "Status":"Running" }
     *
     * @var string
     */
    public $parameters;

    /**
     * @description The ID of the parent execution.
     *
     * @example exec-xxxx
     *
     * @var string
     */
    public $parentExecutionId;

    /**
     * @description The role that started the execution of the template.
     *
     * @example OOSServiceRole
     *
     * @var string
     */
    public $ramRole;

    /**
     * @description The ID of the resource group.
     *
     * @example rg-acfmxsn4m4******
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The security check mode.
     *
     * @example Skip
     *
     * @var string
     */
    public $safetyCheck;

    /**
     * @description The time when the execution was started.
     *
     * @example 2019-05-16T10:26:14Z
     *
     * @var string
     */
    public $startDate;

    /**
     * @description The status of the execution.
     *
     * @example Success
     *
     * @var string
     */
    public $status;

    /**
     * @description The status information of the execution.
     *
     * @example ""
     *
     * @var string
     */
    public $statusMessage;

    /**
     * @description The tags of the execution.
     *
     * @example {"k1":"v2","k2":"v2"}
     *
     * @var mixed[]
     */
    public $tags;

    /**
     * @description The ID of the template.
     *
     * @example t-1bd341007f
     *
     * @var string
     */
    public $templateId;

    /**
     * @description The name of the template.
     *
     * @example MyTemplate
     *
     * @var string
     */
    public $templateName;

    /**
     * @description The version number of the template.
     *
     * @example v1
     *
     * @var string
     */
    public $templateVersion;

    /**
     * @description The time when the execution was last updated.
     *
     * @example 2019-05-16T10:26:14Z
     *
     * @var string
     */
    public $updateDate;
    protected $_name = [
        'counters'          => 'Counters',
        'createDate'        => 'CreateDate',
        'currentTasks'      => 'CurrentTasks',
        'description'       => 'Description',
        'endDate'           => 'EndDate',
        'executedBy'        => 'ExecutedBy',
        'executionId'       => 'ExecutionId',
        'isParent'          => 'IsParent',
        'loopMode'          => 'LoopMode',
        'mode'              => 'Mode',
        'outputs'           => 'Outputs',
        'parameters'        => 'Parameters',
        'parentExecutionId' => 'ParentExecutionId',
        'ramRole'           => 'RamRole',
        'resourceGroupId'   => 'ResourceGroupId',
        'safetyCheck'       => 'SafetyCheck',
        'startDate'         => 'StartDate',
        'status'            => 'Status',
        'statusMessage'     => 'StatusMessage',
        'tags'              => 'Tags',
        'templateId'        => 'TemplateId',
        'templateName'      => 'TemplateName',
        'templateVersion'   => 'TemplateVersion',
        'updateDate'        => 'UpdateDate',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->counters) {
            $res['Counters'] = $this->counters;
        }
        if (null !== $this->createDate) {
            $res['CreateDate'] = $this->createDate;
        }
        if (null !== $this->currentTasks) {
            $res['CurrentTasks'] = [];
            if (null !== $this->currentTasks && \is_array($this->currentTasks)) {
                $n = 0;
                foreach ($this->currentTasks as $item) {
                    $res['CurrentTasks'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->endDate) {
            $res['EndDate'] = $this->endDate;
        }
        if (null !== $this->executedBy) {
            $res['ExecutedBy'] = $this->executedBy;
        }
        if (null !== $this->executionId) {
            $res['ExecutionId'] = $this->executionId;
        }
        if (null !== $this->isParent) {
            $res['IsParent'] = $this->isParent;
        }
        if (null !== $this->loopMode) {
            $res['LoopMode'] = $this->loopMode;
        }
        if (null !== $this->mode) {
            $res['Mode'] = $this->mode;
        }
        if (null !== $this->outputs) {
            $res['Outputs'] = $this->outputs;
        }
        if (null !== $this->parameters) {
            $res['Parameters'] = $this->parameters;
        }
        if (null !== $this->parentExecutionId) {
            $res['ParentExecutionId'] = $this->parentExecutionId;
        }
        if (null !== $this->ramRole) {
            $res['RamRole'] = $this->ramRole;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->safetyCheck) {
            $res['SafetyCheck'] = $this->safetyCheck;
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
        if (null !== $this->tags) {
            $res['Tags'] = $this->tags;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }
        if (null !== $this->templateName) {
            $res['TemplateName'] = $this->templateName;
        }
        if (null !== $this->templateVersion) {
            $res['TemplateVersion'] = $this->templateVersion;
        }
        if (null !== $this->updateDate) {
            $res['UpdateDate'] = $this->updateDate;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return execution
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Counters'])) {
            $model->counters = $map['Counters'];
        }
        if (isset($map['CreateDate'])) {
            $model->createDate = $map['CreateDate'];
        }
        if (isset($map['CurrentTasks'])) {
            if (!empty($map['CurrentTasks'])) {
                $model->currentTasks = [];
                $n                   = 0;
                foreach ($map['CurrentTasks'] as $item) {
                    $model->currentTasks[$n++] = null !== $item ? currentTasks::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['EndDate'])) {
            $model->endDate = $map['EndDate'];
        }
        if (isset($map['ExecutedBy'])) {
            $model->executedBy = $map['ExecutedBy'];
        }
        if (isset($map['ExecutionId'])) {
            $model->executionId = $map['ExecutionId'];
        }
        if (isset($map['IsParent'])) {
            $model->isParent = $map['IsParent'];
        }
        if (isset($map['LoopMode'])) {
            $model->loopMode = $map['LoopMode'];
        }
        if (isset($map['Mode'])) {
            $model->mode = $map['Mode'];
        }
        if (isset($map['Outputs'])) {
            $model->outputs = $map['Outputs'];
        }
        if (isset($map['Parameters'])) {
            $model->parameters = $map['Parameters'];
        }
        if (isset($map['ParentExecutionId'])) {
            $model->parentExecutionId = $map['ParentExecutionId'];
        }
        if (isset($map['RamRole'])) {
            $model->ramRole = $map['RamRole'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['SafetyCheck'])) {
            $model->safetyCheck = $map['SafetyCheck'];
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
        if (isset($map['Tags'])) {
            $model->tags = $map['Tags'];
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }
        if (isset($map['TemplateName'])) {
            $model->templateName = $map['TemplateName'];
        }
        if (isset($map['TemplateVersion'])) {
            $model->templateVersion = $map['TemplateVersion'];
        }
        if (isset($map['UpdateDate'])) {
            $model->updateDate = $map['UpdateDate'];
        }

        return $model;
    }
}
