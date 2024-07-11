<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models;

use AlibabaCloud\Tea\Model;

class NotifyExecutionRequest extends Model
{
    /**
     * @description The ID of the execution.
     *
     * This parameter is required.
     * @example exec-xxx
     *
     * @var string
     */
    public $executionId;

    /**
     * @description The state of the terminated execution. This parameter is valid if you set the NotifyType parameter to CompleteExecution.
     *
     * @example Success
     *
     * @var string
     */
    public $executionStatus;

    /**
     * @description The items of the child node in the loop task.
     *
     * @example i-xxx
     *
     * @var string
     */
    public $loopItem;

    /**
     * @description The description for the notification.
     *
     * @example Note
     *
     * @var string
     */
    public $notifyNote;

    /**
     * @description The type of the notification. Valid values:
     *
     *   **ExecuteTask**: starts to run a specific task. This value is used if you perform debugging in the Debug mode. If you set this parameter to ExecuteTask, you also need to set the Parameters parameter.
     *   **CancelTask**: cancels a current task. This value is used if you perform debugging in the Debug mode.
     *   **CompleteExecution**: manually terminates an execution if you perform debugging in the Debug mode. You can specify the state of the terminated execution by using the **ExecutionStatus** parameter.
     *   **Approve**: approves an execution. For example, you are aware of the risks of an operation task and agree to approve the execution.
     *   **Reject**: rejects an execution. For example, you want to reject the execution of a high-risk operation task.
     *   **RetryTask**: retries a failed task whose execution mode is Suspend upon Failure.
     *   **SkipTask**: skips a failed task whose execution mode is Suspend upon Failure.
     *
     * This parameter is required.
     * @example Approve
     *
     * @var string
     */
    public $notifyType;

    /**
     * @description The parameters of the subsequent task. This parameter is valid if you set the NotifyType parameter to ExecuteTask.
     *
     * @example {}
     *
     * @var string
     */
    public $parameters;

    /**
     * @description The ID of the region in which the execution resides.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The execution ID of the task.
     *
     * @example task-exec-xxx
     *
     * @var string
     */
    public $taskExecutionId;

    /**
     * @description The execution IDs of the tasks.
     *
     * @example ["exec-79c321c11003a97c","exec-79c321c11003aqw97cz"]
     *
     * @var string
     */
    public $taskExecutionIds;

    /**
     * @description The name of the subsequent task.
     *
     * @example describeInstance
     *
     * @var string
     */
    public $taskName;
    protected $_name = [
        'executionId'      => 'ExecutionId',
        'executionStatus'  => 'ExecutionStatus',
        'loopItem'         => 'LoopItem',
        'notifyNote'       => 'NotifyNote',
        'notifyType'       => 'NotifyType',
        'parameters'       => 'Parameters',
        'regionId'         => 'RegionId',
        'taskExecutionId'  => 'TaskExecutionId',
        'taskExecutionIds' => 'TaskExecutionIds',
        'taskName'         => 'TaskName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->executionId) {
            $res['ExecutionId'] = $this->executionId;
        }
        if (null !== $this->executionStatus) {
            $res['ExecutionStatus'] = $this->executionStatus;
        }
        if (null !== $this->loopItem) {
            $res['LoopItem'] = $this->loopItem;
        }
        if (null !== $this->notifyNote) {
            $res['NotifyNote'] = $this->notifyNote;
        }
        if (null !== $this->notifyType) {
            $res['NotifyType'] = $this->notifyType;
        }
        if (null !== $this->parameters) {
            $res['Parameters'] = $this->parameters;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->taskExecutionId) {
            $res['TaskExecutionId'] = $this->taskExecutionId;
        }
        if (null !== $this->taskExecutionIds) {
            $res['TaskExecutionIds'] = $this->taskExecutionIds;
        }
        if (null !== $this->taskName) {
            $res['TaskName'] = $this->taskName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return NotifyExecutionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExecutionId'])) {
            $model->executionId = $map['ExecutionId'];
        }
        if (isset($map['ExecutionStatus'])) {
            $model->executionStatus = $map['ExecutionStatus'];
        }
        if (isset($map['LoopItem'])) {
            $model->loopItem = $map['LoopItem'];
        }
        if (isset($map['NotifyNote'])) {
            $model->notifyNote = $map['NotifyNote'];
        }
        if (isset($map['NotifyType'])) {
            $model->notifyType = $map['NotifyType'];
        }
        if (isset($map['Parameters'])) {
            $model->parameters = $map['Parameters'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['TaskExecutionId'])) {
            $model->taskExecutionId = $map['TaskExecutionId'];
        }
        if (isset($map['TaskExecutionIds'])) {
            $model->taskExecutionIds = $map['TaskExecutionIds'];
        }
        if (isset($map['TaskName'])) {
            $model->taskName = $map['TaskName'];
        }

        return $model;
    }
}
