<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PolardbAI\V20251013\Models;

use AlibabaCloud\Dara\Model;

class CreateMultimodalSearchTaskRequest extends Model
{
    /**
     * @var string
     */
    public $DBClusterId;

    /**
     * @var string[]
     */
    public $datasetIds;

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
        'datasetIds' => 'DatasetIds',
        'embeddingModel' => 'EmbeddingModel',
        'query' => 'Query',
        'searchModel' => 'SearchModel',
        'topK' => 'TopK',
    ];

    public function validate()
    {
        if (\is_array($this->datasetIds)) {
            Model::validateArray($this->datasetIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }

        if (null !== $this->datasetIds) {
            if (\is_array($this->datasetIds)) {
                $res['DatasetIds'] = [];
                $n1 = 0;
                foreach ($this->datasetIds as $item1) {
                    $res['DatasetIds'][$n1] = $item1;
                    ++$n1;
                }
            }
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
            if (!empty($map['DatasetIds'])) {
                $model->datasetIds = [];
                $n1 = 0;
                foreach ($map['DatasetIds'] as $item1) {
                    $model->datasetIds[$n1] = $item1;
                    ++$n1;
                }
            }
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
