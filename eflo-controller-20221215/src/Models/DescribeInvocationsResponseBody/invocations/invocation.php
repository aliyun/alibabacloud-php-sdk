<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215\Models\DescribeInvocationsResponseBody\invocations;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\DescribeInvocationsResponseBody\invocations\invocation\invokeNodes;

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
    public $commandName;

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
     * @var invokeNodes
     */
    public $invokeNodes;

    /**
     * @var string
     */
    public $invokeStatus;

    /**
     * @var string
     */
    public $parameters;

    /**
     * @var string
     */
    public $repeatMode;

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

    public function validate()
    {
        if (null !== $this->invokeNodes) {
            $this->invokeNodes->validate();
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
            $res['InvokeNodes'] = null !== $this->invokeNodes ? $this->invokeNodes->toArray($noStream) : $this->invokeNodes;
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
