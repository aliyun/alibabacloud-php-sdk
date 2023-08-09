<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInvocationResultsResponseBody\invocation\invocationResults;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInvocationResultsResponseBody\invocation\invocationResults\invocationResult\tags;
use AlibabaCloud\Tea\Model;

class invocationResult extends Model
{
    /**
     * @description The ID of the request.
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
     * @description The name of the container.
     *
     * @example test-container
     *
     * @var string
     */
    public $containerName;

    /**
     * @description The key of the tag.
     *
     * @example 0
     *
     * @var int
     */
    public $dropped;

    /**
     * @description The tags of the command execution.
     *
     * @example InstanceNotExists
     *
     * @var string
     */
    public $errorCode;

    /**
     * @description The name of the container.
     *
     * @example the specified instance does not exists
     *
     * @var string
     */
    public $errorInfo;

    /**
     * @description The error message returned when the command is not successfully sent or run. Valid values:
     *
     *   If this parameter is empty, the command is run normally.
     *   the specified instance does not exists: The specified instance does not exist is released.
     *   the instance has released when create task: The instance was released while the command was being run on the instance.
     *   the instance is not running when create task: The instance is not in the Running state while the command is being run.
     *   the command is not applicable: The command is not applicable to the specified instance.
     *   the specified account does not exists: The specified account does not exist.
     *   the specified directory does not exists: The specified directory does not exist.
     *   the cron job expression is invalid: The cron expression that specifies the execution time is invalid.
     *   the aliyun service is not running on the instance: The Cloud Assistance client is not running.
     *   the aliyun service in the instance does not response: The Cloud Assistant client is not responding.
     *   the aliyun service in the instance is upgrading now: The Cloud Assistant client is being upgraded.
     *   the aliyun service in the instance need upgrade: The Cloud Assistant client needs to be upgraded.
     *   the command delivery has been timeout: The request to send the command timed out.
     *   the command execution has been timeout: The command execution timed out.
     *   the command execution got an exception: An exception occurred while the command is being run.
     *   the command execution has been interrupted: The command execution was interrupted.
     *   the command execution exit code is not zero: The command execution is complete, but the exit code is not 0.
     *
     * @example 0
     *
     * @var int
     */
    public $exitCode;

    /**
     * @description The ID of the command execution. You can call the [DescribeInvocations](~~64840~~) operation to query the execution IDs.
     *
     * @example 2019-12-20T06:15:56Z
     *
     * @var string
     */
    public $finishedTime;

    /**
     * @description The key of tag N of the command execution. Valid values of N: 1 to 20. The tag key cannot be an empty string.
     *
     * The tag key can be up to 64 characters in length and cannot start with `acs:` or `aliyun`. It cannot contain `http://` or `https://`.
     * @example i-bp1i7gg30r52z2em****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The exit code of the command execution.
     *
     *   For Linux instances, the value is the exit code of the shell command.
     *   For Windows instances, the value is the exit code of the batch or PowerShell command.
     *
     * @example Success
     *
     * @var string
     */
    public $invocationStatus;

    /**
     * @description The ID of the instance.
     *
     * @example t-hz0jdfwd9f****
     *
     * @var string
     */
    public $invokeId;

    /**
     * @description The region ID of the command. You can call the [DescribeRegions](~~25609~~) operation to query the most recent region list.
     *
     * @example Running
     *
     * @var string
     */
    public $invokeRecordStatus;

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
     *   Command that is set to run on a schedule: The last execution is complete, the exit code is not 0, and the specified cycle is about to end.
     *
     *   Error: The execution cannot proceed due to an exception.
     *
     *   Timeout: The execution times out.
     *
     *   Cancelled: The execution is canceled, and the command is not run.
     *
     *   Stopping: The running command is being stopped.
     *
     *   Terminated: The command is terminated while it is being run.
     *
     *   Scheduled:
     *
     *   Command that is set to run only once: The command is not applicable.
     *   Command that is set to run on a schedule: The command is waiting to be run.
     *
     * @example MTU6MzA6MDEK
     *
     * @var string
     */
    public $output;

    /**
     * @description The value of the tag.
     *
     * @example 0
     *
     * @var int
     */
    public $repeats;

    /**
     * @description The total number of the commands.
     *
     * @example 2019-12-20T06:15:55Z
     *
     * @var string
     */
    public $startTime;

    /**
     * @description The encoding method of the `Output` response parameter. Valid values:
     *
     *   PlainText: returns the original command content and command output.
     *   Base64: returns the Base64-encoded command content and command output.
     *
     * Default value: Base64.
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
     * @description Queries the execution results of one or more Cloud Assistant commands on an Elastic Compute Service (ECS) instance.
     *
     * @example test
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
