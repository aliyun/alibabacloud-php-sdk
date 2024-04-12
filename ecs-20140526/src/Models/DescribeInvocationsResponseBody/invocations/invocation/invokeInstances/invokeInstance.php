<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInvocationsResponseBody\invocations\invocation\invokeInstances;

use AlibabaCloud\Tea\Model;

class invokeInstance extends Model
{
    /**
     * @description The time when the command task was created.
     *
     * @example 2019-12-20T06:15:54Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description The size of the Output text that was truncated and discarded because the Output value exceeded 24 KB in size.
     *
     * @example 0
     *
     * @var int
     */
    public $dropped;

    /**
     * @description The error code for the failure to send or run the command. Valid values:
     *
     *   If this parameter is empty, the command was run as expected.
     *   InstanceNotExists: The specified instance did not exist or was released.
     *   InstanceReleased: The instance was released while the command was being run.
     *   InstanceNotRunning: The instance was not running when the command started to be run.
     *   CommandNotApplicable: The command was not applicable to the specified instance.
     *   AccountNotExists: The specified account did not exist.
     *   DirectoryNotExists: The specified directory did not exist.
     *   BadCronExpression: The specified cron expression for the execution schedule was invalid.
     *   ClientNotRunning: Cloud Assistant Agent was not running.
     *   ClientNotResponse: Cloud Assistant Agent did not respond.
     *   ClientIsUpgrading: Cloud Assistant Agent was being upgraded.
     *   ClientNeedUpgrade: Cloud Assistant Agent needed to be upgraded.
     *   DeliveryTimeout: The request to send the command timed out.
     *   ExecutionTimeout: The execution timed out.
     *   ExecutionException: An exception occurred while the command was being run.
     *   ExecutionInterrupted: The command task was interrupted.
     *   ExitCodeNonzero: The execution was complete, but the exit code was not 0.
     *
     * @example InstanceNotExists
     *
     * @var string
     */
    public $errorCode;

    /**
     * @description The error message returned when the command failed to be sent or run. Valid values:
     *
     *   If this parameter is empty, the command was run as expected.
     *   the specified instance does not exists
     *   the instance has released when create task
     *   the instance is not running when create task
     *   the command is not applicable
     *   the specified account does not exists
     *   the specified directory does not exists
     *   the cron job expression is invalid
     *   the aliyun service is not running on the instance
     *   the aliyun service in the instance does not response
     *   the aliyun service in the instance is upgrading now
     *   the aliyun service in the instance need upgrade
     *   the command delivery has been timeout
     *   the command execution has been timeout
     *   the command execution got an exception
     *   the command execution has been interrupted
     *   the command execution exit code is not zero
     *   the specified instance has been released
     *
     * @example the specified instance does not exists
     *
     * @var string
     */
    public $errorInfo;

    /**
     * @description The exit code of the execution. Valid values:
     *
     *   For Linux instances, the value is the exit code of the shell process.
     *   For Windows instances, the value is the exit code of the batch or PowerShell process.
     *
     * @example 0
     *
     * @var int
     */
    public $exitCode;

    /**
     * @description The time when the execution ended.
     *
     * @example 2019-12-20T06:15:56Z
     *
     * @var string
     */
    public $finishTime;

    /**
     * @description The instance ID.
     *
     * @example i-bp1i7gg30r52z2em****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The execution state on a single instance.
     *
     * >  We recommend that you ignore this parameter and check the value of `InvocationStatus` in the response to obtain the execution state.
     * @example Finished
     *
     * @var string
     */
    public $instanceInvokeStatus;

    /**
     * @description The execution state on a single instance. Valid values:
     *
     *   Pending: The command was being verified or sent.
     *
     *   Invalid: The specified command type or parameter was invalid.
     *
     *   Aborted: The command failed to be sent to the instance. To send a command to an instance, make sure that the instance is in the Running state and the command can be sent to the instance within 1 minute.
     *
     *   Running: The command was being run on the instance.
     *
     *   Success:
     *
     *   One-time task: The execution was complete, and the exit code was 0.
     *   Scheduled task: The last execution was complete, the exit code was 0, and the specified period ended.
     *
     *   Failed:
     *
     *   One-time task: The execution was complete, but the exit code was not 0.
     *   Scheduled task: The last execution was complete, but the exit code was not 0. The specified period is about to end.
     *
     *   Error: The execution cannot proceed due to an exception.
     *
     *   Timeout: The execution timed out.
     *
     *   Cancelled: The execution was canceled, and the command was not run.
     *
     *   Stopping: The command task was being stopped.
     *
     *   Terminated: The execution was terminated before completion.
     *
     *   Scheduled:
     *
     *   One-time task: The execution state can never be Scheduled.
     *   Scheduled task: The command was waiting to be run.
     *
     * @example Success
     *
     * @var string
     */
    public $invocationStatus;

    /**
     * @description The command output.
     *
     *   If ContentEncoding is set to PlainText in the request, the original command output is returned.
     *   If ContentEncoding is set to Base64 in the request, the Base64-encoded command output is returned.
     *
     * @example OutPutTestmsg
     *
     * @var string
     */
    public $output;

    /**
     * @description The number of times that the command was run on the instance.
     *
     *   If the command is set to run only once, the value is 0 or 1.
     *   If the command is set to run on a schedule, the value is the number of times that the command has been run on the instance.
     *
     * @example 0
     *
     * @var int
     */
    public $repeats;

    /**
     * @description The time when the command started to be run on the instance.
     *
     * @example 2019-12-20T06:15:55Z
     *
     * @var string
     */
    public $startTime;

    /**
     * @description The time when the command task was stopped. If you call the `StopInvocation` operation to stop the command task, the value of this parameter is the time when the operation is called.
     *
     * @example 2020-01-19T09:15:47Z
     *
     * @var string
     */
    public $stopTime;

    /**
     * @description Indicates whether the command is to be automatically run.
     *
     * @example false
     *
     * @var bool
     */
    public $timed;

    /**
     * @description The time when the execution status was updated.
     *
     * @example 2020-01-19T09:15:47Z
     *
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'creationTime'         => 'CreationTime',
        'dropped'              => 'Dropped',
        'errorCode'            => 'ErrorCode',
        'errorInfo'            => 'ErrorInfo',
        'exitCode'             => 'ExitCode',
        'finishTime'           => 'FinishTime',
        'instanceId'           => 'InstanceId',
        'instanceInvokeStatus' => 'InstanceInvokeStatus',
        'invocationStatus'     => 'InvocationStatus',
        'output'               => 'Output',
        'repeats'              => 'Repeats',
        'startTime'            => 'StartTime',
        'stopTime'             => 'StopTime',
        'timed'                => 'Timed',
        'updateTime'           => 'UpdateTime',
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
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceInvokeStatus) {
            $res['InstanceInvokeStatus'] = $this->instanceInvokeStatus;
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
        if (null !== $this->timed) {
            $res['Timed'] = $this->timed;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return invokeInstance
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
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
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceInvokeStatus'])) {
            $model->instanceInvokeStatus = $map['InstanceInvokeStatus'];
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
        if (isset($map['Timed'])) {
            $model->timed = $map['Timed'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
