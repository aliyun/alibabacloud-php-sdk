<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeInvocationsResponseBody\invocations;

use AlibabaCloud\Tea\Model;

class invokeDesktops extends Model
{
    /**
     * @description The time when the command execution was performed.
     *
     * @example 2020-12-20T06:15:54Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description The cloud computer ID.
     *
     * @example ecd-7w78ozhjcwa3u****
     *
     * @var string
     */
    public $desktopId;

    /**
     * @description The cloud computer name.
     *
     * @example demo1234
     *
     * @var string
     */
    public $desktopName;

    /**
     * @description The size of the text that is truncated and discarded when the Output value exceeds 24 KB in size.
     *
     * @example 0
     *
     * @var int
     */
    public $dropped;

    /**
     * @description The code explaining why the command failed to be sent or executed. Valid values:
     *
     *   Null: The command is executed successfully.
     *   InstanceNotExists: The specified cloud computer does not exist or is released.
     *   InstanceReleased: The cloud computer is released during the execution.
     *   InstanceNotRunning: The cloud computer is not running during the execution.
     *   CommandNotApplicable: The command cannot be executed on the specified cloud computer.
     *   ClientNotRunning: The Cloud Assistant agent is not running.
     *   ClientNotResponse: The Cloud Assistant agent does not respond.
     *   ClientIsUpgrading: The Cloud Assistant agent is being updated.
     *   ClientNeedUpgrade: The Cloud Assistant agent needs to be updated.
     *   DeliveryTimeout: The command sending times out.
     *   ExecutionTimeout: The command execution times out.
     *   ExecutionException: An exception occurs when the command is being executed.
     *   ExecutionInterrupted: The command execution is interrupted.
     *   ExitCodeNonzero: The command execution completes, but the exit code is not 0.
     *
     * @example InstanceNotExists
     *
     * @var string
     */
    public $errorCode;

    /**
     * @description The message explaining why the command failed to be sent or executed. Valid values:
     *
     *   Null: The command is executed successfully.
     *   the specified instance does not exists: The specified cloud computer does not exist or is released.
     *   the instance has released when create task: The cloud computer is released during the execution.
     *   the instance is not running when create task: The cloud computer is not running during the execution.
     *   the command is not applicable: The command cannot be executed on the specified cloud computer.
     *   the aliyun service is not running on the instance: The Cloud Assistant agent is not running.
     *   the aliyun service in the instance does not response: The Cloud Assistant agent does not respond.
     *   the aliyun service in the instance is upgrading now: The Cloud Assistant agent is being updated.
     *   the aliyun service in the instance need upgrade: The Cloud Assistant agent needs to be updated.
     *   the command delivery has been timeout: The command sending times out.
     *   the command execution has been timeout: The command execution times out.
     *   the command execution got an exception: An exception occurs when the command is being executed.
     *   the command execution has been interrupted: The command execution is interrupted.
     *   the command execution exit code is not zero: The command execution completes, but the exit code is not 0.
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
     * @description The time when the command execution ended.
     *
     * @example 2020-12-20T06:15:56Z
     *
     * @var string
     */
    public $finishTime;

    /**
     * @description The execution progress of the command on a single cloud computer.
     *
     * @example Success
     *
     * @var string
     */
    public $invocationStatus;

    /**
     * @description The command output.
     *
     *   When the `IncludeOutput` parameter is set to false, the output is not returned.
     *   When the `ContentEncoding` parameter is set to Base64, the output is returned as a Base64-encoded string.
     *
     * @example OutPutTestmsg
     *
     * @var string
     */
    public $output;

    /**
     * @description The number of times the command has been executed on the cloud computer.
     *
     * @example 0
     *
     * @var int
     */
    public $repeats;

    /**
     * @description The start time of the command execution.
     *
     * @example 2020-12-20T06:15:55Z
     *
     * @var string
     */
    public $startTime;

    /**
     * @description The stop time of the command execution (StopInvocatio).
     *
     * @example 2020-12-25T09:15:47Z
     *
     * @var string
     */
    public $stopTime;

    /**
     * @description The time when the execution status was updated.
     *
     * @example 2020-12-25T06:15:56Z
     *
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'creationTime' => 'CreationTime',
        'desktopId' => 'DesktopId',
        'desktopName' => 'DesktopName',
        'dropped' => 'Dropped',
        'errorCode' => 'ErrorCode',
        'errorInfo' => 'ErrorInfo',
        'exitCode' => 'ExitCode',
        'finishTime' => 'FinishTime',
        'invocationStatus' => 'InvocationStatus',
        'output' => 'Output',
        'repeats' => 'Repeats',
        'startTime' => 'StartTime',
        'stopTime' => 'StopTime',
        'updateTime' => 'UpdateTime',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->desktopId) {
            $res['DesktopId'] = $this->desktopId;
        }
        if (null !== $this->desktopName) {
            $res['DesktopName'] = $this->desktopName;
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
        if (isset($map['DesktopName'])) {
            $model->desktopName = $map['DesktopName'];
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
