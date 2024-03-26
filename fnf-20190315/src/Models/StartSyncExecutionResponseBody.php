<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Fnf\V20190315\Models;

use AlibabaCloud\Tea\Model;

class StartSyncExecutionResponseBody extends Model
{
    /**
     * @description The error code that is returned if the execution failed.
     *
     * @example ActionNotSupported
     *
     * @var string
     */
    public $errorCode;

    /**
     * @description The error message that indicates the execution timed out.
     *
     * @example Standard execution is not supported
     *
     * @var string
     */
    public $errorMessage;

    /**
     * @description The name of the flow.
     *
     * @example my_flow_name
     *
     * @var string
     */
    public $flowName;

    /**
     * @description The name of the execution.
     *
     * @example my_exec_name:{UUID}
     *
     * @var string
     */
    public $name;

    /**
     * @description The output of the execution, which is in the JSON format.
     *
     * @example {"key":"value"}
     *
     * @var string
     */
    public $output;

    /**
     * @description The request ID.
     *
     * @example testRequestId
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The time when the execution started.
     *
     * @example 2019-01-01T01:01:01.001Z
     *
     * @var string
     */
    public $startedTime;

    /**
     * @description The status of the execution. Valid values:
     *
     *   **Starting**
     *   **Running**
     *   **Stopped**
     *   **Succeeded**
     *   **Failed**
     *   **TimedOut**
     *
     * @example Succeeded
     *
     * @var string
     */
    public $status;

    /**
     * @description The time when the execution stopped.
     *
     * @example 2019-01-01T01:01:01.001Z
     *
     * @var string
     */
    public $stoppedTime;
    protected $_name = [
        'errorCode'    => 'ErrorCode',
        'errorMessage' => 'ErrorMessage',
        'flowName'     => 'FlowName',
        'name'         => 'Name',
        'output'       => 'Output',
        'requestId'    => 'RequestId',
        'startedTime'  => 'StartedTime',
        'status'       => 'Status',
        'stoppedTime'  => 'StoppedTime',
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
        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }
        if (null !== $this->flowName) {
            $res['FlowName'] = $this->flowName;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->output) {
            $res['Output'] = $this->output;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->startedTime) {
            $res['StartedTime'] = $this->startedTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->stoppedTime) {
            $res['StoppedTime'] = $this->stoppedTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return StartSyncExecutionResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }
        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }
        if (isset($map['FlowName'])) {
            $model->flowName = $map['FlowName'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Output'])) {
            $model->output = $map['Output'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['StartedTime'])) {
            $model->startedTime = $map['StartedTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['StoppedTime'])) {
            $model->stoppedTime = $map['StoppedTime'];
        }

        return $model;
    }
}
