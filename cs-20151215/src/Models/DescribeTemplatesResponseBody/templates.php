<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\DescribeTemplatesResponseBody;

use AlibabaCloud\Tea\Model;

class templates extends Model
{
    /**
     * @description 模板访问权限，取值为：private、pubilc或shared。。
     *
     * @var string
     */
    public $acl;

    /**
     * @description 模板创建时间。
     *
     * @var string
     */
    public $created;

    /**
     * @description 模板描述信息。
     *
     * @var string
     */
    public $description;

    /**
     * @description 模板ID。
     *
     * @var string
     */
    public $id;

    /**
     * @description 模板名称。
     *
     * @var string
     */
    public $name;

    /**
     * @description 模板标签，如果不显式指定了，默认为模板名称。
     *
     * @var string
     */
    public $tags;

    /**
     * @description 模板详情。
     *
     * @var string
     */
    public $template;

    /**
     * @description 部署模板类型，目前只有kubernetes一种生效。
     *
     * @var string
     */
    public $templateType;

    /**
     * @description 模板修改时间。
     *
     * @var string
     */
    public $updated;
    protected $_name = [
        'acl'          => 'acl',
        'created'      => 'created',
        'description'  => 'description',
        'id'           => 'id',
        'name'         => 'name',
        'tags'         => 'tags',
        'template'     => 'template',
        'templateType' => 'template_type',
        'updated'      => 'updated',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->acl) {
            $res['acl'] = $this->acl;
        }
        if (null !== $this->created) {
            $res['created'] = $this->created;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->id) {
            $res['id'] = $this->id;
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
        if (null !== $this->updated) {
            $res['updated'] = $this->updated;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return templates
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['acl'])) {
            $model->acl = $map['acl'];
        }
        if (isset($map['created'])) {
            $model->created = $map['created'];
        }
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['id'])) {
            $model->id = $map['id'];
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
        if (isset($map['updated'])) {
            $model->updated = $map['updated'];
        }

        return $model;
    }
}
