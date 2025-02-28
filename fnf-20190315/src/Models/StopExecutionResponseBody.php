<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Fnf\V20190315\Models;

use AlibabaCloud\Dara\Model;

class StopExecutionResponseBody extends Model
{
    /**
     * @var string
     */
    public $flowDefinition;
    /**
     * @var string
     */
    public $flowName;
    /**
     * @var string
     */
    public $input;
    /**
     * @var string
     */
    public $name;
    /**
     * @var string
     */
    public $output;
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var string
     */
    public $roleArn;
    /**
     * @var string
     */
    public $startedTime;
    /**
     * @var string
     */
    public $status;
    /**
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
        'roleArn'        => 'RoleArn',
        'startedTime'    => 'StartedTime',
        'status'         => 'Status',
        'stoppedTime'    => 'StoppedTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->roleArn) {
            $res['RoleArn'] = $this->roleArn;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

        if (isset($map['RoleArn'])) {
            $model->roleArn = $map['RoleArn'];
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
