<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Fnf\V20190315\Models;

use AlibabaCloud\Tea\Model;

class StartExecutionRequest extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $flowName;

    /**
     * @var string
     */
    public $executionName;

    /**
     * @var string
     */
    public $input;

    /**
     * @var string
     */
    public $callbackFnFTaskToken;
    protected $_name = [
        'requestId'            => 'RequestId',
        'flowName'             => 'FlowName',
        'executionName'        => 'ExecutionName',
        'input'                => 'Input',
        'callbackFnFTaskToken' => 'CallbackFnFTaskToken',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->flowName) {
            $res['FlowName'] = $this->flowName;
        }
        if (null !== $this->executionName) {
            $res['ExecutionName'] = $this->executionName;
        }
        if (null !== $this->input) {
            $res['Input'] = $this->input;
        }
        if (null !== $this->callbackFnFTaskToken) {
            $res['CallbackFnFTaskToken'] = $this->callbackFnFTaskToken;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['FlowName'])) {
            $model->flowName = $map['FlowName'];
        }
        if (isset($map['ExecutionName'])) {
            $model->executionName = $map['ExecutionName'];
        }
        if (isset($map['Input'])) {
            $model->input = $map['Input'];
        }
        if (isset($map['CallbackFnFTaskToken'])) {
            $model->callbackFnFTaskToken = $map['CallbackFnFTaskToken'];
        }

        return $model;
    }
}
