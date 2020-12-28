<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInvocationResultsResponseBody\invocation;

use AlibabaCloud\Tea\Model;

class invocationResults extends Model
{
    /**
     * @var string
     */
    public $invocationStatus;

    /**
     * @var int
     */
    public $repeats;

    /**
     * @var string
     */
    public $output;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $commandId;

    /**
     * @var int
     */
    public $dropped;

    /**
     * @var string
     */
    public $stopTime;

    /**
     * @var int
     */
    public $exitCode;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $errorInfo;

    /**
     * @var string
     */
    public $errorCode;

    /**
     * @var string
     */
    public $finishedTime;

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
    public $username;
    protected $_name = [
        'invocationStatus'   => 'InvocationStatus',
        'repeats'            => 'Repeats',
        'output'             => 'Output',
        'instanceId'         => 'InstanceId',
        'commandId'          => 'CommandId',
        'dropped'            => 'Dropped',
        'stopTime'           => 'StopTime',
        'exitCode'           => 'ExitCode',
        'startTime'          => 'StartTime',
        'errorInfo'          => 'ErrorInfo',
        'errorCode'          => 'ErrorCode',
        'finishedTime'       => 'FinishedTime',
        'invokeId'           => 'InvokeId',
        'invokeRecordStatus' => 'InvokeRecordStatus',
        'username'           => 'Username',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->invocationStatus) {
            $res['InvocationStatus'] = $this->invocationStatus;
        }
        if (null !== $this->repeats) {
            $res['Repeats'] = $this->repeats;
        }
        if (null !== $this->output) {
            $res['Output'] = $this->output;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->commandId) {
            $res['CommandId'] = $this->commandId;
        }
        if (null !== $this->dropped) {
            $res['Dropped'] = $this->dropped;
        }
        if (null !== $this->stopTime) {
            $res['StopTime'] = $this->stopTime;
        }
        if (null !== $this->exitCode) {
            $res['ExitCode'] = $this->exitCode;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->errorInfo) {
            $res['ErrorInfo'] = $this->errorInfo;
        }
        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }
        if (null !== $this->finishedTime) {
            $res['FinishedTime'] = $this->finishedTime;
        }
        if (null !== $this->invokeId) {
            $res['InvokeId'] = $this->invokeId;
        }
        if (null !== $this->invokeRecordStatus) {
            $res['InvokeRecordStatus'] = $this->invokeRecordStatus;
        }
        if (null !== $this->username) {
            $res['Username'] = $this->username;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return invocationResults
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InvocationStatus'])) {
            $model->invocationStatus = $map['InvocationStatus'];
        }
        if (isset($map['Repeats'])) {
            $model->repeats = $map['Repeats'];
        }
        if (isset($map['Output'])) {
            $model->output = $map['Output'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['CommandId'])) {
            $model->commandId = $map['CommandId'];
        }
        if (isset($map['Dropped'])) {
            $model->dropped = $map['Dropped'];
        }
        if (isset($map['StopTime'])) {
            $model->stopTime = $map['StopTime'];
        }
        if (isset($map['ExitCode'])) {
            $model->exitCode = $map['ExitCode'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['ErrorInfo'])) {
            $model->errorInfo = $map['ErrorInfo'];
        }
        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }
        if (isset($map['FinishedTime'])) {
            $model->finishedTime = $map['FinishedTime'];
        }
        if (isset($map['InvokeId'])) {
            $model->invokeId = $map['InvokeId'];
        }
        if (isset($map['InvokeRecordStatus'])) {
            $model->invokeRecordStatus = $map['InvokeRecordStatus'];
        }
        if (isset($map['Username'])) {
            $model->username = $map['Username'];
        }

        return $model;
    }
}
