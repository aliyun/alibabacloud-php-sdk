<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SWASOPEN\V20200601\Models\DescribeInvocationsResponseBody;

use AlibabaCloud\Tea\Model;

class invocations extends Model
{
    /**
     * @description The content of the command, which is Base64-encoded.
     *
     * @example bHM=
     *
     * @var string
     */
    public $commandContent;

    /**
     * @description The name of the command.
     *
     * @example testname
     *
     * @var string
     */
    public $commandName;

    /**
     * @description The type of the command. Valid values:
     *
     *   RunBatScript: batch command (applicable to Windows instances).
     *   RunPowerShellScript: PowerShell command (applicable to Windows instances).
     *   RunShellScript: shell command (applicable to Linux instances).
     *
     * @example RunShellScript
     *
     * @var string
     */
    public $commandType;

    /**
     * @description The time when the command was created.
     *
     * @example 2022-07-11T06:37:16Z
     *
     * @var string
     */
    public $creationTime;

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
     * @example t-hz02p9545t6****
     *
     * @var string
     */
    public $invokeId;

    /**
     * @description The status of the command. Valid values:
     *
     *   Running: The command is running.
     *   Finished: The command finishes running.
     *   Failed: The running of the command failed.
     *   Stopped: The running is stopped.
     *
     * @example Finished
     *
     * @var string
     */
    public $invokeStatus;

    /**
     * @description The custom parameters in the command. If no custom parameter exists in the command, the default value is {}.
     *
     * @example {}
     *
     * @var mixed[]
     */
    public $parameters;
    protected $_name = [
        'commandContent'   => 'CommandContent',
        'commandName'      => 'CommandName',
        'commandType'      => 'CommandType',
        'creationTime'     => 'CreationTime',
        'invocationStatus' => 'InvocationStatus',
        'invokeId'         => 'InvokeId',
        'invokeStatus'     => 'InvokeStatus',
        'parameters'       => 'Parameters',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->commandContent) {
            $res['CommandContent'] = $this->commandContent;
        }
        if (null !== $this->commandName) {
            $res['CommandName'] = $this->commandName;
        }
        if (null !== $this->commandType) {
            $res['CommandType'] = $this->commandType;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->invocationStatus) {
            $res['InvocationStatus'] = $this->invocationStatus;
        }
        if (null !== $this->invokeId) {
            $res['InvokeId'] = $this->invokeId;
        }
        if (null !== $this->invokeStatus) {
            $res['InvokeStatus'] = $this->invokeStatus;
        }
        if (null !== $this->parameters) {
            $res['Parameters'] = $this->parameters;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return invocations
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CommandContent'])) {
            $model->commandContent = $map['CommandContent'];
        }
        if (isset($map['CommandName'])) {
            $model->commandName = $map['CommandName'];
        }
        if (isset($map['CommandType'])) {
            $model->commandType = $map['CommandType'];
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['InvocationStatus'])) {
            $model->invocationStatus = $map['InvocationStatus'];
        }
        if (isset($map['InvokeId'])) {
            $model->invokeId = $map['InvokeId'];
        }
        if (isset($map['InvokeStatus'])) {
            $model->invokeStatus = $map['InvokeStatus'];
        }
        if (isset($map['Parameters'])) {
            $model->parameters = $map['Parameters'];
        }

        return $model;
    }
}
