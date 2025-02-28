<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Fnf\V20190315\Models;

use AlibabaCloud\Dara\Model;

class StartExecutionRequest extends Model
{
    /**
     * @var string
     */
    public $callbackFnFTaskToken;
    /**
     * @var string
     */
    public $executionName;
    /**
     * @var string
     */
    public $flowName;
    /**
     * @var string
     */
    public $input;
    protected $_name = [
        'callbackFnFTaskToken' => 'CallbackFnFTaskToken',
        'executionName'        => 'ExecutionName',
        'flowName'             => 'FlowName',
        'input'                => 'Input',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

        return $model;
    }
}
