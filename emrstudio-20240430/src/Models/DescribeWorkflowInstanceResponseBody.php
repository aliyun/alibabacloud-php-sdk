<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EmrStudio\V20240430\Models;

use AlibabaCloud\Tea\Model;

class DescribeWorkflowInstanceResponseBody extends Model
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
     * @example c-047fa6bbe732****
     *
     * @var string
     */
    public $emrClusterId;

    /**
     * @example 2024-03-27 00:00:00
     *
     * @var string
     */
    public $endTime;

    /**
     * @example END
     *
     * @var string
     */
    public $failureStrategy;

    /**
     * @example false
     *
     * @var bool
     */
    public $isComplementData;

    /**
     * @example workflow_instance_name
     *
     * @var string
     */
    public $name;

    /**
     * @example DD6B1B2A-5837-5237-ABE4-FF0C8944****
     *
     * @var string
     */
    public $requestId;

    /**
     * @example wg-susqimrr649x****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @example 2024-03-27 00:00:00
     *
     * @var string
     */
    public $restartTime;

    /**
     * @example 1
     *
     * @var int
     */
    public $runTimes;

    /**
     * @example 2024-03-27 00:00:00
     *
     * @var string
     */
    public $scheduleTime;

    /**
     * @example 2024-03-27 00:00:00
     *
     * @var string
     */
    public $startTime;

    /**
     * @example SUCCESS
     *
     * @var string
     */
    public $status;

    /**
     * @example 0
     *
     * @var int
     */
    public $timeout;

    /**
     * @example w-3q9jo749ne5****
     *
     * @var string
     */
    public $workflowId;

    /**
     * @example wi-3q9jo749ne5****
     *
     * @var string
     */
    public $workflowInstanceId;

    /**
     * @example MEDIUM
     *
     * @var string
     */
    public $workflowInstancePriority;

    /**
     * @example 1
     *
     * @var int
     */
    public $workflowVersion;
    protected $_name = [
        'alertGroupId'             => 'alertGroupId',
        'alertStrategy'            => 'alertStrategy',
        'emrClusterId'             => 'emrClusterId',
        'endTime'                  => 'endTime',
        'failureStrategy'          => 'failureStrategy',
        'isComplementData'         => 'isComplementData',
        'name'                     => 'name',
        'requestId'                => 'requestId',
        'resourceGroupId'          => 'resourceGroupId',
        'restartTime'              => 'restartTime',
        'runTimes'                 => 'runTimes',
        'scheduleTime'             => 'scheduleTime',
        'startTime'                => 'startTime',
        'status'                   => 'status',
        'timeout'                  => 'timeout',
        'workflowId'               => 'workflowId',
        'workflowInstanceId'       => 'workflowInstanceId',
        'workflowInstancePriority' => 'workflowInstancePriority',
        'workflowVersion'          => 'workflowVersion',
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
        if (null !== $this->emrClusterId) {
            $res['emrClusterId'] = $this->emrClusterId;
        }
        if (null !== $this->endTime) {
            $res['endTime'] = $this->endTime;
        }
        if (null !== $this->failureStrategy) {
            $res['failureStrategy'] = $this->failureStrategy;
        }
        if (null !== $this->isComplementData) {
            $res['isComplementData'] = $this->isComplementData;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }
        if (null !== $this->resourceGroupId) {
            $res['resourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->restartTime) {
            $res['restartTime'] = $this->restartTime;
        }
        if (null !== $this->runTimes) {
            $res['runTimes'] = $this->runTimes;
        }
        if (null !== $this->scheduleTime) {
            $res['scheduleTime'] = $this->scheduleTime;
        }
        if (null !== $this->startTime) {
            $res['startTime'] = $this->startTime;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->timeout) {
            $res['timeout'] = $this->timeout;
        }
        if (null !== $this->workflowId) {
            $res['workflowId'] = $this->workflowId;
        }
        if (null !== $this->workflowInstanceId) {
            $res['workflowInstanceId'] = $this->workflowInstanceId;
        }
        if (null !== $this->workflowInstancePriority) {
            $res['workflowInstancePriority'] = $this->workflowInstancePriority;
        }
        if (null !== $this->workflowVersion) {
            $res['workflowVersion'] = $this->workflowVersion;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeWorkflowInstanceResponseBody
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
        if (isset($map['emrClusterId'])) {
            $model->emrClusterId = $map['emrClusterId'];
        }
        if (isset($map['endTime'])) {
            $model->endTime = $map['endTime'];
        }
        if (isset($map['failureStrategy'])) {
            $model->failureStrategy = $map['failureStrategy'];
        }
        if (isset($map['isComplementData'])) {
            $model->isComplementData = $map['isComplementData'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }
        if (isset($map['resourceGroupId'])) {
            $model->resourceGroupId = $map['resourceGroupId'];
        }
        if (isset($map['restartTime'])) {
            $model->restartTime = $map['restartTime'];
        }
        if (isset($map['runTimes'])) {
            $model->runTimes = $map['runTimes'];
        }
        if (isset($map['scheduleTime'])) {
            $model->scheduleTime = $map['scheduleTime'];
        }
        if (isset($map['startTime'])) {
            $model->startTime = $map['startTime'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }
        if (isset($map['timeout'])) {
            $model->timeout = $map['timeout'];
        }
        if (isset($map['workflowId'])) {
            $model->workflowId = $map['workflowId'];
        }
        if (isset($map['workflowInstanceId'])) {
            $model->workflowInstanceId = $map['workflowInstanceId'];
        }
        if (isset($map['workflowInstancePriority'])) {
            $model->workflowInstancePriority = $map['workflowInstancePriority'];
        }
        if (isset($map['workflowVersion'])) {
            $model->workflowVersion = $map['workflowVersion'];
        }

        return $model;
    }
}
