<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215\Models\DescribeInvocationsResponseBody\invocations;

use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\DescribeInvocationsResponseBody\invocations\invocation\invokeNodes;
use AlibabaCloud\Tea\Model;

class invocation extends Model
{
    /**
     * @description The executed command.
     *
     *   If ContentEncoding is set to PlainText in the request, the original command content is returned.
     *   If ContentEncoding is set to Base64 in the request, the Base64-encoded command content is returned.
     *
     * @example cnBtIC1xYSB8IGdyZXAgdnNm****
     *
     * @var string
     */
    public $commandContent;

    /**
     * @description The command description.
     *
     * @example testDescription
     *
     * @var string
     */
    public $commandDescription;

    /**
     * @description The command name.
     *
     * @example CommandTestName
     *
     * @var string
     */
    public $commandName;

    /**
     * @description The time when the command task was created.
     *
     * @example 2020-01-19T09:15:46Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description The schedule on which the command was run.
     *
     * @var string
     */
    public $frequency;

    /**
     * @description The overall execution state of the command task. The value of this parameter depends on the execution states of the command task on all the involved instances. Valid values:
     *
     *   Pending: The command was being verified or sent. If the execution state on at least one instance is Pending, the overall execution state is Pending.
     *
     *   Scheduled: The command that is set to run on a schedule is sent and waiting to be run. If the execution state on at least one instance is Scheduled, the overall execution state is Scheduled.
     *
     *   Running: The command is being run on the instance. When the execution state on at least one instance is Running, the overall execution state is Running.
     *
     *   Success: When the execution state on at least one instance is Success and the execution state on the other instances is Stopped or Success, the overall execution state is Success.
     *
     *   One-time task: The execution is complete, and the exit code is 0.
     *   Scheduled task: The last execution was complete, the exit code was 0, and the specified period ended.
     *
     *   Failed: When the execution state on all instances is Stopped or Failed, the overall execution state is Failed. When the execution state on an instance is one of the following values, Failed is returned as the overall execution state:
     *
     *   Invalid: The command is invalid.
     *   Aborted: The command failed to be sent.
     *   Failed: The execution was complete, but the exit code was not 0.
     *   Timeout: The execution timed out.
     *   Error: An error occurred while the command was being run.
     *
     *   Stopping: The command task is being stopped. When the execution state on at least one instance is Stopping, the overall execution state is Stopping.
     *
     *   Stopped: The task was stopped. When the execution state on all instances is Stopped, the overall execution state is Stopped. When the execution state on an instance is one of the following values, Stopped is returned as the overall execution state:
     *
     *   Cancelled: The task was canceled.
     *   Terminated: The task was terminated.
     *
     *   PartialFailed: The execution was complete on some instances and failed on other instances. When the execution state is Success on some instances and is Failed or Stopped on the other instances, the overall execution state is PartialFailed.
     *
     * >  The value of the `InvokeStatus` response parameter is similar to the value of InvocationStatus. We recommend that you ignore InvokeStatus and check the value of InvocationStatus.
     *
     * @example Success
     *
     * @var string
     */
    public $invocationStatus;

    /**
     * @description The execution ID.
     *
     * @example t-ind3k9ytvvduoe8
     *
     * @var string
     */
    public $invokeId;

    /**
     * @description The command execution records.
     *
     * @var invokeNodes
     */
    public $invokeNodes;

    /**
     * @description The overall execution status of the command task. The value of this parameter depends on the execution states of the command task on all involved instances. Valid values:
     *
     *   Running:
     *
     *   Scheduled task: Before you stop the scheduled execution of the command, the overall execution state is always Running.
     *   One-time task: If the command is being run on instances, the overall execution state is Running.
     *
     *   Finished:
     *
     *   Scheduled task: The overall execution state can never be Finished.
     *   One-time task: The execution is complete on all instances, or the execution is stopped on some instances and is complete on the other instances.
     *
     *   Failed:
     *
     *   Scheduled task: The overall execution state can never be Failed.
     *   One-time task: The execution failed on all instances.
     *
     *   Stopped: The task is stopped.
     *
     *   Stopping: The task is being stopped.
     *
     *   PartialFailed: The task fails on some instances. If you specify both this parameter and `InstanceId`, this parameter does not take effect.
     *
     * @example Running
     *
     * @var string
     */
    public $invokeStatus;

    /**
     * @description The custom parameters in the command.
     *
     * @example {}
     *
     * @var string
     */
    public $parameters;

    /**
     * @description The execution mode of the command. Valid values:
     *
     *   Once: The command is run immediately.
     *   Period: The command is run on a schedule.
     *   NextRebootOnly: The command is run the next time the instances start.
     *   EveryReboot: runs the command every time the instances start.
     *
     * @example Once
     *
     * @var string
     */
    public $repeatMode;

    /**
     * @description The timeout period for the command execution. Unit: seconds.
     *
     * @example 60
     *
     * @var int
     */
    public $timeout;

    /**
     * @description The username that is used to run the command.
     *
     * @example root
     *
     * @var string
     */
    public $username;

    /**
     * @description The working directory of the command on the instance.
     *
     * @example /home
     *
     * @var string
     */
    public $workingDir;
    protected $_name = [
        'commandContent' => 'CommandContent',
        'commandDescription' => 'CommandDescription',
        'commandName' => 'CommandName',
        'creationTime' => 'CreationTime',
        'frequency' => 'Frequency',
        'invocationStatus' => 'InvocationStatus',
        'invokeId' => 'InvokeId',
        'invokeNodes' => 'InvokeNodes',
        'invokeStatus' => 'InvokeStatus',
        'parameters' => 'Parameters',
        'repeatMode' => 'RepeatMode',
        'timeout' => 'Timeout',
        'username' => 'Username',
        'workingDir' => 'WorkingDir',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->commandContent) {
            $res['CommandContent'] = $this->commandContent;
        }
        if (null !== $this->commandDescription) {
            $res['CommandDescription'] = $this->commandDescription;
        }
        if (null !== $this->commandName) {
            $res['CommandName'] = $this->commandName;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->frequency) {
            $res['Frequency'] = $this->frequency;
        }
        if (null !== $this->invocationStatus) {
            $res['InvocationStatus'] = $this->invocationStatus;
        }
        if (null !== $this->invokeId) {
            $res['InvokeId'] = $this->invokeId;
        }
        if (null !== $this->invokeNodes) {
            $res['InvokeNodes'] = null !== $this->invokeNodes ? $this->invokeNodes->toMap() : null;
        }
        if (null !== $this->invokeStatus) {
            $res['InvokeStatus'] = $this->invokeStatus;
        }
        if (null !== $this->parameters) {
            $res['Parameters'] = $this->parameters;
        }
        if (null !== $this->repeatMode) {
            $res['RepeatMode'] = $this->repeatMode;
        }
        if (null !== $this->timeout) {
            $res['Timeout'] = $this->timeout;
        }
        if (null !== $this->username) {
            $res['Username'] = $this->username;
        }
        if (null !== $this->workingDir) {
            $res['WorkingDir'] = $this->workingDir;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return invocation
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CommandContent'])) {
            $model->commandContent = $map['CommandContent'];
        }
        if (isset($map['CommandDescription'])) {
            $model->commandDescription = $map['CommandDescription'];
        }
        if (isset($map['CommandName'])) {
            $model->commandName = $map['CommandName'];
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['Frequency'])) {
            $model->frequency = $map['Frequency'];
        }
        if (isset($map['InvocationStatus'])) {
            $model->invocationStatus = $map['InvocationStatus'];
        }
        if (isset($map['InvokeId'])) {
            $model->invokeId = $map['InvokeId'];
        }
        if (isset($map['InvokeNodes'])) {
            $model->invokeNodes = invokeNodes::fromMap($map['InvokeNodes']);
        }
        if (isset($map['InvokeStatus'])) {
            $model->invokeStatus = $map['InvokeStatus'];
        }
        if (isset($map['Parameters'])) {
            $model->parameters = $map['Parameters'];
        }
        if (isset($map['RepeatMode'])) {
            $model->repeatMode = $map['RepeatMode'];
        }
        if (isset($map['Timeout'])) {
            $model->timeout = $map['Timeout'];
        }
        if (isset($map['Username'])) {
            $model->username = $map['Username'];
        }
        if (isset($map['WorkingDir'])) {
            $model->workingDir = $map['WorkingDir'];
        }

        return $model;
    }
}
