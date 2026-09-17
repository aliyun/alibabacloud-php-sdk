<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\UpdateKnowledgeBaseRequest\chunkConfiguration;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\UpdateKnowledgeBaseRequest\searchConfiguration;

class UpdateKnowledgeBaseRequest extends Model
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
     * @var string
     */
    public $knowledgeBaseName;

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
        'knowledgeBaseName' => 'KnowledgeBaseName',
        'namespace' => 'Namespace',
        'searchConfiguration' => 'SearchConfiguration',
    ];

    public function validate()
    {
        if (null !== $this->chunkConfiguration) {
            $this->chunkConfiguration->validate();
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

        if (null !== $this->knowledgeBaseName) {
            $res['KnowledgeBaseName'] = $this->knowledgeBaseName;
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

        if (isset($map['KnowledgeBaseName'])) {
            $model->knowledgeBaseName = $map['KnowledgeBaseName'];
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
