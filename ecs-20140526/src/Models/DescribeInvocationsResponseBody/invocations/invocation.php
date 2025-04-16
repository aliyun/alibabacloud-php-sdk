<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInvocationsResponseBody\invocations;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInvocationsResponseBody\invocations\invocation\invokeInstances;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInvocationsResponseBody\invocations\invocation\tags;

class invocation extends Model
{
    /**
     * @var string
     */
    public $commandContent;

    /**
     * @var string
     */
    public $commandDescription;

    /**
     * @var string
     */
    public $commandId;

    /**
     * @var string
     */
    public $commandName;

    /**
     * @var string
     */
    public $commandType;

    /**
     * @var string
     */
    public $containerId;

    /**
     * @var string
     */
    public $containerName;

    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var string
     */
    public $frequency;

    /**
     * @var string
     */
    public $invocationStatus;

    /**
     * @var string
     */
    public $invokeId;

    /**
     * @var invokeInstances
     */
    public $invokeInstances;

    /**
     * @var string
     */
    public $invokeStatus;

    /**
     * @var string
     */
    public $launcher;

    /**
     * @var string
     */
    public $parameters;

    /**
     * @var string
     */
    public $repeatMode;

    /**
     * @var tags
     */
    public $tags;

    /**
     * @var string
     */
    public $terminationMode;

    /**
     * @var bool
     */
    public $timed;

    /**
     * @var int
     */
    public $timeout;

    /**
     * @var string
     */
    public $username;

    /**
     * @var string
     */
    public $workingDir;
    protected $_name = [
        'commandContent' => 'CommandContent',
        'commandDescription' => 'CommandDescription',
        'commandId' => 'CommandId',
        'commandName' => 'CommandName',
        'commandType' => 'CommandType',
        'containerId' => 'ContainerId',
        'containerName' => 'ContainerName',
        'creationTime' => 'CreationTime',
        'frequency' => 'Frequency',
        'invocationStatus' => 'InvocationStatus',
        'invokeId' => 'InvokeId',
        'invokeInstances' => 'InvokeInstances',
        'invokeStatus' => 'InvokeStatus',
        'launcher' => 'Launcher',
        'parameters' => 'Parameters',
        'repeatMode' => 'RepeatMode',
        'tags' => 'Tags',
        'terminationMode' => 'TerminationMode',
        'timed' => 'Timed',
        'timeout' => 'Timeout',
        'username' => 'Username',
        'workingDir' => 'WorkingDir',
    ];

    public function validate()
    {
        if (null !== $this->invokeInstances) {
            $this->invokeInstances->validate();
        }
        if (null !== $this->tags) {
            $this->tags->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->containerId) {
            $res['ContainerId'] = $this->containerId;
        }

        if (null !== $this->containerName) {
            $res['ContainerName'] = $this->containerName;
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

        if (null !== $this->invokeInstances) {
            $res['InvokeInstances'] = null !== $this->invokeInstances ? $this->invokeInstances->toArray($noStream) : $this->invokeInstances;
        }

        if (null !== $this->invokeStatus) {
            $res['InvokeStatus'] = $this->invokeStatus;
        }

        if (null !== $this->launcher) {
            $res['Launcher'] = $this->launcher;
        }

        if (null !== $this->parameters) {
            $res['Parameters'] = $this->parameters;
        }

        if (null !== $this->repeatMode) {
            $res['RepeatMode'] = $this->repeatMode;
        }

        if (null !== $this->tags) {
            $res['Tags'] = null !== $this->tags ? $this->tags->toArray($noStream) : $this->tags;
        }

        if (null !== $this->terminationMode) {
            $res['TerminationMode'] = $this->terminationMode;
        }

        if (null !== $this->timed) {
            $res['Timed'] = $this->timed;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

        if (isset($map['ContainerId'])) {
            $model->containerId = $map['ContainerId'];
        }

        if (isset($map['ContainerName'])) {
            $model->containerName = $map['ContainerName'];
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

        if (isset($map['InvokeInstances'])) {
            $model->invokeInstances = invokeInstances::fromMap($map['InvokeInstances']);
        }

        if (isset($map['InvokeStatus'])) {
            $model->invokeStatus = $map['InvokeStatus'];
        }

        if (isset($map['Launcher'])) {
            $model->launcher = $map['Launcher'];
        }

        if (isset($map['Parameters'])) {
            $model->parameters = $map['Parameters'];
        }

        if (isset($map['RepeatMode'])) {
            $model->repeatMode = $map['RepeatMode'];
        }

        if (isset($map['Tags'])) {
            $model->tags = tags::fromMap($map['Tags']);
        }

        if (isset($map['TerminationMode'])) {
            $model->terminationMode = $map['TerminationMode'];
        }

        if (isset($map['Timed'])) {
            $model->timed = $map['Timed'];
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
