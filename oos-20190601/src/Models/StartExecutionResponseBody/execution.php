<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models\StartExecutionResponseBody;

use AlibabaCloud\SDK\Oos\V20190601\Models\StartExecutionResponseBody\execution\currentTasks;
use AlibabaCloud\Tea\Model;

class execution extends Model
{
    /**
     * @var mixed[]
     */
    public $counters;

    /**
     * @var string
     */
    public $createDate;

    /**
     * @var currentTasks[]
     */
    public $currentTasks;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $endDate;

    /**
     * @var string
     */
    public $executedBy;

    /**
     * @var string
     */
    public $executionId;

    /**
     * @var bool
     */
    public $isParent;

    /**
     * @var string
     */
    public $loopMode;

    /**
     * @var string
     */
    public $mode;

    /**
     * @var string
     */
    public $outputs;

    /**
     * @var string
     */
    public $parameters;

    /**
     * @var string
     */
    public $parentExecutionId;

    /**
     * @var string
     */
    public $ramRole;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $safetyCheck;

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
     * @var mixed[]
     */
    public $tags;

    /**
     * @var string
     */
    public $templateId;

    /**
     * @var string
     */
    public $templateName;

    /**
     * @var string
     */
    public $templateVersion;

    /**
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
