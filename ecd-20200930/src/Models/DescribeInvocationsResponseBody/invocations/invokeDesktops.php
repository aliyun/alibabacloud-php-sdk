<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeInvocationsResponseBody\invocations;

use AlibabaCloud\Tea\Model;

class invokeDesktops extends Model
{
    /**
     * @description The time when the command execution was created.
     *
     * @example 2020-12-20T06:15:54Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description The ID of the cloud desktop.
     *
     * @example ecd-7w78ozhjcwa3u****
     *
     * @var string
     */
    public $desktopId;

    /**
     * @description The size of the text that is truncated and discarded when the value of the Output parameter exceeds 24 KB in size.
     *
     * @example 0
     *
     * @var int
     */
    public $dropped;

    /**
     * @description The error code that is returned if the command failed to be sent or run.
     *
     *   If null is returned, the command is run normally.
     *   If InstanceNotExists is returned, the specified cloud desktop does not exist or is released.
     *   If InstanceReleased is returned, the specified cloud desktop is released during the command execution.
     *   If InstanceNotRunning is returned, the specified cloud desktop is not in the Running state when the execution is created.
     *   If CommandNotApplicable is returned, the command cannot be run on the specified cloud desktop.
     *   If ClientNotRunning is returned, Cloud Assistant is not running.
     *   If ClientNotResponse is returned, Cloud Assistant does not respond to your request.
     *   If ClientIsUpgrading is returned, Cloud Assistant is being upgraded.
     *   If ClientNeedUpgrade is returned, you must upgrade Cloud Assistant.
     *   If DeliveryTimeout is returned, the operation to send the command times out.
     *   If ExecutionTimeout is returned, the command execution times out.
     *   If ExecutionException is returned, an execution occurs during the command execution.
     *   If ExecutionInterrupted is returned, the command execution is interrupted.
     *   If ExitCodeNonzero is returned, the command execution is complete, but the exit code is not 0.
     *
     * @example InstanceNotExists
     *
     * @var string
     */
    public $errorCode;

    /**
     * @description The error message that is returned if the command failed to be sent or run.
     *
     *   If null is returned, the command is run normally.
     *   If "the specified instance does not exist" is returned, the specified cloud desktop does not exist or is released.
     *   If "the instance has released when create task" is returned, the specified cloud desktop is released during the command execution.
     *   If "the instance is not running when create task" is returned, the specified cloud desktop is not in the Running state when the execution is created.
     *   If "the command is not applicable" is returned, the command cannot be run on the specified cloud desktop.
     *   If "the aliyun service is not running on the instance" is returned, Cloud Assistant is not running.
     *   If "the aliyun service in the instance does not response" is returned, Cloud Assistant does not respond to your request.
     *   If "the aliyun service in the instance is upgrading now" is returned, Cloud Assistant is being upgraded.
     *   If "the aliyun service in the instance need upgrade" is returned, you must upgrade Cloud Assistant.
     *   If "the command delivery has been timeout" is returned, the operation to send the command times out.
     *   If "the command execution has been timeout" is returned, the command execution times out.
     *   If "the command execution got an exception" is returned, an exception occurs during the command execution.
     *   If "the command execution has been interrupted" is returned, the command execution is interrupted.
     *   If "the command execution exit code is not zero" is returned, the command execution is complete, but the exit code is not 0.
     *
     * @example The specified instance does not exist.
     *
     * @var string
     */
    public $errorInfo;

    /**
     * @description The exit code of the execution.
     *
     * @example 0
     *
     * @var int
     */
    public $exitCode;

    /**
     * @description The end time of the command execution.
     *
     * @example 2020-12-20T06:15:56Z
     *
     * @var string
     */
    public $finishTime;

    /**
     * @description The execution status on a cloud desktop.
     *
     * @example Success
     *
     * @var string
     */
    public $invocationStatus;

    /**
     * @description The command output.
     *
     *   If the IncludeOutput parameter is set to false, no value of the Output parameter is returned.
     *   If the ContentEncoding parameter is set to Base64, the value of the Output parameter is encoded in Base64.
     *
     * @example OutPutTestmsg
     *
     * @var string
     */
    public $output;

    /**
     * @description The number of times that the command is run on the cloud desktop.
     *
     * @example 0
     *
     * @var int
     */
    public $repeats;

    /**
     * @description The start time of the command execution on the cloud desktop.
     *
     * @example 2020-12-20T06:15:55Z
     *
     * @var string
     */
    public $startTime;

    /**
     * @description If you called the [stopInvocation](~~196957~~) operation, the value of this parameter indicates the time when you made the call.
     *
     * @example 2020-12-25T09:15:47Z
     *
     * @var string
     */
    public $stopTime;

    /**
     * @description The time when the execution status was last updated.
     *
     * @example 2020-12-25T06:15:56Z
     *
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'creationTime'     => 'CreationTime',
        'desktopId'        => 'DesktopId',
        'dropped'          => 'Dropped',
        'errorCode'        => 'ErrorCode',
        'errorInfo'        => 'ErrorInfo',
        'exitCode'         => 'ExitCode',
        'finishTime'       => 'FinishTime',
        'invocationStatus' => 'InvocationStatus',
        'output'           => 'Output',
        'repeats'          => 'Repeats',
        'startTime'        => 'StartTime',
        'stopTime'         => 'StopTime',
        'updateTime'       => 'UpdateTime',
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
        if (null !== $this->desktopId) {
            $res['DesktopId'] = $this->desktopId;
        }
        if (null !== $this->dropped) {
            $res['Dropped'] = $this->dropped;
        }
        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }
        if (null !== $this->errorInfo) {
            $res['ErrorInfo'] = $this->errorInfo;
        }
        if (null !== $this->exitCode) {
            $res['ExitCode'] = $this->exitCode;
        }
        if (null !== $this->finishTime) {
            $res['FinishTime'] = $this->finishTime;
        }
        if (null !== $this->invocationStatus) {
            $res['InvocationStatus'] = $this->invocationStatus;
        }
        if (null !== $this->output) {
            $res['Output'] = $this->output;
        }
        if (null !== $this->repeats) {
            $res['Repeats'] = $this->repeats;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->stopTime) {
            $res['StopTime'] = $this->stopTime;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return invokeDesktops
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['DesktopId'])) {
            $model->desktopId = $map['DesktopId'];
        }
        if (isset($map['Dropped'])) {
            $model->dropped = $map['Dropped'];
        }
        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }
        if (isset($map['ErrorInfo'])) {
            $model->errorInfo = $map['ErrorInfo'];
        }
        if (isset($map['ExitCode'])) {
            $model->exitCode = $map['ExitCode'];
        }
        if (isset($map['FinishTime'])) {
            $model->finishTime = $map['FinishTime'];
        }
        if (isset($map['InvocationStatus'])) {
            $model->invocationStatus = $map['InvocationStatus'];
        }
        if (isset($map['Output'])) {
            $model->output = $map['Output'];
        }
        if (isset($map['Repeats'])) {
            $model->repeats = $map['Repeats'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['StopTime'])) {
            $model->stopTime = $map['StopTime'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
