<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetTaskInstanceResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetTaskInstanceResponseBody\taskInstance\dataSource;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetTaskInstanceResponseBody\taskInstance\inputs;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetTaskInstanceResponseBody\taskInstance\outputs;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetTaskInstanceResponseBody\taskInstance\runtime;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetTaskInstanceResponseBody\taskInstance\runtimeResource;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetTaskInstanceResponseBody\taskInstance\script;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetTaskInstanceResponseBody\taskInstance\tags;

class taskInstance extends Model
{
    /**
     * @var int
     */
    public $baselineId;
    /**
     * @var int
     */
    public $bizdate;
    /**
     * @var int
     */
    public $createTime;
    /**
     * @var string
     */
    public $createUser;
    /**
     * @var dataSource
     */
    public $dataSource;
    /**
     * @var string
     */
    public $description;
    /**
     * @var int
     */
    public $finishedTime;
    /**
     * @var int
     */
    public $id;
    /**
     * @var inputs
     */
    public $inputs;
    /**
     * @var int
     */
    public $modifyTime;
    /**
     * @var string
     */
    public $modifyUser;
    /**
     * @var outputs
     */
    public $outputs;
    /**
     * @var string
     */
    public $owner;
    /**
     * @var int
     */
    public $periodNumber;
    /**
     * @var int
     */
    public $priority;
    /**
     * @var string
     */
    public $projectEnv;
    /**
     * @var int
     */
    public $projectId;
    /**
     * @var string
     */
    public $rerunMode;
    /**
     * @var int
     */
    public $runNumber;
    /**
     * @var runtime
     */
    public $runtime;
    /**
     * @var runtimeResource
     */
    public $runtimeResource;
    /**
     * @var script
     */
    public $script;
    /**
     * @var int
     */
    public $startedTime;
    /**
     * @var string
     */
    public $status;
    /**
     * @var tags[]
     */
    public $tags;
    /**
     * @var int
     */
    public $taskId;
    /**
     * @var string
     */
    public $taskName;
    /**
     * @var string
     */
    public $taskType;
    /**
     * @var int
     */
    public $timeout;
    /**
     * @var string
     */
    public $triggerRecurrence;
    /**
     * @var int
     */
    public $triggerTime;
    /**
     * @var string
     */
    public $triggerType;
    /**
     * @var int
     */
    public $workflowId;
    /**
     * @var int
     */
    public $workflowInstanceId;
    /**
     * @var string
     */
    public $workflowInstanceType;
    /**
     * @var string
     */
    public $workflowName;
    protected $_name = [
        'baselineId'           => 'BaselineId',
        'bizdate'              => 'Bizdate',
        'createTime'           => 'CreateTime',
        'createUser'           => 'CreateUser',
        'dataSource'           => 'DataSource',
        'description'          => 'Description',
        'finishedTime'         => 'FinishedTime',
        'id'                   => 'Id',
        'inputs'               => 'Inputs',
        'modifyTime'           => 'ModifyTime',
        'modifyUser'           => 'ModifyUser',
        'outputs'              => 'Outputs',
        'owner'                => 'Owner',
        'periodNumber'         => 'PeriodNumber',
        'priority'             => 'Priority',
        'projectEnv'           => 'ProjectEnv',
        'projectId'            => 'ProjectId',
        'rerunMode'            => 'RerunMode',
        'runNumber'            => 'RunNumber',
        'runtime'              => 'Runtime',
        'runtimeResource'      => 'RuntimeResource',
        'script'               => 'Script',
        'startedTime'          => 'StartedTime',
        'status'               => 'Status',
        'tags'                 => 'Tags',
        'taskId'               => 'TaskId',
        'taskName'             => 'TaskName',
        'taskType'             => 'TaskType',
        'timeout'              => 'Timeout',
        'triggerRecurrence'    => 'TriggerRecurrence',
        'triggerTime'          => 'TriggerTime',
        'triggerType'          => 'TriggerType',
        'workflowId'           => 'WorkflowId',
        'workflowInstanceId'   => 'WorkflowInstanceId',
        'workflowInstanceType' => 'WorkflowInstanceType',
        'workflowName'         => 'WorkflowName',
    ];

    public function validate()
    {
        if (null !== $this->dataSource) {
            $this->dataSource->validate();
        }
        if (null !== $this->inputs) {
            $this->inputs->validate();
        }
        if (null !== $this->outputs) {
            $this->outputs->validate();
        }
        if (null !== $this->runtime) {
            $this->runtime->validate();
        }
        if (null !== $this->runtimeResource) {
            $this->runtimeResource->validate();
        }
        if (null !== $this->script) {
            $this->script->validate();
        }
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->baselineId) {
            $res['BaselineId'] = $this->baselineId;
        }

        if (null !== $this->bizdate) {
            $res['Bizdate'] = $this->bizdate;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->createUser) {
            $res['CreateUser'] = $this->createUser;
        }

        if (null !== $this->dataSource) {
            $res['DataSource'] = null !== $this->dataSource ? $this->dataSource->toArray($noStream) : $this->dataSource;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->finishedTime) {
            $res['FinishedTime'] = $this->finishedTime;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->inputs) {
            $res['Inputs'] = null !== $this->inputs ? $this->inputs->toArray($noStream) : $this->inputs;
        }

        if (null !== $this->modifyTime) {
            $res['ModifyTime'] = $this->modifyTime;
        }

        if (null !== $this->modifyUser) {
            $res['ModifyUser'] = $this->modifyUser;
        }

        if (null !== $this->outputs) {
            $res['Outputs'] = null !== $this->outputs ? $this->outputs->toArray($noStream) : $this->outputs;
        }

        if (null !== $this->owner) {
            $res['Owner'] = $this->owner;
        }

        if (null !== $this->periodNumber) {
            $res['PeriodNumber'] = $this->periodNumber;
        }

        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }

        if (null !== $this->projectEnv) {
            $res['ProjectEnv'] = $this->projectEnv;
        }

        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }

        if (null !== $this->rerunMode) {
            $res['RerunMode'] = $this->rerunMode;
        }

        if (null !== $this->runNumber) {
            $res['RunNumber'] = $this->runNumber;
        }

        if (null !== $this->runtime) {
            $res['Runtime'] = null !== $this->runtime ? $this->runtime->toArray($noStream) : $this->runtime;
        }

        if (null !== $this->runtimeResource) {
            $res['RuntimeResource'] = null !== $this->runtimeResource ? $this->runtimeResource->toArray($noStream) : $this->runtimeResource;
        }

        if (null !== $this->script) {
            $res['Script'] = null !== $this->script ? $this->script->toArray($noStream) : $this->script;
        }

        if (null !== $this->startedTime) {
            $res['StartedTime'] = $this->startedTime;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->tags) {
            if (\is_array($this->tags)) {
                $res['Tags'] = [];
                $n1          = 0;
                foreach ($this->tags as $item1) {
                    $res['Tags'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        if (null !== $this->taskName) {
            $res['TaskName'] = $this->taskName;
        }

        if (null !== $this->taskType) {
            $res['TaskType'] = $this->taskType;
        }

        if (null !== $this->timeout) {
            $res['Timeout'] = $this->timeout;
        }

        if (null !== $this->triggerRecurrence) {
            $res['TriggerRecurrence'] = $this->triggerRecurrence;
        }

        if (null !== $this->triggerTime) {
            $res['TriggerTime'] = $this->triggerTime;
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

        if (null !== $this->workflowName) {
            $res['WorkflowName'] = $this->workflowName;
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
        if (isset($map['BaselineId'])) {
            $model->baselineId = $map['BaselineId'];
        }

        if (isset($map['Bizdate'])) {
            $model->bizdate = $map['Bizdate'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['CreateUser'])) {
            $model->createUser = $map['CreateUser'];
        }

        if (isset($map['DataSource'])) {
            $model->dataSource = dataSource::fromMap($map['DataSource']);
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['FinishedTime'])) {
            $model->finishedTime = $map['FinishedTime'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['Inputs'])) {
            $model->inputs = inputs::fromMap($map['Inputs']);
        }

        if (isset($map['ModifyTime'])) {
            $model->modifyTime = $map['ModifyTime'];
        }

        if (isset($map['ModifyUser'])) {
            $model->modifyUser = $map['ModifyUser'];
        }

        if (isset($map['Outputs'])) {
            $model->outputs = outputs::fromMap($map['Outputs']);
        }

        if (isset($map['Owner'])) {
            $model->owner = $map['Owner'];
        }

        if (isset($map['PeriodNumber'])) {
            $model->periodNumber = $map['PeriodNumber'];
        }

        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }

        if (isset($map['ProjectEnv'])) {
            $model->projectEnv = $map['ProjectEnv'];
        }

        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        if (isset($map['RerunMode'])) {
            $model->rerunMode = $map['RerunMode'];
        }

        if (isset($map['RunNumber'])) {
            $model->runNumber = $map['RunNumber'];
        }

        if (isset($map['Runtime'])) {
            $model->runtime = runtime::fromMap($map['Runtime']);
        }

        if (isset($map['RuntimeResource'])) {
            $model->runtimeResource = runtimeResource::fromMap($map['RuntimeResource']);
        }

        if (isset($map['Script'])) {
            $model->script = script::fromMap($map['Script']);
        }

        if (isset($map['StartedTime'])) {
            $model->startedTime = $map['StartedTime'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n1          = 0;
                foreach ($map['Tags'] as $item1) {
                    $model->tags[$n1++] = tags::fromMap($item1);
                }
            }
        }

        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        if (isset($map['TaskName'])) {
            $model->taskName = $map['TaskName'];
        }

        if (isset($map['TaskType'])) {
            $model->taskType = $map['TaskType'];
        }

        if (isset($map['Timeout'])) {
            $model->timeout = $map['Timeout'];
        }

        if (isset($map['TriggerRecurrence'])) {
            $model->triggerRecurrence = $map['TriggerRecurrence'];
        }

        if (isset($map['TriggerTime'])) {
            $model->triggerTime = $map['TriggerTime'];
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

        if (isset($map['WorkflowName'])) {
            $model->workflowName = $map['WorkflowName'];
        }

        return $model;
    }
}
