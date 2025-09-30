<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\ChatWithKnowledgeBaseRequest\knowledgeParams\sourceCollection;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ChatWithKnowledgeBaseRequest\knowledgeParams\sourceCollection\queryParams\graphSearchArgs;

class queryParams extends Model
{
    /**
     * @var string
     */
    public $filter;

    /**
     * @var bool
     */
    public $graphEnhance;

    /**
     * @var graphSearchArgs
     */
    public $graphSearchArgs;

    /**
     * @var string
     */
    public $hybridSearch;

    /**
     * @var mixed[]
     */
    public $hybridSearchArgs;

    /**
     * @var string
     */
    public $metrics;

    /**
     * @var int[]
     */
    public $recallWindow;

    /**
     * @var float
     */
    public $rerankFactor;

    /**
     * @var int
     */
    public $topK;

    /**
     * @var bool
     */
    public $useFullTextRetrieval;
    protected $_name = [
        'filter' => 'Filter',
        'graphEnhance' => 'GraphEnhance',
        'graphSearchArgs' => 'GraphSearchArgs',
        'hybridSearch' => 'HybridSearch',
        'hybridSearchArgs' => 'HybridSearchArgs',
        'metrics' => 'Metrics',
        'recallWindow' => 'RecallWindow',
        'rerankFactor' => 'RerankFactor',
        'topK' => 'TopK',
        'useFullTextRetrieval' => 'UseFullTextRetrieval',
    ];

    public function validate()
    {
        if (null !== $this->graphSearchArgs) {
            $this->graphSearchArgs->validate();
        }
        if (\is_array($this->hybridSearchArgs)) {
            Model::validateArray($this->hybridSearchArgs);
        }
        if (\is_array($this->recallWindow)) {
            Model::validateArray($this->recallWindow);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->filter) {
            $res['Filter'] = $this->filter;
        }

        if (null !== $this->graphEnhance) {
            $res['GraphEnhance'] = $this->graphEnhance;
        }

        if (null !== $this->graphSearchArgs) {
            $res['GraphSearchArgs'] = null !== $this->graphSearchArgs ? $this->graphSearchArgs->toArray($noStream) : $this->graphSearchArgs;
        }

        if (null !== $this->hybridSearch) {
            $res['HybridSearch'] = $this->hybridSearch;
        }

        if (null !== $this->hybridSearchArgs) {
            if (\is_array($this->hybridSearchArgs)) {
                $res['HybridSearchArgs'] = [];
                foreach ($this->hybridSearchArgs as $key1 => $value1) {
                    $res['HybridSearchArgs'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->metrics) {
            $res['Metrics'] = $this->metrics;
        }

        if (null !== $this->recallWindow) {
            if (\is_array($this->recallWindow)) {
                $res['RecallWindow'] = [];
                $n1 = 0;
                foreach ($this->recallWindow as $item1) {
                    $res['RecallWindow'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->rerankFactor) {
            $res['RerankFactor'] = $this->rerankFactor;
        }

        if (null !== $this->topK) {
            $res['TopK'] = $this->topK;
        }

        if (null !== $this->useFullTextRetrieval) {
            $res['UseFullTextRetrieval'] = $this->useFullTextRetrieval;
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
        if (isset($map['Filter'])) {
            $model->filter = $map['Filter'];
        }

        if (isset($map['GraphEnhance'])) {
            $model->graphEnhance = $map['GraphEnhance'];
        }

        if (isset($map['GraphSearchArgs'])) {
            $model->graphSearchArgs = graphSearchArgs::fromMap($map['GraphSearchArgs']);
        }

        if (isset($map['HybridSearch'])) {
            $model->hybridSearch = $map['HybridSearch'];
        }

        if (isset($map['HybridSearchArgs'])) {
            if (!empty($map['HybridSearchArgs'])) {
                $model->hybridSearchArgs = [];
                foreach ($map['HybridSearchArgs'] as $key1 => $value1) {
                    $model->hybridSearchArgs[$key1] = $value1;
                }
            }
        }

        if (isset($map['Metrics'])) {
            $model->metrics = $map['Metrics'];
        }

        if (isset($map['RecallWindow'])) {
            if (!empty($map['RecallWindow'])) {
                $model->recallWindow = [];
                $n1 = 0;
                foreach ($map['RecallWindow'] as $item1) {
                    $model->recallWindow[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['RerankFactor'])) {
            $model->rerankFactor = $map['RerankFactor'];
        }

        if (isset($map['TopK'])) {
            $model->topK = $map['TopK'];
        }

        if (isset($map['UseFullTextRetrieval'])) {
            $model->useFullTextRetrieval = $map['UseFullTextRetrieval'];
        }

        return $model;
    }
}
