<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeInvocationsResponseBody;

use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeInvocationsResponseBody\invocations\invokeDesktops;
use AlibabaCloud\Tea\Model;

class invocations extends Model
{
    /**
     * @description The Base64-encoded command content.
     *
     * @example cnBtIC1xYSB8IGdyZXAgdnNm****
     *
     * @var string
     */
    public $commandContent;

    /**
     * @description The type of the command.
     *
     * @example RunPowerShellScript
     *
     * @var string
     */
    public $commandType;

    /**
     * @description The time when the execution task is created.
     *
     * @example 2020-12-19T09:15:46Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description The ID of the end user.
     *
     * @example User1
     *
     * @var string
     */
    public $endUserId;

    /**
     * @description The overall execution status of the command. The value of this parameter depends on the execution status of the command on all the involved cloud computers. Valid values:
     *
     *   Pending: The command is being verified or sent. If the execution status is Pending on at least one cloud computer, the overall status is considered Pending.
     *
     *   Running: The command is being executed on cloud computers. If the execution status is Running on at least one cloud computer, the overall status is considered Running.
     *
     *   Success: If the execution status is Success on at least one cloud computer and either Success or Stopped on all other cloud computers, the overall status is considered Success.
     *
     *   Failed: If the execution status is Stopped or Failed on all cloud computers, the overall status is considered Failed. If any execution status on cloud computers matches one of the following values, Failed is returned.
     *
     *   Invalid: The command is invalid.
     *   Aborted: The command failed to be sent.
     *   Failed: The command is executed, but the exit code is not 0.
     *   Timeout: The command execution timed out.
     *   Error: An error occurred when the command is being executed.
     *
     *   Stopping: The command execution is being stopped. If the execution status is Stopping on at least one cloud computer, the overall status is considered Stopping.
     *
     *   Stopped: The command execution stops. If the execution status is Stopped on at least one cloud computer, the overall status is considered Stopped. If any execution status on cloud computers matches one of the following values, Stopped is returned.
     *
     *   Cancelled: The command execution is canceled.
     *   Terminated: The command execution is terminated.
     *
     *   PartialFailed: The command execution succeeded on some cloud computers but failed on others. If the execution status on any cloud computer is Success, Failed, or Stopped, the overall status is considered PartialFailed.
     *
     * @example Pending
     *
     * @var string
     */
    public $invocationStatus;

    /**
     * @description The total number of cloud computers on which the command is executed.
     *
     * @example 1
     *
     * @var int
     */
    public $invokeDesktopCount;

    /**
     * @description The total number of cloud computers on which the command execution succeeds.
     *
     * @example 1
     *
     * @var int
     */
    public $invokeDesktopSucceedCount;

    /**
     * @description The cloud computers on which the command is executed.
     *
     * @var invokeDesktops[]
     */
    public $invokeDesktops;

    /**
     * @description The ID of the execution.
     *
     * @example t-hz0jdfwd9f****
     *
     * @var string
     */
    public $invokeId;
    protected $_name = [
        'commandContent' => 'CommandContent',
        'commandType' => 'CommandType',
        'creationTime' => 'CreationTime',
        'endUserId' => 'EndUserId',
        'invocationStatus' => 'InvocationStatus',
        'invokeDesktopCount' => 'InvokeDesktopCount',
        'invokeDesktopSucceedCount' => 'InvokeDesktopSucceedCount',
        'invokeDesktops' => 'InvokeDesktops',
        'invokeId' => 'InvokeId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->commandContent) {
            $res['CommandContent'] = $this->commandContent;
        }
        if (null !== $this->commandType) {
            $res['CommandType'] = $this->commandType;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->endUserId) {
            $res['EndUserId'] = $this->endUserId;
        }
        if (null !== $this->invocationStatus) {
            $res['InvocationStatus'] = $this->invocationStatus;
        }
        if (null !== $this->invokeDesktopCount) {
            $res['InvokeDesktopCount'] = $this->invokeDesktopCount;
        }
        if (null !== $this->invokeDesktopSucceedCount) {
            $res['InvokeDesktopSucceedCount'] = $this->invokeDesktopSucceedCount;
        }
        if (null !== $this->invokeDesktops) {
            $res['InvokeDesktops'] = [];
            if (null !== $this->invokeDesktops && \is_array($this->invokeDesktops)) {
                $n = 0;
                foreach ($this->invokeDesktops as $item) {
                    $res['InvokeDesktops'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->invokeId) {
            $res['InvokeId'] = $this->invokeId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return invocations
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CommandContent'])) {
            $model->commandContent = $map['CommandContent'];
        }
        if (isset($map['CommandType'])) {
            $model->commandType = $map['CommandType'];
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['EndUserId'])) {
            $model->endUserId = $map['EndUserId'];
        }
        if (isset($map['InvocationStatus'])) {
            $model->invocationStatus = $map['InvocationStatus'];
        }
        if (isset($map['InvokeDesktopCount'])) {
            $model->invokeDesktopCount = $map['InvokeDesktopCount'];
        }
        if (isset($map['InvokeDesktopSucceedCount'])) {
            $model->invokeDesktopSucceedCount = $map['InvokeDesktopSucceedCount'];
        }
        if (isset($map['InvokeDesktops'])) {
            if (!empty($map['InvokeDesktops'])) {
                $model->invokeDesktops = [];
                $n = 0;
                foreach ($map['InvokeDesktops'] as $item) {
                    $model->invokeDesktops[$n++] = null !== $item ? invokeDesktops::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['InvokeId'])) {
            $model->invokeId = $map['InvokeId'];
        }

        return $model;
    }
}
