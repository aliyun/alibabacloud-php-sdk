<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SWASOPEN\V20200601\Models\DescribeInvocationResultResponseBody;

use AlibabaCloud\Tea\Model;

class invocationResult extends Model
{
    /**
     * @description The error code returned when the command cannot be sent or run. Valid values:
     *
     *   If this parameter is empty, the command is run normally.
     *   InstanceNotExists: The instance does not exist or is released.
     *   InstanceReleased: The instance was released while the command was being run on the instance.
     *   InstanceNotRunning: The instance is not in the Running state while the command is being run.
     *   CommandNotApplicable: The command is not applicable to the specified instance.
     *   AccountNotExists: The specified account does not exist.
     *   DirectoryNotExists: The specified directory does not exist.
     *   BadCronExpression: The specified cron expression for the running schedule is invalid.
     *   ClientNotRunning: The Cloud Assistant client is not running.
     *   ClientNotResponse: The Cloud Assistant client does not respond.
     *   ClientIsUpgrading: The Cloud Assistant client is being upgraded.
     *   ClientNeedUpgrade: The Cloud Assistant client needs to be upgraded.
     *   DeliveryTimeout: The request for sending the command times out.
     *   ExecutionTimeout: The running of the command times out.
     *   ExecutionException: An exception has occurred while the command is being run.
     *   ExecutionInterrupted: The running of the command is interrupted.
     *   ExitCodeNonzero: The command finishes running, but the exit code is not 0.
     *
     * @example InstanceNotExists
     *
     * @var string
     */
    public $errorCode;

    /**
     * @description The error message returned when the command cannot be sent or run. Valid values:
     *
     *   If this parameter is empty, the command is run normally.
     *   the specified instance does not exists: The specified instance does not exist or is released.
     *   the instance has released when create task: The instance was released while the command was being run on the instance.
     *   the instance is not running when create task: The instance is not in the Running state while the command is being run.
     *   the command is not applicable: The command is not applicable to the specified instance.
     *   the specified account does not exists: The specified account does not exist.
     *   the specified directory does not exists: The specified directory does not exist.
     *   the cron job expression is invalid: The specified cron expression for the runing schedule is invalid.
     *   the aliyun service is not running on the instance: The Cloud Assistance client is not running.
     *   the aliyun service in the instance does not response: The Cloud Assistant client does not respond.
     *   the aliyun service in the instance is upgrading now: The Cloud Assistant client is being upgraded.
     *   the aliyun service in the instance need upgrade: The Cloud Assistant client needs to be upgraded.
     *   the command delivery has been timeout: The request for sending the command times out.
     *   the command execution has been timeout: The running of the command times out.
     *   the command execution got an exception: An exception has occurred while the command is being run.
     *   the command execution has been interrupted: The running of the command is interrupted.
     *   the command execution exit code is not zero: The command finishes running, but the exit code is not 0.
     *
     * @example the specified instance does not exists
     *
     * @var string
     */
    public $errorInfo;

    /**
     * @description The exit code of the command task.
     *
     *   For Linux instances, the value is the exit code of the shell command.
     *   For Windows instances, the value is the exit code of the batch or PowerShell command.
     *
     * @example 0
     *
     * @var int
     */
    public $exitCode;

    /**
     * @description The time when the command finished running on the instance.
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
     * @description The status of the command. Valid values:
     *
     *   Pending: The command is being verified or sent.
     *   Invalid: The specified command type or parameter is invalid.
     *   Aborted: The command failed to be sent. To send a command to an instance, make sure that the instance is in the Running state and the command is sent to the instance within 1 minute.
     *   Running: The command is being run on the instance.
     *   Success: The command finishes running, and the exit code is 0.
     *   Failed: The command finishes running, but the exit code is not 0.
     *   Error: The running of the command cannot proceed due to an exception.
     *   Timeout: The running of the command times out.
     *   Cancelled: The running is canceled, and the command is not run.
     *   Stopping: The command that is running is being stopped.
     *   Terminated: The command is terminated while it is being run.
     *
     * @example Success
     *
     * @var string
     */
    public $invocationStatus;

    /**
     * @description The ID of the command task.
     *
     * @example t-bj02prjje65****
     *
     * @var string
     */
    public $invokeId;

    /**
     * @description The status of the command task. Valid values:
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
     * @description The username who runs the command on the simple application server.
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
     * @description The time when the command started to be run on the instance.
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
