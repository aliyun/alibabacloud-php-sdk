<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SWASOPEN\V20200601\Models\DescribeCommandInvocationsResponseBody\commandInvocations;

use AlibabaCloud\Tea\Model;

class invokeInstances extends Model
{
    /**
     * @example InstanceNotExists
     *
     * @var string
     */
    public $errorCode;

    /**
     * @example the specified instance does not exists
     *
     * @var string
     */
    public $errorInfo;

    /**
     * @example 0
     *
     * @var int
     */
    public $exitCode;

    /**
     * @example 2023-04-03T02:42:29Z
     *
     * @var string
     */
    public $finishTime;

    /**
     * @example 2445f4aecdac4b71ba2c7e3a7ccf****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example Running
     *
     * @var string
     */
    public $invocationStatus;

    /**
     * @example OutputMsg
     *
     * @var string
     */
    public $output;

    /**
     * @example 2023-05-09T03:32:24Z
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'errorCode'        => 'ErrorCode',
        'errorInfo'        => 'ErrorInfo',
        'exitCode'         => 'ExitCode',
        'finishTime'       => 'FinishTime',
        'instanceId'       => 'InstanceId',
        'invocationStatus' => 'InvocationStatus',
        'output'           => 'Output',
        'startTime'        => 'StartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->invocationStatus) {
            $res['InvocationStatus'] = $this->invocationStatus;
        }
        if (null !== $this->output) {
            $res['Output'] = $this->output;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return invokeInstances
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InvocationStatus'])) {
            $model->invocationStatus = $map['InvocationStatus'];
        }
        if (isset($map['Output'])) {
            $model->output = $map['Output'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
