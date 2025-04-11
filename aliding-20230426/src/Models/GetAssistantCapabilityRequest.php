<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetAssistantCapabilityRequest\content;

class GetAssistantCapabilityRequest extends Model
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
     * @var string
     */
    public $id;

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
    public $protocol;

    /**
     * @var string
     */
    public $threadId;

    /**
     * @var int
     */
    public $timeout;
    protected $_name = [
        'assistantId' => 'assistantId',
        'content' => 'content',
        'id' => 'id',
        'metadata' => 'metadata',
        'originalAssistantId' => 'originalAssistantId',
        'protocol' => 'protocol',
        'threadId' => 'threadId',
        'timeout' => 'timeout',
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
                $n1 = 0;
                foreach ($this->content as $item1) {
                    $res['content'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->id) {
            $res['id'] = $this->id;
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

        if (null !== $this->protocol) {
            $res['protocol'] = $this->protocol;
        }

        if (null !== $this->threadId) {
            $res['threadId'] = $this->threadId;
        }

        if (null !== $this->timeout) {
            $res['timeout'] = $this->timeout;
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
                $n1 = 0;
                foreach ($map['content'] as $item1) {
                    $model->content[$n1++] = content::fromMap($item1);
                }
            }
        }

        if (isset($map['id'])) {
            $model->id = $map['id'];
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

        if (isset($map['protocol'])) {
            $model->protocol = $map['protocol'];
        }

        if (isset($map['threadId'])) {
            $model->threadId = $map['threadId'];
        }

        if (isset($map['timeout'])) {
            $model->timeout = $map['timeout'];
        }

        return $model;
    }
}
