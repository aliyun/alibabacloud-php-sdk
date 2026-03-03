<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\AguiMessage\metadata;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\AguiMessage\toolCalls;

class AguiMessage extends Model
{
    /**
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $id;

    /**
     * @var metadata
     */
    public $metadata;

    /**
     * @var string
     */
    public $role;

    /**
     * @var string
     */
    public $toolCallId;

    /**
     * @var toolCalls[]
     */
    public $toolCalls;
    protected $_name = [
        'content' => 'Content',
        'id' => 'Id',
        'metadata' => 'Metadata',
        'role' => 'Role',
        'toolCallId' => 'ToolCallId',
        'toolCalls' => 'ToolCalls',
    ];

    public function validate()
    {
        if (null !== $this->metadata) {
            $this->metadata->validate();
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
            $res['Content'] = $this->content;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->metadata) {
            $res['Metadata'] = null !== $this->metadata ? $this->metadata->toArray($noStream) : $this->metadata;
        }

        if (null !== $this->role) {
            $res['Role'] = $this->role;
        }

        if (null !== $this->toolCallId) {
            $res['ToolCallId'] = $this->toolCallId;
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

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['Metadata'])) {
            $model->metadata = metadata::fromMap($map['Metadata']);
        }

        if (isset($map['Role'])) {
            $model->role = $map['Role'];
        }

        if (isset($map['ToolCallId'])) {
            $model->toolCallId = $map['ToolCallId'];
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
