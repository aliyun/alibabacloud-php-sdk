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
    public $jobId;

    /**
     * @var string
     */
    public $state;

    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $message;

    /**
     * @var int
     */
    public $percent;

    /**
     * @var string
     */
    public $pipelineId;

    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var string
     */
    public $finishTime;

    /**
     * @var inputs
     */
    public $inputs;

    /**
     * @var complexEditingConfigs
     */
    public $complexEditingConfigs;

    /**
     * @var transcodeOutput
     */
    public $transcodeOutput;

    /**
     * @var MNSMessageResult
     */
    public $MNSMessageResult;
    protected $_name = [
        'jobId'                 => 'JobId',
        'state'                 => 'State',
        'code'                  => 'Code',
        'message'               => 'Message',
        'percent'               => 'Percent',
        'pipelineId'            => 'PipelineId',
        'creationTime'          => 'CreationTime',
        'finishTime'            => 'FinishTime',
        'inputs'                => 'Inputs',
        'complexEditingConfigs' => 'ComplexEditingConfigs',
        'transcodeOutput'       => 'transcodeOutput',
        'MNSMessageResult'      => 'MNSMessageResult',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->percent) {
            $res['Percent'] = $this->percent;
        }
        if (null !== $this->pipelineId) {
            $res['PipelineId'] = $this->pipelineId;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->finishTime) {
            $res['FinishTime'] = $this->finishTime;
        }
        if (null !== $this->inputs) {
            $res['Inputs'] = null !== $this->inputs ? $this->inputs->toMap() : null;
        }
        if (null !== $this->complexEditingConfigs) {
            $res['ComplexEditingConfigs'] = null !== $this->complexEditingConfigs ? $this->complexEditingConfigs->toMap() : null;
        }
        if (null !== $this->transcodeOutput) {
            $res['transcodeOutput'] = null !== $this->transcodeOutput ? $this->transcodeOutput->toMap() : null;
        }
        if (null !== $this->MNSMessageResult) {
            $res['MNSMessageResult'] = null !== $this->MNSMessageResult ? $this->MNSMessageResult->toMap() : null;
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
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['Percent'])) {
            $model->percent = $map['Percent'];
        }
        if (isset($map['PipelineId'])) {
            $model->pipelineId = $map['PipelineId'];
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['FinishTime'])) {
            $model->finishTime = $map['FinishTime'];
        }
        if (isset($map['Inputs'])) {
            $model->inputs = inputs::fromMap($map['Inputs']);
        }
        if (isset($map['ComplexEditingConfigs'])) {
            $model->complexEditingConfigs = complexEditingConfigs::fromMap($map['ComplexEditingConfigs']);
        }
        if (isset($map['transcodeOutput'])) {
            $model->transcodeOutput = transcodeOutput::fromMap($map['transcodeOutput']);
        }
        if (isset($map['MNSMessageResult'])) {
            $model->MNSMessageResult = MNSMessageResult::fromMap($map['MNSMessageResult']);
        }

        return $model;
    }
}
