<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Bailian\V20231229\Models;

use AlibabaCloud\Tea\Model;

class RetrieveShrinkRequest extends Model
{
    /**
     * @description Vector retrieval top K. After generating vectors based on input text, the top K chunks in the knowledge base that are most similar to the vector representation of the input text are retrieved. Valid values: 0 to 100. The sum of the `DenseSimilarityTopK` and `SparseSimilarityTopK` parameters must be less than or equal to 200.
     *
     * Default value: 100.
     *
     * @example 100
     *
     * @var int
     */
    public $denseSimilarityTopK;

    /**
     * @description Specifies whether to enable reranking. For more information, see [Create a knowledge base](https://www.alibabacloud.com/help/en/model-studio/user-guide/rag-knowledge-base). Valid values:
     *
     *   true
     *   false
     *
     * Default value: true.
     *
     * @example true
     *
     * @var bool
     */
    public $enableReranking;

    /**
     * @description Specifies whether to enable multi-round conversation rewriting. For more information, see [Create a knowledge base](https://www.alibabacloud.com/help/en/model-studio/user-guide/rag-knowledge-base). Valid values:
     *
     *   true
     *   false
     *
     * Default value: false.
     *
     * @example false
     *
     * @var bool
     */
    public $enableRewrite;

    /**
     * @var string
     */
    public $imagesShrink;

    /**
     * @description The primary key ID of the knowledge base, which is the `Data.Id` parameter returned by the [CreateIndex](https://www.alibabacloud.com/help/en/model-studio/developer-reference/api-bailian-2023-12-29-createindex) operation.
     *
     * This parameter is required.
     *
     * @example 5pwe0m2g6t
     *
     * @var string
     */
    public $indexId;

    /**
     * @description The input query prompt. The length and characters of the query are not limited.
     *
     * @var string
     */
    public $query;

    /**
     * @description Ranking configurations.
     *
     * @var string
     */
    public $rerankShrink;

    /**
     * @description Similarity Threshold The lowest similarity score of chunks that can be returned. This parameter is used to filter text chunks returned by the rank model. For more information, see [Create a knowledge base](https://www.alibabacloud.com/help/en/model-studio/user-guide/rag-knowledge-base). Valid values: [0.01-1.00]. The priority of this parameter is greater than the similarity threshold configured for the knowledge base.
     *
     * By default, this parameter is left empty. In this case, the similarity threshold of the knowledge base is used.
     *
     * @example 0.20
     *
     * @var float
     */
    public $rerankMinScore;

    /**
     * @description The top N return data after reranking. Valid values: 1 to 20. Default value: 5.
     *
     * @example 5
     *
     * @var int
     */
    public $rerankTopN;

    /**
     * @description Conversation rewriting configurations.
     *
     * @var string
     */
    public $rewriteShrink;

    /**
     * @description Specifies whether to save the retrieve test history. Valid values:
     *
     *   true
     *   false
     *
     * Default value: false.
     *
     * @example false
     *
     * @var bool
     */
    public $saveRetrieverHistory;

    /**
     * @description Specifies complex filter conditions. For more information about the syntax of SearchFilters, see the SearchFilter syntax section of this topic.
     *
     * @var string
     */
    public $searchFiltersShrink;

    /**
     * @description The top K of keyword retrieval. Chunks that exactly match the keywords of the input text are retrieved from the knowledge base. This filters out irrelevant chunks and boosts accuracy. Valid values: 0 to 100. The sum of the `DenseSimilarityTopK` and `SparseSimilarityTopK` parameters must be less than or equal to 200.
     *
     * Default value: 100.
     *
     * @example 100
     *
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
        'rerankShrink' => 'Rerank',
        'rerankMinScore' => 'RerankMinScore',
        'rerankTopN' => 'RerankTopN',
        'rewriteShrink' => 'Rewrite',
        'saveRetrieverHistory' => 'SaveRetrieverHistory',
        'searchFiltersShrink' => 'SearchFilters',
        'sparseSimilarityTopK' => 'SparseSimilarityTopK',
    ];

    public function validate() {}

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
        if (null !== $this->imagesShrink) {
            $res['Images'] = $this->imagesShrink;
        }
        if (null !== $this->indexId) {
            $res['IndexId'] = $this->indexId;
        }
        if (null !== $this->query) {
            $res['Query'] = $this->query;
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

    /**
     * @param array $map
     *
     * @return RetrieveShrinkRequest
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
        if (isset($map['Images'])) {
            $model->imagesShrink = $map['Images'];
        }
        if (isset($map['IndexId'])) {
            $model->indexId = $map['IndexId'];
        }
        if (isset($map['Query'])) {
            $model->query = $map['Query'];
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
