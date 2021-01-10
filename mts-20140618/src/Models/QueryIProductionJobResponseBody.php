<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models;

use AlibabaCloud\Tea\Model;

class QueryIProductionJobResponseBody extends Model
{
    /**
     * @var string
     */
    public $functionName;

    /**
     * @var string
     */
    public $input;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $userData;

    /**
     * @var string
     */
    public $state;

    /**
     * @var string
     */
    public $output;

    /**
     * @var string
     */
    public $pipelineId;

    /**
     * @var string
     */
    public $jobParams;

    /**
     * @var string
     */
    public $jobId;

    /**
     * @var string
     */
    public $result;
    protected $_name = [
        'functionName' => 'FunctionName',
        'input'        => 'Input',
        'requestId'    => 'RequestId',
        'userData'     => 'UserData',
        'state'        => 'State',
        'output'       => 'Output',
        'pipelineId'   => 'PipelineId',
        'jobParams'    => 'JobParams',
        'jobId'        => 'JobId',
        'result'       => 'Result',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->functionName) {
            $res['FunctionName'] = $this->functionName;
        }
        if (null !== $this->input) {
            $res['Input'] = $this->input;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->output) {
            $res['Output'] = $this->output;
        }
        if (null !== $this->pipelineId) {
            $res['PipelineId'] = $this->pipelineId;
        }
        if (null !== $this->jobParams) {
            $res['JobParams'] = $this->jobParams;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->result) {
            $res['Result'] = $this->result;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryIProductionJobResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FunctionName'])) {
            $model->functionName = $map['FunctionName'];
        }
        if (isset($map['Input'])) {
            $model->input = $map['Input'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['Output'])) {
            $model->output = $map['Output'];
        }
        if (isset($map['PipelineId'])) {
            $model->pipelineId = $map['PipelineId'];
        }
        if (isset($map['JobParams'])) {
            $model->jobParams = $map['JobParams'];
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['Result'])) {
            $model->result = $map['Result'];
        }

        return $model;
    }
}
