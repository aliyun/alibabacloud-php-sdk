<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models\DescribeInvocationsResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The end time of the command execution.
     *
     * @example 2022-08-11 17:45:03
     *
     * @var string
     */
    public $finishTime;

    /**
     * @description The ID of the cloud phone instance on which the command is executed.
     *
     * @example acp-uto81vfd8t8z****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The ID of the execution.
     *
     * @example t-15775dc8****
     *
     * @var string
     */
    public $invocationId;

    /**
     * @description The execution state of the command.
     *
     * Valid values:
     *
     *   Failed: The execution of the command failed.
     *   Timeout: The execution of the command timed out.
     *   Running: The command is being executed.
     *   Success: The execution of the command is successful.
     *   Pending: The command is waiting to be executed.
     *
     * @example RUNNING
     *
     * @var string
     */
    public $invocationStatus;

    /**
     * @description The output of the command execution.
     *
     * @example success
     *
     * @var string
     */
    public $output;

    /**
     * @description The start time of the command execution.
     *
     * @example 2022-08-11 17:45:03
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'finishTime' => 'FinishTime',
        'instanceId' => 'InstanceId',
        'invocationId' => 'InvocationId',
        'invocationStatus' => 'InvocationStatus',
        'output' => 'Output',
        'startTime' => 'StartTime',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->finishTime) {
            $res['FinishTime'] = $this->finishTime;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->invocationId) {
            $res['InvocationId'] = $this->invocationId;
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
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FinishTime'])) {
            $model->finishTime = $map['FinishTime'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InvocationId'])) {
            $model->invocationId = $map['InvocationId'];
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
