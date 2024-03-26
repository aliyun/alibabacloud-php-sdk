<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Fnf\V20190315\Models;

use AlibabaCloud\Tea\Model;

class DescribeExecutionRequest extends Model
{
    /**
     * @description The name of the execution, which is unique within a flow. Set this parameter based on the following rules:
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
     * @description The name of the flow. The name is unique within the region and cannot be modified after the flow is created. Set this parameter based on the following rules:
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
     * @description The maximum period of time for long polling waits. Valid values: 0 to 60. Unit: seconds. Configure this parameter based on the following rules:
     *
     *   If the value is 0, the system immediately returns the current execution status.
     *   If the value is greater than 0, the long polling request waits until the execution ends or the specified period elapses.
     *
     * @example 20
     *
     * @var int
     */
    public $waitTimeSeconds;
    protected $_name = [
        'executionName'   => 'ExecutionName',
        'flowName'        => 'FlowName',
        'waitTimeSeconds' => 'WaitTimeSeconds',
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
        if (null !== $this->waitTimeSeconds) {
            $res['WaitTimeSeconds'] = $this->waitTimeSeconds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeExecutionRequest
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
        if (isset($map['WaitTimeSeconds'])) {
            $model->waitTimeSeconds = $map['WaitTimeSeconds'];
        }

        return $model;
    }
}
