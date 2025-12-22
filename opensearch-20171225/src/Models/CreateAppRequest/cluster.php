<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenSearch\V20171225\Models\CreateAppRequest;

use AlibabaCloud\Dara\Model;

class cluster extends Model
{
    /**
     * @var mixed[][]
     */
    public $chunkModels;

    /**
     * @var mixed[]
     */
    public $graphRag;

    /**
     * @var mixed[][]
     */
    public $imageContentRecognizerModels;

    /**
     * @var int
     */
    public $maxQueryClauseLength;

    /**
     * @var int
     */
    public $maxTimeoutMS;

    /**
     * @var string
     */
    public $textEmbeddingModel;

    /**
     * @var string
     */
    public $textSparseEmbeddingModel;

    /**
     * @var mixed[][]
     */
    public $vectorIndexConfigs;
    protected $_name = [
        'chunkModels' => 'chunkModels',
        'graphRag' => 'graphRag',
        'imageContentRecognizerModels' => 'imageContentRecognizerModels',
        'maxQueryClauseLength' => 'maxQueryClauseLength',
        'maxTimeoutMS' => 'maxTimeoutMS',
        'textEmbeddingModel' => 'textEmbeddingModel',
        'textSparseEmbeddingModel' => 'textSparseEmbeddingModel',
        'vectorIndexConfigs' => 'vectorIndexConfigs',
    ];

    public function validate()
    {
        if (\is_array($this->chunkModels)) {
            Model::validateArray($this->chunkModels);
        }
        if (\is_array($this->graphRag)) {
            Model::validateArray($this->graphRag);
        }
        if (\is_array($this->imageContentRecognizerModels)) {
            Model::validateArray($this->imageContentRecognizerModels);
        }
        if (\is_array($this->vectorIndexConfigs)) {
            Model::validateArray($this->vectorIndexConfigs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->chunkModels) {
            if (\is_array($this->chunkModels)) {
                $res['chunkModels'] = [];
                $n1 = 0;
                foreach ($this->chunkModels as $item1) {
                    if (\is_array($item1)) {
                        $res['chunkModels'][$n1] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $res['chunkModels'][$n1][$key2] = $value2;
                        }
                    }
                    ++$n1;
                }
            }
        }

        if (null !== $this->graphRag) {
            if (\is_array($this->graphRag)) {
                $res['graphRag'] = [];
                foreach ($this->graphRag as $key1 => $value1) {
                    $res['graphRag'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->imageContentRecognizerModels) {
            if (\is_array($this->imageContentRecognizerModels)) {
                $res['imageContentRecognizerModels'] = [];
                $n1 = 0;
                foreach ($this->imageContentRecognizerModels as $item1) {
                    if (\is_array($item1)) {
                        $res['imageContentRecognizerModels'][$n1] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $res['imageContentRecognizerModels'][$n1][$key2] = $value2;
                        }
                    }
                    ++$n1;
                }
            }
        }

        if (null !== $this->maxQueryClauseLength) {
            $res['maxQueryClauseLength'] = $this->maxQueryClauseLength;
        }

        if (null !== $this->maxTimeoutMS) {
            $res['maxTimeoutMS'] = $this->maxTimeoutMS;
        }

        if (null !== $this->textEmbeddingModel) {
            $res['textEmbeddingModel'] = $this->textEmbeddingModel;
        }

        if (null !== $this->textSparseEmbeddingModel) {
            $res['textSparseEmbeddingModel'] = $this->textSparseEmbeddingModel;
        }

        if (null !== $this->vectorIndexConfigs) {
            if (\is_array($this->vectorIndexConfigs)) {
                $res['vectorIndexConfigs'] = [];
                $n1 = 0;
                foreach ($this->vectorIndexConfigs as $item1) {
                    if (\is_array($item1)) {
                        $res['vectorIndexConfigs'][$n1] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $res['vectorIndexConfigs'][$n1][$key2] = $value2;
                        }
                    }
                    ++$n1;
                }
            }
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
        if (isset($map['chunkModels'])) {
            if (!empty($map['chunkModels'])) {
                $model->chunkModels = [];
                $n1 = 0;
                foreach ($map['chunkModels'] as $item1) {
                    if (!empty($item1)) {
                        $model->chunkModels[$n1] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $model->chunkModels[$n1][$key2] = $value2;
                        }
                    }
                    ++$n1;
                }
            }
        }

        if (isset($map['graphRag'])) {
            if (!empty($map['graphRag'])) {
                $model->graphRag = [];
                foreach ($map['graphRag'] as $key1 => $value1) {
                    $model->graphRag[$key1] = $value1;
                }
            }
        }

        if (isset($map['imageContentRecognizerModels'])) {
            if (!empty($map['imageContentRecognizerModels'])) {
                $model->imageContentRecognizerModels = [];
                $n1 = 0;
                foreach ($map['imageContentRecognizerModels'] as $item1) {
                    if (!empty($item1)) {
                        $model->imageContentRecognizerModels[$n1] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $model->imageContentRecognizerModels[$n1][$key2] = $value2;
                        }
                    }
                    ++$n1;
                }
            }
        }

        if (isset($map['maxQueryClauseLength'])) {
            $model->maxQueryClauseLength = $map['maxQueryClauseLength'];
        }

        if (isset($map['maxTimeoutMS'])) {
            $model->maxTimeoutMS = $map['maxTimeoutMS'];
        }

        if (isset($map['textEmbeddingModel'])) {
            $model->textEmbeddingModel = $map['textEmbeddingModel'];
        }

        if (isset($map['textSparseEmbeddingModel'])) {
            $model->textSparseEmbeddingModel = $map['textSparseEmbeddingModel'];
        }

        if (isset($map['vectorIndexConfigs'])) {
            if (!empty($map['vectorIndexConfigs'])) {
                $model->vectorIndexConfigs = [];
                $n1 = 0;
                foreach ($map['vectorIndexConfigs'] as $item1) {
                    if (!empty($item1)) {
                        $model->vectorIndexConfigs[$n1] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $model->vectorIndexConfigs[$n1][$key2] = $value2;
                        }
                    }
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
