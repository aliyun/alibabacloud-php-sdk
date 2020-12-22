<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Tea\Model;

class CreateTemplateRequest extends Model
{
    /**
     * @description 模板名称。
     *
     * @var string
     */
    public $name;

    /**
     * @description YAML格式的模板内容。
     *
     * @var string
     */
    public $template;

    /**
     * @description 模板标签。
     *
     * @var string
     */
    public $tags;

    /**
     * @description 模板描述。
     *
     * @var string
     */
    public $description;

    /**
     * @description 模板类型。默认值：kubernetes
     *
     * @var string
     */
    public $templateType;
    protected $_name = [
        'name'         => 'name',
        'template'     => 'template',
        'tags'         => 'tags',
        'description'  => 'description',
        'templateType' => 'template_type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->template) {
            $res['template'] = $this->template;
        }
        if (null !== $this->tags) {
            $res['tags'] = $this->tags;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->templateType) {
            $res['template_type'] = $this->templateType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateTemplateRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['template'])) {
            $model->template = $map['template'];
        }
        if (isset($map['tags'])) {
            $model->tags = $map['tags'];
        }
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['template_type'])) {
            $model->templateType = $map['template_type'];
        }

        return $model;
    }
}
