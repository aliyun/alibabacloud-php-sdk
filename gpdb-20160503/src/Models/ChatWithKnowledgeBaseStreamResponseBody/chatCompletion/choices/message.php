<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\ChatWithKnowledgeBaseStreamResponseBody\chatCompletion\choices;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ChatWithKnowledgeBaseStreamResponseBody\chatCompletion\choices\message\toolCalls;

class message extends Model
{
    /**
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $reasoningContent;

    /**
     * @var string
     */
    public $role;

    /**
     * @var toolCalls[]
     */
    public $toolCalls;
    protected $_name = [
        'content' => 'Content',
        'reasoningContent' => 'ReasoningContent',
        'role' => 'Role',
        'toolCalls' => 'ToolCalls',
    ];

    public function validate()
    {
        if (\is_array($this->toolCalls)) {
            Model::validateArray($this->toolCalls);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }

        if (null !== $this->reasoningContent) {
            $res['ReasoningContent'] = $this->reasoningContent;
        }

        if (null !== $this->role) {
            $res['Role'] = $this->role;
        }

        if (null !== $this->toolCalls) {
            if (\is_array($this->toolCalls)) {
                $res['ToolCalls'] = [];
                $n1 = 0;
                foreach ($this->toolCalls as $item1) {
                    $res['ToolCalls'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }

        if (isset($map['ReasoningContent'])) {
            $model->reasoningContent = $map['ReasoningContent'];
        }

        if (isset($map['Role'])) {
            $model->role = $map['Role'];
        }

        if (isset($map['ToolCalls'])) {
            if (!empty($map['ToolCalls'])) {
                $model->toolCalls = [];
                $n1 = 0;
                foreach ($map['ToolCalls'] as $item1) {
                    $model->toolCalls[$n1] = toolCalls::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
