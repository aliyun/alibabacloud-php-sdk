<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Dara\Model;

class DeleteEmployeesFromCustomRoleShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $roleId;

    /**
     * @var string
     */
    public $userIdListShrink;
    protected $_name = [
        'roleId' => 'role_id',
        'userIdListShrink' => 'user_id_list',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
