<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EmrStudio\V20240430\Models;

use AlibabaCloud\Tea\Model;

class CreateWorkflowRequest extends Model
{
    /**
     * @example ag-v7n2gp3vv3j****
     *
     * @var string
     */
    public $alertGroupId;

    /**
     * @example NONE
     *
     * @var string
     */
    public $alertStrategy;

    /**
     * @example 0 0 * * * ? *
     *
     * @var string
     */
    public $cronExpr;

    /**
     * @example test
     *
     * @var string
     */
    public $description;

    /**
     * @example PARALLEL
     *
     * @var string
     */
    public $executionType;

    /**
     * @example END
     *
     * @var string
     */
    public $failureStrategy;

    /**
     * @description This parameter is required.
     *
     * @example test
     *
     * @var string
     */
    public $name;

    /**
     * @example wd-v7n2gp3vv3j****
     *
     * @var string
     */
    public $parentDirectoryId;

    /**
     * @example wg-acfmv4opbs****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @example 2024-01-01 00:00:00
     *
     * @var string
     */
    public $scheduleEndTime;

    /**
     * @example 2024-01-01 00:00:00
     *
     * @var string
     */
    public $scheduleStartTime;

    /**
     * @example OFFLINE
     *
     * @var string
     */
    public $scheduleState;

    /**
     * @description This parameter is required.
     *
     * @example [{"taskId":"t1","name":"t1","taskParams":{"rawScript":"echo 1"},"taskType":"SHELL"}]
     *
     * @var string
     */
    public $taskDefinitionJson;

    /**
     * @description This parameter is required.
     *
     * @example [{"preTaskId":"0", "postTaskId":"t1"}]
     *
     * @var string
     */
    public $taskRelationJson;

    /**
     * @example Asia/Shanghai
     *
     * @var string
     */
    public $timeZone;

    /**
     * @example 10
     *
     * @var int
     */
    public $timeout;

    /**
     * @example MEDIUM
     *
     * @var string
     */
    public $workflowInstancePriority;

    /**
     * @example [{"prop":"key1","value":"value1"}]
     *
     * @var string
     */
    public $workflowParams;

    /**
     * @description This parameter is required.
     *
     * @example 12345
     *
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'alertGroupId'             => 'alertGroupId',
        'alertStrategy'            => 'alertStrategy',
        'cronExpr'                 => 'cronExpr',
        'description'              => 'description',
        'executionType'            => 'executionType',
        'failureStrategy'          => 'failureStrategy',
        'name'                     => 'name',
        'parentDirectoryId'        => 'parentDirectoryId',
        'resourceGroupId'          => 'resourceGroupId',
        'scheduleEndTime'          => 'scheduleEndTime',
        'scheduleStartTime'        => 'scheduleStartTime',
        'scheduleState'            => 'scheduleState',
        'taskDefinitionJson'       => 'taskDefinitionJson',
        'taskRelationJson'         => 'taskRelationJson',
        'timeZone'                 => 'timeZone',
        'timeout'                  => 'timeout',
        'workflowInstancePriority' => 'workflowInstancePriority',
        'workflowParams'           => 'workflowParams',
        'workspaceId'              => 'workspaceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alertGroupId) {
            $res['alertGroupId'] = $this->alertGroupId;
        }
        if (null !== $this->alertStrategy) {
            $res['alertStrategy'] = $this->alertStrategy;
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

    /**
     * @param array $map
     *
     * @return CreateWorkflowRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['alertGroupId'])) {
            $model->alertGroupId = $map['alertGroupId'];
        }
        if (isset($map['alertStrategy'])) {
            $model->alertStrategy = $map['alertStrategy'];
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
