<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\CreateDatasetRequest\createCommand\versionConfig\metadataStorageConfig\tableSchema\columns;

use AlibabaCloud\Dara\Model;

class vectorIndexConfig extends Model
{
    /**
     * @var int
     */
    public $dimension;

    /**
     * @var string
     */
    public $embeddingModel;

    /**
     * @var mixed[]
     */
    public $indexParams;

    /**
     * @var string
     */
    public $indexType;

    /**
     * @var string
     */
    public $similarityType;
    protected $_name = [
        'dimension' => 'Dimension',
        'embeddingModel' => 'EmbeddingModel',
        'indexParams' => 'IndexParams',
        'indexType' => 'IndexType',
        'similarityType' => 'SimilarityType',
    ];

    public function validate()
    {
        if (\is_array($this->indexParams)) {
            Model::validateArray($this->indexParams);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dimension) {
            $res['Dimension'] = $this->dimension;
        }

        if (null !== $this->embeddingModel) {
            $res['EmbeddingModel'] = $this->embeddingModel;
        }

        if (null !== $this->indexParams) {
            if (\is_array($this->indexParams)) {
                $res['IndexParams'] = [];
                foreach ($this->indexParams as $key1 => $value1) {
                    $res['IndexParams'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->indexType) {
            $res['IndexType'] = $this->indexType;
        }

        if (null !== $this->similarityType) {
            $res['SimilarityType'] = $this->similarityType;
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
        if (isset($map['Dimension'])) {
            $model->dimension = $map['Dimension'];
        }

        if (isset($map['EmbeddingModel'])) {
            $model->embeddingModel = $map['EmbeddingModel'];
        }

        if (isset($map['IndexParams'])) {
            if (!empty($map['IndexParams'])) {
                $model->indexParams = [];
                foreach ($map['IndexParams'] as $key1 => $value1) {
                    $model->indexParams[$key1] = $value1;
                }
            }
        }

        if (isset($map['IndexType'])) {
            $model->indexType = $map['IndexType'];
        }

        if (isset($map['SimilarityType'])) {
            $model->similarityType = $map['SimilarityType'];
        }

        return $model;
    }
}
