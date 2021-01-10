<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Logiccomposer\V20181212\Models;

use AlibabaCloud\SDK\Logiccomposer\V20181212\Models\DescribeInvocationLogResponseBody\actions;
use AlibabaCloud\SDK\Logiccomposer\V20181212\Models\DescribeInvocationLogResponseBody\invocationError;
use AlibabaCloud\SDK\Logiccomposer\V20181212\Models\DescribeInvocationLogResponseBody\outputsResult;
use AlibabaCloud\SDK\Logiccomposer\V20181212\Models\DescribeInvocationLogResponseBody\responseResult;
use AlibabaCloud\SDK\Logiccomposer\V20181212\Models\DescribeInvocationLogResponseBody\trigger;
use AlibabaCloud\SDK\Logiccomposer\V20181212\Models\DescribeInvocationLogResponseBody\workflow;
use AlibabaCloud\Tea\Model;

class DescribeInvocationLogResponseBody extends Model
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var mixed[]
     */
    public $parameters;

    /**
     * @var string
     */
    public $returnCode;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var actions[]
     */
    public $actions;

    /**
     * @var int
     */
    public $timeoutTime;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var workflow
     */
    public $workflow;

    /**
     * @var invocationError
     */
    public $invocationError;

    /**
     * @var trigger
     */
    public $trigger;

    /**
     * @var responseResult
     */
    public $responseResult;

    /**
     * @var string
     */
    public $invocationId;

    /**
     * @var outputsResult
     */
    public $outputsResult;
    protected $_name = [
        'status'          => 'Status',
        'parameters'      => 'Parameters',
        'returnCode'      => 'ReturnCode',
        'endTime'         => 'EndTime',
        'requestId'       => 'RequestId',
        'actions'         => 'Actions',
        'timeoutTime'     => 'TimeoutTime',
        'startTime'       => 'StartTime',
        'workflow'        => 'Workflow',
        'invocationError' => 'InvocationError',
        'trigger'         => 'Trigger',
        'responseResult'  => 'ResponseResult',
        'invocationId'    => 'InvocationId',
        'outputsResult'   => 'OutputsResult',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->parameters) {
            $res['Parameters'] = $this->parameters;
        }
        if (null !== $this->returnCode) {
            $res['ReturnCode'] = $this->returnCode;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->actions) {
            $res['Actions'] = [];
            if (null !== $this->actions && \is_array($this->actions)) {
                $n = 0;
                foreach ($this->actions as $item) {
                    $res['Actions'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->timeoutTime) {
            $res['TimeoutTime'] = $this->timeoutTime;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->workflow) {
            $res['Workflow'] = null !== $this->workflow ? $this->workflow->toMap() : null;
        }
        if (null !== $this->invocationError) {
            $res['InvocationError'] = null !== $this->invocationError ? $this->invocationError->toMap() : null;
        }
        if (null !== $this->trigger) {
            $res['Trigger'] = null !== $this->trigger ? $this->trigger->toMap() : null;
        }
        if (null !== $this->responseResult) {
            $res['ResponseResult'] = null !== $this->responseResult ? $this->responseResult->toMap() : null;
        }
        if (null !== $this->invocationId) {
            $res['InvocationId'] = $this->invocationId;
        }
        if (null !== $this->outputsResult) {
            $res['OutputsResult'] = null !== $this->outputsResult ? $this->outputsResult->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeInvocationLogResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Parameters'])) {
            $model->parameters = $map['Parameters'];
        }
        if (isset($map['ReturnCode'])) {
            $model->returnCode = $map['ReturnCode'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Actions'])) {
            if (!empty($map['Actions'])) {
                $model->actions = [];
                $n              = 0;
                foreach ($map['Actions'] as $item) {
                    $model->actions[$n++] = null !== $item ? actions::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TimeoutTime'])) {
            $model->timeoutTime = $map['TimeoutTime'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Workflow'])) {
            $model->workflow = workflow::fromMap($map['Workflow']);
        }
        if (isset($map['InvocationError'])) {
            $model->invocationError = invocationError::fromMap($map['InvocationError']);
        }
        if (isset($map['Trigger'])) {
            $model->trigger = trigger::fromMap($map['Trigger']);
        }
        if (isset($map['ResponseResult'])) {
            $model->responseResult = responseResult::fromMap($map['ResponseResult']);
        }
        if (isset($map['InvocationId'])) {
            $model->invocationId = $map['InvocationId'];
        }
        if (isset($map['OutputsResult'])) {
            $model->outputsResult = outputsResult::fromMap($map['OutputsResult']);
        }

        return $model;
    }
}
