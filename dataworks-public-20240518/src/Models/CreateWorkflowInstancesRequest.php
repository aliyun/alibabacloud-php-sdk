<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\CreateWorkflowInstancesRequest\defaultRunProperties;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\CreateWorkflowInstancesRequest\periods;

class CreateWorkflowInstancesRequest extends Model
{
    /**
     * @var bool
     */
    public $autoStartEnabled;

    /**
     * @var string
     */
    public $comment;

    /**
     * @var defaultRunProperties
     */
    public $defaultRunProperties;

    /**
     * @var string
     */
    public $envType;

    /**
     * @var string
     */
    public $name;

    /**
     * @var periods
     */
    public $periods;

    /**
     * @var int
     */
    public $projectId;

    /**
     * @var string
     */
    public $taskParameters;

    /**
     * @var string
     */
    public $type;

    /**
     * @var int
     */
    public $workflowId;

    /**
     * @var string
     */
    public $workflowParameters;
    protected $_name = [
        'autoStartEnabled' => 'AutoStartEnabled',
        'comment' => 'Comment',
        'defaultRunProperties' => 'DefaultRunProperties',
        'envType' => 'EnvType',
        'name' => 'Name',
        'periods' => 'Periods',
        'projectId' => 'ProjectId',
        'taskParameters' => 'TaskParameters',
        'type' => 'Type',
        'workflowId' => 'WorkflowId',
        'workflowParameters' => 'WorkflowParameters',
    ];

    public function validate()
    {
        if (null !== $this->defaultRunProperties) {
            $this->defaultRunProperties->validate();
        }
        if (null !== $this->periods) {
            $this->periods->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->autoStartEnabled) {
            $res['AutoStartEnabled'] = $this->autoStartEnabled;
        }

        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }

        if (null !== $this->defaultRunProperties) {
            $res['DefaultRunProperties'] = null !== $this->defaultRunProperties ? $this->defaultRunProperties->toArray($noStream) : $this->defaultRunProperties;
        }

        if (null !== $this->envType) {
            $res['EnvType'] = $this->envType;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->periods) {
            $res['Periods'] = null !== $this->periods ? $this->periods->toArray($noStream) : $this->periods;
        }

        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }

        if (null !== $this->taskParameters) {
            $res['TaskParameters'] = $this->taskParameters;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        if (null !== $this->workflowId) {
            $res['WorkflowId'] = $this->workflowId;
        }

        if (null !== $this->workflowParameters) {
            $res['WorkflowParameters'] = $this->workflowParameters;
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
        if (isset($map['AutoStartEnabled'])) {
            $model->autoStartEnabled = $map['AutoStartEnabled'];
        }

        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }

        if (isset($map['DefaultRunProperties'])) {
            $model->defaultRunProperties = defaultRunProperties::fromMap($map['DefaultRunProperties']);
        }

        if (isset($map['EnvType'])) {
            $model->envType = $map['EnvType'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Periods'])) {
            $model->periods = periods::fromMap($map['Periods']);
        }

        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        if (isset($map['TaskParameters'])) {
            $model->taskParameters = $map['TaskParameters'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        if (isset($map['WorkflowId'])) {
            $model->workflowId = $map['WorkflowId'];
        }

        if (isset($map['WorkflowParameters'])) {
            $model->workflowParameters = $map['WorkflowParameters'];
        }

        return $model;
    }
}
