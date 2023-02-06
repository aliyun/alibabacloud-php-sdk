<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInvocationResultsResponseBody\invocation\invocationResults;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInvocationResultsResponseBody\invocation\invocationResults\invocationResult\tags;
use AlibabaCloud\Tea\Model;

class invocationResult extends Model
{
    /**
     * @description The ID of the command.
     *
     * @example c-hz0jdfwcsr****
     *
     * @var string
     */
    public $commandId;

    /**
     * @description The ID of the container.
     *
     * @example ab141ddfbacfe02d9dbc25966ed971536124527097398d419a6746873fea****
     *
     * @var string
     */
    public $containerId;

    /**
     * @description The name of the container.
     *
     * @example test-container
     *
     * @var string
     */
    public $containerName;

    /**
     * @description The size of truncated and discarded text when the size of text in the `Output` response parameter is larger than 24 KB.
     *
     * @example 0
     *
     * @var int
     */
    public $dropped;

    /**
     * @description The error code returned when the command cannot be sent or run. Valid values:
     *
     *   If this parameter is empty, the command is run normally.
     *   InstanceNotExists: The instance does not exist or has been released.
     *   InstanceReleased: The instance is released while the command is being run.
     *   InstanceNotRunning: The instance is not running while the command is being run.
     *   CommandNotApplicable: The command is not applicable to the specified instance.
     *   AccountNotExists: The specified account does not exist.
     *   DirectoryNotExists: The specified directory does not exist.
     *   BadCronExpression: The specified cron expression for the execution schedule is invalid.
     *   ClientNotRunning: The Cloud Assistant client is not running.
     *   ClientNotResponse: The Cloud Assistant client does not respond.
     *   ClientIsUpgrading: The Cloud Assistant client is being upgraded.
     *   ClientNeedUpgrade: The Cloud Assistant client needs to be upgraded.
     *   DeliveryTimeout: The request to send the command has timed out.
     *   ExecutionTimeout: The execution has timed out.
     *   ExecutionException: An exception has occurred while the command is being run.
     *   ExecutionInterrupted: The execution is interrupted.
     *   ExitCodeNonzero: The execution is complete, but the exit code is not 0.
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
     *
     * @example the specified instance does not exists
     *
     * @var string
     */
    public $errorInfo;

    /**
     * @description The exit code of the command execution.
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
     * @description The completion time of the execution. If an execution times out, the completion time of the execution is subject to the value of the TimedOut parameter specified in the [CreateCommand](~~64844~~) operation.
     *
     * @example 2019-12-20T06:15:56Z
     *
     * @var string
     */
    public $finishedTime;

    /**
     * @description The ID of the instance.
     *
     * @example i-bp1i7gg30r52z2em****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The execution state on a single instance. Valid values:
     *
     *   Pending: The command is being verified or sent.
     *
     *   Invalid: The specified command type or parameter is invalid.
     *
     *   Aborted: The command failed to be sent. To send a command to an instance, make sure that the instance is in the Running state and the command is sent to the instance within 1 minute.
     *
     *   Running: The command is being run on the instance.
     *
     *   Success:
     *
     *   Command that is set to run only once: The execution is complete, and the exit code is 0.
     *   Command that is set to run on a schedule: The last execution succeeds, the exit code is 0, and the specified cycle ends.
     *
     *   Failed:
     *
     *   Command that is set to run only once: The execution is complete, but the exit code is not 0.
     *   Command that is set to run on a schedule: The last execution is complete, the exit code is not 0, and the specified execution time is about to end.
     *
     *   Error: The execution cannot proceed due to an exception.
     *
     *   Timeout: The execution times out.
     *
     *   Cancelled: The execution is canceled, and the command is not run.
     *
     *   Stopping: The command that is running is being stopped.
     *
     *   Terminated: The command is terminated while it is being run.
     *
     *   Scheduled:
     *
     *   Command that is set to run only once: The command is not applicable.
     *   Command that is set to run on a schedule: The command is waiting to be run.
     *
     * @example Success
     *
     * @var string
     */
    public $invocationStatus;

    /**
     * @description The ID of the command task.
     *
     * @example t-hz0jdfwd9f****
     *
     * @var string
     */
    public $invokeId;

    /**
     * @description The state of the execution.
     *
     * @example Running
     *
     * @var string
     */
    public $invokeRecordStatus;

    /**
     * @description The command output.
     *
     * @example MTU6MzA6MDEK
     *
     * @var string
     */
    public $output;

    /**
     * @description The number of times that the command is run on the instance.
     *
     *   If the command is set to run only once on the instance, the value is 0 or 1.
     *   If the command is set to run on a schedule on the instance, the value is the number of times that the command is run.
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
     * @description The time when the command stopped being run on the instance. If you call the `StopInvocation` operation to manually stop the execution, the value is the time when you call the operation.
     *
     * @example 2020-01-19T09:15:47Z
     *
     * @var string
     */
    public $stopTime;

    /**
     * @description The tags of the command.
     *
     * @var tags
     */
    public $tags;

    /**
     * @description The username that was used to run the command on the ECS instance.
     *
     * @example root
     *
     * @var string
     */
    public $username;
    protected $_name = [
        'commandId'          => 'CommandId',
        'containerId'        => 'ContainerId',
        'containerName'      => 'ContainerName',
        'dropped'            => 'Dropped',
        'errorCode'          => 'ErrorCode',
        'errorInfo'          => 'ErrorInfo',
        'exitCode'           => 'ExitCode',
        'finishedTime'       => 'FinishedTime',
        'instanceId'         => 'InstanceId',
        'invocationStatus'   => 'InvocationStatus',
        'invokeId'           => 'InvokeId',
        'invokeRecordStatus' => 'InvokeRecordStatus',
        'output'             => 'Output',
        'repeats'            => 'Repeats',
        'startTime'          => 'StartTime',
        'stopTime'           => 'StopTime',
        'tags'               => 'Tags',
        'username'           => 'Username',
    ];

    public function validate()
    {
    }

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
        if (isset($map['Username'])) {
            $model->username = $map['Username'];
        }

        return $model;
    }
}
