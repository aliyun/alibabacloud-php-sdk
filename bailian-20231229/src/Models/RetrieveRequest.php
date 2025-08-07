<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Bailian\V20231229\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Bailian\V20231229\Models\RetrieveRequest\queryHistory;
use AlibabaCloud\SDK\Bailian\V20231229\Models\RetrieveRequest\rerank;
use AlibabaCloud\SDK\Bailian\V20231229\Models\RetrieveRequest\rewrite;

class RetrieveRequest extends Model
{
    /**
     * @var int
     */
    public $denseSimilarityTopK;

    /**
     * @var bool
     */
    public $enableReranking;

    /**
     * @var bool
     */
    public $enableRewrite;

    /**
     * @var string[]
     */
    public $images;

    /**
     * @var string
     */
    public $indexId;

    /**
     * @var string
     */
    public $query;

    /**
     * @var queryHistory[]
     */
    public $queryHistory;

    /**
     * @var rerank[]
     */
    public $rerank;

    /**
     * @var float
     */
    public $rerankMinScore;

    /**
     * @var int
     */
    public $rerankTopN;

    /**
     * @var rewrite[]
     */
    public $rewrite;

    /**
     * @var bool
     */
    public $saveRetrieverHistory;

    /**
     * @var string[][]
     */
    public $searchFilters;

    /**
     * @var int
     */
    public $sparseSimilarityTopK;
    protected $_name = [
        'denseSimilarityTopK' => 'DenseSimilarityTopK',
        'enableReranking' => 'EnableReranking',
        'enableRewrite' => 'EnableRewrite',
        'images' => 'Images',
        'indexId' => 'IndexId',
        'query' => 'Query',
        'queryHistory' => 'QueryHistory',
        'rerank' => 'Rerank',
        'rerankMinScore' => 'RerankMinScore',
        'rerankTopN' => 'RerankTopN',
        'rewrite' => 'Rewrite',
        'saveRetrieverHistory' => 'SaveRetrieverHistory',
        'searchFilters' => 'SearchFilters',
        'sparseSimilarityTopK' => 'SparseSimilarityTopK',
    ];

    public function validate()
    {
        if (\is_array($this->images)) {
            Model::validateArray($this->images);
        }
        if (\is_array($this->queryHistory)) {
            Model::validateArray($this->queryHistory);
        }
        if (\is_array($this->rerank)) {
            Model::validateArray($this->rerank);
        }
        if (\is_array($this->rewrite)) {
            Model::validateArray($this->rewrite);
        }
        if (\is_array($this->searchFilters)) {
            Model::validateArray($this->searchFilters);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->denseSimilarityTopK) {
            $res['DenseSimilarityTopK'] = $this->denseSimilarityTopK;
        }

        if (null !== $this->enableReranking) {
            $res['EnableReranking'] = $this->enableReranking;
        }

        if (null !== $this->enableRewrite) {
            $res['EnableRewrite'] = $this->enableRewrite;
        }

        if (null !== $this->images) {
            if (\is_array($this->images)) {
                $res['Images'] = [];
                $n1 = 0;
                foreach ($this->images as $item1) {
                    $res['Images'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->indexId) {
            $res['IndexId'] = $this->indexId;
        }

        if (null !== $this->query) {
            $res['Query'] = $this->query;
        }

        if (null !== $this->queryHistory) {
            if (\is_array($this->queryHistory)) {
                $res['QueryHistory'] = [];
                $n1 = 0;
                foreach ($this->queryHistory as $item1) {
                    $res['QueryHistory'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->rerank) {
            if (\is_array($this->rerank)) {
                $res['Rerank'] = [];
                $n1 = 0;
                foreach ($this->rerank as $item1) {
                    $res['Rerank'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->rerankMinScore) {
            $res['RerankMinScore'] = $this->rerankMinScore;
        }

        if (null !== $this->rerankTopN) {
            $res['RerankTopN'] = $this->rerankTopN;
        }

        if (null !== $this->rewrite) {
            if (\is_array($this->rewrite)) {
                $res['Rewrite'] = [];
                $n1 = 0;
                foreach ($this->rewrite as $item1) {
                    $res['Rewrite'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->saveRetrieverHistory) {
            $res['SaveRetrieverHistory'] = $this->saveRetrieverHistory;
        }

        if (null !== $this->searchFilters) {
            if (\is_array($this->searchFilters)) {
                $res['SearchFilters'] = [];
                $n1 = 0;
                foreach ($this->searchFilters as $item1) {
                    if (\is_array($item1)) {
                        $res['SearchFilters'][$n1] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $res['SearchFilters'][$n1][$key2] = $value2;
                        }
                    }
                    ++$n1;
                }
            }
        }

        if (null !== $this->sparseSimilarityTopK) {
            $res['SparseSimilarityTopK'] = $this->sparseSimilarityTopK;
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
        if (isset($map['DenseSimilarityTopK'])) {
            $model->denseSimilarityTopK = $map['DenseSimilarityTopK'];
        }

        if (isset($map['EnableReranking'])) {
            $model->enableReranking = $map['EnableReranking'];
        }

        if (isset($map['EnableRewrite'])) {
            $model->enableRewrite = $map['EnableRewrite'];
        }

        if (isset($map['Images'])) {
            if (!empty($map['Images'])) {
                $model->images = [];
                $n1 = 0;
                foreach ($map['Images'] as $item1) {
                    $model->images[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['IndexId'])) {
            $model->indexId = $map['IndexId'];
        }

        if (isset($map['Query'])) {
            $model->query = $map['Query'];
        }

        if (isset($map['QueryHistory'])) {
            if (!empty($map['QueryHistory'])) {
                $model->queryHistory = [];
                $n1 = 0;
                foreach ($map['QueryHistory'] as $item1) {
                    $model->queryHistory[$n1] = queryHistory::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Rerank'])) {
            if (!empty($map['Rerank'])) {
                $model->rerank = [];
                $n1 = 0;
                foreach ($map['Rerank'] as $item1) {
                    $model->rerank[$n1] = rerank::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RerankMinScore'])) {
            $model->rerankMinScore = $map['RerankMinScore'];
        }

        if (isset($map['RerankTopN'])) {
            $model->rerankTopN = $map['RerankTopN'];
        }

        if (isset($map['Rewrite'])) {
            if (!empty($map['Rewrite'])) {
                $model->rewrite = [];
                $n1 = 0;
                foreach ($map['Rewrite'] as $item1) {
                    $model->rewrite[$n1] = rewrite::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['SaveRetrieverHistory'])) {
            $model->saveRetrieverHistory = $map['SaveRetrieverHistory'];
        }

        if (isset($map['SearchFilters'])) {
            if (!empty($map['SearchFilters'])) {
                $model->searchFilters = [];
                $n1 = 0;
                foreach ($map['SearchFilters'] as $item1) {
                    if (!empty($item1)) {
                        $model->searchFilters[$n1] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $model->searchFilters[$n1][$key2] = $value2;
                        }
                    }
                    ++$n1;
                }
            }
        }

        if (isset($map['SparseSimilarityTopK'])) {
            $model->sparseSimilarityTopK = $map['SparseSimilarityTopK'];
        }

        return $model;
    }
}
