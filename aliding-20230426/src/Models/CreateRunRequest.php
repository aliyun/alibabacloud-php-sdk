<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Dara\Model;

class CreateRunRequest extends Model
{
    /**
     * @var string
     */
    public $assistantId;
    /**
     * @var string
     */
    public $instructions;
    /**
     * @var mixed[]
     */
    public $metadata;
    /**
     * @var string
     */
    public $originalAssistantId;
    /**
     * @var bool
     */
    public $stream;
    /**
     * @var string
     */
    public $threadId;
    protected $_name = [
        'assistantId'         => 'assistantId',
        'instructions'        => 'instructions',
        'metadata'            => 'metadata',
        'originalAssistantId' => 'originalAssistantId',
        'stream'              => 'stream',
        'threadId'            => 'threadId',
    ];

    public function validate()
    {
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

        if (null !== $this->instructions) {
            $res['instructions'] = $this->instructions;
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

        if (null !== $this->stream) {
            $res['stream'] = $this->stream;
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

        if (isset($map['instructions'])) {
            $model->instructions = $map['instructions'];
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

        if (isset($map['stream'])) {
            $model->stream = $map['stream'];
        }

        if (isset($map['threadId'])) {
            $model->threadId = $map['threadId'];
        }

        return $model;
    }
}
