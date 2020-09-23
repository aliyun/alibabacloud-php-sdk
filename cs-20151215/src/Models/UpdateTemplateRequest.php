<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Tea\Model;

class UpdateTemplateRequest extends Model
{
    /**
     * @description 部署模板ID。
     *
     * @var string
     */
    public $templateId;

    /**
     * @description 部署模板名称。
     *
     * @var string
     */
    public $name;

    /**
     * @description 部署模板yaml。
     *
     * @var string
     */
    public $template;

    /**
     * @description 部署模板标签
     *
     * @var string
     */
    public $tags;

    /**
     * @description 部署模板描述信息。
     *
     * @var string
     */
    public $description;

    /**
     * @description 部署模板类型。
     *
     * @var string
     */
    public $templateType;
    protected $_name = [
        'templateId'   => 'TemplateId',
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
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }
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
     * @return UpdateTemplateRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }
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
