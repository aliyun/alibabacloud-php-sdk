<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215\Models\DescribeInvocationsResponseBody\invocations;

use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\DescribeInvocationsResponseBody\invocations\invocation\invokeNodes;
use AlibabaCloud\Tea\Model;

class invocation extends Model
{
    /**
     * @description Command content.
     *
     * - If `ContentEncoding` is set to `Base64`, the Base64-encoded script content is returned.
     * @example cnBtIC1xYSB8IGdyZXAgdnNm****
     *
     * @var string
     */
    public $commandContent;

    /**
     * @description Command description.
     *
     * @example testDescription
     *
     * @var string
     */
    public $commandDescription;

    /**
     * @description Command name.
     *
     * @example CommandTestName
     *
     * @var string
     */
    public $commandName;

    /**
     * @description The creation time of the task.
     *
     * @example 2020-01-19T09:15:46Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description The execution time for scheduled commands.
     *
     * @var string
     */
    public $frequency;

    /**
     * @description The overall execution status of the command, which depends on the common execution status of all instances involved in the call. Possible values:
     * > The `InvokeStatus` in the response parameters is similar in meaning to this parameter, but it is recommended that you check this return value.
     * @example Success
     *
     * @var string
     */
    public $invocationStatus;

    /**
     * @description Command execution ID.
     *
     * @example t-ind3k9ytvvduoe8
     *
     * @var string
     */
    public $invokeId;

    /**
     * @description Command execution records.
     *
     * @var invokeNodes
     */
    public $invokeNodes;

    /**
     * @description The overall execution status of the command. The overall execution status depends on the common execution status of one or more instances in the execution. Possible values:
     * - PartialFailed: Partial failure; if the `InstanceId` parameter is set, this does not apply.
     * @example Running
     *
     * @var string
     */
    public $invokeStatus;

    /**
     * @description Custom parameters in the command.
     *
     * @example {}
     *
     * @var string
     */
    public $parameters;

    /**
     * @description 命令执行的方式。可能值：
     *
     * EveryReboot：实例每一次启动都将自动执行命令。
     * @example Once
     *
     * @var string
     */
    public $repeatMode;

    /**
     * @description Timeout for executing the command, in seconds.
     *
     * @example 60
     *
     * @var int
     */
    public $timeout;

    /**
     * @description Username for executing the command.
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
        'commandContent'     => 'CommandContent',
        'commandDescription' => 'CommandDescription',
        'commandName'        => 'CommandName',
        'creationTime'       => 'CreationTime',
        'frequency'          => 'Frequency',
        'invocationStatus'   => 'InvocationStatus',
        'invokeId'           => 'InvokeId',
        'invokeNodes'        => 'InvokeNodes',
        'invokeStatus'       => 'InvokeStatus',
        'parameters'         => 'Parameters',
        'repeatMode'         => 'RepeatMode',
        'timeout'            => 'Timeout',
        'username'           => 'Username',
        'workingDir'         => 'WorkingDir',
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
