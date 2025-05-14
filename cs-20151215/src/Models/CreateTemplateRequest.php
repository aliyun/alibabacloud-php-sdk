<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Dara\Model;

class CreateTemplateRequest extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $tags;

    /**
     * @var string
     */
    public $template;

    /**
     * @var string
     */
    public $templateType;
    protected $_name = [
        'description' => 'description',
        'name' => 'name',
        'tags' => 'tags',
        'template' => 'template',
        'templateType' => 'template_type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->tags) {
            $res['tags'] = $this->tags;
        }

        if (null !== $this->template) {
            $res['template'] = $this->template;
        }

        if (null !== $this->templateType) {
            $res['template_type'] = $this->templateType;
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
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['tags'])) {
            $model->tags = $map['tags'];
        }

        if (isset($map['template'])) {
            $model->template = $map['template'];
        }

        if (isset($map['template_type'])) {
            $model->templateType = $map['template_type'];
        }

        return $model;
    }
}
