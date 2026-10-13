<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentCore\V20260804\Models\ListMemoriesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\ListMemoriesResponseBody\items\content;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\ListMemoriesResponseBody\items\scope;

class items extends Model
{
    /**
     * @var content
     */
    public $content;

    /**
     * @var string
     */
    public $createdAt;

    /**
     * @var string
     */
    public $memoryId;

    /**
     * @var string[]
     */
    public $metadata;

    /**
     * @var scope
     */
    public $scope;

    /**
     * @var string
     */
    public $updatedAt;
    protected $_name = [
        'content' => 'content',
        'createdAt' => 'createdAt',
        'memoryId' => 'memoryId',
        'metadata' => 'metadata',
        'scope' => 'scope',
        'updatedAt' => 'updatedAt',
    ];

    public function validate()
    {
        if (null !== $this->content) {
            $this->content->validate();
        }
        if (\is_array($this->metadata)) {
            Model::validateArray($this->metadata);
        }
        if (null !== $this->scope) {
            $this->scope->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->content) {
            $res['content'] = null !== $this->content ? $this->content->toArray($noStream) : $this->content;
        }

        if (null !== $this->createdAt) {
            $res['createdAt'] = $this->createdAt;
        }

        if (null !== $this->memoryId) {
            $res['memoryId'] = $this->memoryId;
        }

        if (null !== $this->metadata) {
            if (\is_array($this->metadata)) {
                $res['metadata'] = [];
                foreach ($this->metadata as $key1 => $value1) {
                    $res['metadata'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->scope) {
            $res['scope'] = null !== $this->scope ? $this->scope->toArray($noStream) : $this->scope;
        }

        if (null !== $this->updatedAt) {
            $res['updatedAt'] = $this->updatedAt;
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
        if (isset($map['content'])) {
            $model->content = content::fromMap($map['content']);
        }

        if (isset($map['createdAt'])) {
            $model->createdAt = $map['createdAt'];
        }

        if (isset($map['memoryId'])) {
            $model->memoryId = $map['memoryId'];
        }

        if (isset($map['metadata'])) {
            if (!empty($map['metadata'])) {
                $model->metadata = [];
                foreach ($map['metadata'] as $key1 => $value1) {
                    $model->metadata[$key1] = $value1;
                }
            }
        }

        if (isset($map['scope'])) {
            $model->scope = scope::fromMap($map['scope']);
        }

        if (isset($map['updatedAt'])) {
            $model->updatedAt = $map['updatedAt'];
        }

        return $model;
    }
}
