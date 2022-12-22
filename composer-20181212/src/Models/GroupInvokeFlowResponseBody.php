<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Composer\V20181212\Models;

use AlibabaCloud\Tea\Model;

class GroupInvokeFlowResponseBody extends Model
{
    /**
     * @description The number of times of execution that are pending.
     *
     * @example 10
     *
     * @var int
     */
    public $currentCount;

    /**
     * @description The unique identifier of the execution.
     *
     * @example 7bdbdb58-f028-4155-915e-f21e1f8fc48a
     *
     * @var string
     */
    public $groupInvocationId;

    /**
     * @description The ID of the request.
     *
     * @example 4F06F96E-D1F8-54ED-9611-4F621AD899B5
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The status of the group. Valid values:
     *
     *   New: The group is created and waiting to be executed.
     *   Started: The group is being executed.
     *   Canceled: The group was canceled.
     *   Failed: The execution failed.
     *   Completed: All the times of execution in the group are complete.
     *   Unknown: The group status is uncertain. In this case, a system error may occur.
     *   TimedOut: The execution timed out.
     *   Paused: The execution was suspended.
     *
     * @example Completed
     *
     * @var string
     */
    public $status;

    /**
     * @description Indicates whether the operation was successful.
     *
     *   **true**: The workflow execution is triggered.
     *   **false**: The workflow execution failed to be triggered.
     *
     * > : You can call the **GetInvocationLog** operation to check whether the workflow execution is successful.
     * @example true
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'currentCount'      => 'CurrentCount',
        'groupInvocationId' => 'GroupInvocationId',
        'requestId'         => 'RequestId',
        'status'            => 'Status',
        'success'           => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->currentCount) {
            $res['CurrentCount'] = $this->currentCount;
        }
        if (null !== $this->groupInvocationId) {
            $res['GroupInvocationId'] = $this->groupInvocationId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GroupInvokeFlowResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CurrentCount'])) {
            $model->currentCount = $map['CurrentCount'];
        }
        if (isset($map['GroupInvocationId'])) {
            $model->groupInvocationId = $map['GroupInvocationId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
