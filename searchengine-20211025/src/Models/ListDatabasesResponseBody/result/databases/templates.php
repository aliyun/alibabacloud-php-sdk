<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models\ListDatabasesResponseBody\result\databases;

use AlibabaCloud\Tea\Model;

class templates extends Model
{
    /**
     * @var mixed[]
     */
    public $children;

    /**
     * @example 1
     *
     * @var int
     */
    public $id;

    /**
     * @example 1
     *
     * @var int
     */
    public $instanceId;

    /**
     * @example true
     *
     * @var int
     */
    public $isDir;

    /**
     * @example c26_schema
     *
     * @var string
     */
    public $name;

    /**
     * @example -1
     *
     * @var int
     */
    public $parent;

    /**
     * @example 1
     *
     * @var int
     */
    public $templateId;

    /**
     * @description table, instance, template, function
     *
     * @example template
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'children'   => 'children',
        'id'         => 'id',
        'instanceId' => 'instanceId',
        'isDir'      => 'isDir',
        'name'       => 'name',
        'parent'     => 'parent',
        'templateId' => 'templateId',
        'type'       => 'type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->children) {
            $res['children'] = $this->children;
        }
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }
        if (null !== $this->instanceId) {
            $res['instanceId'] = $this->instanceId;
        }
        if (null !== $this->isDir) {
            $res['isDir'] = $this->isDir;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->parent) {
            $res['parent'] = $this->parent;
        }
        if (null !== $this->templateId) {
            $res['templateId'] = $this->templateId;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
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
        if (isset($map['children'])) {
            if (!empty($map['children'])) {
                $model->children = $map['children'];
            }
        }
        if (isset($map['id'])) {
            $model->id = $map['id'];
        }
        if (isset($map['instanceId'])) {
            $model->instanceId = $map['instanceId'];
        }
        if (isset($map['isDir'])) {
            $model->isDir = $map['isDir'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['parent'])) {
            $model->parent = $map['parent'];
        }
        if (isset($map['templateId'])) {
            $model->templateId = $map['templateId'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
