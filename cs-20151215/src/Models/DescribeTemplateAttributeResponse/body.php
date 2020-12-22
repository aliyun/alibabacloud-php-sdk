<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\DescribeTemplateAttributeResponse;

use AlibabaCloud\Tea\Model;

class body extends Model
{
    /**
     * @description 编排模板ID，模板每次修改，这个ID都会改变。
     *
     * @var string
     */
    public $id;

    /**
     * @description 编排模板权限。取值：private，public，shared。
     *
     * @var string
     */
    public $acl;

    /**
     * @description 编排模板名称。
     *
     * @var string
     */
    public $name;

    /**
     * @description 编排模板内容。
     *
     * @var string
     */
    public $template;

    /**
     * @description 编排模板类型
     *
     * @var string
     */
    public $templateType;

    /**
     * @description 编排模板描述。
     *
     * @var string
     */
    public $description;

    /**
     * @description 部署模板的标签。
     *
     * @var string
     */
    public $tags;

    /**
     * @description 编排模板ID，该ID唯一不随更新而改变。
     *
     * @var string
     */
    public $templateWithHistId;

    /**
     * @description 编排模板创建时间。
     *
     * @var string
     */
    public $created;

    /**
     * @description 编排模板修改时间。
     *
     * @var string
     */
    public $updated;
    protected $_name = [
        'id'                 => 'id',
        'acl'                => 'acl',
        'name'               => 'name',
        'template'           => 'template',
        'templateType'       => 'template_type',
        'description'        => 'description',
        'tags'               => 'tags',
        'templateWithHistId' => 'template_with_hist_id',
        'created'            => 'created',
        'updated'            => 'updated',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }
        if (null !== $this->acl) {
            $res['acl'] = $this->acl;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->template) {
            $res['template'] = $this->template;
        }
        if (null !== $this->templateType) {
            $res['template_type'] = $this->templateType;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->tags) {
            $res['tags'] = $this->tags;
        }
        if (null !== $this->templateWithHistId) {
            $res['template_with_hist_id'] = $this->templateWithHistId;
        }
        if (null !== $this->created) {
            $res['created'] = $this->created;
        }
        if (null !== $this->updated) {
            $res['updated'] = $this->updated;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return body
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['id'])) {
            $model->id = $map['id'];
        }
        if (isset($map['acl'])) {
            $model->acl = $map['acl'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['template'])) {
            $model->template = $map['template'];
        }
        if (isset($map['template_type'])) {
            $model->templateType = $map['template_type'];
        }
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['tags'])) {
            $model->tags = $map['tags'];
        }
        if (isset($map['template_with_hist_id'])) {
            $model->templateWithHistId = $map['template_with_hist_id'];
        }
        if (isset($map['created'])) {
            $model->created = $map['created'];
        }
        if (isset($map['updated'])) {
            $model->updated = $map['updated'];
        }

        return $model;
    }
}
