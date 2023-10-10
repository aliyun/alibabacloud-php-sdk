<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\DescribeTemplateAttributeResponse;

use AlibabaCloud\Tea\Model;

class body extends Model
{
    /**
     * @description The ID of the template. When you update a template, a new template ID is generated.
     *
     * @example 72d20cf8-a533-4ea9-a10d-e7630d3d****
     *
     * @var string
     */
    public $id;

    /**
     * @description The access control policy of the template.
     *
     * @example private
     *
     * @var string
     */
    public $acl;

    /**
     * @description The name of the template.
     *
     * @example web
     *
     * @var string
     */
    public $name;

    /**
     * @description The template content in the YAML format.
     *
     * @example apiVersion: V1\n***
     *
     * @var string
     */
    public $template;

    /**
     * @description The type of template. The value can be a custom value.
     *
     *   If the parameter is set to `kubernetes`, the template is displayed on the Templates page in the console.
     *   If the parameter is set to `compose`, the template is displayed on the Container Service - Swarm page in the console. Container Service for Swarm is deprecated.
     *   If the value of the parameter is not `kubernetes`, the template is not displayed on the Templates page in the console. We recommend that you set the parameter to `kubernetes`.
     *
     * Default value: `kubernetes`.
     * @example kubernetes
     *
     * @var string
     */
    public $templateType;

    /**
     * @description The description of the template.
     *
     * @example test template
     *
     * @var string
     */
    public $description;

    /**
     * @description The label of the template.
     *
     * @example sa
     *
     * @var string
     */
    public $tags;

    /**
     * @description The unique ID of the template. The value remains unchanged after the template is updated.
     *
     * @example 874ec485-e7e6-4373-8a3b-47bde8ae****
     *
     * @var string
     */
    public $templateWithHistId;

    /**
     * @description The time when the template was created.
     *
     * @example 2020-09-16T19:21:29+08:00
     *
     * @var string
     */
    public $created;

    /**
     * @description The time when the template was updated.
     *
     * @example 2020-09-16T19:21:29+08:00
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
