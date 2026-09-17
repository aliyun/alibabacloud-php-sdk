<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\CreateKnowledgeBaseRequest\chunkConfiguration;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\CreateKnowledgeBaseRequest\metadataSchema;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\CreateKnowledgeBaseRequest\searchConfiguration;

class CreateKnowledgeBaseRequest extends Model
{
    /**
     * @var string
     */
    public $catalog;

    /**
     * @var chunkConfiguration
     */
    public $chunkConfiguration;

    /**
     * @var string
     */
    public $description;

    /**
     * @var int
     */
    public $embeddingDimension;

    /**
     * @var string
     */
    public $embeddingModel;

    /**
     * @var string
     */
    public $knowledgeBaseName;

    /**
     * @var metadataSchema[]
     */
    public $metadataSchema;

    /**
     * @var string
     */
    public $namespace;

    /**
     * @var searchConfiguration
     */
    public $searchConfiguration;
    protected $_name = [
        'catalog' => 'Catalog',
        'chunkConfiguration' => 'ChunkConfiguration',
        'description' => 'Description',
        'embeddingDimension' => 'EmbeddingDimension',
        'embeddingModel' => 'EmbeddingModel',
        'knowledgeBaseName' => 'KnowledgeBaseName',
        'metadataSchema' => 'MetadataSchema',
        'namespace' => 'Namespace',
        'searchConfiguration' => 'SearchConfiguration',
    ];

    public function validate()
    {
        if (null !== $this->chunkConfiguration) {
            $this->chunkConfiguration->validate();
        }
        if (\is_array($this->metadataSchema)) {
            Model::validateArray($this->metadataSchema);
        }
        if (null !== $this->searchConfiguration) {
            $this->searchConfiguration->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->catalog) {
            $res['Catalog'] = $this->catalog;
        }

        if (null !== $this->chunkConfiguration) {
            $res['ChunkConfiguration'] = null !== $this->chunkConfiguration ? $this->chunkConfiguration->toArray($noStream) : $this->chunkConfiguration;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->embeddingDimension) {
            $res['EmbeddingDimension'] = $this->embeddingDimension;
        }

        if (null !== $this->embeddingModel) {
            $res['EmbeddingModel'] = $this->embeddingModel;
        }

        if (null !== $this->knowledgeBaseName) {
            $res['KnowledgeBaseName'] = $this->knowledgeBaseName;
        }

        if (null !== $this->metadataSchema) {
            if (\is_array($this->metadataSchema)) {
                $res['MetadataSchema'] = [];
                $n1 = 0;
                foreach ($this->metadataSchema as $item1) {
                    $res['MetadataSchema'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }

        if (null !== $this->searchConfiguration) {
            $res['SearchConfiguration'] = null !== $this->searchConfiguration ? $this->searchConfiguration->toArray($noStream) : $this->searchConfiguration;
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

        if (isset($map['ChunkConfiguration'])) {
            $model->chunkConfiguration = chunkConfiguration::fromMap($map['ChunkConfiguration']);
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['EmbeddingDimension'])) {
            $model->embeddingDimension = $map['EmbeddingDimension'];
        }

        if (isset($map['EmbeddingModel'])) {
            $model->embeddingModel = $map['EmbeddingModel'];
        }

        if (isset($map['KnowledgeBaseName'])) {
            $model->knowledgeBaseName = $map['KnowledgeBaseName'];
        }

        if (isset($map['MetadataSchema'])) {
            if (!empty($map['MetadataSchema'])) {
                $model->metadataSchema = [];
                $n1 = 0;
                foreach ($map['MetadataSchema'] as $item1) {
                    $model->metadataSchema[$n1] = metadataSchema::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }

        if (isset($map['SearchConfiguration'])) {
            $model->searchConfiguration = searchConfiguration::fromMap($map['SearchConfiguration']);
        }

        return $model;
    }
}
