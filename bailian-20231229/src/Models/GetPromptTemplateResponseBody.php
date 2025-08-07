<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Bailian\V20231229\Models;

use AlibabaCloud\Dara\Model;

class GetPromptTemplateResponseBody extends Model
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
    public $requestId;

    /**
     * @var string[]
     */
    public $variables;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'content' => 'content',
        'name' => 'name',
        'promptTemplateId' => 'promptTemplateId',
        'requestId' => 'requestId',
        'variables' => 'variables',
        'workspaceId' => 'workspaceId',
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

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->variables) {
            if (\is_array($this->variables)) {
                $res['variables'] = [];
                $n1 = 0;
                foreach ($this->variables as $item1) {
                    $res['variables'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->workspaceId) {
            $res['workspaceId'] = $this->workspaceId;
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

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['variables'])) {
            if (!empty($map['variables'])) {
                $model->variables = [];
                $n1 = 0;
                foreach ($map['variables'] as $item1) {
                    $model->variables[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['workspaceId'])) {
            $model->workspaceId = $map['workspaceId'];
        }

        return $model;
    }
}
