<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\ListInvocationResultsResponseBody;

use AlibabaCloud\Tea\Model;

class invocationResults extends Model
{
    /**
     * @var bool
     */
    public $success;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $finishedTime;

    /**
     * @var string
     */
    public $commandId;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $invokeRecordStatus;

    /**
     * @var int
     */
    public $exitCode;
    protected $_name = [
        'success'            => 'Success',
        'message'            => 'Message',
        'finishedTime'       => 'FinishedTime',
        'commandId'          => 'CommandId',
        'instanceId'         => 'InstanceId',
        'invokeRecordStatus' => 'InvokeRecordStatus',
        'exitCode'           => 'ExitCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->finishedTime) {
            $res['FinishedTime'] = $this->finishedTime;
        }
        if (null !== $this->commandId) {
            $res['CommandId'] = $this->commandId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->invokeRecordStatus) {
            $res['InvokeRecordStatus'] = $this->invokeRecordStatus;
        }
        if (null !== $this->exitCode) {
            $res['ExitCode'] = $this->exitCode;
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
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['FinishedTime'])) {
            $model->finishedTime = $map['FinishedTime'];
        }
        if (isset($map['CommandId'])) {
            $model->commandId = $map['CommandId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InvokeRecordStatus'])) {
            $model->invokeRecordStatus = $map['InvokeRecordStatus'];
        }
        if (isset($map['ExitCode'])) {
            $model->exitCode = $map['ExitCode'];
        }

        return $model;
    }
}
