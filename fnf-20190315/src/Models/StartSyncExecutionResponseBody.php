<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Fnf\V20190315\Models;

use AlibabaCloud\Tea\Model;

class StartSyncExecutionResponseBody extends Model
{
    /**
     * @example ActionNotSupported
     *
     * @var string
     */
    public $errorCode;

    /**
     * @example Standard execution is not supported
     *
     * @var string
     */
    public $errorMessage;

    /**
     * @example my_flow_name
     *
     * @var string
     */
    public $flowName;

    /**
     * @example my_exec_name:{UUID}
     *
     * @var string
     */
    public $name;

    /**
     * @example {"key":"value"}
     *
     * @var string
     */
    public $output;

    /**
     * @example testRequestId
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 2019-01-01T01:01:01.001Z
     *
     * @var string
     */
    public $startedTime;

    /**
     * @example Succeeded
     *
     * @var string
     */
    public $status;

    /**
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
