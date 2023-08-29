<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DataLake\V20200710\Models;

use AlibabaCloud\Tea\Model;

class UpdateRoleRequest extends Model
{
    /**
     * @var RoleInput
     */
    public $roleInput;

    /**
     * @description RoleName
     *
     * @example 原始名称
     *
     * @var string
     */
    public $roleName;
    protected $_name = [
        'roleInput' => 'RoleInput',
        'roleName'  => 'RoleName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->roleInput) {
            $res['RoleInput'] = null !== $this->roleInput ? $this->roleInput->toMap() : null;
        }
        if (null !== $this->roleName) {
            $res['RoleName'] = $this->roleName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateRoleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RoleInput'])) {
            $model->roleInput = RoleInput::fromMap($map['RoleInput']);
        }
        if (isset($map['RoleName'])) {
            $model->roleName = $map['RoleName'];
        }

        return $model;
    }
}
