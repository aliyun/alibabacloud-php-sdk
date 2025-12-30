<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PolardbAI\V20251013\Models;

use AlibabaCloud\Dara\Model;

class CreateMultimodalSearchTaskShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $DBClusterId;

    /**
     * @var string
     */
    public $datasetIdsShrink;

    /**
     * @var string
     */
    public $embeddingModel;

    /**
     * @var string
     */
    public $query;

    /**
     * @var string
     */
    public $searchModel;

    /**
     * @var int
     */
    public $topK;
    protected $_name = [
        'DBClusterId' => 'DBClusterId',
        'datasetIdsShrink' => 'DatasetIds',
        'embeddingModel' => 'EmbeddingModel',
        'query' => 'Query',
        'searchModel' => 'SearchModel',
        'topK' => 'TopK',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }

        if (null !== $this->datasetIdsShrink) {
            $res['DatasetIds'] = $this->datasetIdsShrink;
        }

        if (null !== $this->embeddingModel) {
            $res['EmbeddingModel'] = $this->embeddingModel;
        }

        if (null !== $this->query) {
            $res['Query'] = $this->query;
        }

        if (null !== $this->searchModel) {
            $res['SearchModel'] = $this->searchModel;
        }

        if (null !== $this->topK) {
            $res['TopK'] = $this->topK;
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
        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }

        if (isset($map['DatasetIds'])) {
            $model->datasetIdsShrink = $map['DatasetIds'];
        }

        if (isset($map['EmbeddingModel'])) {
            $model->embeddingModel = $map['EmbeddingModel'];
        }

        if (isset($map['Query'])) {
            $model->query = $map['Query'];
        }

        if (isset($map['SearchModel'])) {
            $model->searchModel = $map['SearchModel'];
        }

        if (isset($map['TopK'])) {
            $model->topK = $map['TopK'];
        }

        return $model;
    }
}
