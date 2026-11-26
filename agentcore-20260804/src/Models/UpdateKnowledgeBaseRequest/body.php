<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentCore\V20260804\Models\UpdateKnowledgeBaseRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\UpdateKnowledgeBaseRequest\body\chunkConfiguration;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\UpdateKnowledgeBaseRequest\body\searchConfiguration;

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
        'name' => 'name',
        'searchConfiguration' => 'searchConfiguration',
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
        if (null !== $this->chunkConfiguration) {
            $res['chunkConfiguration'] = null !== $this->chunkConfiguration ? $this->chunkConfiguration->toArray($noStream) : $this->chunkConfiguration;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
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

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['searchConfiguration'])) {
            $model->searchConfiguration = searchConfiguration::fromMap($map['searchConfiguration']);
        }

        return $model;
    }
}
