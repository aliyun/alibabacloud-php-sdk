<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Tea\Model;

class UpdateCustomRoleRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 12345
     *
     * @var string
     */
    public $roleId;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $roleName;
    protected $_name = [
        'roleId'   => 'role_id',
        'roleName' => 'role_name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->roleId) {
            $res['role_id'] = $this->roleId;
        }
        if (null !== $this->roleName) {
            $res['role_name'] = $this->roleName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateCustomRoleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['role_id'])) {
            $model->roleId = $map['role_id'];
        }
        if (isset($map['role_name'])) {
            $model->roleName = $map['role_name'];
        }

        return $model;
    }
}
