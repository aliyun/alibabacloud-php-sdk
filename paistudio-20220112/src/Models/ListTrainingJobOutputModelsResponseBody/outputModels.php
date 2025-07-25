<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20220112\Models\ListTrainingJobOutputModelsResponseBody;

use AlibabaCloud\SDK\PaiStudio\V20220112\Models\ListTrainingJobOutputModelsResponseBody\outputModels\labels;
use AlibabaCloud\Tea\Model;

class outputModels extends Model
{
    /**
     * @var mixed[]
     */
    public $compressionSpec;

    /**
     * @example {}
     *
     * @var mixed[]
     */
    public $evaluationSpec;

    /**
     * @example {}
     *
     * @var mixed[]
     */
    public $inferenceSpec;

    /**
     * @var labels[]
     */
    public $labels;

    /**
     * @example {
     * "lr": 0.000001,
     * "train_loss": 2.6345
     * }
     *
     * @var mixed[]
     */
    public $metrics;

    /**
     * @example model
     *
     * @var string
     */
    public $outputChannelName;

    /**
     * @example region=cn-shanghai,workspaceId=1345,kind=PipelineRun,id=run-sakdbaskjdf
     *
     * @var string
     */
    public $sourceId;

    /**
     * @example PAIFlow
     *
     * @var string
     */
    public $sourceType;

    /**
     * @example {}
     *
     * @var mixed[]
     */
    public $trainingSpec;

    /**
     * @example oss://test-bucket.oss-cn-hangzhou.aliyuncs.com/path/to/output/channel/
     *
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

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->compressionSpec) {
            $res['CompressionSpec'] = $this->compressionSpec;
        }
        if (null !== $this->evaluationSpec) {
            $res['EvaluationSpec'] = $this->evaluationSpec;
        }
        if (null !== $this->inferenceSpec) {
            $res['InferenceSpec'] = $this->inferenceSpec;
        }
        if (null !== $this->labels) {
            $res['Labels'] = [];
            if (null !== $this->labels && \is_array($this->labels)) {
                $n = 0;
                foreach ($this->labels as $item) {
                    $res['Labels'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->metrics) {
            $res['Metrics'] = $this->metrics;
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
            $res['TrainingSpec'] = $this->trainingSpec;
        }
        if (null !== $this->uri) {
            $res['Uri'] = $this->uri;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return outputModels
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CompressionSpec'])) {
            $model->compressionSpec = $map['CompressionSpec'];
        }
        if (isset($map['EvaluationSpec'])) {
            $model->evaluationSpec = $map['EvaluationSpec'];
        }
        if (isset($map['InferenceSpec'])) {
            $model->inferenceSpec = $map['InferenceSpec'];
        }
        if (isset($map['Labels'])) {
            if (!empty($map['Labels'])) {
                $model->labels = [];
                $n = 0;
                foreach ($map['Labels'] as $item) {
                    $model->labels[$n++] = null !== $item ? labels::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Metrics'])) {
            $model->metrics = $map['Metrics'];
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
            $model->trainingSpec = $map['TrainingSpec'];
        }
        if (isset($map['Uri'])) {
            $model->uri = $map['Uri'];
        }

        return $model;
    }
}
