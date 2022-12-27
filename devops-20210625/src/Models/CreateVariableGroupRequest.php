<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models;

use AlibabaCloud\Tea\Model;

class CreateVariableGroupRequest extends Model
{
    /**
     * @example 变量组
     *
     * @var string
     */
    public $description;

    /**
     * @example 变量组
     *
     * @var string
     */
    public $name;

    /**
     * @example [{"isEncrypted":true,"name":"name1","value":"vaue1"}]
     *
     * @var string
     */
    public $variables;
    protected $_name = [
        'description' => 'description',
        'name'        => 'name',
        'variables'   => 'variables',
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
        if (null !== $this->variables) {
            $res['variables'] = $this->variables;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateVariableGroupRequest
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
        if (isset($map['variables'])) {
            $model->variables = $map['variables'];
        }

        return $model;
    }
}
