<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models;

use AlibabaCloud\Dara\Model;

class UpdateKnowledgeBaseShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $catalog;

    /**
     * @var string
     */
    public $chunkConfigurationShrink;

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
     * @var string
     */
    public $searchConfigurationShrink;
    protected $_name = [
        'catalog' => 'Catalog',
        'chunkConfigurationShrink' => 'ChunkConfiguration',
        'description' => 'Description',
        'knowledgeBaseName' => 'KnowledgeBaseName',
        'namespace' => 'Namespace',
        'searchConfigurationShrink' => 'SearchConfiguration',
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

        if (null !== $this->chunkConfigurationShrink) {
            $res['ChunkConfiguration'] = $this->chunkConfigurationShrink;
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

        if (null !== $this->searchConfigurationShrink) {
            $res['SearchConfiguration'] = $this->searchConfigurationShrink;
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
            $model->chunkConfigurationShrink = $map['ChunkConfiguration'];
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
            $model->searchConfigurationShrink = $map['SearchConfiguration'];
        }

        return $model;
    }
}
