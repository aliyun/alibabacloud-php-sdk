<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models;

use AlibabaCloud\Tea\Model;

class CreateSqlInstanceRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example test
     *
     * @var string
     */
    public $name;

    /**
     * @description This parameter is required.
     *
     * @example -1
     *
     * @var int
     */
    public $parent;
    protected $_name = [
        'name'   => 'name',
        'parent' => 'parent',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->parent) {
            $res['parent'] = $this->parent;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateSqlInstanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['parent'])) {
            $model->parent = $map['parent'];
        }

        return $model;
    }
}
