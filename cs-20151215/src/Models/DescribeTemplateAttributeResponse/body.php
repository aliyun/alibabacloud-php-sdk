<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\DescribeTemplateAttributeResponse;

use AlibabaCloud\Dara\Model;

class body extends Model
{
    /**
     * @var string
     */
    public $id;
    /**
     * @var string
     */
    public $acl;
    /**
     * @var string
     */
    public $name;
    /**
     * @var string
     */
    public $template;
    /**
     * @var string
     */
    public $templateType;
    /**
     * @var string
     */
    public $description;
    /**
     * @var string
     */
    public $tags;
    /**
     * @var string
     */
    public $templateWithHistId;
    /**
     * @var string
     */
    public $created;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
