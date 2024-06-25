<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models\CreateFolderResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @example 1719221186114
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @example 1719221186114
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @example 25030
     *
     * @var int
     */
    public $id;

    /**
     * @example ha-cn-pl32rf0****
     *
     * @var int
     */
    public $instanceId;

    /**
     * @example True
     *
     * @var int
     */
    public $isDir;

    /**
     * @example test
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
     * @example instance
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'gmtCreate'   => 'gmtCreate',
        'gmtModified' => 'gmtModified',
        'id'          => 'id',
        'instanceId'  => 'instanceId',
        'isDir'       => 'isDir',
        'name'        => 'name',
        'parent'      => 'parent',
        'templateId'  => 'templateId',
        'type'        => 'type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->gmtCreate) {
            $res['gmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['gmtModified'] = $this->gmtModified;
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
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['gmtCreate'])) {
            $model->gmtCreate = $map['gmtCreate'];
        }
        if (isset($map['gmtModified'])) {
            $model->gmtModified = $map['gmtModified'];
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
