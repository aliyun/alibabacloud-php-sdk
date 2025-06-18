<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20220112\Models\ListTrainingJobOutputModelsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\PaiStudio\V20220112\Models\ListTrainingJobOutputModelsResponseBody\outputModels\labels;

class outputModels extends Model
{
    /**
     * @var mixed[]
     */
    public $compressionSpec;

    /**
     * @var mixed[]
     */
    public $evaluationSpec;

    /**
     * @var mixed[]
     */
    public $inferenceSpec;

    /**
     * @var labels[]
     */
    public $labels;

    /**
     * @var mixed[]
     */
    public $metrics;

    /**
     * @var string
     */
    public $outputChannelName;

    /**
     * @var string
     */
    public $sourceId;

    /**
     * @var string
     */
    public $sourceType;

    /**
     * @var mixed[]
     */
    public $trainingSpec;

    /**
     * @var string
     */
    public $uri;
    protected $_name = [
        'compressionSpec' => 'CompressionSpec',
        'evaluationSpec' => 'EvaluationSpec',
        'inferenceSpec' => 'InferenceSpec',
        'labels' => 'Labels',
        'metrics' => 'Metrics',
        'outputChannelName' => 'OutputChannelName',
        'sourceId' => 'SourceId',
        'sourceType' => 'SourceType',
        'trainingSpec' => 'TrainingSpec',
        'uri' => 'Uri',
    ];

    public function validate()
    {
        if (\is_array($this->compressionSpec)) {
            Model::validateArray($this->compressionSpec);
        }
        if (\is_array($this->evaluationSpec)) {
            Model::validateArray($this->evaluationSpec);
        }
        if (\is_array($this->inferenceSpec)) {
            Model::validateArray($this->inferenceSpec);
        }
        if (\is_array($this->labels)) {
            Model::validateArray($this->labels);
        }
        if (\is_array($this->metrics)) {
            Model::validateArray($this->metrics);
        }
        if (\is_array($this->trainingSpec)) {
            Model::validateArray($this->trainingSpec);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->compressionSpec) {
            if (\is_array($this->compressionSpec)) {
                $res['CompressionSpec'] = [];
                foreach ($this->compressionSpec as $key1 => $value1) {
                    $res['CompressionSpec'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->evaluationSpec) {
            if (\is_array($this->evaluationSpec)) {
                $res['EvaluationSpec'] = [];
                foreach ($this->evaluationSpec as $key1 => $value1) {
                    $res['EvaluationSpec'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->inferenceSpec) {
            if (\is_array($this->inferenceSpec)) {
                $res['InferenceSpec'] = [];
                foreach ($this->inferenceSpec as $key1 => $value1) {
                    $res['InferenceSpec'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->labels) {
            if (\is_array($this->labels)) {
                $res['Labels'] = [];
                $n1 = 0;
                foreach ($this->labels as $item1) {
                    $res['Labels'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->metrics) {
            if (\is_array($this->metrics)) {
                $res['Metrics'] = [];
                foreach ($this->metrics as $key1 => $value1) {
                    $res['Metrics'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->outputChannelName) {
            $res['OutputChannelName'] = $this->outputChannelName;
        }

        if (null !== $this->sourceId) {
            $res['SourceId'] = $this->sourceId;
        }

        if (null !== $this->sourceType) {
            $res['SourceType'] = $this->sourceType;
        }

        if (null !== $this->trainingSpec) {
            if (\is_array($this->trainingSpec)) {
                $res['TrainingSpec'] = [];
                foreach ($this->trainingSpec as $key1 => $value1) {
                    $res['TrainingSpec'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->uri) {
            $res['Uri'] = $this->uri;
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
        if (isset($map['CompressionSpec'])) {
            if (!empty($map['CompressionSpec'])) {
                $model->compressionSpec = [];
                foreach ($map['CompressionSpec'] as $key1 => $value1) {
                    $model->compressionSpec[$key1] = $value1;
                }
            }
        }

        if (isset($map['EvaluationSpec'])) {
            if (!empty($map['EvaluationSpec'])) {
                $model->evaluationSpec = [];
                foreach ($map['EvaluationSpec'] as $key1 => $value1) {
                    $model->evaluationSpec[$key1] = $value1;
                }
            }
        }

        if (isset($map['InferenceSpec'])) {
            if (!empty($map['InferenceSpec'])) {
                $model->inferenceSpec = [];
                foreach ($map['InferenceSpec'] as $key1 => $value1) {
                    $model->inferenceSpec[$key1] = $value1;
                }
            }
        }

        if (isset($map['Labels'])) {
            if (!empty($map['Labels'])) {
                $model->labels = [];
                $n1 = 0;
                foreach ($map['Labels'] as $item1) {
                    $model->labels[$n1] = labels::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Metrics'])) {
            if (!empty($map['Metrics'])) {
                $model->metrics = [];
                foreach ($map['Metrics'] as $key1 => $value1) {
                    $model->metrics[$key1] = $value1;
                }
            }
        }

        if (isset($map['OutputChannelName'])) {
            $model->outputChannelName = $map['OutputChannelName'];
        }

        if (isset($map['SourceId'])) {
            $model->sourceId = $map['SourceId'];
        }

        if (isset($map['SourceType'])) {
            $model->sourceType = $map['SourceType'];
        }

        if (isset($map['TrainingSpec'])) {
            if (!empty($map['TrainingSpec'])) {
                $model->trainingSpec = [];
                foreach ($map['TrainingSpec'] as $key1 => $value1) {
                    $model->trainingSpec[$key1] = $value1;
                }
            }
        }

        if (isset($map['Uri'])) {
            $model->uri = $map['Uri'];
        }

        return $model;
    }
}
