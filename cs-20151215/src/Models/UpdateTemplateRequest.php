<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Tea\Model;

class UpdateTemplateRequest extends Model
{
    /**
     * @description The description of the template.
     *
     * @example web server cluster
     *
     * @var string
     */
    public $description;

    /**
     * @description The name of the template.
     *
     * @example webserver01
     *
     * @var string
     */
    public $name;

    /**
     * @description The label of the template.
     *
     * @example web
     *
     * @var string
     */
    public $tags;

    /**
     * @description The YAML content of the template.
     *
     * @example apiVersion: apps/v1\\\\nkind: Deployment\\\\nmetadata:\\\\n  name: nginx-deployment-basic\\\\n  labels:\\\\n    app: nginx\\\\nspec:\\\\n  replicas: 2\\\\n  selector:\\\\n    matchLabels:\\\\n      app: nginx\\\\n  template:\\\\n    metadata:\\\\n      labels:\\\\n        app: nginx\\\\n    spec:\\\\n      containers:\\\\n      - name: nginx\\\\n        image: busybox:latest\\\\n        ports:\\\\n        - containerPort: 8080
     *
     * @var string
     */
    public $template;

    /**
     * @description The type of template. This parameter can be set to a custom value.
     *
     *   If the parameter is set to `kubernetes`, the template is displayed on the Templates page in the console.
     *   If the parameter is set to `compose`, the template is displayed on the Container Service - Swarm page in the console. Container Service for Swarm is deprecated.
     *
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
     * @return UpdateTemplateRequest
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
