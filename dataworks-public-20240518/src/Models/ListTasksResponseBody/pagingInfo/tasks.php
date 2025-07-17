<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListTasksResponseBody\pagingInfo;

use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListTasksResponseBody\pagingInfo\tasks\dataSource;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListTasksResponseBody\pagingInfo\tasks\runtimeResource;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListTasksResponseBody\pagingInfo\tasks\trigger;
use AlibabaCloud\Tea\Model;

class tasks extends Model
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
     * @description The description of the task.
     *
     * @example test
     *
     * @var string
     */
    public $description;

    /**
     * @description The task ID.
     *
     * @example 1234
     *
     * @var int
     */
    public $id;

    /**
     * @description The instance generation mode. Valid values:
     *
     *   T+1
     *   Immediately
     *
     * @example T+1
     *
     * @var string
     */
    public $instanceMode;

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
     * @description The name of the task.
     *
     * @example SQL node
     *
     * @var string
     */
    public $name;

    /**
     * @description The account ID of the task owner.
     *
     * @example 1000
     *
     * @var string
     */
    public $owner;

    /**
     * @description The priority of the task. Valid values: 1 to 8. A larger value indicates a higher priority. Default value: 1.
     *
     * @example 1
     *
     * @var int
     */
    public $priority;

    /**
     * @description The environment of the workspace.
     *
     * Valid values:
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
     * @description The rerun interval. Unit: seconds.
     *
     * @example 60
     *
     * @var int
     */
    public $rerunInterval;

    /**
     * @description The rerun mode.
     *
     * Valid values:
     *
     *   AllDenied: The task cannot be rerun regardless of whether the task is successfully run or fails to run.
     *   FailureAllowed: The task can be rerun only after it fails to run.
     *   AllAllowed: The task can be rerun regardless of whether it is successfully run or fails to run.
     *
     * @example AllAllowed
     *
     * @var string
     */
    public $rerunMode;

    /**
     * @description The number of times that the task is rerun. This parameter takes effect only if the RerunMode parameter is set to AllAllowed or FailureAllowed.
     *
     * @example 3
     *
     * @var int
     */
    public $rerunTimes;

    /**
     * @description The configurations of the runtime environment, such as the resource group information.
     *
     * @var runtimeResource
     */
    public $runtimeResource;

    /**
     * @description The list of script parameters.
     *
     * @example para1=$bizdate para2=$[yyyymmdd]
     *
     * @var string
     */
    public $scriptParameters;

    /**
     * @description The timeout period of task running. Unit: seconds.
     *
     * @example 3600
     *
     * @var int
     */
    public $timeout;

    /**
     * @description The method to trigger task scheduling.
     *
     * @var trigger
     */
    public $trigger;

    /**
     * @description The type of the task.
     *
     * @example ODPS_SQL
     *
     * @var string
     */
    public $type;

    /**
     * @description The ID of the workflow to which the task belongs.
     *
     * @example 1234
     *
     * @var int
     */
    public $workflowId;
    protected $_name = [
        'baselineId' => 'BaselineId',
        'createTime' => 'CreateTime',
        'createUser' => 'CreateUser',
        'dataSource' => 'DataSource',
        'description' => 'Description',
        'id' => 'Id',
        'instanceMode' => 'InstanceMode',
        'modifyTime' => 'ModifyTime',
        'modifyUser' => 'ModifyUser',
        'name' => 'Name',
        'owner' => 'Owner',
        'priority' => 'Priority',
        'projectEnv' => 'ProjectEnv',
        'projectId' => 'ProjectId',
        'rerunInterval' => 'RerunInterval',
        'rerunMode' => 'RerunMode',
        'rerunTimes' => 'RerunTimes',
        'runtimeResource' => 'RuntimeResource',
        'scriptParameters' => 'ScriptParameters',
        'timeout' => 'Timeout',
        'trigger' => 'Trigger',
        'type' => 'Type',
        'workflowId' => 'WorkflowId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->baselineId) {
            $res['BaselineId'] = $this->baselineId;
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
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->instanceMode) {
            $res['InstanceMode'] = $this->instanceMode;
        }
        if (null !== $this->modifyTime) {
            $res['ModifyTime'] = $this->modifyTime;
        }
        if (null !== $this->modifyUser) {
            $res['ModifyUser'] = $this->modifyUser;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->owner) {
            $res['Owner'] = $this->owner;
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
        if (null !== $this->rerunInterval) {
            $res['RerunInterval'] = $this->rerunInterval;
        }
        if (null !== $this->rerunMode) {
            $res['RerunMode'] = $this->rerunMode;
        }
        if (null !== $this->rerunTimes) {
            $res['RerunTimes'] = $this->rerunTimes;
        }
        if (null !== $this->runtimeResource) {
            $res['RuntimeResource'] = null !== $this->runtimeResource ? $this->runtimeResource->toMap() : null;
        }
        if (null !== $this->scriptParameters) {
            $res['ScriptParameters'] = $this->scriptParameters;
        }
        if (null !== $this->timeout) {
            $res['Timeout'] = $this->timeout;
        }
        if (null !== $this->trigger) {
            $res['Trigger'] = null !== $this->trigger ? $this->trigger->toMap() : null;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->workflowId) {
            $res['WorkflowId'] = $this->workflowId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return tasks
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BaselineId'])) {
            $model->baselineId = $map['BaselineId'];
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
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['InstanceMode'])) {
            $model->instanceMode = $map['InstanceMode'];
        }
        if (isset($map['ModifyTime'])) {
            $model->modifyTime = $map['ModifyTime'];
        }
        if (isset($map['ModifyUser'])) {
            $model->modifyUser = $map['ModifyUser'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Owner'])) {
            $model->owner = $map['Owner'];
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
        if (isset($map['RerunInterval'])) {
            $model->rerunInterval = $map['RerunInterval'];
        }
        if (isset($map['RerunMode'])) {
            $model->rerunMode = $map['RerunMode'];
        }
        if (isset($map['RerunTimes'])) {
            $model->rerunTimes = $map['RerunTimes'];
        }
        if (isset($map['RuntimeResource'])) {
            $model->runtimeResource = runtimeResource::fromMap($map['RuntimeResource']);
        }
        if (isset($map['ScriptParameters'])) {
            $model->scriptParameters = $map['ScriptParameters'];
        }
        if (isset($map['Timeout'])) {
            $model->timeout = $map['Timeout'];
        }
        if (isset($map['Trigger'])) {
            $model->trigger = trigger::fromMap($map['Trigger']);
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['WorkflowId'])) {
            $model->workflowId = $map['WorkflowId'];
        }

        return $model;
    }
}
