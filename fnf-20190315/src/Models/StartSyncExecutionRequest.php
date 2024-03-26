<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Fnf\V20190315\Models;

use AlibabaCloud\Tea\Model;

class StartSyncExecutionRequest extends Model
{
    /**
     * @description The name of the execution that you want to start. The name must meet the following conventions:
     *
     *   The name can contain letters, digits, underscores (\_), and hyphens (-).
     *   The name must start with a letter or an underscore (\_).
     *   The name is case-sensitive.
     *   The name must be 1 to 128 characters in length.
     *
     * Different from the StartExecution operation, in the synchronous execution mode, the execution name is no longer required to be unique within a flow. You can choose to provide an execution name to identify the current execution. In this case, the system adds a UUID to the current execution name. The used format is {ExecutionName}:{UUID}. If you do not specify the execution name, the system automatically generates an execution name.
     * @example my_exec_name
     *
     * @var string
     */
    public $executionName;

    /**
     * @description The name of the flow in which you want to start the execution. The name is unique within the same region and cannot be modified after the flow is created. Set this parameter based on the following rules:
     *
     *   The name can contain letters, digits, underscores (\_), and hyphens (-).
     *   The name must start with a letter or an underscore (\_).
     *   The name is case-sensitive.
     *   The name must be 1 to 128 characters in length.
     *
     * @example my_flow_name
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
        'executionName' => 'ExecutionName',
        'flowName'      => 'FlowName',
        'input'         => 'Input',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
     * @return StartSyncExecutionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
