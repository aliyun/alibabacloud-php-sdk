<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215\Models\DescribeInvocationsResponseBody\invocations\invocation\invokeNodes;

use AlibabaCloud\Dara\Model;

class invokeNode extends Model
{
    /**
     * @var string
     */
    public $creationTime;
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
    public $finishTime;
    /**
     * @var string
     */
    public $invocationStatus;
    /**
     * @var string
     */
    public $nodeId;
    /**
     * @var string
     */
    public $nodeInvokeStatus;
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
     * @var string
     */
    public $timed;
    /**
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'creationTime'     => 'CreationTime',
        'dropped'          => 'Dropped',
        'errorCode'        => 'ErrorCode',
        'errorInfo'        => 'ErrorInfo',
        'exitCode'         => 'ExitCode',
        'finishTime'       => 'FinishTime',
        'invocationStatus' => 'InvocationStatus',
        'nodeId'           => 'NodeId',
        'nodeInvokeStatus' => 'NodeInvokeStatus',
        'output'           => 'Output',
        'repeats'          => 'Repeats',
        'startTime'        => 'StartTime',
        'stopTime'         => 'StopTime',
        'timed'            => 'Timed',
        'updateTime'       => 'UpdateTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
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

        if (null !== $this->finishTime) {
            $res['FinishTime'] = $this->finishTime;
        }

        if (null !== $this->invocationStatus) {
            $res['InvocationStatus'] = $this->invocationStatus;
        }

        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }

        if (null !== $this->nodeInvokeStatus) {
            $res['NodeInvokeStatus'] = $this->nodeInvokeStatus;
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

        if (null !== $this->timed) {
            $res['Timed'] = $this->timed;
        }

        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
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
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
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

        if (isset($map['FinishTime'])) {
            $model->finishTime = $map['FinishTime'];
        }

        if (isset($map['InvocationStatus'])) {
            $model->invocationStatus = $map['InvocationStatus'];
        }

        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }

        if (isset($map['NodeInvokeStatus'])) {
            $model->nodeInvokeStatus = $map['NodeInvokeStatus'];
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

        if (isset($map['Timed'])) {
            $model->timed = $map['Timed'];
        }

        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
