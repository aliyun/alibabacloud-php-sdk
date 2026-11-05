<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeApplicationAvailableModelsResponseBody\asrModels;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeApplicationAvailableModelsResponseBody\defaultEmbeddingModel;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeApplicationAvailableModelsResponseBody\defaultGraphLLMModel;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeApplicationAvailableModelsResponseBody\defaultLLMModel;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeApplicationAvailableModelsResponseBody\defaultRerankModel;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeApplicationAvailableModelsResponseBody\defaultVisualEmbedderModel;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeApplicationAvailableModelsResponseBody\defaultVisualLlmModel;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeApplicationAvailableModelsResponseBody\defaultVLModel;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeApplicationAvailableModelsResponseBody\embeddingModels;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeApplicationAvailableModelsResponseBody\graphLlmModels;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeApplicationAvailableModelsResponseBody\llmModels;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeApplicationAvailableModelsResponseBody\rerankModels;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeApplicationAvailableModelsResponseBody\visualEmbedderModels;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeApplicationAvailableModelsResponseBody\visualLlmModels;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeApplicationAvailableModelsResponseBody\VLModels;

class DescribeApplicationAvailableModelsResponseBody extends Model
{
    /**
     * @var asrModels[]
     */
    public $asrModels;

    /**
     * @var defaultEmbeddingModel
     */
    public $defaultEmbeddingModel;

    /**
     * @var defaultGraphLLMModel
     */
    public $defaultGraphLLMModel;

    /**
     * @var defaultLLMModel
     */
    public $defaultLLMModel;

    /**
     * @var string
     */
    public $defaultMemoryType;

    /**
     * @var defaultRerankModel
     */
    public $defaultRerankModel;

    /**
     * @var defaultVLModel
     */
    public $defaultVLModel;

    /**
     * @var defaultVisualEmbedderModel
     */
    public $defaultVisualEmbedderModel;

    /**
     * @var defaultVisualLlmModel
     */
    public $defaultVisualLlmModel;

    /**
     * @var embeddingModels[]
     */
    public $embeddingModels;

    /**
     * @var graphLlmModels[]
     */
    public $graphLlmModels;

    /**
     * @var llmModels[]
     */
    public $llmModels;

    /**
     * @var string[]
     */
    public $memoryTypes;

    /**
     * @var bool
     */
    public $multimodalSupported;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var rerankModels[]
     */
    public $rerankModels;

    /**
     * @var VLModels[]
     */
    public $VLModels;

    /**
     * @var visualEmbedderModels[]
     */
    public $visualEmbedderModels;

    /**
     * @var visualLlmModels[]
     */
    public $visualLlmModels;
    protected $_name = [
        'asrModels' => 'AsrModels',
        'defaultEmbeddingModel' => 'DefaultEmbeddingModel',
        'defaultGraphLLMModel' => 'DefaultGraphLLMModel',
        'defaultLLMModel' => 'DefaultLLMModel',
        'defaultMemoryType' => 'DefaultMemoryType',
        'defaultRerankModel' => 'DefaultRerankModel',
        'defaultVLModel' => 'DefaultVLModel',
        'defaultVisualEmbedderModel' => 'DefaultVisualEmbedderModel',
        'defaultVisualLlmModel' => 'DefaultVisualLlmModel',
        'embeddingModels' => 'EmbeddingModels',
        'graphLlmModels' => 'GraphLlmModels',
        'llmModels' => 'LlmModels',
        'memoryTypes' => 'MemoryTypes',
        'multimodalSupported' => 'MultimodalSupported',
        'requestId' => 'RequestId',
        'rerankModels' => 'RerankModels',
        'VLModels' => 'VLModels',
        'visualEmbedderModels' => 'VisualEmbedderModels',
        'visualLlmModels' => 'VisualLlmModels',
    ];

    public function validate()
    {
        if (\is_array($this->asrModels)) {
            Model::validateArray($this->asrModels);
        }
        if (null !== $this->defaultEmbeddingModel) {
            $this->defaultEmbeddingModel->validate();
        }
        if (null !== $this->defaultGraphLLMModel) {
            $this->defaultGraphLLMModel->validate();
        }
        if (null !== $this->defaultLLMModel) {
            $this->defaultLLMModel->validate();
        }
        if (null !== $this->defaultRerankModel) {
            $this->defaultRerankModel->validate();
        }
        if (null !== $this->defaultVLModel) {
            $this->defaultVLModel->validate();
        }
        if (null !== $this->defaultVisualEmbedderModel) {
            $this->defaultVisualEmbedderModel->validate();
        }
        if (null !== $this->defaultVisualLlmModel) {
            $this->defaultVisualLlmModel->validate();
        }
        if (\is_array($this->embeddingModels)) {
            Model::validateArray($this->embeddingModels);
        }
        if (\is_array($this->graphLlmModels)) {
            Model::validateArray($this->graphLlmModels);
        }
        if (\is_array($this->llmModels)) {
            Model::validateArray($this->llmModels);
        }
        if (\is_array($this->memoryTypes)) {
            Model::validateArray($this->memoryTypes);
        }
        if (\is_array($this->rerankModels)) {
            Model::validateArray($this->rerankModels);
        }
        if (\is_array($this->VLModels)) {
            Model::validateArray($this->VLModels);
        }
        if (\is_array($this->visualEmbedderModels)) {
            Model::validateArray($this->visualEmbedderModels);
        }
        if (\is_array($this->visualLlmModels)) {
            Model::validateArray($this->visualLlmModels);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->asrModels) {
            if (\is_array($this->asrModels)) {
                $res['AsrModels'] = [];
                $n1 = 0;
                foreach ($this->asrModels as $item1) {
                    $res['AsrModels'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->defaultEmbeddingModel) {
            $res['DefaultEmbeddingModel'] = null !== $this->defaultEmbeddingModel ? $this->defaultEmbeddingModel->toArray($noStream) : $this->defaultEmbeddingModel;
        }

        if (null !== $this->defaultGraphLLMModel) {
            $res['DefaultGraphLLMModel'] = null !== $this->defaultGraphLLMModel ? $this->defaultGraphLLMModel->toArray($noStream) : $this->defaultGraphLLMModel;
        }

        if (null !== $this->defaultLLMModel) {
            $res['DefaultLLMModel'] = null !== $this->defaultLLMModel ? $this->defaultLLMModel->toArray($noStream) : $this->defaultLLMModel;
        }

        if (null !== $this->defaultMemoryType) {
            $res['DefaultMemoryType'] = $this->defaultMemoryType;
        }

        if (null !== $this->defaultRerankModel) {
            $res['DefaultRerankModel'] = null !== $this->defaultRerankModel ? $this->defaultRerankModel->toArray($noStream) : $this->defaultRerankModel;
        }

        if (null !== $this->defaultVLModel) {
            $res['DefaultVLModel'] = null !== $this->defaultVLModel ? $this->defaultVLModel->toArray($noStream) : $this->defaultVLModel;
        }

        if (null !== $this->defaultVisualEmbedderModel) {
            $res['DefaultVisualEmbedderModel'] = null !== $this->defaultVisualEmbedderModel ? $this->defaultVisualEmbedderModel->toArray($noStream) : $this->defaultVisualEmbedderModel;
        }

        if (null !== $this->defaultVisualLlmModel) {
            $res['DefaultVisualLlmModel'] = null !== $this->defaultVisualLlmModel ? $this->defaultVisualLlmModel->toArray($noStream) : $this->defaultVisualLlmModel;
        }

        if (null !== $this->embeddingModels) {
            if (\is_array($this->embeddingModels)) {
                $res['EmbeddingModels'] = [];
                $n1 = 0;
                foreach ($this->embeddingModels as $item1) {
                    $res['EmbeddingModels'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->graphLlmModels) {
            if (\is_array($this->graphLlmModels)) {
                $res['GraphLlmModels'] = [];
                $n1 = 0;
                foreach ($this->graphLlmModels as $item1) {
                    $res['GraphLlmModels'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->llmModels) {
            if (\is_array($this->llmModels)) {
                $res['LlmModels'] = [];
                $n1 = 0;
                foreach ($this->llmModels as $item1) {
                    $res['LlmModels'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->memoryTypes) {
            if (\is_array($this->memoryTypes)) {
                $res['MemoryTypes'] = [];
                $n1 = 0;
                foreach ($this->memoryTypes as $item1) {
                    $res['MemoryTypes'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->multimodalSupported) {
            $res['MultimodalSupported'] = $this->multimodalSupported;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->rerankModels) {
            if (\is_array($this->rerankModels)) {
                $res['RerankModels'] = [];
                $n1 = 0;
                foreach ($this->rerankModels as $item1) {
                    $res['RerankModels'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->VLModels) {
            if (\is_array($this->VLModels)) {
                $res['VLModels'] = [];
                $n1 = 0;
                foreach ($this->VLModels as $item1) {
                    $res['VLModels'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->visualEmbedderModels) {
            if (\is_array($this->visualEmbedderModels)) {
                $res['VisualEmbedderModels'] = [];
                $n1 = 0;
                foreach ($this->visualEmbedderModels as $item1) {
                    $res['VisualEmbedderModels'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->visualLlmModels) {
            if (\is_array($this->visualLlmModels)) {
                $res['VisualLlmModels'] = [];
                $n1 = 0;
                foreach ($this->visualLlmModels as $item1) {
                    $res['VisualLlmModels'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['AsrModels'])) {
            if (!empty($map['AsrModels'])) {
                $model->asrModels = [];
                $n1 = 0;
                foreach ($map['AsrModels'] as $item1) {
                    $model->asrModels[$n1] = asrModels::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['DefaultEmbeddingModel'])) {
            $model->defaultEmbeddingModel = defaultEmbeddingModel::fromMap($map['DefaultEmbeddingModel']);
        }

        if (isset($map['DefaultGraphLLMModel'])) {
            $model->defaultGraphLLMModel = defaultGraphLLMModel::fromMap($map['DefaultGraphLLMModel']);
        }

        if (isset($map['DefaultLLMModel'])) {
            $model->defaultLLMModel = defaultLLMModel::fromMap($map['DefaultLLMModel']);
        }

        if (isset($map['DefaultMemoryType'])) {
            $model->defaultMemoryType = $map['DefaultMemoryType'];
        }

        if (isset($map['DefaultRerankModel'])) {
            $model->defaultRerankModel = defaultRerankModel::fromMap($map['DefaultRerankModel']);
        }

        if (isset($map['DefaultVLModel'])) {
            $model->defaultVLModel = defaultVLModel::fromMap($map['DefaultVLModel']);
        }

        if (isset($map['DefaultVisualEmbedderModel'])) {
            $model->defaultVisualEmbedderModel = defaultVisualEmbedderModel::fromMap($map['DefaultVisualEmbedderModel']);
        }

        if (isset($map['DefaultVisualLlmModel'])) {
            $model->defaultVisualLlmModel = defaultVisualLlmModel::fromMap($map['DefaultVisualLlmModel']);
        }

        if (isset($map['EmbeddingModels'])) {
            if (!empty($map['EmbeddingModels'])) {
                $model->embeddingModels = [];
                $n1 = 0;
                foreach ($map['EmbeddingModels'] as $item1) {
                    $model->embeddingModels[$n1] = embeddingModels::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['GraphLlmModels'])) {
            if (!empty($map['GraphLlmModels'])) {
                $model->graphLlmModels = [];
                $n1 = 0;
                foreach ($map['GraphLlmModels'] as $item1) {
                    $model->graphLlmModels[$n1] = graphLlmModels::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['LlmModels'])) {
            if (!empty($map['LlmModels'])) {
                $model->llmModels = [];
                $n1 = 0;
                foreach ($map['LlmModels'] as $item1) {
                    $model->llmModels[$n1] = llmModels::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['MemoryTypes'])) {
            if (!empty($map['MemoryTypes'])) {
                $model->memoryTypes = [];
                $n1 = 0;
                foreach ($map['MemoryTypes'] as $item1) {
                    $model->memoryTypes[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['MultimodalSupported'])) {
            $model->multimodalSupported = $map['MultimodalSupported'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['RerankModels'])) {
            if (!empty($map['RerankModels'])) {
                $model->rerankModels = [];
                $n1 = 0;
                foreach ($map['RerankModels'] as $item1) {
                    $model->rerankModels[$n1] = rerankModels::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['VLModels'])) {
            if (!empty($map['VLModels'])) {
                $model->VLModels = [];
                $n1 = 0;
                foreach ($map['VLModels'] as $item1) {
                    $model->VLModels[$n1] = VLModels::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['VisualEmbedderModels'])) {
            if (!empty($map['VisualEmbedderModels'])) {
                $model->visualEmbedderModels = [];
                $n1 = 0;
                foreach ($map['VisualEmbedderModels'] as $item1) {
                    $model->visualEmbedderModels[$n1] = visualEmbedderModels::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['VisualLlmModels'])) {
            if (!empty($map['VisualLlmModels'])) {
                $model->visualLlmModels = [];
                $n1 = 0;
                foreach ($map['VisualLlmModels'] as $item1) {
                    $model->visualLlmModels[$n1] = visualLlmModels::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
