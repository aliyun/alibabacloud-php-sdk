<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EmrStudio\V20231009\Models;

use AlibabaCloud\Tea\Model;

class DescribeTaskInstanceResponseBody extends Model
{
    /**
     * @description 空跑标识
     *
     * @example 0
     *
     * @var string
     */
    public $dryRun;

    /**
     * @description EMR集群ID
     *
     * @example c-b933c5aac7f7***
     *
     * @var string
     */
    public $emrClusterId;

    /**
     * @description 结束时间
     *
     * @example 2024-03-27 00:00:00
     *
     * @var string
     */
    public $endTime;

    /**
     * @description 外部应用ID
     *
     * @example application_123_***
     *
     * @var string
     */
    public $externalAppId;

    /**
     * @description 资源组ID
     *
     * @example wg-123abc***
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description 重试次数
     *
     * @example 0
     *
     * @var int
     */
    public $retryTimes;

    /**
     * @description 开始时间
     *
     * @example 2024-03-27 00:00:00
     *
     * @var string
     */
    public $startTime;

    /**
     * @description 状态
     *
     * @example SUCCESS
     *
     * @var string
     */
    public $status;

    /**
     * @description 提交时间
     *
     * @example 2024-03-27 00:00:00
     *
     * @var string
     */
    public $submitTime;

    /**
     * @description 任务ID
     *
     * @example 123***
     *
     * @var string
     */
    public $taskId;

    /**
     * @description 任务实例ID
     *
     * @example 123abc***
     *
     * @var string
     */
    public $taskInstanceId;

    /**
     * @description 任务实例名称
     *
     * @example test
     *
     * @var string
     */
    public $taskInstanceName;

    /**
     * @description 任务参数
     *
     * @example {
     * }
     * @var string
     */
    public $taskParams;

    /**
     * @description 任务类型
     *
     * @example SHELL
     *
     * @var string
     */
    public $taskType;

    /**
     * @description 任务版本
     *
     * @example 1
     *
     * @var string
     */
    public $taskVersion;

    /**
     * @description 工作流实例ID
     *
     * @example 123abc***
     *
     * @var string
     */
    public $workflowInstanceId;

    /**
     * @description Id of the request
     *
     * @example DD6B1B2A-5837-5237-ABE4-FF0C8944****
     *
     * @var string
     */
    public $requestId;
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
        'requestId'          => 'requestId',
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
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeTaskInstanceResponseBody
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
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        return $model;
    }
}
