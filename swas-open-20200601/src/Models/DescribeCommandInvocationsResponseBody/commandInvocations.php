<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SWASOPEN\V20200601\Models\DescribeCommandInvocationsResponseBody;

use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\DescribeCommandInvocationsResponseBody\commandInvocations\invokeInstances;
use AlibabaCloud\Tea\Model;

class commandInvocations extends Model
{
    /**
     * @description The content of the command.
     *
     * @example echo 123
     *
     * @var string
     */
    public $commandContent;

    /**
     * @description The description of the command.
     *
     * @example testDescription
     *
     * @var string
     */
    public $commandDescription;

    /**
     * @description The command ID.
     *
     * @example c-hy0338xh28r****
     *
     * @var string
     */
    public $commandId;

    /**
     * @description The command name.
     *
     * @example testCommandName
     *
     * @var string
     */
    public $commandName;

    /**
     * @description The command type.
     *
     * @example RunShellScript
     *
     * @var string
     */
    public $commandType;

    /**
     * @description The time when the command was created.
     *
     * @example 2023-04-27T10:11:58
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description The overall execution state of the command. Valid values:
     *
     *   Pending: The command is being verified or sent.
     *   Invalid: The specified command type or parameter is invalid.
     *   Aborted: The command failed to be sent to the instances. To send a command to an instance, make sure that the instance is in the Running state and the command is sent to the instance within 1 minute.
     *   Running: The command is being run on the instances.
     *   Success: The command execution is complete, and the exit code is 0.
     *   Failed: The command execution is complete, and the exit code is not 0.
     *   Error: The command execution cannot proceed due to an exception.
     *   Timeout: The command execution timed out.
     *   Cancelled: The command execution is canceled, and the command is not started.
     *   Stopping: The command in the Running state is being stopped.
     *   Terminated: The command is terminated when it is being run.
     *
     * @example Success
     *
     * @var string
     */
    public $invocationStatus;

    /**
     * @description The execution ID of the command.
     *
     * @example t-hz0373jyzxt****
     *
     * @var string
     */
    public $invokeId;

    /**
     * @description The instances on which the command is run.
     *
     * @var invokeInstances[]
     */
    public $invokeInstances;

    /**
     * @description The custom parameters in the command. If no custom parameter exists in the command, the default value is {}.
     *
     * @example {}
     *
     * @var string
     */
    public $parameters;

    /**
     * @description The timeout period. Unit: seconds.
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
     * @description The working directory of the command.
     *
     * @example c:\\wwwroot
     *
     * @var string
     */
    public $workingDir;
    protected $_name = [
        'commandContent' => 'CommandContent',
        'commandDescription' => 'CommandDescription',
        'commandId' => 'CommandId',
        'commandName' => 'CommandName',
        'commandType' => 'CommandType',
        'creationTime' => 'CreationTime',
        'invocationStatus' => 'InvocationStatus',
        'invokeId' => 'InvokeId',
        'invokeInstances' => 'InvokeInstances',
        'parameters' => 'Parameters',
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
        if (null !== $this->commandId) {
            $res['CommandId'] = $this->commandId;
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
        if (null !== $this->invokeInstances) {
            $res['InvokeInstances'] = [];
            if (null !== $this->invokeInstances && \is_array($this->invokeInstances)) {
                $n = 0;
                foreach ($this->invokeInstances as $item) {
                    $res['InvokeInstances'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->parameters) {
            $res['Parameters'] = $this->parameters;
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
     * @return commandInvocations
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
        if (isset($map['CommandId'])) {
            $model->commandId = $map['CommandId'];
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
        if (isset($map['InvokeInstances'])) {
            if (!empty($map['InvokeInstances'])) {
                $model->invokeInstances = [];
                $n = 0;
                foreach ($map['InvokeInstances'] as $item) {
                    $model->invokeInstances[$n++] = null !== $item ? invokeInstances::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Parameters'])) {
            $model->parameters = $map['Parameters'];
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
