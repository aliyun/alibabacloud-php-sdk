<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SWASOPEN\V20200601\Models\DescribeCommandInvocationsResponseBody\commandInvocations;

use AlibabaCloud\Tea\Model;

class invokeInstances extends Model
{
    /**
     * @description The error code returned if the command failed to be sent or run.
     *
     *   null: The command is run as expected.
     *   InstanceNotExists: The specified instance does not exist or is released.
     *   InstanceReleased: The instance is released when the command is being run.
     *   InstanceNotRunning: The instance is not in the Running state when the command is being run.
     *   CommandNotApplicable: The command is not applicable to the specified instance.
     *   AccountNotExists: The specified account does not exist.
     *   DirectoryNotExists: The specified directory does not exist.
     *   BadCronExpression: The specified CRON expression for the execution schedule is invalid.
     *   ClientNotRunning: Cloud Assistant Agent is not running.
     *   ClientNotResponse: Cloud Assistant Agent does not respond to your request.
     *   ClientIsUpgrading: Cloud Assistant Agent is being updated.
     *   ClientNeedUpgrade: Cloud Assistant Agent needs to be updated.
     *   DeliveryTimeout: The request to send the command timed out.
     *   ExecutionTimeout: The command execution timed out.
     *   ExecutionException: An exception occurred when the command was being run.
     *   ExecutionInterrupted: The command execution is interrupted.
     *   ExitCodeNonzero: The command execution is complete, and the exit code is not 0.
     *
     * @example InstanceNotExists
     *
     * @var string
     */
    public $errorCode;

    /**
     * @description The error message returned if the command failed to be sent or run. Valid values:
     *
     *   null: The command is run as expected.
     *   the specified instance does not exists: The specified instance does not exist or is released.
     *   the instance has released when create task: The instance is released when the command is being run.
     *   the instance is not running when create task: The instance is not in the Running state when the command is being run.
     *   the command is not applicable: The command is not applicable to the specified instance.
     *   the specified account does not exists: The specified account does not exist.
     *   the specified directory does not exists: The specified directory does not exist.
     *   the cron job expression is invalid: The specified CRON expression for the execution schedule is invalid.
     *   the aliyun service is not running on the instance: Cloud Assistant Agent is not running.
     *   the aliyun service in the instance does not response: Cloud Assistant Agent does not respond to your request.
     *   the aliyun service in the instance is upgrading now: Cloud Assistant Agent is being updated.
     *   the aliyun service in the instance need upgrade: Cloud Assistant Agent needs to be updated.
     *   the command delivery has been timeout: The request to send the command timed out.
     *   the command execution has been timeout: The command execution timed out.
     *   the command execution got an exception: An exception occurred when the command was being run.
     *   the command execution has been interrupted: The command execution is interrupted.
     *   the command execution exit code is not zero: The command execution is complete, and the exit code is not 0.
     *
     * @example the specified instance does not exists
     *
     * @var string
     */
    public $errorInfo;

    /**
     * @description The exit code of the command.
     *
     *   For Linux instances, the exit code is the exit code of the shell command.
     *   For Windows instances, the exit code is the exit code of the batch or PowerShell command.
     *
     * @example 0
     *
     * @var int
     */
    public $exitCode;

    /**
     * @description The end of the time range during which the command is run on the instance.
     *
     * @example 2023-04-03T02:42:29Z
     *
     * @var string
     */
    public $finishTime;

    /**
     * @description The ID of the simple application server.
     *
     * @example 2445f4aecdac4b71ba2c7e3a7ccf****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The execution state of the command on a single instance. Valid values:
     *
     *   Pending: The command is being verified or sent.
     *
     *   Invalid: The specified command type or parameter is invalid.
     *
     *   Aborted: The command failed to be sent to the instance. To send a command to an instance, make sure that the instance is in the Running state and the command is sent to the instance within 1 minute.
     *
     *   Running: The command is being run on the instance.
     *
     *   Success:
     *
     *   Command that is set to run only once: The command execution is complete, and the exit code is 0.
     *   Command that is set to run on a schedule: The previous command execution is complete, the exit code is 0, and the specified cycle ends.
     *
     *   Failed:
     *
     *   Command that is set to run only once: The command execution is complete, and the exit code is not 0.
     *   Command that is set to run on a schedule: The previous command execution is complete, the exit code is not 0, and the specified cycle is about to end.
     *
     *   Error: The command execution cannot proceed due to an exception.
     *
     *   Timeout: The command execution timed out.
     *
     *   Cancelled: The command execution is canceled, and the command is not started.
     *
     *   Stopping: The command task is being stopped.
     *
     *   Terminated: The command is terminated when it is being run.
     *
     * @example Running
     *
     * @var string
     */
    public $invocationStatus;

    /**
     * @description The command output.
     *
     * @example OutputMsg
     *
     * @var string
     */
    public $output;

    /**
     * @description The beginning of the time range during which the command is run on the instance.
     *
     * @example 2023-05-09T03:32:24Z
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'errorCode'        => 'ErrorCode',
        'errorInfo'        => 'ErrorInfo',
        'exitCode'         => 'ExitCode',
        'finishTime'       => 'FinishTime',
        'instanceId'       => 'InstanceId',
        'invocationStatus' => 'InvocationStatus',
        'output'           => 'Output',
        'startTime'        => 'StartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
        if (null !== $this->invocationStatus) {
            $res['InvocationStatus'] = $this->invocationStatus;
        }
        if (null !== $this->output) {
            $res['Output'] = $this->output;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return invokeInstances
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
        if (isset($map['InvocationStatus'])) {
            $model->invocationStatus = $map['InvocationStatus'];
        }
        if (isset($map['Output'])) {
            $model->output = $map['Output'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
