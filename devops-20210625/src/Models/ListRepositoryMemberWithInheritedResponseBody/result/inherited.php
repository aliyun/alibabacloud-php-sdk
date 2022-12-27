<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\ListRepositoryMemberWithInheritedResponseBody\result;

use AlibabaCloud\Tea\Model;

class inherited extends Model
{
    /**
     * @description id
     *
     * @example 123
     *
     * @var int
     */
    public $id;

    /**
     * @example codeup
     *
     * @var string
     */
    public $name;

    /**
     * @example test/codeup
     *
     * @var string
     */
    public $nameWithNamespace;

    /**
     * @example codeup
     *
     * @var string
     */
    public $path;

    /**
     * @example test / codeup
     *
     * @var string
     */
    public $pathWithNamespace;

    /**
     * @example GROUP
     *
     * @var string
     */
    public $type;

    /**
     * @example 0
     *
     * @var string
     */
    public $visibilityLevel;
    protected $_name = [
        'id'                => 'id',
        'name'              => 'name',
        'nameWithNamespace' => 'nameWithNamespace',
        'path'              => 'path',
        'pathWithNamespace' => 'pathWithNamespace',
        'type'              => 'type',
        'visibilityLevel'   => 'visibilityLevel',
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
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->nameWithNamespace) {
            $res['nameWithNamespace'] = $this->nameWithNamespace;
        }
        if (null !== $this->path) {
            $res['path'] = $this->path;
        }
        if (null !== $this->pathWithNamespace) {
            $res['pathWithNamespace'] = $this->pathWithNamespace;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }
        if (null !== $this->visibilityLevel) {
            $res['visibilityLevel'] = $this->visibilityLevel;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return inherited
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['id'])) {
            $model->id = $map['id'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['nameWithNamespace'])) {
            $model->nameWithNamespace = $map['nameWithNamespace'];
        }
        if (isset($map['path'])) {
            $model->path = $map['path'];
        }
        if (isset($map['pathWithNamespace'])) {
            $model->pathWithNamespace = $map['pathWithNamespace'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }
        if (isset($map['visibilityLevel'])) {
            $model->visibilityLevel = $map['visibilityLevel'];
        }

        return $model;
    }
}
