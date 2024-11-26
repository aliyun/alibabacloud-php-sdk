<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\Tea\Model;

class UpdateEnvironmentRequest extends Model
{
    /**
     * @description Environment alias.
     *
     * This parameter is required.
     * @example 测试环境
     *
     * @var string
     */
    public $alias;

    /**
     * @description Description of the environment, which can include information such as the purpose of the environment and its users.
     *
     * @example 这是xx的xx项目测试环境
     *
     * @var string
     */
    public $description;
    protected $_name = [
        'alias'       => 'alias',
        'description' => 'description',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alias) {
            $res['alias'] = $this->alias;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateEnvironmentRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['alias'])) {
            $model->alias = $map['alias'];
        }
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        return $model;
    }
}
