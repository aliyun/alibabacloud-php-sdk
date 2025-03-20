<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetTaskInstanceResponseBody;

use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetTaskInstanceResponseBody\taskInstance\dataSource;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetTaskInstanceResponseBody\taskInstance\inputs;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetTaskInstanceResponseBody\taskInstance\outputs;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetTaskInstanceResponseBody\taskInstance\runtime;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetTaskInstanceResponseBody\taskInstance\runtimeResource;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetTaskInstanceResponseBody\taskInstance\script;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetTaskInstanceResponseBody\taskInstance\tags;
use AlibabaCloud\Tea\Model;

class taskInstance extends Model
{
    /**
     * @description The baseline ID.
     *
     * @example 1234
     *
     * @var int
     */
    public $baselineId;

    /**
     * @description The data timestamp.
     *
     * @example 1710239005403
     *
     * @var int
     */
    public $bizdate;

    /**
     * @description The creation time.
     *
     * @example 1710239005403
     *
     * @var int
     */
    public $createTime;

    /**
     * @description The account ID of the creator.
     *
     * @example 1000
     *
     * @var string
     */
    public $createUser;

    /**
     * @description The information about the associated data source.
     *
     * @var dataSource
     */
    public $dataSource;

    /**
     * @description The description.
     *
     * @example test
     *
     * @var string
     */
    public $description;

    /**
     * @description The time when the instance finished running.
     *
     * @example 1710239005403
     *
     * @var int
     */
    public $finishedTime;

    /**
     * @description The instance ID.
     *
     * @example 1234
     *
     * @var int
     */
    public $id;

    /**
     * @description The input information.
     *
     * @var inputs
     */
    public $inputs;

    /**
     * @description The modification time.
     *
     * @example 1710239005403
     *
     * @var int
     */
    public $modifyTime;

    /**
     * @description The account ID of the modifier.
     *
     * @example 1000
     *
     * @var string
     */
    public $modifyUser;

    /**
     * @description The output information.
     *
     * @var outputs
     */
    public $outputs;

    /**
     * @description The account ID of the task owner.
     *
     * @example 1000
     *
     * @var string
     */
    public $owner;

    /**
     * @description The sequence number of the cycle. This parameter indicates the cycle of the task instance on the current day.
     *
     * @example 1
     *
     * @var int
     */
    public $periodNumber;

    /**
     * @description The task priority. Valid values: 1 to 8. A larger value indicates a higher priority. Default value: 1.
     *
     * @example 1
     *
     * @var int
     */
    public $priority;

    /**
     * @description The environment of the workspace. Valid values:
     *
     *   Prod: production environment
     *   Dev: development environment
     *
     * @example Prod
     *
     * @var string
     */
    public $projectEnv;

    /**
     * @description The workspace ID.
     *
     * @example 100
     *
     * @var int
     */
    public $projectId;

    /**
     * @description The rerun mode. Valid values:
     *
     *   AllDenied: The task cannot be rerun regardless of whether the task is successfully run or fails to run.
     *   AllAllowed: The task can be rerun regardless of whether the task is successfully run or fails to run.
     *   FailureAllowed: The task can be rerun only after it fails to run.
     *
     * @example AllAllowed
     *
     * @var string
     */
    public $rerunMode;

    /**
     * @description The number of times the instance is run. By default, the value starts from 1.
     *
     * @example 1
     *
     * @var int
     */
    public $runNumber;

    /**
     * @description The runtime information about the instance.
     *
     * @var runtime
     */
    public $runtime;

    /**
     * @description The information about the resource group with which the instance is associated.
     *
     * @var runtimeResource
     */
    public $runtimeResource;

    /**
     * @description The script information.
     *
     * @var script
     */
    public $script;

    /**
     * @description The time when the instance started to run.
     *
     * @example 1710239005403
     *
     * @var int
     */
    public $startedTime;

    /**
     * @description The status of the instance. Valid values:
     *
     *   NotRun: The instance is not run.
     *   Running: The instance is running.
     *   WaitTime: The instance is waiting for the scheduling time to arrive.
     *   CheckingCondition: Branch conditions are being checked for the instance.
     *   WaitResource: The instance is waiting for resources.
     *   Failure: The instance fails to be run.
     *   Success: The instance is successfully run.
     *   Checking: Data quality is being checked for the instance.
     *
     * @example Success
     *
     * @var string
     */
    public $status;

    /**
     * @description The tags of the task.
     *
     * @var tags[]
     */
    public $tags;

    /**
     * @description The ID of the task for which the instance is generated.
     *
     * @example 1234
     *
     * @var int
     */
    public $taskId;

    /**
     * @description The name of the task for which the instance is generated.
     *
     * @example SQL node
     *
     * @var string
     */
    public $taskName;

    /**
     * @description The type of the task for which the instance is generated.
     *
     * @example ODPS_SQL
     *
     * @var string
     */
    public $taskType;

    /**
     * @description The timeout period of task running. Unit: seconds.
     *
     * Note: The value of this parameter is rounded up by hour.
     *
     * @example 1
     *
     * @var int
     */
    public $timeout;

    /**
     * @description The running mode of the instance after it is triggered. This parameter takes effect only if the TriggerType parameter is set to Scheduler. Valid values:
     *
     *   Pause
     *   Skip
     *   Normal
     *
     * @example Normal
     *
     * @var string
     */
    public $triggerRecurrence;

    /**
     * @description The scheduling time.
     *
     * @example 1710239005403
     *
     * @var int
     */
    public $triggerTime;

    /**
     * @description The method to trigger instance scheduling. The value of the Trigger.Type parameter in the response of the GetTask operation is used. Valid values:
     *
     *   Scheduler
     *   Manual
     *
     * @example Scheduler
     *
     * @var string
     */
    public $triggerType;

    /**
     * @description The ID of the workflow to which the instance belongs.
     *
     * @example 1234
     *
     * @var int
     */
    public $workflowId;

    /**
     * @description The workflow instance ID.
     *
     * @example 1234
     *
     * @var int
     */
    public $workflowInstanceId;

    /**
     * @description The type of the workflow instance. Valid values:
     *
     *   SmokeTest
     *   SupplementData
     *   Manual
     *   ManualWorkflow
     *   Normal
     *   ManualFlow
     *
     * @example Normal
     *
     * @var string
     */
    public $workflowInstanceType;

    /**
     * @description The name of the workflow to which the instance belongs.
     *
     * @example Test workflow
     *
     * @var string
     */
    public $workflowName;
    protected $_name = [
        'baselineId' => 'BaselineId',
        'bizdate' => 'Bizdate',
        'createTime' => 'CreateTime',
        'createUser' => 'CreateUser',
        'dataSource' => 'DataSource',
        'description' => 'Description',
        'finishedTime' => 'FinishedTime',
        'id' => 'Id',
        'inputs' => 'Inputs',
        'modifyTime' => 'ModifyTime',
        'modifyUser' => 'ModifyUser',
        'outputs' => 'Outputs',
        'owner' => 'Owner',
        'periodNumber' => 'PeriodNumber',
        'priority' => 'Priority',
        'projectEnv' => 'ProjectEnv',
        'projectId' => 'ProjectId',
        'rerunMode' => 'RerunMode',
        'runNumber' => 'RunNumber',
        'runtime' => 'Runtime',
        'runtimeResource' => 'RuntimeResource',
        'script' => 'Script',
        'startedTime' => 'StartedTime',
        'status' => 'Status',
        'tags' => 'Tags',
        'taskId' => 'TaskId',
        'taskName' => 'TaskName',
        'taskType' => 'TaskType',
        'timeout' => 'Timeout',
        'triggerRecurrence' => 'TriggerRecurrence',
        'triggerTime' => 'TriggerTime',
        'triggerType' => 'TriggerType',
        'workflowId' => 'WorkflowId',
        'workflowInstanceId' => 'WorkflowInstanceId',
        'workflowInstanceType' => 'WorkflowInstanceType',
        'workflowName' => 'WorkflowName',
    ];

    public function validate() {}

    public function toMap()
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
            $res['DataSource'] = null !== $this->dataSource ? $this->dataSource->toMap() : null;
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
            $res['Inputs'] = null !== $this->inputs ? $this->inputs->toMap() : null;
        }
        if (null !== $this->modifyTime) {
            $res['ModifyTime'] = $this->modifyTime;
        }
        if (null !== $this->modifyUser) {
            $res['ModifyUser'] = $this->modifyUser;
        }
        if (null !== $this->outputs) {
            $res['Outputs'] = null !== $this->outputs ? $this->outputs->toMap() : null;
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
            $res['Runtime'] = null !== $this->runtime ? $this->runtime->toMap() : null;
        }
        if (null !== $this->runtimeResource) {
            $res['RuntimeResource'] = null !== $this->runtimeResource ? $this->runtimeResource->toMap() : null;
        }
        if (null !== $this->script) {
            $res['Script'] = null !== $this->script ? $this->script->toMap() : null;
        }
        if (null !== $this->startedTime) {
            $res['StartedTime'] = $this->startedTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->tags) {
            $res['Tags'] = [];
            if (null !== $this->tags && \is_array($this->tags)) {
                $n = 0;
                foreach ($this->tags as $item) {
                    $res['Tags'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return taskInstance
     */
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
                $n = 0;
                foreach ($map['Tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? tags::fromMap($item) : $item;
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
