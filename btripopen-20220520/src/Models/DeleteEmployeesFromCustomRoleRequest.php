<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Tea\Model;

class DeleteEmployeesFromCustomRoleRequest extends Model
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
     * @var string[]
     */
    public $userIdList;
    protected $_name = [
        'roleId'     => 'role_id',
        'userIdList' => 'user_id_list',
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
        if (null !== $this->userIdList) {
            $res['user_id_list'] = $this->userIdList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteEmployeesFromCustomRoleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['role_id'])) {
            $model->roleId = $map['role_id'];
        }
        if (isset($map['user_id_list'])) {
            if (!empty($map['user_id_list'])) {
                $model->userIdList = $map['user_id_list'];
            }
        }

        return $model;
    }
}
