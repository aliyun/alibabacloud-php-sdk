<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\SubmitComplexJobResponseBody;

use AlibabaCloud\SDK\Mts\V20140618\Models\SubmitComplexJobResponseBody\complexJob\complexEditingConfigs;
use AlibabaCloud\SDK\Mts\V20140618\Models\SubmitComplexJobResponseBody\complexJob\inputs;
use AlibabaCloud\SDK\Mts\V20140618\Models\SubmitComplexJobResponseBody\complexJob\MNSMessageResult;
use AlibabaCloud\SDK\Mts\V20140618\Models\SubmitComplexJobResponseBody\complexJob\transcodeOutput;
use AlibabaCloud\Tea\Model;

class complexJob extends Model
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
     * @var transcodeOutput
     */
    public $transcodeOutput;

    /**
     * @var string
     */
    public $message;

    /**
     * @var MNSMessageResult
     */
    public $MNSMessageResult;

    /**
     * @var complexEditingConfigs
     */
    public $complexEditingConfigs;

    /**
     * @var inputs
     */
    public $inputs;

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
    public $pipelineId;
    protected $_name = [
        'creationTime'          => 'CreationTime',
        'percent'               => 'Percent',
        'finishTime'            => 'FinishTime',
        'state'                 => 'State',
        'transcodeOutput'       => 'transcodeOutput',
        'message'               => 'Message',
        'MNSMessageResult'      => 'MNSMessageResult',
        'complexEditingConfigs' => 'ComplexEditingConfigs',
        'inputs'                => 'Inputs',
        'jobId'                 => 'JobId',
        'code'                  => 'Code',
        'pipelineId'            => 'PipelineId',
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
        if (null !== $this->transcodeOutput) {
            $res['transcodeOutput'] = null !== $this->transcodeOutput ? $this->transcodeOutput->toMap() : null;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->MNSMessageResult) {
            $res['MNSMessageResult'] = null !== $this->MNSMessageResult ? $this->MNSMessageResult->toMap() : null;
        }
        if (null !== $this->complexEditingConfigs) {
            $res['ComplexEditingConfigs'] = null !== $this->complexEditingConfigs ? $this->complexEditingConfigs->toMap() : null;
        }
        if (null !== $this->inputs) {
            $res['Inputs'] = null !== $this->inputs ? $this->inputs->toMap() : null;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->pipelineId) {
            $res['PipelineId'] = $this->pipelineId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return complexJob
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
        if (isset($map['transcodeOutput'])) {
            $model->transcodeOutput = transcodeOutput::fromMap($map['transcodeOutput']);
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['MNSMessageResult'])) {
            $model->MNSMessageResult = MNSMessageResult::fromMap($map['MNSMessageResult']);
        }
        if (isset($map['ComplexEditingConfigs'])) {
            $model->complexEditingConfigs = complexEditingConfigs::fromMap($map['ComplexEditingConfigs']);
        }
        if (isset($map['Inputs'])) {
            $model->inputs = inputs::fromMap($map['Inputs']);
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['PipelineId'])) {
            $model->pipelineId = $map['PipelineId'];
        }

        return $model;
    }
}
