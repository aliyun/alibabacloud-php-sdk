<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\ListRepositoryTreeResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @example 76c3f251f414ac31f2e01faf6f2008a9d756a437
     *
     * @var string
     */
    public $id;

    /**
     * @example false
     *
     * @var bool
     */
    public $isLFS;

    /**
     * @example 100644
     *
     * @var string
     */
    public $mode;

    /**
     * @example test-codeup
     *
     * @var string
     */
    public $name;

    /**
     * @example test-codeup
     *
     * @var string
     */
    public $path;

    /**
     * @example blob
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'id'    => 'id',
        'isLFS' => 'isLFS',
        'mode'  => 'mode',
        'name'  => 'name',
        'path'  => 'path',
        'type'  => 'type',
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
        if (null !== $this->isLFS) {
            $res['isLFS'] = $this->isLFS;
        }
        if (null !== $this->mode) {
            $res['mode'] = $this->mode;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->path) {
            $res['path'] = $this->path;
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
        if (isset($map['id'])) {
            $model->id = $map['id'];
        }
        if (isset($map['isLFS'])) {
            $model->isLFS = $map['isLFS'];
        }
        if (isset($map['mode'])) {
            $model->mode = $map['mode'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['path'])) {
            $model->path = $map['path'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
