<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Bailian\V20231229\Models\ListPromptTemplatesResponseBody;

use AlibabaCloud\Tea\Model;

class promptTemplates extends Model
{
    /**
     * @description The template content
     *
     * @var string
     */
    public $content;

    /**
     * @description The template name.
     *
     * @var string
     */
    public $name;

    /**
     * @description The template ID.
     *
     * @example d6935b7efbe34d11b13df9307151cf8c
     *
     * @var string
     */
    public $promptTemplateId;

    /**
     * @description The template type.
     *
     * @example "System"
     *
     * @var string
     */
    public $type;

    /**
     * @description The variables of the template.
     *
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

    public function validate() {}

    public function toMap()
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
            $res['variables'] = $this->variables;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return promptTemplates
     */
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
                $model->variables = $map['variables'];
            }
        }

        return $model;
    }
}
