<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListDownstreamTasksResponseBody\pagingInfo\downstreamTasks;

use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListDownstreamTasksResponseBody\pagingInfo\downstreamTasks\task\dataSource;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListDownstreamTasksResponseBody\pagingInfo\downstreamTasks\task\runtimeResource;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListDownstreamTasksResponseBody\pagingInfo\downstreamTasks\task\trigger;
use AlibabaCloud\Tea\Model;

class task extends Model
{
    /**
     * @description The ID of the baseline.
     *
     * @var int
     */
    public $baselineId;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $createUser;

    /**
     * @description The information about the data source.
     *
     * @var dataSource
     */
    public $dataSource;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $envType;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $instanceMode;

    /**
     * @var int
     */
    public $modifyTime;

    /**
     * @var string
     */
    public $modifyUser;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $owner;

    /**
     * @description The priority of the task. Valid values: 1 to 8.
     *
     * @var int
     */
    public $priority;

    /**
     * @var int
     */
    public $projectId;

    /**
     * @description The interval between two consecutive reruns. Unit: seconds.
     *
     * @var int
     */
    public $rerunInterval;

    /**
     * @description The rerun mode.
     *
     * @var string
     */
    public $rerunMode;

    /**
     * @description The number of reruns.
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
     * @var int
     */
    public $tenantId;

    /**
     * @description The timeout period of task running. Unit: seconds.
     *
     * @var int
     */
    public $timeout;

    /**
     * @description The method to trigger the running of the task.
     *
     * @var trigger
     */
    public $trigger;

    /**
     * @description The type of the task.
     *
     * @var string
     */
    public $type;

    /**
     * @var int
     */
    public $workflowId;
    protected $_name = [
        'baselineId'      => 'BaselineId',
        'createTime'      => 'CreateTime',
        'createUser'      => 'CreateUser',
        'dataSource'      => 'DataSource',
        'description'     => 'Description',
        'envType'         => 'EnvType',
        'id'              => 'Id',
        'instanceMode'    => 'InstanceMode',
        'modifyTime'      => 'ModifyTime',
        'modifyUser'      => 'ModifyUser',
        'name'            => 'Name',
        'owner'           => 'Owner',
        'priority'        => 'Priority',
        'projectId'       => 'ProjectId',
        'rerunInterval'   => 'RerunInterval',
        'rerunMode'       => 'RerunMode',
        'rerunTimes'      => 'RerunTimes',
        'runtimeResource' => 'RuntimeResource',
        'tenantId'        => 'TenantId',
        'timeout'         => 'Timeout',
        'trigger'         => 'Trigger',
        'type'            => 'Type',
        'workflowId'      => 'WorkflowId',
    ];

    public function validate()
    {
    }

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
        if (null !== $this->envType) {
            $res['EnvType'] = $this->envType;
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
        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
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
     * @return task
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
        if (isset($map['EnvType'])) {
            $model->envType = $map['EnvType'];
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
        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
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
