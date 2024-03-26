<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Fnf\V20190315\Models;

use AlibabaCloud\Tea\Model;

class StopExecutionRequest extends Model
{
    /**
     * @description The reason for stopping the execution. The value must be 1 to 4,096 characters in length.
     *
     * @example for test
     *
     * @var string
     */
    public $cause;

    /**
     * @description The error for stopping the execution. The value must be 1 to 128 characters in length.
     *
     * @example nill
     *
     * @var string
     */
    public $error;

    /**
     * @description The name of the execution that you want to stop. You can call the **ListExecutions** operation to obtain the value of this parameter. The name is unique in a flow. Set this parameter based on the following rules:
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
     * @description The name of the flow in which that you want to stop the execution. You can call the **ListFlows** operation to obtain the value of this parameter. The name is unique within the same region and cannot be modified after the flow is created. Set this parameter based on the following rules:
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
    protected $_name = [
        'cause'         => 'Cause',
        'error'         => 'Error',
        'executionName' => 'ExecutionName',
        'flowName'      => 'FlowName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cause) {
            $res['Cause'] = $this->cause;
        }
        if (null !== $this->error) {
            $res['Error'] = $this->error;
        }
        if (null !== $this->executionName) {
            $res['ExecutionName'] = $this->executionName;
        }
        if (null !== $this->flowName) {
            $res['FlowName'] = $this->flowName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return StopExecutionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Cause'])) {
            $model->cause = $map['Cause'];
        }
        if (isset($map['Error'])) {
            $model->error = $map['Error'];
        }
        if (isset($map['ExecutionName'])) {
            $model->executionName = $map['ExecutionName'];
        }
        if (isset($map['FlowName'])) {
            $model->flowName = $map['FlowName'];
        }

        return $model;
    }
}
