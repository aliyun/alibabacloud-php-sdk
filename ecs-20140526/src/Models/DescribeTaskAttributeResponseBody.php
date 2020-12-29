<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeTaskAttributeResponseBody\operationProgressSet;
use AlibabaCloud\Tea\Model;

class DescribeTaskAttributeResponseBody extends Model
{
    /**
     * @var string
     */
    public $taskId;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $taskAction;

    /**
     * @var int
     */
    public $successCount;

    /**
     * @var string
     */
    public $taskStatus;

    /**
     * @var string
     */
    public $finishedTime;

    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var string
     */
    public $taskProcess;

    /**
     * @var string
     */
    public $supportCancel;

    /**
     * @var operationProgressSet
     */
    public $operationProgressSet;

    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var int
     */
    public $failedCount;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'taskId'               => 'TaskId',
        'requestId'            => 'RequestId',
        'taskAction'           => 'TaskAction',
        'successCount'         => 'SuccessCount',
        'taskStatus'           => 'TaskStatus',
        'finishedTime'         => 'FinishedTime',
        'totalCount'           => 'TotalCount',
        'taskProcess'          => 'TaskProcess',
        'supportCancel'        => 'SupportCancel',
        'operationProgressSet' => 'OperationProgressSet',
        'creationTime'         => 'CreationTime',
        'failedCount'          => 'FailedCount',
        'regionId'             => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->taskAction) {
            $res['TaskAction'] = $this->taskAction;
        }
        if (null !== $this->successCount) {
            $res['SuccessCount'] = $this->successCount;
        }
        if (null !== $this->taskStatus) {
            $res['TaskStatus'] = $this->taskStatus;
        }
        if (null !== $this->finishedTime) {
            $res['FinishedTime'] = $this->finishedTime;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->taskProcess) {
            $res['TaskProcess'] = $this->taskProcess;
        }
        if (null !== $this->supportCancel) {
            $res['SupportCancel'] = $this->supportCancel;
        }
        if (null !== $this->operationProgressSet) {
            $res['OperationProgressSet'] = null !== $this->operationProgressSet ? $this->operationProgressSet->toMap() : null;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->failedCount) {
            $res['FailedCount'] = $this->failedCount;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TaskAction'])) {
            $model->taskAction = $map['TaskAction'];
        }
        if (isset($map['SuccessCount'])) {
            $model->successCount = $map['SuccessCount'];
        }
        if (isset($map['TaskStatus'])) {
            $model->taskStatus = $map['TaskStatus'];
        }
        if (isset($map['FinishedTime'])) {
            $model->finishedTime = $map['FinishedTime'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['TaskProcess'])) {
            $model->taskProcess = $map['TaskProcess'];
        }
        if (isset($map['SupportCancel'])) {
            $model->supportCancel = $map['SupportCancel'];
        }
        if (isset($map['OperationProgressSet'])) {
            $model->operationProgressSet = operationProgressSet::fromMap($map['OperationProgressSet']);
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['FailedCount'])) {
            $model->failedCount = $map['FailedCount'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
