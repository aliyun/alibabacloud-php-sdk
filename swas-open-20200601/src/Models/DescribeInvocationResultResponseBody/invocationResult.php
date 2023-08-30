<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SWASOPEN\V20200601\Models\DescribeInvocationResultResponseBody;

use AlibabaCloud\Tea\Model;

class invocationResult extends Model
{
    /**
     * @description The error code that is returned if the command failed to be sent or executed.
     *
     *   If this parameter is empty, the command is executed normally.
     *   InstanceNotExists: The specified server does not exist or is released.
     *   InstanceReleased: The server was released while the command was being executed on the server.
     *   InstanceNotRunning: The server is not in the Running state while the command is being executed.
     *   CommandNotApplicable: The command is not applicable to the specified server.
     *   AccountNotExists: The specified account does not exist.
     *   DirectoryNotExists: The specified directory does not exist.
     *   BadCronExpression: The specified cron expression for the execution schedule is invalid.
     *   ClientNotRunning: The Cloud Assistant client is not running.
     *   ClientNotResponse: The Cloud Assistant client does not respond.
     *   ClientIsUpgrading: The Cloud Assistant client is being upgraded.
     *   ClientNeedUpgrade: The Cloud Assistant client needs to be upgraded.
     *   DeliveryTimeout: Command sending times out.
     *   ExecutionTimeout: The execution times out.
     *   ExecutionException: An exception occurs while the command is being executed.
     *   ExecutionInterrupted: The execution is interrupted.
     *   ExitCodeNonzero: The execution is complete, but the exit code is not 0.
     *
     * @example InstanceNotExists
     *
     * @var string
     */
    public $errorCode;

    /**
     * @description The error message returned when the command is not successfully sent or executed. Valid values:
     *
     *   If this parameter is empty, the command is executed normally.
     *   the specified instance does not exists: The specified server does not exist or is released.
     *   the instance has released when create task: The server was released while the command was being executed on the server.
     *   the instance is not running when create task: The server is not in the Running state while the command is being executed.
     *   the command is not applicable: The command is not applicable to the specified server.
     *   the specified account does not exists: The specified account does not exist.
     *   the specified directory does not exists: The specified directory does not exist.
     *   the cron job expression is invalid: The specified cron expression is invalid.
     *   the aliyun service is not running on the instance: The Cloud Assistance client is not running.
     *   the aliyun service in the instance does not response: The Cloud Assistant client does not respond to your request.
     *   the aliyun service in the instance is upgrading now: The Cloud Assistant client is being upgraded.
     *   the aliyun service in the instance need upgrade: The Cloud Assistant client needs to be upgraded.
     *   the command delivery has been timeout: Command sending times out.
     *   the command execution has been timeout: The execution times out.
     *   the command execution got an exception: An exception occurs while the command is being executed.
     *   the command execution has been interrupted: The execution is interrupted.
     *   the command execution exit code is not zero: The execution is complete, and the exit code is not 0.
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
     * @description The time when the execution ended.
     *
     * @example 2022-07-11T06:37:17Z
     *
     * @var string
     */
    public $finishedTime;

    /**
     * @description The ID of the simple application server.
     *
     * @example ace0706b2ac4454d984295a94213****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The status of the execution progress. Valid values:
     *
     *   Pending: The command is being verified or sent.
     *   Invalid: The specified command type or parameter is invalid.
     *   Aborted: The command fails to be sent to the server. To send a command to a server, make sure that the server is in the Running state and the command can be sent within 1 minute.
     *   Running: The command is being executed on the server.
     *   Success: The execution is completed, and the exit code is 0.
     *   Failed: The execution is completed, and the exit code is not 0.
     *   Error: The execution cannot proceed due to an exception.
     *   Timeout: The execution times out.
     *   Cancelled: The execution is canceled, and the command is not executed.
     *   Stopping: The command in the Running state is being stopped.
     *   Terminated: The command is terminated while it is being executed.
     *
     * @example Success
     *
     * @var string
     */
    public $invocationStatus;

    /**
     * @description The execution ID.
     *
     * @example t-bj02prjje65****
     *
     * @var string
     */
    public $invokeId;

    /**
     * @description The status of the execution. Valid values:
     *
     *   Running
     *   Finished
     *   Failed
     *   Stopped
     *
     * @example Finished
     *
     * @var string
     */
    public $invokeRecordStatus;

    /**
     * @description The username who executes the command on the simple application server.
     *
     * @example root
     *
     * @var string
     */
    public $invokeUser;

    /**
     * @description The command output.
     *
     * @example YWRtaW4K
     *
     * @var string
     */
    public $output;

    /**
     * @description The time when the execution started.
     *
     * @example 2022-07-11T06:37:16Z
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'errorCode'          => 'ErrorCode',
        'errorInfo'          => 'ErrorInfo',
        'exitCode'           => 'ExitCode',
        'finishedTime'       => 'FinishedTime',
        'instanceId'         => 'InstanceId',
        'invocationStatus'   => 'InvocationStatus',
        'invokeId'           => 'InvokeId',
        'invokeRecordStatus' => 'InvokeRecordStatus',
        'invokeUser'         => 'InvokeUser',
        'output'             => 'Output',
        'startTime'          => 'StartTime',
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
        if (null !== $this->finishedTime) {
            $res['FinishedTime'] = $this->finishedTime;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->invocationStatus) {
            $res['InvocationStatus'] = $this->invocationStatus;
        }
        if (null !== $this->invokeId) {
            $res['InvokeId'] = $this->invokeId;
        }
        if (null !== $this->invokeRecordStatus) {
            $res['InvokeRecordStatus'] = $this->invokeRecordStatus;
        }
        if (null !== $this->invokeUser) {
            $res['InvokeUser'] = $this->invokeUser;
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
     * @return invocationResult
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
        if (isset($map['FinishedTime'])) {
            $model->finishedTime = $map['FinishedTime'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InvocationStatus'])) {
            $model->invocationStatus = $map['InvocationStatus'];
        }
        if (isset($map['InvokeId'])) {
            $model->invokeId = $map['InvokeId'];
        }
        if (isset($map['InvokeRecordStatus'])) {
            $model->invokeRecordStatus = $map['InvokeRecordStatus'];
        }
        if (isset($map['InvokeUser'])) {
            $model->invokeUser = $map['InvokeUser'];
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
