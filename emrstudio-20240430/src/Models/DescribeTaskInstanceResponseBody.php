<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EmrStudio\V20240430\Models;

use AlibabaCloud\Dara\Model;

class DescribeTaskInstanceResponseBody extends Model
{
    /**
     * @var string
     */
    public $dryRun;

    /**
     * @var string
     */
    public $emrClusterId;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $externalAppId;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var int
     */
    public $retryTimes;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $submitTime;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var string
     */
    public $taskInstanceId;

    /**
     * @var string
     */
    public $taskInstanceName;

    /**
     * @var string
     */
    public $taskParams;

    /**
     * @var string
     */
    public $taskType;

    /**
     * @var string
     */
    public $taskVersion;

    /**
     * @var string
     */
    public $workflowInstanceId;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'dryRun' => 'DryRun',
        'emrClusterId' => 'EmrClusterId',
        'endTime' => 'EndTime',
        'externalAppId' => 'ExternalAppId',
        'resourceGroupId' => 'ResourceGroupId',
        'retryTimes' => 'RetryTimes',
        'startTime' => 'StartTime',
        'status' => 'Status',
        'submitTime' => 'SubmitTime',
        'taskId' => 'TaskId',
        'taskInstanceId' => 'TaskInstanceId',
        'taskInstanceName' => 'TaskInstanceName',
        'taskParams' => 'TaskParams',
        'taskType' => 'TaskType',
        'taskVersion' => 'TaskVersion',
        'workflowInstanceId' => 'WorkflowInstanceId',
        'requestId' => 'requestId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
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

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        return $model;
    }
}
