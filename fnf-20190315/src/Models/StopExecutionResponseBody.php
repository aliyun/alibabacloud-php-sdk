<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Fnf\V20190315\Models;

use AlibabaCloud\Tea\Model;

class StopExecutionResponseBody extends Model
{
    /**
     * @description The definition of the flow.
     *
     * @example version: v1.0\ntype: flow\nname: test\nsteps:\n - type: pass\n name: mypass
     *
     * @var string
     */
    public $flowDefinition;

    /**
     * @description The name of the flow.
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

    /**
     * @description The name of the execution.
     *
     * @example exec
     *
     * @var string
     */
    public $name;

    /**
     * @description The execution result, which is in the JSON format.
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
     * @description The execution state. Valid values:
     *
     *   **Running**
     *   **Stopped**
     *   **Succeeded**
     *   **Failed**
     *   **TimedOut**
     *
     * @example Running
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
        'flowDefinition' => 'FlowDefinition',
        'flowName'       => 'FlowName',
        'input'          => 'Input',
        'name'           => 'Name',
        'output'         => 'Output',
        'requestId'      => 'RequestId',
        'startedTime'    => 'StartedTime',
        'status'         => 'Status',
        'stoppedTime'    => 'StoppedTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->flowDefinition) {
            $res['FlowDefinition'] = $this->flowDefinition;
        }
        if (null !== $this->flowName) {
            $res['FlowName'] = $this->flowName;
        }
        if (null !== $this->input) {
            $res['Input'] = $this->input;
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
     * @return StopExecutionResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FlowDefinition'])) {
            $model->flowDefinition = $map['FlowDefinition'];
        }
        if (isset($map['FlowName'])) {
            $model->flowName = $map['FlowName'];
        }
        if (isset($map['Input'])) {
            $model->input = $map['Input'];
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
