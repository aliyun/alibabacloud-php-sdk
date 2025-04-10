<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Bailian\V20231229\Models\ListPromptTemplatesResponseBody;

use AlibabaCloud\Dara\Model;

class promptTemplates extends Model
{
    /**
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $promptTemplateId;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string[]
     */
    public $variables;
    protected $_name = [
        'content' => 'content',
        'name' => 'name',
        'promptTemplateId' => 'promptTemplateId',
        'type' => 'type',
        'variables' => 'variables',
    ];

    public function validate()
    {
        if (\is_array($this->variables)) {
            Model::validateArray($this->variables);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->content) {
            $res['content'] = $this->content;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->promptTemplateId) {
            $res['promptTemplateId'] = $this->promptTemplateId;
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        if (null !== $this->variables) {
            if (\is_array($this->variables)) {
                $res['variables'] = [];
                $n1 = 0;
                foreach ($this->variables as $item1) {
                    $res['variables'][$n1++] = $item1;
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

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['promptTemplateId'])) {
            $model->promptTemplateId = $map['promptTemplateId'];
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        if (isset($map['variables'])) {
            if (!empty($map['variables'])) {
                $model->variables = [];
                $n1 = 0;
                foreach ($map['variables'] as $item1) {
                    $model->variables[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
