<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetUserByAccessKeyResponseBody\userInfo;

use AlibabaCloud\Dara\Model;

class tenantRoles extends Model
{
    /**
     * @var string
     */
    public $roleKey;

    /**
     * @var string
     */
    public $roleName;
    protected $_name = [
        'roleKey' => 'RoleKey',
        'roleName' => 'RoleName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->roleKey) {
            $res['RoleKey'] = $this->roleKey;
        }

        if (null !== $this->roleName) {
            $res['RoleName'] = $this->roleName;
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
        if (isset($map['RoleKey'])) {
            $model->roleKey = $map['RoleKey'];
        }

        if (isset($map['RoleName'])) {
            $model->roleName = $map['RoleName'];
        }

        return $model;
    }
}
