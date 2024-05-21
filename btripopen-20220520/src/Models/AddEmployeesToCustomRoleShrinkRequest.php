<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Tea\Model;

class AddEmployeesToCustomRoleShrinkRequest extends Model
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
    public $userIdListShrink;
    protected $_name = [
        'roleId'           => 'role_id',
        'userIdListShrink' => 'user_id_list',
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
        if (null !== $this->userIdListShrink) {
            $res['user_id_list'] = $this->userIdListShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddEmployeesToCustomRoleShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['role_id'])) {
            $model->roleId = $map['role_id'];
        }
        if (isset($map['user_id_list'])) {
            $model->userIdListShrink = $map['user_id_list'];
        }

        return $model;
    }
}
