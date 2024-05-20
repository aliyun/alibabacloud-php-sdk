<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EmrStudio\V20240430\Models\ListTaskInstancesResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 0
     *
     * @var string
     */
    public $dryRun;

    /**
     * @example c-b933c5aac7f7***
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
     * @example application_123_***
     *
     * @var string
     */
    public $externalAppId;

    /**
     * @example wg-3q9jo749ne5****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @example 0
     *
     * @var int
     */
    public $retryTimes;

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
     * @example 2024-03-27 00:00:00
     *
     * @var string
     */
    public $submitTime;

    /**
     * @example t-3q9jo749ne5****
     *
     * @var string
     */
    public $taskId;

    /**
     * @example ti-3q9jo749ne5****
     *
     * @var string
     */
    public $taskInstanceId;

    /**
     * @example test
     *
     * @var string
     */
    public $taskInstanceName;

    /**
     * @example {
     * }
     * @var string
     */
    public $taskParams;

    /**
     * @example SHELL
     *
     * @var string
     */
    public $taskType;

    /**
     * @example 1
     *
     * @var string
     */
    public $taskVersion;

    /**
     * @example wi-3q9jo749ne5****
     *
     * @var string
     */
    public $workflowInstanceId;
    protected $_name = [
        'dryRun'             => 'DryRun',
        'emrClusterId'       => 'EmrClusterId',
        'endTime'            => 'EndTime',
        'externalAppId'      => 'ExternalAppId',
        'resourceGroupId'    => 'ResourceGroupId',
        'retryTimes'         => 'RetryTimes',
        'startTime'          => 'StartTime',
        'status'             => 'Status',
        'submitTime'         => 'SubmitTime',
        'taskId'             => 'TaskId',
        'taskInstanceId'     => 'TaskInstanceId',
        'taskInstanceName'   => 'TaskInstanceName',
        'taskParams'         => 'TaskParams',
        'taskType'           => 'TaskType',
        'taskVersion'        => 'TaskVersion',
        'workflowInstanceId' => 'WorkflowInstanceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }
        if (null !== $this->emrClusterId) {
            $res['EmrClusterId'] = $this->emrClusterId;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->externalAppId) {
            $res['ExternalAppId'] = $this->externalAppId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->retryTimes) {
            $res['RetryTimes'] = $this->retryTimes;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->submitTime) {
            $res['SubmitTime'] = $this->submitTime;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->taskInstanceId) {
            $res['TaskInstanceId'] = $this->taskInstanceId;
        }
        if (null !== $this->taskInstanceName) {
            $res['TaskInstanceName'] = $this->taskInstanceName;
        }
        if (null !== $this->taskParams) {
            $res['TaskParams'] = $this->taskParams;
        }
        if (null !== $this->taskType) {
            $res['TaskType'] = $this->taskType;
        }
        if (null !== $this->taskVersion) {
            $res['TaskVersion'] = $this->taskVersion;
        }
        if (null !== $this->workflowInstanceId) {
            $res['WorkflowInstanceId'] = $this->workflowInstanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }
        if (isset($map['EmrClusterId'])) {
            $model->emrClusterId = $map['EmrClusterId'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['ExternalAppId'])) {
            $model->externalAppId = $map['ExternalAppId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['RetryTimes'])) {
            $model->retryTimes = $map['RetryTimes'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['SubmitTime'])) {
            $model->submitTime = $map['SubmitTime'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['TaskInstanceId'])) {
            $model->taskInstanceId = $map['TaskInstanceId'];
        }
        if (isset($map['TaskInstanceName'])) {
            $model->taskInstanceName = $map['TaskInstanceName'];
        }
        if (isset($map['TaskParams'])) {
            $model->taskParams = $map['TaskParams'];
        }
        if (isset($map['TaskType'])) {
            $model->taskType = $map['TaskType'];
        }
        if (isset($map['TaskVersion'])) {
            $model->taskVersion = $map['TaskVersion'];
        }
        if (isset($map['WorkflowInstanceId'])) {
            $model->workflowInstanceId = $map['WorkflowInstanceId'];
        }

        return $model;
    }
}
