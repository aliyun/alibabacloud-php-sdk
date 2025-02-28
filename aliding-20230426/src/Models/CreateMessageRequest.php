<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateMessageRequest\content;

class CreateMessageRequest extends Model
{
    /**
     * @var string
     */
    public $assistantId;
    /**
     * @var content[]
     */
    public $content;
    /**
     * @var mixed[]
     */
    public $metadata;
    /**
     * @var string
     */
    public $originalAssistantId;
    /**
     * @var string
     */
    public $role;
    /**
     * @var string
     */
    public $threadId;
    protected $_name = [
        'assistantId'         => 'assistantId',
        'content'             => 'content',
        'metadata'            => 'metadata',
        'originalAssistantId' => 'originalAssistantId',
        'role'                => 'role',
        'threadId'            => 'threadId',
    ];

    public function validate()
    {
        if (\is_array($this->content)) {
            Model::validateArray($this->content);
        }
        if (\is_array($this->metadata)) {
            Model::validateArray($this->metadata);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->assistantId) {
            $res['assistantId'] = $this->assistantId;
        }

        if (null !== $this->content) {
            if (\is_array($this->content)) {
                $res['content'] = [];
                $n1             = 0;
                foreach ($this->content as $item1) {
                    $res['content'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->metadata) {
            if (\is_array($this->metadata)) {
                $res['metadata'] = [];
                foreach ($this->metadata as $key1 => $value1) {
                    $res['metadata'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->originalAssistantId) {
            $res['originalAssistantId'] = $this->originalAssistantId;
        }

        if (null !== $this->role) {
            $res['role'] = $this->role;
        }

        if (null !== $this->threadId) {
            $res['threadId'] = $this->threadId;
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
        if (isset($map['assistantId'])) {
            $model->assistantId = $map['assistantId'];
        }

        if (isset($map['content'])) {
            if (!empty($map['content'])) {
                $model->content = [];
                $n1             = 0;
                foreach ($map['content'] as $item1) {
                    $model->content[$n1++] = content::fromMap($item1);
                }
            }
        }

        if (isset($map['metadata'])) {
            if (!empty($map['metadata'])) {
                $model->metadata = [];
                foreach ($map['metadata'] as $key1 => $value1) {
                    $model->metadata[$key1] = $value1;
                }
            }
        }

        if (isset($map['originalAssistantId'])) {
            $model->originalAssistantId = $map['originalAssistantId'];
        }

        if (isset($map['role'])) {
            $model->role = $map['role'];
        }

        if (isset($map['threadId'])) {
            $model->threadId = $map['threadId'];
        }

        return $model;
    }
}
