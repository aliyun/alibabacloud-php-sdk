<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models\DescribeTasksResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $errorCode;

    /**
     * @var string
     */
    public $errorMsg;

    /**
     * @var int
     */
    public $failedChildCount;

    /**
     * @var string
     */
    public $finishTime;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var string
     */
    public $instanceStatus;

    /**
     * @var string
     */
    public $invokeId;

    /**
     * @var int
     */
    public $level;

    /**
     * @var string
     */
    public $operator;

    /**
     * @var string
     */
    public $param;

    /**
     * @var string
     */
    public $parentTaskId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceId;

    /**
     * @var string
     */
    public $result;

    /**
     * @var int
     */
    public $runningChildCount;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var int
     */
    public $successChildCount;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var string
     */
    public $taskStatus;

    /**
     * @var string
     */
    public $taskType;

    /**
     * @var int
     */
    public $totalChildCount;
    protected $_name = [
        'errorCode' => 'ErrorCode',
        'errorMsg' => 'ErrorMsg',
        'failedChildCount' => 'FailedChildCount',
        'finishTime' => 'FinishTime',
        'instanceId' => 'InstanceId',
        'instanceName' => 'InstanceName',
        'instanceStatus' => 'InstanceStatus',
        'invokeId' => 'InvokeId',
        'level' => 'Level',
        'operator' => 'Operator',
        'param' => 'Param',
        'parentTaskId' => 'ParentTaskId',
        'regionId' => 'RegionId',
        'resourceId' => 'ResourceId',
        'result' => 'Result',
        'runningChildCount' => 'RunningChildCount',
        'startTime' => 'StartTime',
        'successChildCount' => 'SuccessChildCount',
        'taskId' => 'TaskId',
        'taskStatus' => 'TaskStatus',
        'taskType' => 'TaskType',
        'totalChildCount' => 'TotalChildCount',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }

        if (null !== $this->errorMsg) {
            $res['ErrorMsg'] = $this->errorMsg;
        }

        if (null !== $this->failedChildCount) {
            $res['FailedChildCount'] = $this->failedChildCount;
        }

        if (null !== $this->finishTime) {
            $res['FinishTime'] = $this->finishTime;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }

        if (null !== $this->instanceStatus) {
            $res['InstanceStatus'] = $this->instanceStatus;
        }

        if (null !== $this->invokeId) {
            $res['InvokeId'] = $this->invokeId;
        }

        if (null !== $this->level) {
            $res['Level'] = $this->level;
        }

        if (null !== $this->operator) {
            $res['Operator'] = $this->operator;
        }

        if (null !== $this->param) {
            $res['Param'] = $this->param;
        }

        if (null !== $this->parentTaskId) {
            $res['ParentTaskId'] = $this->parentTaskId;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }

        if (null !== $this->result) {
            $res['Result'] = $this->result;
        }

        if (null !== $this->runningChildCount) {
            $res['RunningChildCount'] = $this->runningChildCount;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->successChildCount) {
            $res['SuccessChildCount'] = $this->successChildCount;
        }

        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        if (null !== $this->taskStatus) {
            $res['TaskStatus'] = $this->taskStatus;
        }

        if (null !== $this->taskType) {
            $res['TaskType'] = $this->taskType;
        }

        if (null !== $this->totalChildCount) {
            $res['TotalChildCount'] = $this->totalChildCount;
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
        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }

        if (isset($map['ErrorMsg'])) {
            $model->errorMsg = $map['ErrorMsg'];
        }

        if (isset($map['FailedChildCount'])) {
            $model->failedChildCount = $map['FailedChildCount'];
        }

        if (isset($map['FinishTime'])) {
            $model->finishTime = $map['FinishTime'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }

        if (isset($map['InstanceStatus'])) {
            $model->instanceStatus = $map['InstanceStatus'];
        }

        if (isset($map['InvokeId'])) {
            $model->invokeId = $map['InvokeId'];
        }

        if (isset($map['Level'])) {
            $model->level = $map['Level'];
        }

        if (isset($map['Operator'])) {
            $model->operator = $map['Operator'];
        }

        if (isset($map['Param'])) {
            $model->param = $map['Param'];
        }

        if (isset($map['ParentTaskId'])) {
            $model->parentTaskId = $map['ParentTaskId'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }

        if (isset($map['Result'])) {
            $model->result = $map['Result'];
        }

        if (isset($map['RunningChildCount'])) {
            $model->runningChildCount = $map['RunningChildCount'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['SuccessChildCount'])) {
            $model->successChildCount = $map['SuccessChildCount'];
        }

        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        if (isset($map['TaskStatus'])) {
            $model->taskStatus = $map['TaskStatus'];
        }

        if (isset($map['TaskType'])) {
            $model->taskType = $map['TaskType'];
        }

        if (isset($map['TotalChildCount'])) {
            $model->totalChildCount = $map['TotalChildCount'];
        }

        return $model;
    }
}
