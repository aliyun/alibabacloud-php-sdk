<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EmrStudio\V20240430\Models;

use AlibabaCloud\Dara\Model;

class RunWorkflowRequest extends Model
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
    public $complementDependentMode;

    /**
     * @var string
     */
    public $dryRun;

    /**
     * @var string
     */
    public $execType;

    /**
     * @var string
     */
    public $expectedParallelismNumber;

    /**
     * @var string
     */
    public $failureStrategy;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $runMode;

    /**
     * @var string
     */
    public $scheduleTime;

    /**
     * @var string
     */
    public $startParams;

    /**
     * @var string
     */
    public $workflowId;

    /**
     * @var string
     */
    public $workflowInstancePriority;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'alertGroupId' => 'alertGroupId',
        'alertStrategy' => 'alertStrategy',
        'complementDependentMode' => 'complementDependentMode',
        'dryRun' => 'dryRun',
        'execType' => 'execType',
        'expectedParallelismNumber' => 'expectedParallelismNumber',
        'failureStrategy' => 'failureStrategy',
        'resourceGroupId' => 'resourceGroupId',
        'runMode' => 'runMode',
        'scheduleTime' => 'scheduleTime',
        'startParams' => 'startParams',
        'workflowId' => 'workflowId',
        'workflowInstancePriority' => 'workflowInstancePriority',
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
