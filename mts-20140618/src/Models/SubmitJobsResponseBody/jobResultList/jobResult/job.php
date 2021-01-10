<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\SubmitJobsResponseBody\jobResultList\jobResult;

use AlibabaCloud\SDK\Mts\V20140618\Models\SubmitJobsResponseBody\jobResultList\jobResult\job\input;
use AlibabaCloud\SDK\Mts\V20140618\Models\SubmitJobsResponseBody\jobResultList\jobResult\job\MNSMessageResult;
use AlibabaCloud\SDK\Mts\V20140618\Models\SubmitJobsResponseBody\jobResultList\jobResult\job\output;
use AlibabaCloud\Tea\Model;

class job extends Model
{
    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var int
     */
    public $percent;

    /**
     * @var string
     */
    public $finishTime;

    /**
     * @var string
     */
    public $state;

    /**
     * @var string
     */
    public $jobId;

    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $message;

    /**
     * @var output
     */
    public $output;

    /**
     * @var string
     */
    public $pipelineId;

    /**
     * @var input
     */
    public $input;

    /**
     * @var MNSMessageResult
     */
    public $MNSMessageResult;
    protected $_name = [
        'creationTime'     => 'CreationTime',
        'percent'          => 'Percent',
        'finishTime'       => 'FinishTime',
        'state'            => 'State',
        'jobId'            => 'JobId',
        'code'             => 'Code',
        'message'          => 'Message',
        'output'           => 'Output',
        'pipelineId'       => 'PipelineId',
        'input'            => 'Input',
        'MNSMessageResult' => 'MNSMessageResult',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->percent) {
            $res['Percent'] = $this->percent;
        }
        if (null !== $this->finishTime) {
            $res['FinishTime'] = $this->finishTime;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->output) {
            $res['Output'] = null !== $this->output ? $this->output->toMap() : null;
        }
        if (null !== $this->pipelineId) {
            $res['PipelineId'] = $this->pipelineId;
        }
        if (null !== $this->input) {
            $res['Input'] = null !== $this->input ? $this->input->toMap() : null;
        }
        if (null !== $this->MNSMessageResult) {
            $res['MNSMessageResult'] = null !== $this->MNSMessageResult ? $this->MNSMessageResult->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return job
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['Percent'])) {
            $model->percent = $map['Percent'];
        }
        if (isset($map['FinishTime'])) {
            $model->finishTime = $map['FinishTime'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['Output'])) {
            $model->output = output::fromMap($map['Output']);
        }
        if (isset($map['PipelineId'])) {
            $model->pipelineId = $map['PipelineId'];
        }
        if (isset($map['Input'])) {
            $model->input = input::fromMap($map['Input']);
        }
        if (isset($map['MNSMessageResult'])) {
            $model->MNSMessageResult = MNSMessageResult::fromMap($map['MNSMessageResult']);
        }

        return $model;
    }
}
