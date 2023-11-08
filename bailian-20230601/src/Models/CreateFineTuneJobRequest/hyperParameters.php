<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Bailian\V20230601\Models\CreateFineTuneJobRequest;

use AlibabaCloud\Tea\Model;

class hyperParameters extends Model
{
    /**
     * @example 32
     *
     * @var int
     */
    public $batchSize;

    /**
     * @example 10
     *
     * @var int
     */
    public $epochs;

    /**
     * @example 2e-5
     *
     * @var string
     */
    public $learningRate;

    /**
     * @example 1.0
     *
     * @var float
     */
    public $promptLossWeight;
    protected $_name = [
        'batchSize'        => 'BatchSize',
        'epochs'           => 'Epochs',
        'learningRate'     => 'LearningRate',
        'promptLossWeight' => 'PromptLossWeight',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->batchSize) {
            $res['BatchSize'] = $this->batchSize;
        }
        if (null !== $this->epochs) {
            $res['Epochs'] = $this->epochs;
        }
        if (null !== $this->learningRate) {
            $res['LearningRate'] = $this->learningRate;
        }
        if (null !== $this->promptLossWeight) {
            $res['PromptLossWeight'] = $this->promptLossWeight;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return hyperParameters
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BatchSize'])) {
            $model->batchSize = $map['BatchSize'];
        }
        if (isset($map['Epochs'])) {
            $model->epochs = $map['Epochs'];
        }
        if (isset($map['LearningRate'])) {
            $model->learningRate = $map['LearningRate'];
        }
        if (isset($map['PromptLossWeight'])) {
            $model->promptLossWeight = $map['PromptLossWeight'];
        }

        return $model;
    }
}
