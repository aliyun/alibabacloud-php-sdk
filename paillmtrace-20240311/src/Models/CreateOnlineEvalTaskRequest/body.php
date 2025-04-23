<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiLLMTrace\V20240311\Models\CreateOnlineEvalTaskRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\PaiLLMTrace\V20240311\Models\CreateOnlineEvalTaskRequest\body\filters;
use AlibabaCloud\SDK\PaiLLMTrace\V20240311\Models\EvaluationConfig;
use AlibabaCloud\SDK\PaiLLMTrace\V20240311\Models\ModelConfig;

class body extends Model
{
    /**
     * @var string
     */
    public $appName;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var EvaluationConfig
     */
    public $evaluationConfig;

    /**
     * @var filters[]
     */
    public $filters;

    /**
     * @var ModelConfig
     */
    public $modelConfig;

    /**
     * @var int
     */
    public $samplingFrequencyMinutes;

    /**
     * @var int
     */
    public $samplingRatio;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $taskName;
    protected $_name = [
        'appName' => 'AppName',
        'description' => 'Description',
        'endTime' => 'EndTime',
        'evaluationConfig' => 'EvaluationConfig',
        'filters' => 'Filters',
        'modelConfig' => 'ModelConfig',
        'samplingFrequencyMinutes' => 'SamplingFrequencyMinutes',
        'samplingRatio' => 'SamplingRatio',
        'startTime' => 'StartTime',
        'taskName' => 'TaskName',
    ];

    public function validate()
    {
        if (null !== $this->evaluationConfig) {
            $this->evaluationConfig->validate();
        }
        if (\is_array($this->filters)) {
            Model::validateArray($this->filters);
        }
        if (null !== $this->modelConfig) {
            $this->modelConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->evaluationConfig) {
            $res['EvaluationConfig'] = null !== $this->evaluationConfig ? $this->evaluationConfig->toArray($noStream) : $this->evaluationConfig;
        }

        if (null !== $this->filters) {
            if (\is_array($this->filters)) {
                $res['Filters'] = [];
                $n1 = 0;
                foreach ($this->filters as $item1) {
                    $res['Filters'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->modelConfig) {
            $res['ModelConfig'] = null !== $this->modelConfig ? $this->modelConfig->toArray($noStream) : $this->modelConfig;
        }

        if (null !== $this->samplingFrequencyMinutes) {
            $res['SamplingFrequencyMinutes'] = $this->samplingFrequencyMinutes;
        }

        if (null !== $this->samplingRatio) {
            $res['SamplingRatio'] = $this->samplingRatio;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->taskName) {
            $res['TaskName'] = $this->taskName;
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
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['EvaluationConfig'])) {
            $model->evaluationConfig = EvaluationConfig::fromMap($map['EvaluationConfig']);
        }

        if (isset($map['Filters'])) {
            if (!empty($map['Filters'])) {
                $model->filters = [];
                $n1 = 0;
                foreach ($map['Filters'] as $item1) {
                    $model->filters[$n1++] = filters::fromMap($item1);
                }
            }
        }

        if (isset($map['ModelConfig'])) {
            $model->modelConfig = ModelConfig::fromMap($map['ModelConfig']);
        }

        if (isset($map['SamplingFrequencyMinutes'])) {
            $model->samplingFrequencyMinutes = $map['SamplingFrequencyMinutes'];
        }

        if (isset($map['SamplingRatio'])) {
            $model->samplingRatio = $map['SamplingRatio'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['TaskName'])) {
            $model->taskName = $map['TaskName'];
        }

        return $model;
    }
}
