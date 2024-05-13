<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\DescribeTemplatesResponseBody;

use AlibabaCloud\Tea\Model;

class templates extends Model
{
    /**
     * @description The access control policy of the template. Valid values:
     *
     *   `private`: The template is private.
     *   `public`: The template is public.
     *   `shared`: The template can be shared.
     *
     * Default value: `private`.
     * @example private
     *
     * @var string
     */
    public $acl;

    /**
     * @description The time when the template was created.
     *
     * @example 2020-06-10T16:30:16+08:00
     *
     * @var string
     */
    public $created;

    /**
     * @description The description of the template.
     *
     * @example a web server
     *
     * @var string
     */
    public $description;

    /**
     * @description The ID of the template.
     *
     * @example 874ec485-e7e6-4373-8a3b-47bde8ae789f
     *
     * @var string
     */
    public $id;

    /**
     * @description The name of the template.
     *
     * @example webserver
     *
     * @var string
     */
    public $name;

    /**
     * @description The label of the template. By default, the value is the name of the template.
     *
     * @example kubernetes
     *
     * @var string
     */
    public $tags;

    /**
     * @description The template content in the YAML format.
     *
     * @example apiVersion: apps/v1\\nkind: Deployment\\nmetadata:\\n  name: nginx-deployment-basic\\n  labels:\\n    app: nginx\\nspec:\\n  replicas: 2\\n  selector:\\n    matchLabels:\\n      app: nginx\\n  template:\\n    metadata:\\n      labels:\\n        app: nginx\\n    spec:\\n      containers:\\n      - name: nginx\\n        image: busybox:latest\\n        ports:\\n        - containerPort: 80
     *
     * @var string
     */
    public $template;

    /**
     * @description The type of template. This parameter can be set to a custom value.
     *
     *   If the parameter is set to `kubernetes`, the template is displayed on the Templates page in the console.
     *   If the parameter is set to `compose`, the template is displayed on the Container Service - Swarm page in the console. However, Container Service for Swarm is deprecated.
     *
     * @example kubernetes
     *
     * @var string
     */
    public $templateType;

    /**
     * @description The ID of the parent template. The value of `template_with_hist_id` is the same for each template version. This allows you to manage different template versions.
     *
     * @example ad81d115-7c8b-47e7-a222-9c28d7f6e588
     *
     * @var string
     */
    public $templateWithHistId;

    /**
     * @description The time when the template was updated.
     *
     * @example 2020-06-10T16:30:16+08:00
     *
     * @var string
     */
    public $updated;
    protected $_name = [
        'acl'                => 'acl',
        'created'            => 'created',
        'description'        => 'description',
        'id'                 => 'id',
        'name'               => 'name',
        'tags'               => 'tags',
        'template'           => 'template',
        'templateType'       => 'template_type',
        'templateWithHistId' => 'template_with_hist_id',
        'updated'            => 'updated',
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
        if (null !== $this->templateWithHistId) {
            $res['template_with_hist_id'] = $this->templateWithHistId;
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
        if (isset($map['template_with_hist_id'])) {
            $model->templateWithHistId = $map['template_with_hist_id'];
        }
        if (isset($map['updated'])) {
            $model->updated = $map['updated'];
        }

        return $model;
    }
}
