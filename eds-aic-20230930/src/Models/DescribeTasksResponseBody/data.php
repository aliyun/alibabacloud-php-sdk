<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models\DescribeTasksResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The error code.
     *
     * @example SendFileFailed
     *
     * @var string
     */
    public $errorCode;

    /**
     * @description The error message.
     *
     * @example connect error.
     *
     * @var string
     */
    public $errorMsg;

    /**
     * @description The total number of failed subtasks.
     *
     * @example 2
     *
     * @var int
     */
    public $failedChildCount;

    /**
     * @description The end time of the task.
     *
     * @example 2022-10-11T08:53:32Z
     *
     * @var string
     */
    public $finishTime;

    /**
     * @description The ID of the cloud phone instance.
     *
     * @example acp-uto81vfd8t8z****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The name of the cloud phone instance.
     *
     * @example defaultInstanceName
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description The state of the cloud phone instance.
     *
     * @example RUNNING
     *
     * @var string
     */
    public $instanceStatus;

    /**
     * @description The ID of the command execution.
     *
     * @example B8ED2BA9-0C6A-5643-818F-B5D60A64****
     *
     * @var string
     */
    public $invokeId;

    /**
     * @description The level of the task.
     *
     * @example 1
     *
     * @var int
     */
    public $level;

    /**
     * @description The operator.
     *
     * @example test
     *
     * @var string
     */
    public $operator;

    /**
     * @description The parameters of the task.
     *
     * @example param
     *
     * @var string
     */
    public $param;

    /**
     * @description The ID of the parent task.
     *
     * @example t-41oan3tza16vs****
     *
     * @var string
     */
    public $parentTaskId;

    /**
     * @description The ID of the region.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the resource.
     *
     * @example acp-25nt4kk9whhok****
     *
     * @var string
     */
    public $resourceId;

    /**
     * @description The execution result of the task.
     *
     * @example {\\"Success\\": True}
     *
     * @var string
     */
    public $result;

    /**
     * @description The total number of the subtasks that are running.
     *
     * @example 0
     *
     * @var int
     */
    public $runningChildCount;

    /**
     * @description The start time of the task.
     *
     * @example 2022-10-11T08:53:32Z
     *
     * @var string
     */
    public $startTime;

    /**
     * @description The total number of successfully executed subtasks.
     *
     * @example 98
     *
     * @var int
     */
    public $successChildCount;

    /**
     * @description The ID of the task.
     *
     * @example t-bp67acfmxazb4p****
     *
     * @var string
     */
    public $taskId;

    /**
     * @description The state of the task.
     *
     * @example Processing
     *
     * @var string
     */
    public $taskStatus;

    /**
     * @description The type of the task.
     *
     * @example StartInstance
     *
     * @var string
     */
    public $taskType;

    /**
     * @description The total number of subtasks of the current batch task.
     *
     * @example 100
     *
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

    public function validate() {}

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return data
     */
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
