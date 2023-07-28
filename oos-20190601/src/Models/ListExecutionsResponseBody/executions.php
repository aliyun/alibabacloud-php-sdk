<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models\ListExecutionsResponseBody;

use AlibabaCloud\SDK\Oos\V20190601\Models\ListExecutionsResponseBody\executions\currentTasks;
use AlibabaCloud\Tea\Model;

class executions extends Model
{
    /**
     * @description The type of the execution template. Valid values: Other, TimerTrigger, EventTrigger, and AlarmTrigger.
     *
     * @example Other
     *
     * @var string
     */
    public $category;

    /**
     * @description The number of tasks that are counted by execution status.
     *
     * @example {"Failed": 0,"Success": 1,"Total": 2}
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
     * @description The information about the tasks that are running.
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
     * @description The time when the execution stops running.
     *
     * @example 2019-05-16T10:26:14Z
     *
     * @var string
     */
    public $endDate;

    /**
     * @description The account ID of the user who started the execution of the template.
     *
     * @example 1309252800
     *
     * @var string
     */
    public $executedBy;

    /**
     * @description The unique ID of the execution.
     *
     * @example exec-44d32b45d2a449e
     *
     * @var string
     */
    public $executionId;

    /**
     * @description Indicates whether the execution contains child executions.
     *
     * @example false
     *
     * @var bool
     */
    public $isParent;

    /**
     * @description The time when the template was last successfully triggered.
     *
     * @example 2019-05-27T09:29:18Z
     *
     * @var string
     */
    public $lastSuccessfulTriggerTime;

    /**
     * @example {
     * }
     * @var string
     */
    public $lastTriggerOutputs;

    /**
     * @description The status of the execution after the template was last triggered.
     *
     * @example Success
     *
     * @var string
     */
    public $lastTriggerStatus;

    /**
     * @example ""
     *
     * @var string
     */
    public $lastTriggerStatusMessage;

    /**
     * @description The time when the template was last successfully triggered.
     *
     * @example 2019-05-27T09:29:18Z
     *
     * @var string
     */
    public $lastTriggerTime;

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
     * @var mixed[]
     */
    public $parameters;

    /**
     * @description The ID of the parent execution.
     *
     * @example exec-xxx
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
     * @description The status of the resource.
     *
     * @example { 			"Success": 1 		}
     *
     * @var string
     */
    public $resourceStatus;

    /**
     * @description The security check mode. Valid values: Skip, and ConfirmEveryHighRiskAction.
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
     * @description The status of the execution. Valid values: Started, Queued, Running, Waiting, Success, Failed, and Cancelled.
     *
     * @example Success
     *
     * @var string
     */
    public $status;

    /**
     * @description The status of the task execution.
     *
     * @example “”
     *
     * @var string
     */
    public $statusMessage;

    /**
     * @description The reason for which the status occurs.
     *
     * @example ""
     *
     * @var string
     */
    public $statusReason;

    /**
     * @description The tags of the execution.
     *
     * @example {}
     *
     * @var mixed[]
     */
    public $tags;

    /**
     * @description The target resource.
     *
     * @example "{"ResourceType": "ALIYUN::ECS::Instance", "Filters": [{"ResourceIds": ["i-bp14z07dg3464980x72o"], "RegionId": "cn-hangzhou", "Type": "ResourceIds"}]}"
     *
     * @var string
     */
    public $targets;

    /**
     * @description The ID of the template.
     *
     * @example 123
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
     * @description The time when the execution was updated.
     *
     * @example 2019-05-16T10:26:14Z
     *
     * @var string
     */
    public $updateDate;

    /**
     * @description The Waiting state.
     *
     * @example ""
     *
     * @var string
     */
    public $waitingStatus;
    protected $_name = [
        'category'                  => 'Category',
        'counters'                  => 'Counters',
        'createDate'                => 'CreateDate',
        'currentTasks'              => 'CurrentTasks',
        'description'               => 'Description',
        'endDate'                   => 'EndDate',
        'executedBy'                => 'ExecutedBy',
        'executionId'               => 'ExecutionId',
        'isParent'                  => 'IsParent',
        'lastSuccessfulTriggerTime' => 'LastSuccessfulTriggerTime',
        'lastTriggerOutputs'        => 'LastTriggerOutputs',
        'lastTriggerStatus'         => 'LastTriggerStatus',
        'lastTriggerStatusMessage'  => 'LastTriggerStatusMessage',
        'lastTriggerTime'           => 'LastTriggerTime',
        'mode'                      => 'Mode',
        'outputs'                   => 'Outputs',
        'parameters'                => 'Parameters',
        'parentExecutionId'         => 'ParentExecutionId',
        'ramRole'                   => 'RamRole',
        'resourceGroupId'           => 'ResourceGroupId',
        'resourceStatus'            => 'ResourceStatus',
        'safetyCheck'               => 'SafetyCheck',
        'startDate'                 => 'StartDate',
        'status'                    => 'Status',
        'statusMessage'             => 'StatusMessage',
        'statusReason'              => 'StatusReason',
        'tags'                      => 'Tags',
        'targets'                   => 'Targets',
        'templateId'                => 'TemplateId',
        'templateName'              => 'TemplateName',
        'templateVersion'           => 'TemplateVersion',
        'updateDate'                => 'UpdateDate',
        'waitingStatus'             => 'WaitingStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }
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
        if (null !== $this->lastSuccessfulTriggerTime) {
            $res['LastSuccessfulTriggerTime'] = $this->lastSuccessfulTriggerTime;
        }
        if (null !== $this->lastTriggerOutputs) {
            $res['LastTriggerOutputs'] = $this->lastTriggerOutputs;
        }
        if (null !== $this->lastTriggerStatus) {
            $res['LastTriggerStatus'] = $this->lastTriggerStatus;
        }
        if (null !== $this->lastTriggerStatusMessage) {
            $res['LastTriggerStatusMessage'] = $this->lastTriggerStatusMessage;
        }
        if (null !== $this->lastTriggerTime) {
            $res['LastTriggerTime'] = $this->lastTriggerTime;
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
        if (null !== $this->resourceStatus) {
            $res['ResourceStatus'] = $this->resourceStatus;
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
        if (null !== $this->statusReason) {
            $res['StatusReason'] = $this->statusReason;
        }
        if (null !== $this->tags) {
            $res['Tags'] = $this->tags;
        }
        if (null !== $this->targets) {
            $res['Targets'] = $this->targets;
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
        if (null !== $this->waitingStatus) {
            $res['WaitingStatus'] = $this->waitingStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return executions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }
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
        if (isset($map['LastSuccessfulTriggerTime'])) {
            $model->lastSuccessfulTriggerTime = $map['LastSuccessfulTriggerTime'];
        }
        if (isset($map['LastTriggerOutputs'])) {
            $model->lastTriggerOutputs = $map['LastTriggerOutputs'];
        }
        if (isset($map['LastTriggerStatus'])) {
            $model->lastTriggerStatus = $map['LastTriggerStatus'];
        }
        if (isset($map['LastTriggerStatusMessage'])) {
            $model->lastTriggerStatusMessage = $map['LastTriggerStatusMessage'];
        }
        if (isset($map['LastTriggerTime'])) {
            $model->lastTriggerTime = $map['LastTriggerTime'];
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
        if (isset($map['ResourceStatus'])) {
            $model->resourceStatus = $map['ResourceStatus'];
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
        if (isset($map['StatusReason'])) {
            $model->statusReason = $map['StatusReason'];
        }
        if (isset($map['Tags'])) {
            $model->tags = $map['Tags'];
        }
        if (isset($map['Targets'])) {
            $model->targets = $map['Targets'];
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
        if (isset($map['WaitingStatus'])) {
            $model->waitingStatus = $map['WaitingStatus'];
        }

        return $model;
    }
}
