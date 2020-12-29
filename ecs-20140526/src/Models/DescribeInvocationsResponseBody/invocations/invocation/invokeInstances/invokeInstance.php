<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInvocationsResponseBody\invocations\invocation\invokeInstances;

use AlibabaCloud\Tea\Model;

class invokeInstance extends Model
{
    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var string
     */
    public $invocationStatus;

    /**
     * @var string
     */
    public $finishTime;

    /**
     * @var string
     */
    public $updateTime;

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
    public $instanceInvokeStatus;
    protected $_name = [
        'creationTime'         => 'CreationTime',
        'invocationStatus'     => 'InvocationStatus',
        'finishTime'           => 'FinishTime',
        'updateTime'           => 'UpdateTime',
        'repeats'              => 'Repeats',
        'output'               => 'Output',
        'instanceId'           => 'InstanceId',
        'dropped'              => 'Dropped',
        'stopTime'             => 'StopTime',
        'exitCode'             => 'ExitCode',
        'startTime'            => 'StartTime',
        'errorInfo'            => 'ErrorInfo',
        'errorCode'            => 'ErrorCode',
        'instanceInvokeStatus' => 'InstanceInvokeStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->invocationStatus) {
            $res['InvocationStatus'] = $this->invocationStatus;
        }
        if (null !== $this->finishTime) {
            $res['FinishTime'] = $this->finishTime;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
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
        if (null !== $this->instanceInvokeStatus) {
            $res['InstanceInvokeStatus'] = $this->instanceInvokeStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return invokeInstance
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['InvocationStatus'])) {
            $model->invocationStatus = $map['InvocationStatus'];
        }
        if (isset($map['FinishTime'])) {
            $model->finishTime = $map['FinishTime'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
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
        if (isset($map['InstanceInvokeStatus'])) {
            $model->instanceInvokeStatus = $map['InstanceInvokeStatus'];
        }

        return $model;
    }
}
