<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentCore\V20260804\Models\CreateKnowledgeBaseRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\CreateKnowledgeBaseRequest\body\chunkConfiguration;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\CreateKnowledgeBaseRequest\body\metadataSchema;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\CreateKnowledgeBaseRequest\body\searchConfiguration;

class body extends Model
{
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
     * @var metadataSchema[]
     */
    public $metadataSchema;

    /**
     * @var string
     */
    public $name;

    /**
     * @var searchConfiguration
     */
    public $searchConfiguration;
    protected $_name = [
        'chunkConfiguration' => 'chunkConfiguration',
        'description' => 'description',
        'embeddingDimension' => 'embeddingDimension',
        'embeddingModel' => 'embeddingModel',
        'metadataSchema' => 'metadataSchema',
        'name' => 'name',
        'searchConfiguration' => 'searchConfiguration',
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
        if (null !== $this->chunkConfiguration) {
            $res['chunkConfiguration'] = null !== $this->chunkConfiguration ? $this->chunkConfiguration->toArray($noStream) : $this->chunkConfiguration;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->embeddingDimension) {
            $res['embeddingDimension'] = $this->embeddingDimension;
        }

        if (null !== $this->embeddingModel) {
            $res['embeddingModel'] = $this->embeddingModel;
        }

        if (null !== $this->metadataSchema) {
            if (\is_array($this->metadataSchema)) {
                $res['metadataSchema'] = [];
                $n1 = 0;
                foreach ($this->metadataSchema as $item1) {
                    $res['metadataSchema'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->searchConfiguration) {
            $res['searchConfiguration'] = null !== $this->searchConfiguration ? $this->searchConfiguration->toArray($noStream) : $this->searchConfiguration;
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
        if (isset($map['chunkConfiguration'])) {
            $model->chunkConfiguration = chunkConfiguration::fromMap($map['chunkConfiguration']);
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['embeddingDimension'])) {
            $model->embeddingDimension = $map['embeddingDimension'];
        }

        if (isset($map['embeddingModel'])) {
            $model->embeddingModel = $map['embeddingModel'];
        }

        if (isset($map['metadataSchema'])) {
            if (!empty($map['metadataSchema'])) {
                $model->metadataSchema = [];
                $n1 = 0;
                foreach ($map['metadataSchema'] as $item1) {
                    $model->metadataSchema[$n1] = metadataSchema::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['searchConfiguration'])) {
            $model->searchConfiguration = searchConfiguration::fromMap($map['searchConfiguration']);
        }

        return $model;
    }
}
