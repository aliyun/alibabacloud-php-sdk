<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetWorkflowResponseBody\workflow;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetWorkflowResponseBody\workflow\tasks\dataSource;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetWorkflowResponseBody\workflow\tasks\runtimeResource;

class tasks extends Model
{
    /**
     * @var int
     */
    public $baselineId;
    /**
     * @var string
     */
    public $clientUniqueCode;
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
     * @var string
     */
    public $envType;
    /**
     * @var int
     */
    public $id;
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
     * @var int
     */
    public $priority;
    /**
     * @var int
     */
    public $projectId;
    /**
     * @var int
     */
    public $rerunInterval;
    /**
     * @var string
     */
    public $rerunMode;
    /**
     * @var int
     */
    public $rerunTimes;
    /**
     * @var runtimeResource
     */
    public $runtimeResource;
    /**
     * @var int
     */
    public $timeout;
    /**
     * @var string
     */
    public $triggerRecurrence;
    /**
     * @var string
     */
    public $type;
    /**
     * @var int
     */
    public $workflowId;
    protected $_name = [
        'baselineId'        => 'BaselineId',
        'clientUniqueCode'  => 'ClientUniqueCode',
        'createTime'        => 'CreateTime',
        'createUser'        => 'CreateUser',
        'dataSource'        => 'DataSource',
        'description'       => 'Description',
        'envType'           => 'EnvType',
        'id'                => 'Id',
        'modifyTime'        => 'ModifyTime',
        'modifyUser'        => 'ModifyUser',
        'name'              => 'Name',
        'owner'             => 'Owner',
        'priority'          => 'Priority',
        'projectId'         => 'ProjectId',
        'rerunInterval'     => 'RerunInterval',
        'rerunMode'         => 'RerunMode',
        'rerunTimes'        => 'RerunTimes',
        'runtimeResource'   => 'RuntimeResource',
        'timeout'           => 'Timeout',
        'triggerRecurrence' => 'TriggerRecurrence',
        'type'              => 'Type',
        'workflowId'        => 'WorkflowId',
    ];

    public function validate()
    {
        if (null !== $this->dataSource) {
            $this->dataSource->validate();
        }
        if (null !== $this->runtimeResource) {
            $this->runtimeResource->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->baselineId) {
            $res['BaselineId'] = $this->baselineId;
        }

        if (null !== $this->clientUniqueCode) {
            $res['ClientUniqueCode'] = $this->clientUniqueCode;
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

        if (null !== $this->envType) {
            $res['EnvType'] = $this->envType;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
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
            $res['RuntimeResource'] = null !== $this->runtimeResource ? $this->runtimeResource->toArray($noStream) : $this->runtimeResource;
        }

        if (null !== $this->timeout) {
            $res['Timeout'] = $this->timeout;
        }

        if (null !== $this->triggerRecurrence) {
            $res['TriggerRecurrence'] = $this->triggerRecurrence;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        if (null !== $this->workflowId) {
            $res['WorkflowId'] = $this->workflowId;
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

        if (isset($map['ClientUniqueCode'])) {
            $model->clientUniqueCode = $map['ClientUniqueCode'];
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

        if (isset($map['Timeout'])) {
            $model->timeout = $map['Timeout'];
        }

        if (isset($map['TriggerRecurrence'])) {
            $model->triggerRecurrence = $map['TriggerRecurrence'];
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
