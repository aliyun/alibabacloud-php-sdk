<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adcp\V20220101\Models;

use AlibabaCloud\Tea\Model;

class GrantUserPermissionsShrinkRequest extends Model
{
    /**
     * @description The list of permissions that you want to grant to the RAM user.
     *
     * @var string
     */
    public $permissionsShrink;

    /**
     * @description The ID of the RAM user.
     *
     * @example 2367****
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'permissionsShrink' => 'Permissions',
        'userId'            => 'UserId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->permissionsShrink) {
            $res['Permissions'] = $this->permissionsShrink;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GrantUserPermissionsShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Permissions'])) {
            $model->permissionsShrink = $map['Permissions'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
