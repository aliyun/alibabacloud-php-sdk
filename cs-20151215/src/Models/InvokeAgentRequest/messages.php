<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\InvokeAgentRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CS\V20151215\Models\InvokeAgentRequest\messages\toolCalls;

class messages extends Model
{
    /**
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $encryptedValue;

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
    public $name;

    /**
     * @var string
     */
    public $role;

    /**
     * @var string
     */
    public $subagentRunId;

    /**
     * @var string
     */
    public $toolCallId;

    /**
     * @var toolCalls[]
     */
    public $toolCalls;
    protected $_name = [
        'content' => 'content',
        'encryptedValue' => 'encryptedValue',
        'id' => 'id',
        'metadata' => 'metadata',
        'name' => 'name',
        'role' => 'role',
        'subagentRunId' => 'subagentRunId',
        'toolCallId' => 'toolCallId',
        'toolCalls' => 'toolCalls',
    ];

    public function validate()
    {
        if (\is_array($this->metadata)) {
            Model::validateArray($this->metadata);
        }
        if (\is_array($this->toolCalls)) {
            Model::validateArray($this->toolCalls);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->content) {
            $res['content'] = $this->content;
        }

        if (null !== $this->encryptedValue) {
            $res['encryptedValue'] = $this->encryptedValue;
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

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->role) {
            $res['role'] = $this->role;
        }

        if (null !== $this->subagentRunId) {
            $res['subagentRunId'] = $this->subagentRunId;
        }

        if (null !== $this->toolCallId) {
            $res['toolCallId'] = $this->toolCallId;
        }

        if (null !== $this->toolCalls) {
            if (\is_array($this->toolCalls)) {
                $res['toolCalls'] = [];
                $n1 = 0;
                foreach ($this->toolCalls as $item1) {
                    $res['toolCalls'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
            $model->content = $map['content'];
        }

        if (isset($map['encryptedValue'])) {
            $model->encryptedValue = $map['encryptedValue'];
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

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['role'])) {
            $model->role = $map['role'];
        }

        if (isset($map['subagentRunId'])) {
            $model->subagentRunId = $map['subagentRunId'];
        }

        if (isset($map['toolCallId'])) {
            $model->toolCallId = $map['toolCallId'];
        }

        if (isset($map['toolCalls'])) {
            if (!empty($map['toolCalls'])) {
                $model->toolCalls = [];
                $n1 = 0;
                foreach ($map['toolCalls'] as $item1) {
                    $model->toolCalls[$n1] = toolCalls::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
