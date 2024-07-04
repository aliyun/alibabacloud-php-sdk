<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Bailian\V20231229\Models;

use AlibabaCloud\SDK\Bailian\V20231229\Models\RetrieveRequest\rerank;
use AlibabaCloud\SDK\Bailian\V20231229\Models\RetrieveRequest\rewrite;
use AlibabaCloud\Tea\Model;

class RetrieveRequest extends Model
{
    /**
     * @example 100
     *
     * @var int
     */
    public $denseSimilarityTopK;

    /**
     * @example true
     *
     * @var bool
     */
    public $enableReranking;

    /**
     * @example false
     *
     * @var bool
     */
    public $enableRewrite;

    /**
     * @description This parameter is required.
     *
     * @example 5pwe0m2g6t
     *
     * @var string
     */
    public $indexId;

    /**
     * @var string
     */
    public $query;

    /**
     * @var rerank[]
     */
    public $rerank;

    /**
     * @example 0.20
     *
     * @var float
     */
    public $rerankMinScore;

    /**
     * @example 5
     *
     * @var int
     */
    public $rerankTopN;

    /**
     * @var rewrite[]
     */
    public $rewrite;

    /**
     * @example false
     *
     * @var bool
     */
    public $saveRetrieverHistory;

    /**
     * @example 100
     *
     * @var int
     */
    public $sparseSimilarityTopK;
    protected $_name = [
        'denseSimilarityTopK'  => 'DenseSimilarityTopK',
        'enableReranking'      => 'EnableReranking',
        'enableRewrite'        => 'EnableRewrite',
        'indexId'              => 'IndexId',
        'query'                => 'Query',
        'rerank'               => 'Rerank',
        'rerankMinScore'       => 'RerankMinScore',
        'rerankTopN'           => 'RerankTopN',
        'rewrite'              => 'Rewrite',
        'saveRetrieverHistory' => 'SaveRetrieverHistory',
        'sparseSimilarityTopK' => 'SparseSimilarityTopK',
    ];

    public function validate()
    {
    }

    public function toMap()
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
        if (null !== $this->indexId) {
            $res['IndexId'] = $this->indexId;
        }
        if (null !== $this->query) {
            $res['Query'] = $this->query;
        }
        if (null !== $this->rerank) {
            $res['Rerank'] = [];
            if (null !== $this->rerank && \is_array($this->rerank)) {
                $n = 0;
                foreach ($this->rerank as $item) {
                    $res['Rerank'][$n++] = null !== $item ? $item->toMap() : $item;
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
            $res['Rewrite'] = [];
            if (null !== $this->rewrite && \is_array($this->rewrite)) {
                $n = 0;
                foreach ($this->rewrite as $item) {
                    $res['Rewrite'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->saveRetrieverHistory) {
            $res['SaveRetrieverHistory'] = $this->saveRetrieverHistory;
        }
        if (null !== $this->sparseSimilarityTopK) {
            $res['SparseSimilarityTopK'] = $this->sparseSimilarityTopK;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RetrieveRequest
     */
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
        if (isset($map['IndexId'])) {
            $model->indexId = $map['IndexId'];
        }
        if (isset($map['Query'])) {
            $model->query = $map['Query'];
        }
        if (isset($map['Rerank'])) {
            if (!empty($map['Rerank'])) {
                $model->rerank = [];
                $n             = 0;
                foreach ($map['Rerank'] as $item) {
                    $model->rerank[$n++] = null !== $item ? rerank::fromMap($item) : $item;
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
                $n              = 0;
                foreach ($map['Rewrite'] as $item) {
                    $model->rewrite[$n++] = null !== $item ? rewrite::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['SaveRetrieverHistory'])) {
            $model->saveRetrieverHistory = $map['SaveRetrieverHistory'];
        }
        if (isset($map['SparseSimilarityTopK'])) {
            $model->sparseSimilarityTopK = $map['SparseSimilarityTopK'];
        }

        return $model;
    }
}
