<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models;

use AlibabaCloud\Dara\Model;

class SearchKnowledgeBaseRequest extends Model
{
    /**
     * @var string
     */
    public $catalog;

    /**
     * @var string
     */
    public $knowledgeBaseName;

    /**
     * @var string
     */
    public $metadataFilter;

    /**
     * @var string
     */
    public $mode;

    /**
     * @var string
     */
    public $namespace;

    /**
     * @var string
     */
    public $query;

    /**
     * @var string
     */
    public $rankAlgorithm;

    /**
     * @var bool
     */
    public $rerank;

    /**
     * @var string
     */
    public $rerankModel;

    /**
     * @var int
     */
    public $rrfK;

    /**
     * @var int
     */
    public $topK;

    /**
     * @var float
     */
    public $vectorWeight;
    protected $_name = [
        'catalog' => 'Catalog',
        'knowledgeBaseName' => 'KnowledgeBaseName',
        'metadataFilter' => 'MetadataFilter',
        'mode' => 'Mode',
        'namespace' => 'Namespace',
        'query' => 'Query',
        'rankAlgorithm' => 'RankAlgorithm',
        'rerank' => 'Rerank',
        'rerankModel' => 'RerankModel',
        'rrfK' => 'RrfK',
        'topK' => 'TopK',
        'vectorWeight' => 'VectorWeight',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->catalog) {
            $res['Catalog'] = $this->catalog;
        }

        if (null !== $this->knowledgeBaseName) {
            $res['KnowledgeBaseName'] = $this->knowledgeBaseName;
        }

        if (null !== $this->metadataFilter) {
            $res['MetadataFilter'] = $this->metadataFilter;
        }

        if (null !== $this->mode) {
            $res['Mode'] = $this->mode;
        }

        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }

        if (null !== $this->query) {
            $res['Query'] = $this->query;
        }

        if (null !== $this->rankAlgorithm) {
            $res['RankAlgorithm'] = $this->rankAlgorithm;
        }

        if (null !== $this->rerank) {
            $res['Rerank'] = $this->rerank;
        }

        if (null !== $this->rerankModel) {
            $res['RerankModel'] = $this->rerankModel;
        }

        if (null !== $this->rrfK) {
            $res['RrfK'] = $this->rrfK;
        }

        if (null !== $this->topK) {
            $res['TopK'] = $this->topK;
        }

        if (null !== $this->vectorWeight) {
            $res['VectorWeight'] = $this->vectorWeight;
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
        if (isset($map['Catalog'])) {
            $model->catalog = $map['Catalog'];
        }

        if (isset($map['KnowledgeBaseName'])) {
            $model->knowledgeBaseName = $map['KnowledgeBaseName'];
        }

        if (isset($map['MetadataFilter'])) {
            $model->metadataFilter = $map['MetadataFilter'];
        }

        if (isset($map['Mode'])) {
            $model->mode = $map['Mode'];
        }

        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }

        if (isset($map['Query'])) {
            $model->query = $map['Query'];
        }

        if (isset($map['RankAlgorithm'])) {
            $model->rankAlgorithm = $map['RankAlgorithm'];
        }

        if (isset($map['Rerank'])) {
            $model->rerank = $map['Rerank'];
        }

        if (isset($map['RerankModel'])) {
            $model->rerankModel = $map['RerankModel'];
        }

        if (isset($map['RrfK'])) {
            $model->rrfK = $map['RrfK'];
        }

        if (isset($map['TopK'])) {
            $model->topK = $map['TopK'];
        }

        if (isset($map['VectorWeight'])) {
            $model->vectorWeight = $map['VectorWeight'];
        }

        return $model;
    }
}
