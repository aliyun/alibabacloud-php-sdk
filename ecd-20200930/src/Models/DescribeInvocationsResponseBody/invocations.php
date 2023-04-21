<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeInvocationsResponseBody;

use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeInvocationsResponseBody\invocations\invokeDesktops;
use AlibabaCloud\Tea\Model;

class invocations extends Model
{
    /**
     * @description The command content that is encoded in Base64.
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
     * @description The time when the task was created.
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
     * @description The overall execution status of the command. The overall execution status is determined by the execution status of the command on all related cloud desktops. Valid values:
     *
     *   Pending: The system is verifying or sending the command. If the execution status on at least one cloud desktop is Pending, the overall execution status is Pending.
     *
     *   Running: The execution is in progress on cloud desktops. If the execution status on at least one cloud desktop is Running, the overall execution status is Running.
     *
     *   Success: If the execution status on at least one cloud desktop is Success, and the execution status on other cloud desktops is Success or Stopped, the overall execution status is Success.
     *
     *   Failed: If the execution status on all cloud desktops is Stopped or Failed, the overall execution status is Failed. If one or more execution status on a cloud desktop is one of the following values, Failed is returned:
     *
     *   Invalid: The command is invalid.
     *   Aborted: The command failed to be sent.
     *   Failed: The execution is complete, but the exit code is not 0.
     *   Timeout: The execution times out.
     *   Error: An error occurs when the execution is in progress.
     *
     *   Stopping: The execution is being stopped. If the execution status on at least one cloud desktop is Stopping, the overall execution status is Stopping.
     *
     *   Stopped: The execution is stopped. If the execution status on all cloud desktops is Stopped, the overall execution status is Stopped. If the execution status on a cloud desktop is one of the following values, Stopped is returned:
     *
     *   Cancelled: The execution is canceled.
     *   Terminated: The execution is terminated.
     *
     *   PartialFailed: The execution is successful on specific cloud desktops and failed on other cloud desktops. If the execution status on different cloud desktops includes Success, Failed, and Stopped, the overall execution status is PartialFailed.
     *
     * @example Pending
     *
     * @var string
     */
    public $invocationStatus;

    /**
     * @description The cloud desktops on which the command is run.
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
        'commandContent'   => 'CommandContent',
        'commandType'      => 'CommandType',
        'creationTime'     => 'CreationTime',
        'endUserId'        => 'EndUserId',
        'invocationStatus' => 'InvocationStatus',
        'invokeDesktops'   => 'InvokeDesktops',
        'invokeId'         => 'InvokeId',
    ];

    public function validate()
    {
    }

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
        if (isset($map['InvokeDesktops'])) {
            if (!empty($map['InvokeDesktops'])) {
                $model->invokeDesktops = [];
                $n                     = 0;
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
