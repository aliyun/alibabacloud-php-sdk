<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\ListInvocationResultsResponseBody\invocationResults;

use AlibabaCloud\Tea\Model;

class invocationResult extends Model
{
    /**
     * @description The ID of the command.
     *
     * @example c-hz01v8x80o3****
     *
     * @var string
     */
    public $commandId;

    /**
     * @description The exit code.
     *
     * @example 0
     *
     * @var int
     */
    public $exitCode;

    /**
     * @description The time at which the command entered the Finished state.
     *
     * @example 2021-09-06T09:14:56Z
     *
     * @var string
     */
    public $finishedTime;

    /**
     * @description The ID of the node on which the command was run.
     *
     * @example i-uf65bh2113hlqvyr****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The status of the command. Valid values:
     *
     *   Finished
     *   Running
     *   Failed
     *   Stopped
     *
     * @example Finished
     *
     * @var string
     */
    public $invokeRecordStatus;

    /**
     * @description The output result.
     *
     * @example hello world
     *
     * @var string
     */
    public $message;

    /**
     * @description Indicates whether the command was run and its result was obtained.
     *
     * @example true
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'commandId'          => 'CommandId',
        'exitCode'           => 'ExitCode',
        'finishedTime'       => 'FinishedTime',
        'instanceId'         => 'InstanceId',
        'invokeRecordStatus' => 'InvokeRecordStatus',
        'message'            => 'Message',
        'success'            => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->commandId) {
            $res['CommandId'] = $this->commandId;
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
        if (null !== $this->invokeRecordStatus) {
            $res['InvokeRecordStatus'] = $this->invokeRecordStatus;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return invocationResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CommandId'])) {
            $model->commandId = $map['CommandId'];
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
        if (isset($map['InvokeRecordStatus'])) {
            $model->invokeRecordStatus = $map['InvokeRecordStatus'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
