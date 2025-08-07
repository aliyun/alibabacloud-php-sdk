<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Bailian\V20231229\Models;

use AlibabaCloud\Dara\Model;

class RetrieveShrinkRequest extends Model
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
     * @var string
     */
    public $imagesShrink;

    /**
     * @var string
     */
    public $indexId;

    /**
     * @var string
     */
    public $query;

    /**
     * @var string
     */
    public $queryHistoryShrink;

    /**
     * @var string
     */
    public $rerankShrink;

    /**
     * @var float
     */
    public $rerankMinScore;

    /**
     * @var int
     */
    public $rerankTopN;

    /**
     * @var string
     */
    public $rewriteShrink;

    /**
     * @var bool
     */
    public $saveRetrieverHistory;

    /**
     * @var string
     */
    public $searchFiltersShrink;

    /**
     * @var int
     */
    public $sparseSimilarityTopK;
    protected $_name = [
        'denseSimilarityTopK' => 'DenseSimilarityTopK',
        'enableReranking' => 'EnableReranking',
        'enableRewrite' => 'EnableRewrite',
        'imagesShrink' => 'Images',
        'indexId' => 'IndexId',
        'query' => 'Query',
        'queryHistoryShrink' => 'QueryHistory',
        'rerankShrink' => 'Rerank',
        'rerankMinScore' => 'RerankMinScore',
        'rerankTopN' => 'RerankTopN',
        'rewriteShrink' => 'Rewrite',
        'saveRetrieverHistory' => 'SaveRetrieverHistory',
        'searchFiltersShrink' => 'SearchFilters',
        'sparseSimilarityTopK' => 'SparseSimilarityTopK',
    ];

    public function validate()
    {
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

        if (null !== $this->imagesShrink) {
            $res['Images'] = $this->imagesShrink;
        }

        if (null !== $this->indexId) {
            $res['IndexId'] = $this->indexId;
        }

        if (null !== $this->query) {
            $res['Query'] = $this->query;
        }

        if (null !== $this->queryHistoryShrink) {
            $res['QueryHistory'] = $this->queryHistoryShrink;
        }

        if (null !== $this->rerankShrink) {
            $res['Rerank'] = $this->rerankShrink;
        }

        if (null !== $this->rerankMinScore) {
            $res['RerankMinScore'] = $this->rerankMinScore;
        }

        if (null !== $this->rerankTopN) {
            $res['RerankTopN'] = $this->rerankTopN;
        }

        if (null !== $this->rewriteShrink) {
            $res['Rewrite'] = $this->rewriteShrink;
        }

        if (null !== $this->saveRetrieverHistory) {
            $res['SaveRetrieverHistory'] = $this->saveRetrieverHistory;
        }

        if (null !== $this->searchFiltersShrink) {
            $res['SearchFilters'] = $this->searchFiltersShrink;
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
            $model->imagesShrink = $map['Images'];
        }

        if (isset($map['IndexId'])) {
            $model->indexId = $map['IndexId'];
        }

        if (isset($map['Query'])) {
            $model->query = $map['Query'];
        }

        if (isset($map['QueryHistory'])) {
            $model->queryHistoryShrink = $map['QueryHistory'];
        }

        if (isset($map['Rerank'])) {
            $model->rerankShrink = $map['Rerank'];
        }

        if (isset($map['RerankMinScore'])) {
            $model->rerankMinScore = $map['RerankMinScore'];
        }

        if (isset($map['RerankTopN'])) {
            $model->rerankTopN = $map['RerankTopN'];
        }

        if (isset($map['Rewrite'])) {
            $model->rewriteShrink = $map['Rewrite'];
        }

        if (isset($map['SaveRetrieverHistory'])) {
            $model->saveRetrieverHistory = $map['SaveRetrieverHistory'];
        }

        if (isset($map['SearchFilters'])) {
            $model->searchFiltersShrink = $map['SearchFilters'];
        }

        if (isset($map['SparseSimilarityTopK'])) {
            $model->sparseSimilarityTopK = $map['SparseSimilarityTopK'];
        }

        return $model;
    }
}
