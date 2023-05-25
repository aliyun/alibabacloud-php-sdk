<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInvocationsResponseBody\invocations\invocation\invokeInstances;

use AlibabaCloud\Tea\Model;

class invokeInstance extends Model
{
    /**
     * @description The start time of the execution.
     *
     * @example 2019-12-20T06:15:54Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description The size of the text that is truncated and discarded when the Output value exceeds 24 KB in size.
     *
     * @example 0
     *
     * @var int
     */
    public $dropped;

    /**
     * @description The code that indicates why the command failed to be sent or run. Valid values:
     *
     *   If this parameter is empty, the command is run normally.
     *   InstanceNotExists: The instance does not exist or was released.
     *   InstanceReleased: The instance was released while the command was being run.
     *   InstanceNotRunning: The instance was not in the Running state while the command started to be run.
     *   CommandNotApplicable: The command is not applicable to the specified instance.
     *   AccountNotExists: The specified account does not exist.
     *   DirectoryNotExists: The specified directory does not exist.
     *   BadCronExpression: The cron expression used to specify a schedule is invalid.
     *   ClientNotRunning: The Cloud Assistant client is not running.
     *   ClientNotResponse: The Cloud Assistant client does not respond.
     *   ClientIsUpgrading: The Cloud Assistant client is being upgraded.
     *   ClientNeedUpgrade: The Cloud Assistant client needs to be upgraded.
     *   DeliveryTimeout: The request to send the command timed out.
     *   ExecutionTimeout: The execution timed out.
     *   ExecutionException: An exception occurs while the command is being run.
     *   ExecutionInterrupted: The execution was interrupted.
     *   ExitCodeNonzero: The execution is complete, but the exit code is not 0.
     *
     * @example InstanceNotExists
     *
     * @var string
     */
    public $errorCode;

    /**
     * @description Details about the reason why the command failed to be sent or run. Valid values:
     *
     *   If this parameter is empty, the execution is normal.
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
     *   the aliyun service in the instance is upgrading now
     *   the command delivery has been timeout
     *   the command execution has been timeout
     *   the command execution got an exception
     *   the command execution has been interrupted
     *   the command execution exit code is not zero
     *
     * @example the specified instance does not exists
     *
     * @var string
     */
    public $errorInfo;

    /**
     * @description The exit code of the execution. Valid values:
     *
     *   For Linux instances, the exit code is the exit code of the shell process.
     *   For Windows instances, the exit code is the exit code of the batch or PowerShell process.
     *
     * @example 0
     *
     * @var int
     */
    public $exitCode;

    /**
     * @description The end time of the execution.
     *
     * @example 2019-12-20T06:15:56Z
     *
     * @var string
     */
    public $finishTime;

    /**
     * @description The instance ID
     *
     * @example i-bp1i7gg30r52z2em****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The execution state on a single instance.
     *
     * > We recommend that you ignore this parameter and check the value of the `InvocationStatus` response parameter for the overall execution state.
     * @example Finished
     *
     * @var string
     */
    public $instanceInvokeStatus;

    /**
     * @description The execution state on a single instance. Valid values:
     *
     *   Pending: The command is being verified or sent.
     *
     *   Invalid: The specified command type or parameter is invalid.
     *
     *   Aborted: The command failed to be sent. To send a command to an instance, make sure that the instance is in the Running state and that the command is sent within 1 minute.
     *
     *   Running: The command is being run on the instance.
     *
     *   Success:
     *
     *   Command that is set to run only once: The execution is complete, and the exit code is 0.
     *   Command that is set to run on a schedule: The previous execution is complete, the exit code is 0, and the specified cycle ends.
     *
     *   Failed:
     *
     *   Command that is set to run only once: The execution is complete, but the exit code is not 0.
     *   Command that is set to run on a schedule: The previous execution is complete, the exit code is not 0, and the specified cycle is about to end.
     *
     *   Error: The execution cannot proceed due to an exception.
     *
     *   Timeout: The execution times out.
     *
     *   Cancelled: The execution is canceled, and the command is not started.
     *
     *   Stopping: The command task is being stopped.
     *
     *   Terminated: The command task is terminated while it is being run.
     *
     *   Scheduled:
     *
     *   Command that is set to run only once: The overall execution state can never be Scheduled.
     *   Command that is set to run on a schedule: The command is pending execution.
     *
     * @example Success
     *
     * @var string
     */
    public $invocationStatus;

    /**
     * @description The command output.
     *
     * @example OutPutTestmsg
     *
     * @var string
     */
    public $output;

    /**
     * @description The number of times that the command is run on the instance.
     *
     *   If the execution is a one-time execution, the value is 0 or 1.
     *   If the execution is a scheduled execution, the value is the number of times that the command is run.
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
     * @description The time when the command stopped being run on the instance. If you call the `StopInvocation` operation to manually stop the execution, the value is the time when you called the operation.
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
     * @description The time when the execution state was updated.
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
