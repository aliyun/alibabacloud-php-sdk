<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\CreateWorkflowInstancesRequest\defaultRunProperties;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\CreateWorkflowInstancesRequest\periods;
use AlibabaCloud\Tea\Model;

class CreateWorkflowInstancesRequest extends Model
{
    /**
     * @description The default value is true.
     *
     * @example true
     *
     * @var bool
     */
    public $autoStartEnabled;

    /**
     * @description The reason for the creation.
     *
     * @example create for test
     *
     * @var string
     */
    public $comment;

    /**
     * @description Runtime configuration.
     *
     * @var defaultRunProperties
     */
    public $defaultRunProperties;

    /**
     * @description The project environment.
     * - Prod (production)
     * - Dev
     *
     * @example Prod
     *
     * @var string
     */
    public $envType;

    /**
     * @description The name.
     *
     * This parameter is required.
     *
     * @example WorkflowInstance1
     *
     * @var string
     */
    public $name;

    /**
     * @description Make up the data cycle settings.
     *
     * @var periods
     */
    public $periods;

    /**
     * @description The project ID.
     *
     * This parameter is required.
     *
     * @example 100
     *
     * @var int
     */
    public $projectId;

    /**
     * @description The task-specific parameters. The value is in the JSON format. The key specifies the task ID. You can call the GetTask operation to obtain the format of the value by querying the script parameters.
     *
     * @example {
     * "1001": "key1=val2 key2=val2",
     * "1002": "key1=val2 key2=val2"
     * }
     *
     * @var string
     */
    public $taskParameters;

    /**
     * @description The type of the workflow instance.
     *
     * - SupplementData: Retroactive data
     * - ManualWorkflow: manual workflow
     *
     * This parameter is required.
     *
     * @example SupplementData
     *
     * @var string
     */
    public $type;

    /**
     * @description The ID of the workflow to which the instance belongs. This parameter is set to 1 for auto triggered tasks.
     *
     * This parameter is required.
     *
     * @example 1
     *
     * @var int
     */
    public $workflowId;

    /**
     * @description The workflow parameters. The priority of workflow parameters is higher than that of task parameters. You can call the GetTask operation to obtain the format of the workflow parameters by querying the Parameters parameter.
     *
     * @example {
     * "key1": "value1",
     * "key2": "value2"
     * }
     *
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

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoStartEnabled) {
            $res['AutoStartEnabled'] = $this->autoStartEnabled;
        }
        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }
        if (null !== $this->defaultRunProperties) {
            $res['DefaultRunProperties'] = null !== $this->defaultRunProperties ? $this->defaultRunProperties->toMap() : null;
        }
        if (null !== $this->envType) {
            $res['EnvType'] = $this->envType;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->periods) {
            $res['Periods'] = null !== $this->periods ? $this->periods->toMap() : null;
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

    /**
     * @param array $map
     *
     * @return CreateWorkflowInstancesRequest
     */
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
