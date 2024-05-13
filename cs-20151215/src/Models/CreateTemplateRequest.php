<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Tea\Model;

class CreateTemplateRequest extends Model
{
    /**
     * @description The description of the template.
     *
     * @example this is test
     *
     * @var string
     */
    public $description;

    /**
     * @description The name of the orchestration template.
     *
     * This parameter is required.
     * @example service-account-template
     *
     * @var string
     */
    public $name;

    /**
     * @description The label of the template.
     *
     * @example test
     *
     * @var string
     */
    public $tags;

    /**
     * @description The template content in the YAML format.
     *
     * This parameter is required.
     * @example apiVersion: v1\\nkind: ServiceAccount\\nmetadata:\\n  name: test-sa
     *
     * @var string
     */
    public $template;

    /**
     * @description The type of template. You can set the parameter to a custom value.
     *
     *   If the parameter is set to `kubernetes`, the template is displayed on the Templates page in the console.
     *   If you set the parameter to `compose`, the template is not displayed in the console.
     *
     * Default value: `compose`.
     * @example kubernetes
     *
     * @var string
     */
    public $templateType;
    protected $_name = [
        'description'  => 'description',
        'name'         => 'name',
        'tags'         => 'tags',
        'template'     => 'template',
        'templateType' => 'template_type',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return CreateTemplateRequest
     */
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
