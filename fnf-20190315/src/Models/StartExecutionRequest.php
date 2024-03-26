<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Fnf\V20190315\Models;

use AlibabaCloud\Tea\Model;

class StartExecutionRequest extends Model
{
    /**
     * @description Specifies that the **TaskToken**-related tasks are called back after the execution in the flow ends.
     *
     * @example 12
     *
     * @var string
     */
    public $callbackFnFTaskToken;

    /**
     * @description The name of the execution. The execution name is unique within a workflow. Configure this parameter based on the following rules:
     *
     *   The name can contain letters, digits, underscores (\_), and hyphens (-).
     *   The name must start with a letter or an underscore (\_).
     *   The name is case-sensitive.
     *   The name must be 1 to 128 characters in length.
     *
     * @example exec
     *
     * @var string
     */
    public $executionName;

    /**
     * @description The name of the workflow to be executed. The name is unique within a region and cannot be modified after the workflow is created. Configure this parameter based on the following rules:
     *
     *   The name can contain letters, digits, underscores (\_), and hyphens (-).
     *   The name must start with a letter or an underscore (\_).
     *   The name is case-sensitive.
     *   The name must be 1 to 128 characters in length.
     *
     * @example flow
     *
     * @var string
     */
    public $flowName;

    /**
     * @description The input of the execution, which is in the JSON format.
     *
     * @example {"key":"value"}
     *
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

        return $model;
    }
}
