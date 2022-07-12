<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeInvocationsResponseBody\invocations;

use AlibabaCloud\Tea\Model;

class invokeDesktops extends Model
{
    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var string
     */
    public $desktopId;

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
    public $updateTime;
    protected $_name = [
        'creationTime'     => 'CreationTime',
        'desktopId'        => 'DesktopId',
        'dropped'          => 'Dropped',
        'errorCode'        => 'ErrorCode',
        'errorInfo'        => 'ErrorInfo',
        'exitCode'         => 'ExitCode',
        'finishTime'       => 'FinishTime',
        'invocationStatus' => 'InvocationStatus',
        'output'           => 'Output',
        'repeats'          => 'Repeats',
        'startTime'        => 'StartTime',
        'stopTime'         => 'StopTime',
        'updateTime'       => 'UpdateTime',
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
        if (null !== $this->desktopId) {
            $res['DesktopId'] = $this->desktopId;
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
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return invokeDesktops
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['DesktopId'])) {
            $model->desktopId = $map['DesktopId'];
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
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
