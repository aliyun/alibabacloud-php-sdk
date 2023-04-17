<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeTaskAttributeResponseBody\operationProgressSet;
use AlibabaCloud\Tea\Model;

class DescribeTaskAttributeResponseBody extends Model
{
    /**
     * @description The time when the task was created.
     *
     * @example 2015-11-23T02:13Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description The number of failed tasks.
     *
     * @example 0
     *
     * @var int
     */
    public $failedCount;

    /**
     * @description The time when the task was complete.
     *
     * @example 2015-11-23T02:19Z
     *
     * @var string
     */
    public $finishedTime;

    /**
     * @description An array consisting of OperationProgress data of each subtask.
     *
     * @var operationProgressSet
     */
    public $operationProgressSet;

    /**
     * @description The region ID of the task.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the request.
     *
     * @example 473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The number of completed tasks.
     *
     * @example 1
     *
     * @var int
     */
    public $successCount;

    /**
     * @description Indicates whether the task can be canceled ([CancelTask](https://www.alibabacloud.com/help/en/elastic-compute-service/latest/canceltask)). Valid values:
     *
     * - false: The task cannot be canceled.
     * @example true
     *
     * @var string
     */
    public $supportCancel;

    /**
     * @description The operation name of the task.
     *
     * @example ExportImage
     *
     * @var string
     */
    public $taskAction;

    /**
     * @description The ID of the task.
     *
     * @example t-ce946ntx4wr****
     *
     * @var string
     */
    public $taskId;

    /**
     * @description The progress of the task.
     *
     * @example 100%
     *
     * @var string
     */
    public $taskProcess;

    /**
     * @description The status of the task.
     *
     * @example Finished
     *
     * @var string
     */
    public $taskStatus;

    /**
     * @description The total number of tasks.
     *
     * @example 1
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'creationTime'         => 'CreationTime',
        'failedCount'          => 'FailedCount',
        'finishedTime'         => 'FinishedTime',
        'operationProgressSet' => 'OperationProgressSet',
        'regionId'             => 'RegionId',
        'requestId'            => 'RequestId',
        'successCount'         => 'SuccessCount',
        'supportCancel'        => 'SupportCancel',
        'taskAction'           => 'TaskAction',
        'taskId'               => 'TaskId',
        'taskProcess'          => 'TaskProcess',
        'taskStatus'           => 'TaskStatus',
        'totalCount'           => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->failedCount) {
            $res['FailedCount'] = $this->failedCount;
        }
        if (null !== $this->finishedTime) {
            $res['FinishedTime'] = $this->finishedTime;
        }
        if (null !== $this->operationProgressSet) {
            $res['OperationProgressSet'] = null !== $this->operationProgressSet ? $this->operationProgressSet->toMap() : null;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->successCount) {
            $res['SuccessCount'] = $this->successCount;
        }
        if (null !== $this->supportCancel) {
            $res['SupportCancel'] = $this->supportCancel;
        }
        if (null !== $this->taskAction) {
            $res['TaskAction'] = $this->taskAction;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->taskProcess) {
            $res['TaskProcess'] = $this->taskProcess;
        }
        if (null !== $this->taskStatus) {
            $res['TaskStatus'] = $this->taskStatus;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeTaskAttributeResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['FailedCount'])) {
            $model->failedCount = $map['FailedCount'];
        }
        if (isset($map['FinishedTime'])) {
            $model->finishedTime = $map['FinishedTime'];
        }
        if (isset($map['OperationProgressSet'])) {
            $model->operationProgressSet = operationProgressSet::fromMap($map['OperationProgressSet']);
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SuccessCount'])) {
            $model->successCount = $map['SuccessCount'];
        }
        if (isset($map['SupportCancel'])) {
            $model->supportCancel = $map['SupportCancel'];
        }
        if (isset($map['TaskAction'])) {
            $model->taskAction = $map['TaskAction'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['TaskProcess'])) {
            $model->taskProcess = $map['TaskProcess'];
        }
        if (isset($map['TaskStatus'])) {
            $model->taskStatus = $map['TaskStatus'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
