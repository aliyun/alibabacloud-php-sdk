<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Fnf\V20190315\Models;

use AlibabaCloud\Tea\Model;

class StartExecutionResponseBody extends Model
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $input;

    /**
     * @var string
     */
    public $stoppedTime;

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
    public $output;

    /**
     * @var string
     */
    public $externalOutputUri;

    /**
     * @var string
     */
    public $startedTime;

    /**
     * @var string
     */
    public $externalInputUri;

    /**
     * @var string
     */
    public $flowDefinition;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'status'            => 'Status',
        'input'             => 'Input',
        'stoppedTime'       => 'StoppedTime',
        'requestId'         => 'RequestId',
        'flowName'          => 'FlowName',
        'output'            => 'Output',
        'externalOutputUri' => 'ExternalOutputUri',
        'startedTime'       => 'StartedTime',
        'externalInputUri'  => 'ExternalInputUri',
        'flowDefinition'    => 'FlowDefinition',
        'name'              => 'Name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->input) {
            $res['Input'] = $this->input;
        }
        if (null !== $this->stoppedTime) {
            $res['StoppedTime'] = $this->stoppedTime;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->flowName) {
            $res['FlowName'] = $this->flowName;
        }
        if (null !== $this->output) {
            $res['Output'] = $this->output;
        }
        if (null !== $this->externalOutputUri) {
            $res['ExternalOutputUri'] = $this->externalOutputUri;
        }
        if (null !== $this->startedTime) {
            $res['StartedTime'] = $this->startedTime;
        }
        if (null !== $this->externalInputUri) {
            $res['ExternalInputUri'] = $this->externalInputUri;
        }
        if (null !== $this->flowDefinition) {
            $res['FlowDefinition'] = $this->flowDefinition;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return StartExecutionResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Input'])) {
            $model->input = $map['Input'];
        }
        if (isset($map['StoppedTime'])) {
            $model->stoppedTime = $map['StoppedTime'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['FlowName'])) {
            $model->flowName = $map['FlowName'];
        }
        if (isset($map['Output'])) {
            $model->output = $map['Output'];
        }
        if (isset($map['ExternalOutputUri'])) {
            $model->externalOutputUri = $map['ExternalOutputUri'];
        }
        if (isset($map['StartedTime'])) {
            $model->startedTime = $map['StartedTime'];
        }
        if (isset($map['ExternalInputUri'])) {
            $model->externalInputUri = $map['ExternalInputUri'];
        }
        if (isset($map['FlowDefinition'])) {
            $model->flowDefinition = $map['FlowDefinition'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
