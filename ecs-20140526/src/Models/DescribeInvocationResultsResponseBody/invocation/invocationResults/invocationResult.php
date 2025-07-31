<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInvocationResultsResponseBody\invocation\invocationResults;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInvocationResultsResponseBody\invocation\invocationResults\invocationResult\tags;
use AlibabaCloud\Tea\Model;

class invocationResult extends Model
{
    /**
     * @description The command ID.
     *
     * @example c-hz0jdfwcsr****
     *
     * @var string
     */
    public $commandId;

    /**
     * @description The container ID.
     *
     * @example ab141ddfbacfe02d9dbc25966ed971536124527097398d419a6746873fea****
     *
     * @var string
     */
    public $containerId;

    /**
     * @description The container name.
     *
     * @example test-container
     *
     * @var string
     */
    public $containerName;

    /**
     * @description The size of the Output text that was truncated and discarded because the `Output` value exceeded 24 KB in size.
     *
     * @example 0
     *
     * @var int
     */
    public $dropped;

    /**
     * @description The error code returned when the command failed to be sent or run. Valid values:
     *
     *   If this parameter is empty, the command was run as expected.
     *   InstanceNotExists: The specified instance did not exist or was released.
     *   InstanceReleased: The instance was released while the command was being run.
     *   InstanceNotRunning: The instance was not running while the command was being run.
     *   CommandNotApplicable: The command was inapplicable to the specified instance.
     *   AccountNotExists: The username specified to run the command did not exist.
     *   DirectoryNotExists: The specified directory did not exist.
     *   BadCronExpression: The specified cron expression for the execution schedule was invalid.
     *   ClientNotRunning: Cloud Assistant Agent was not running.
     *   ClientNotResponse: Cloud Assistant Agent did not respond.
     *   ClientIsUpgrading: Cloud Assistant Agent was being upgraded.
     *   ClientNeedUpgrade: Cloud Assistant Agent needed to be upgraded.
     *   DeliveryTimeout: The request to send the command timed out.
     *   ExecutionTimeout: The execution timed out.
     *   ExecutionException: An exception occurred while the command was being run.
     *   ExecutionInterrupted: The execution was interrupted.
     *   ExitCodeNonzero: The execution was complete, but the exit code was not 0.
     *   SecurityGroupRuleDenied: Access to Cloud Assistant was denied by security group rules.
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
     *   The security group rules denied access to the aliyun service.
     *   The specified instance does not exist.
     *   The specified instance was released during task execution.
     *   The specified instance was not running during task execution.
     *   The OS type of the instance does not support the specified command type.
     *   The specified account does not exist.
     *   The specified directory does not exist.
     *   The cron expression is invalid.
     *   The aliyun service is not running on the instance.
     *   The aliyun service in the instance does not response.
     *   The aliyun service in the instance is upgrading during task execution.
     *   The aliyun service in the instance need to be upgraded to at least version to support the feature. indicates the earliest version that supports the feature. indicates the name of the feature.
     *   The command delivery has been timeout.
     *   The command execution has been timeout.
     *   The command execution got an exception.
     *   The command execution exit code is not zero.
     *   The specified instance was released during task execution.
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
     * @description The time when the command task was completed. If the command task times out, the end time is equal to the start time of the command task specified by `StartTime` plus the timeout period specified by `Timeout`.
     *
     * @example 2019-12-20T06:15:56Z
     *
     * @var string
     */
    public $finishedTime;

    /**
     * @description The instance ID.
     *
     * @example i-bp1i7gg30r52z2em****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The execution status on a single instance. Valid values:
     *
     *   Pending: The command is being verified or sent.
     *
     *   Invalid: The specified command type or parameter is invalid.
     *
     *   Aborted: The command failed to be sent to the instance. To send a command to an instance, make sure that the instance is in the Running state and the command can be sent to the instance within 1 minute.
     *
     *   Running: The command is being run on the instance.
     *
     *   Success:
     *
     *   One-time task: The execution was complete, and the exit code was 0.
     *   Scheduled task: The last execution was complete, the exit code was 0, and the specified period ended.
     *
     *   Failed:
     *
     *   One-time task: The execution was complete, but the exit code was not 0.
     *   Scheduled task: The last execution was complete, but the exit code was not 0. The specified period was about to end.
     *
     *   Error: The execution cannot proceed due to an exception.
     *
     *   Timeout: The execution timed out.
     *
     *   Cancelled: The execution was canceled before it started.
     *
     *   Stopping: The command task is being stopped.
     *
     *   Terminated: The execution was terminated before completion.
     *
     *   Scheduled:
     *
     *   One-time task: The execution state can never be Scheduled.
     *   Scheduled task: The command is waiting to be run.
     *
     * @example Success
     *
     * @var string
     */
    public $invocationStatus;

    /**
     * @description The command task ID.
     *
     * @example t-hz0jdfwd9f****
     *
     * @var string
     */
    public $invokeId;

    /**
     * @description The execution status of the command. Valid values:
     *
     *   Running:
     *
     *   Scheduled task: Before you stop the scheduled execution of the command, the execution state is always Running.
     *   One-time task: If the command is being run on instances, the execution state is Running.
     *
     *   Finished:
     *
     *   Scheduled task: The execution state can never be Finished.
     *   One-time task: The execution was complete on all instances, or the execution was stopped on some instances and was complete on the other instances.
     *
     *   Failed:
     *
     *   Scheduled task: The execution state can never be Failed.
     *   One-time task: The execution failed on all instances.
     *
     *   PartialFailed:
     *
     *   Scheduled task: The execution state can never be PartialFailed.
     *   One-time task: The execution failed on some instances.
     *
     *   Stopped: The task was stopped.
     *
     *   Stopping: The task is being stopped.
     *
     * @example Running
     *
     * @var string
     */
    public $invokeRecordStatus;

    /**
     * @description The launcher for script execution. The value cannot exceed 1 KB in length.
     *
     * @example python3 -u {{ACS::ScriptFileName|Ext(".py")}}
     *
     * @var string
     */
    public $launcher;

    /**
     * @var string
     */
    public $ossOutputDelivery;

    /**
     * @var string
     */
    public $ossOutputStatus;

    /**
     * @var string
     */
    public $ossOutputUri;

    /**
     * @description The command output.
     *
     *   If ContentEncoding is set to PlainText in the request, the original command output is returned.
     *   If ContentEncoding is set to Base64 in the request, the Base64-encoded command output is returned.
     *
     * @example MTU6MzA6MDEK
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
     * @description The tags of the command task.
     *
     * @var tags
     */
    public $tags;

    /**
     * @description Indicates how the command task is stopped when a command execution is manually stopped or times out. Valid values:
     *
     *   Process: The process of the command is stopped.
     *   ProcessTree: The process tree of the command is stopped. In this case, the process of the command and all subprocesses are stopped.
     *
     * @example ProcessTree
     *
     * @var string
     */
    public $terminationMode;

    /**
     * @description The username used to run the command on the instance.
     *
     * @example root
     *
     * @var string
     */
    public $username;
    protected $_name = [
        'commandId' => 'CommandId',
        'containerId' => 'ContainerId',
        'containerName' => 'ContainerName',
        'dropped' => 'Dropped',
        'errorCode' => 'ErrorCode',
        'errorInfo' => 'ErrorInfo',
        'exitCode' => 'ExitCode',
        'finishedTime' => 'FinishedTime',
        'instanceId' => 'InstanceId',
        'invocationStatus' => 'InvocationStatus',
        'invokeId' => 'InvokeId',
        'invokeRecordStatus' => 'InvokeRecordStatus',
        'launcher' => 'Launcher',
        'ossOutputDelivery' => 'OssOutputDelivery',
        'ossOutputStatus' => 'OssOutputStatus',
        'ossOutputUri' => 'OssOutputUri',
        'output' => 'Output',
        'repeats' => 'Repeats',
        'startTime' => 'StartTime',
        'stopTime' => 'StopTime',
        'tags' => 'Tags',
        'terminationMode' => 'TerminationMode',
        'username' => 'Username',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->commandId) {
            $res['CommandId'] = $this->commandId;
        }
        if (null !== $this->containerId) {
            $res['ContainerId'] = $this->containerId;
        }
        if (null !== $this->containerName) {
            $res['ContainerName'] = $this->containerName;
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
        if (null !== $this->launcher) {
            $res['Launcher'] = $this->launcher;
        }
        if (null !== $this->ossOutputDelivery) {
            $res['OssOutputDelivery'] = $this->ossOutputDelivery;
        }
        if (null !== $this->ossOutputStatus) {
            $res['OssOutputStatus'] = $this->ossOutputStatus;
        }
        if (null !== $this->ossOutputUri) {
            $res['OssOutputUri'] = $this->ossOutputUri;
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
        if (null !== $this->tags) {
            $res['Tags'] = null !== $this->tags ? $this->tags->toMap() : null;
        }
        if (null !== $this->terminationMode) {
            $res['TerminationMode'] = $this->terminationMode;
        }
        if (null !== $this->username) {
            $res['Username'] = $this->username;
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
        if (isset($map['CommandId'])) {
            $model->commandId = $map['CommandId'];
        }
        if (isset($map['ContainerId'])) {
            $model->containerId = $map['ContainerId'];
        }
        if (isset($map['ContainerName'])) {
            $model->containerName = $map['ContainerName'];
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
        if (isset($map['Launcher'])) {
            $model->launcher = $map['Launcher'];
        }
        if (isset($map['OssOutputDelivery'])) {
            $model->ossOutputDelivery = $map['OssOutputDelivery'];
        }
        if (isset($map['OssOutputStatus'])) {
            $model->ossOutputStatus = $map['OssOutputStatus'];
        }
        if (isset($map['OssOutputUri'])) {
            $model->ossOutputUri = $map['OssOutputUri'];
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
        if (isset($map['Tags'])) {
            $model->tags = tags::fromMap($map['Tags']);
        }
        if (isset($map['TerminationMode'])) {
            $model->terminationMode = $map['TerminationMode'];
        }
        if (isset($map['Username'])) {
            $model->username = $map['Username'];
        }

        return $model;
    }
}
