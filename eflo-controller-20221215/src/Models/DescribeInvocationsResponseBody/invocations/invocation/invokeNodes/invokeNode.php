<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215\Models\DescribeInvocationsResponseBody\invocations\invocation\invokeNodes;

use AlibabaCloud\Tea\Model;

class invokeNode extends Model
{
    /**
     * @description The start time of the command execution.
     *
     * @example 2023-02-06T07:12:50Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description The length of the text that is truncated and discarded when the length of the `Output` field exceeds 24 KB.
     *
     * @example 0
     *
     * @var int
     */
    public $dropped;

    /**
     * @description Reason code for file delivery failure. Possible values:
     * - UserGroupNotExists: The user group specified for file sending does not exist.
     * @example NodeNotExists：
     *
     * @var string
     */
    public $errorCode;

    /**
     * @description Details of the reason for command delivery failure or execution failure, possible values:
     * - the specified node has been released: The instance was released during file delivery.
     * @example the specified node does not exists
     *
     * @var string
     */
    public $errorInfo;

    /**
     * @description The exit code of the command process. Possible values:
     * - For Linux instances, it is the exit code of the Shell process. - For Windows instances, it is the exit code of the Bat or PowerShell process.
     * @example 0
     *
     * @var int
     */
    public $exitCode;

    /**
     * @description Completion time.
     *
     * @example 2023-02-06T07:12:50Z
     *
     * @var string
     */
    public $finishTime;

    /**
     * @description The command progress status for a single instance. Possible values:
     * -  For a periodic execution command: Waiting to run.
     * @example Pending
     *
     * @var string
     */
    public $invocationStatus;

    /**
     * @description Node ID
     *
     * @example e01-cn-lbj36wkp70b
     *
     * @var string
     */
    public $nodeId;

    /**
     * @description The command progress status of a single instance.
     *
     * @example Finished
     *
     * @var string
     */
    public $nodeInvokeStatus;

    /**
     * @description The output information of the command.
     *
     * - If `ContentEncoding` is set to `Base64`, the Base64-encoded output information is returned.
     * @example OutPutTestmsg
     *
     * @var string
     */
    public $output;

    /**
     * @description The number of times the command has been executed on this instance.
     * -  If the execution mode is periodic, the value is the number of times it has been executed.
     * @example 0
     *
     * @var int
     */
    public $repeats;

    /**
     * @description Start Time
     *
     * @example 2019-12-20T06:15:55Z
     *
     * @var string
     */
    public $startTime;

    /**
     * @description The time when `StopInvocation` was called to stop the command execution.
     *
     * @example 2019-12-20T06:15:55Z
     *
     * @var string
     */
    public $stopTime;

    /**
     * @description Whether the queried command will be automatically executed in the future. The value range is as follows:
     * Default value: false.
     * @example false
     *
     * @var string
     */
    public $timed;

    /**
     * @description Update Time
     *
     * @example 2023-02-06T07:12:50Z
     *
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
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return invokeNode
     */
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
