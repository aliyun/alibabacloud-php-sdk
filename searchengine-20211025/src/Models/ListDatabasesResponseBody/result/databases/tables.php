<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models\ListDatabasesResponseBody\result\databases;

use AlibabaCloud\Dara\Model;

class tables extends Model
{
    /**
     * @var mixed[]
     */
    public $children;

    /**
     * @var int
     */
    public $id;

    /**
     * @var int
     */
    public $instanceId;

    /**
     * @var int
     */
    public $isDir;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $parent;

    /**
     * @var int
     */
    public $templateId;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'children' => 'children',
        'id' => 'id',
        'instanceId' => 'instanceId',
        'isDir' => 'isDir',
        'name' => 'name',
        'parent' => 'parent',
        'templateId' => 'templateId',
        'type' => 'type',
    ];

    public function validate()
    {
        if (\is_array($this->children)) {
            Model::validateArray($this->children);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->children) {
            if (\is_array($this->children)) {
                $res['children'] = [];
                $n1 = 0;
                foreach ($this->children as $item1) {
                    $res['children'][$n1++] = $item1;
                }
            }
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['children'])) {
            if (!empty($map['children'])) {
                $model->children = [];
                $n1 = 0;
                foreach ($map['children'] as $item1) {
                    $model->children[$n1++] = $item1;
                }
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
