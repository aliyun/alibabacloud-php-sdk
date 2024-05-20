<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EmrStudio\V20240430\Models;

use AlibabaCloud\Tea\Model;

class RunWorkflowRequest extends Model
{
    /**
     * @example ag-n72kong0832****
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
     * @example OFF_MODE
     *
     * @var string
     */
    public $complementDependentMode;

    /**
     * @example 0
     *
     * @var string
     */
    public $dryRun;

    /**
     * @example START_PROCESS
     *
     * @var string
     */
    public $execType;

    /**
     * @example 1
     *
     * @var string
     */
    public $expectedParallelismNumber;

    /**
     * @example END
     *
     * @var string
     */
    public $failureStrategy;

    /**
     * @description This parameter is required.
     *
     * @example wg-acfmv4opbs****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @example RUN_MODE_PARALLEL
     *
     * @var string
     */
    public $runMode;

    /**
     * @example 2024-01-01 00:00:00,2024-01-02 00:00:00
     *
     * @var string
     */
    public $scheduleTime;

    /**
     * @example {"key1":"value1"}
     *
     * @var string
     */
    public $startParams;

    /**
     * @description This parameter is required.
     *
     * @example w-3q9jo749ne5****
     *
     * @var string
     */
    public $workflowId;

    /**
     * @example MEDIUM
     *
     * @var string
     */
    public $workflowInstancePriority;

    /**
     * @description This parameter is required.
     *
     * @example 12345
     *
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'alertGroupId'              => 'alertGroupId',
        'alertStrategy'             => 'alertStrategy',
        'complementDependentMode'   => 'complementDependentMode',
        'dryRun'                    => 'dryRun',
        'execType'                  => 'execType',
        'expectedParallelismNumber' => 'expectedParallelismNumber',
        'failureStrategy'           => 'failureStrategy',
        'resourceGroupId'           => 'resourceGroupId',
        'runMode'                   => 'runMode',
        'scheduleTime'              => 'scheduleTime',
        'startParams'               => 'startParams',
        'workflowId'                => 'workflowId',
        'workflowInstancePriority'  => 'workflowInstancePriority',
        'workspaceId'               => 'workspaceId',
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
        if (null !== $this->complementDependentMode) {
            $res['complementDependentMode'] = $this->complementDependentMode;
        }
        if (null !== $this->dryRun) {
            $res['dryRun'] = $this->dryRun;
        }
        if (null !== $this->execType) {
            $res['execType'] = $this->execType;
        }
        if (null !== $this->expectedParallelismNumber) {
            $res['expectedParallelismNumber'] = $this->expectedParallelismNumber;
        }
        if (null !== $this->failureStrategy) {
            $res['failureStrategy'] = $this->failureStrategy;
        }
        if (null !== $this->resourceGroupId) {
            $res['resourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->runMode) {
            $res['runMode'] = $this->runMode;
        }
        if (null !== $this->scheduleTime) {
            $res['scheduleTime'] = $this->scheduleTime;
        }
        if (null !== $this->startParams) {
            $res['startParams'] = $this->startParams;
        }
        if (null !== $this->workflowId) {
            $res['workflowId'] = $this->workflowId;
        }
        if (null !== $this->workflowInstancePriority) {
            $res['workflowInstancePriority'] = $this->workflowInstancePriority;
        }
        if (null !== $this->workspaceId) {
            $res['workspaceId'] = $this->workspaceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RunWorkflowRequest
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
        if (isset($map['complementDependentMode'])) {
            $model->complementDependentMode = $map['complementDependentMode'];
        }
        if (isset($map['dryRun'])) {
            $model->dryRun = $map['dryRun'];
        }
        if (isset($map['execType'])) {
            $model->execType = $map['execType'];
        }
        if (isset($map['expectedParallelismNumber'])) {
            $model->expectedParallelismNumber = $map['expectedParallelismNumber'];
        }
        if (isset($map['failureStrategy'])) {
            $model->failureStrategy = $map['failureStrategy'];
        }
        if (isset($map['resourceGroupId'])) {
            $model->resourceGroupId = $map['resourceGroupId'];
        }
        if (isset($map['runMode'])) {
            $model->runMode = $map['runMode'];
        }
        if (isset($map['scheduleTime'])) {
            $model->scheduleTime = $map['scheduleTime'];
        }
        if (isset($map['startParams'])) {
            $model->startParams = $map['startParams'];
        }
        if (isset($map['workflowId'])) {
            $model->workflowId = $map['workflowId'];
        }
        if (isset($map['workflowInstancePriority'])) {
            $model->workflowInstancePriority = $map['workflowInstancePriority'];
        }
        if (isset($map['workspaceId'])) {
            $model->workspaceId = $map['workspaceId'];
        }

        return $model;
    }
}
