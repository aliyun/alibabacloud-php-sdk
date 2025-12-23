<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EmrStudio\V20240430\Models;

use AlibabaCloud\Dara\Model;

class CreateWorkflowRequest extends Model
{
    /**
     * @var string
     */
    public $alertGroupId;

    /**
     * @var string
     */
    public $alertStrategy;

    /**
     * @var string
     */
    public $taskDefinitionJsonValue;

    /**
     * @var string
     */
    public $taskRelationJsonValue;

    /**
     * @var string
     */
    public $cronExpr;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $executionType;

    /**
     * @var string
     */
    public $failureStrategy;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $parentDirectoryId;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $scheduleEndTime;

    /**
     * @var string
     */
    public $scheduleStartTime;

    /**
     * @var string
     */
    public $scheduleState;

    /**
     * @var string
     */
    public $taskDefinitionJson;

    /**
     * @var string
     */
    public $taskRelationJson;

    /**
     * @var string
     */
    public $timeZone;

    /**
     * @var int
     */
    public $timeout;

    /**
     * @var string
     */
    public $workflowInstancePriority;

    /**
     * @var string
     */
    public $workflowParams;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'alertGroupId' => 'alertGroupId',
        'alertStrategy' => 'alertStrategy',
        'taskDefinitionJsonValue' => 'taskDefinitionJsonValue',
        'taskRelationJsonValue' => 'taskRelationJsonValue',
        'cronExpr' => 'cronExpr',
        'description' => 'description',
        'executionType' => 'executionType',
        'failureStrategy' => 'failureStrategy',
        'name' => 'name',
        'parentDirectoryId' => 'parentDirectoryId',
        'resourceGroupId' => 'resourceGroupId',
        'scheduleEndTime' => 'scheduleEndTime',
        'scheduleStartTime' => 'scheduleStartTime',
        'scheduleState' => 'scheduleState',
        'taskDefinitionJson' => 'taskDefinitionJson',
        'taskRelationJson' => 'taskRelationJson',
        'timeZone' => 'timeZone',
        'timeout' => 'timeout',
        'workflowInstancePriority' => 'workflowInstancePriority',
        'workflowParams' => 'workflowParams',
        'workspaceId' => 'workspaceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alertGroupId) {
            $res['alertGroupId'] = $this->alertGroupId;
        }

        if (null !== $this->alertStrategy) {
            $res['alertStrategy'] = $this->alertStrategy;
        }

        if (null !== $this->taskDefinitionJsonValue) {
            $res['taskDefinitionJsonValue'] = $this->taskDefinitionJsonValue;
        }

        if (null !== $this->taskRelationJsonValue) {
            $res['taskRelationJsonValue'] = $this->taskRelationJsonValue;
        }

        if (null !== $this->cronExpr) {
            $res['cronExpr'] = $this->cronExpr;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->executionType) {
            $res['executionType'] = $this->executionType;
        }

        if (null !== $this->failureStrategy) {
            $res['failureStrategy'] = $this->failureStrategy;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->parentDirectoryId) {
            $res['parentDirectoryId'] = $this->parentDirectoryId;
        }

        if (null !== $this->resourceGroupId) {
            $res['resourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->scheduleEndTime) {
            $res['scheduleEndTime'] = $this->scheduleEndTime;
        }

        if (null !== $this->scheduleStartTime) {
            $res['scheduleStartTime'] = $this->scheduleStartTime;
        }

        if (null !== $this->scheduleState) {
            $res['scheduleState'] = $this->scheduleState;
        }

        if (null !== $this->taskDefinitionJson) {
            $res['taskDefinitionJson'] = $this->taskDefinitionJson;
        }

        if (null !== $this->taskRelationJson) {
            $res['taskRelationJson'] = $this->taskRelationJson;
        }

        if (null !== $this->timeZone) {
            $res['timeZone'] = $this->timeZone;
        }

        if (null !== $this->timeout) {
            $res['timeout'] = $this->timeout;
        }

        if (null !== $this->workflowInstancePriority) {
            $res['workflowInstancePriority'] = $this->workflowInstancePriority;
        }

        if (null !== $this->workflowParams) {
            $res['workflowParams'] = $this->workflowParams;
        }

        if (null !== $this->workspaceId) {
            $res['workspaceId'] = $this->workspaceId;
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
        if (isset($map['alertGroupId'])) {
            $model->alertGroupId = $map['alertGroupId'];
        }

        if (isset($map['alertStrategy'])) {
            $model->alertStrategy = $map['alertStrategy'];
        }

        if (isset($map['taskDefinitionJsonValue'])) {
            $model->taskDefinitionJsonValue = $map['taskDefinitionJsonValue'];
        }

        if (isset($map['taskRelationJsonValue'])) {
            $model->taskRelationJsonValue = $map['taskRelationJsonValue'];
        }

        if (isset($map['cronExpr'])) {
            $model->cronExpr = $map['cronExpr'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['executionType'])) {
            $model->executionType = $map['executionType'];
        }

        if (isset($map['failureStrategy'])) {
            $model->failureStrategy = $map['failureStrategy'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['parentDirectoryId'])) {
            $model->parentDirectoryId = $map['parentDirectoryId'];
        }

        if (isset($map['resourceGroupId'])) {
            $model->resourceGroupId = $map['resourceGroupId'];
        }

        if (isset($map['scheduleEndTime'])) {
            $model->scheduleEndTime = $map['scheduleEndTime'];
        }

        if (isset($map['scheduleStartTime'])) {
            $model->scheduleStartTime = $map['scheduleStartTime'];
        }

        if (isset($map['scheduleState'])) {
            $model->scheduleState = $map['scheduleState'];
        }

        if (isset($map['taskDefinitionJson'])) {
            $model->taskDefinitionJson = $map['taskDefinitionJson'];
        }

        if (isset($map['taskRelationJson'])) {
            $model->taskRelationJson = $map['taskRelationJson'];
        }

        if (isset($map['timeZone'])) {
            $model->timeZone = $map['timeZone'];
        }

        if (isset($map['timeout'])) {
            $model->timeout = $map['timeout'];
        }

        if (isset($map['workflowInstancePriority'])) {
            $model->workflowInstancePriority = $map['workflowInstancePriority'];
        }

        if (isset($map['workflowParams'])) {
            $model->workflowParams = $map['workflowParams'];
        }

        if (isset($map['workspaceId'])) {
            $model->workspaceId = $map['workspaceId'];
        }

        return $model;
    }
}
