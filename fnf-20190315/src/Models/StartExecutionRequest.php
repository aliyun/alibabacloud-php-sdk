<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Fnf\V20190315\Models;

use AlibabaCloud\Tea\Model;

class StartExecutionRequest extends Model
{
    /**
     * @example 12
     *
     * @var string
     */
    public $callbackFnFTaskToken;

    /**
     * @example exec
     *
     * @var string
     */
    public $executionName;

    /**
     * @example flow
     *
     * @var string
     */
    public $flowName;

    /**
     * @example {"key":"value"}
     *
     * @var string
     */
    public $input;

    /**
     * @example testRequestId
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'callbackFnFTaskToken' => 'CallbackFnFTaskToken',
        'executionName'        => 'ExecutionName',
        'flowName'             => 'FlowName',
        'input'                => 'Input',
        'requestId'            => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->callbackFnFTaskToken) {
            $res['CallbackFnFTaskToken'] = $this->callbackFnFTaskToken;
        }
        if (null !== $this->executionName) {
            $res['ExecutionName'] = $this->executionName;
        }
        if (null !== $this->flowName) {
            $res['FlowName'] = $this->flowName;
        }
        if (null !== $this->input) {
            $res['Input'] = $this->input;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return StartExecutionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CallbackFnFTaskToken'])) {
            $model->callbackFnFTaskToken = $map['CallbackFnFTaskToken'];
        }
        if (isset($map['ExecutionName'])) {
            $model->executionName = $map['ExecutionName'];
        }
        if (isset($map['FlowName'])) {
            $model->flowName = $map['FlowName'];
        }
        if (isset($map['Input'])) {
            $model->input = $map['Input'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
