<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInvocationResultsResponseBody\invocation\invocationResults;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInvocationResultsResponseBody\invocation\invocationResults\invocationResult\tags;

class invocationResult extends Model
{
    /**
     * @var string
     */
    public $commandId;
    /**
     * @var string
     */
    public $containerId;
    /**
     * @var string
     */
    public $containerName;
    /**
     * @var int
     */
    public $dropped;
    /**
     * @var string
     */
    public $errorCode;
    /**
     * @var string
     */
    public $errorInfo;
    /**
     * @var int
     */
    public $exitCode;
    /**
     * @var string
     */
    public $finishedTime;
    /**
     * @var string
     */
    public $instanceId;
    /**
     * @var string
     */
    public $invocationStatus;
    /**
     * @var string
     */
    public $invokeId;
    /**
     * @var string
     */
    public $invokeRecordStatus;
    /**
     * @var string
     */
    public $launcher;
    /**
     * @var string
     */
    public $output;
    /**
     * @var int
     */
    public $repeats;
    /**
     * @var string
     */
    public $startTime;
    /**
     * @var string
     */
    public $stopTime;
    /**
     * @var tags
     */
    public $tags;
    /**
     * @var string
     */
    public $terminationMode;
    /**
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
        'launcher'           => 'Launcher',
        'output'             => 'Output',
        'repeats'            => 'Repeats',
        'startTime'          => 'StartTime',
        'stopTime'           => 'StopTime',
        'tags'               => 'Tags',
        'terminationMode'    => 'TerminationMode',
        'username'           => 'Username',
    ];

    public function validate()
    {
        if (null !== $this->tags) {
            $this->tags->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            $res['Tags'] = null !== $this->tags ? $this->tags->toArray($noStream) : $this->tags;
        }

        if (null !== $this->terminationMode) {
            $res['TerminationMode'] = $this->terminationMode;
        }

        if (null !== $this->username) {
            $res['Username'] = $this->username;
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
