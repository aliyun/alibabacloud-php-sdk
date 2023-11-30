<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Tea\Model;

class IDPermission extends Model
{
    /**
     * @var bool
     */
    public $disinheritSubGroup;

    /**
     * @var int
     */
    public $expireTime;

    /**
     * @var Permission
     */
    public $permission;

    /**
     * @var string[]
     */
    public $roles;
    protected $_name = [
        'disinheritSubGroup' => 'disinherit_sub_group',
        'expireTime'         => 'expire_time',
        'permission'         => 'permission',
        'roles'              => 'roles',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->disinheritSubGroup) {
            $res['disinherit_sub_group'] = $this->disinheritSubGroup;
        }
        if (null !== $this->expireTime) {
            $res['expire_time'] = $this->expireTime;
        }
        if (null !== $this->permission) {
            $res['permission'] = null !== $this->permission ? $this->permission->toMap() : null;
        }
        if (null !== $this->roles) {
            $res['roles'] = $this->roles;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return IDPermission
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['disinherit_sub_group'])) {
            $model->disinheritSubGroup = $map['disinherit_sub_group'];
        }
        if (isset($map['expire_time'])) {
            $model->expireTime = $map['expire_time'];
        }
        if (isset($map['permission'])) {
            $model->permission = Permission::fromMap($map['permission']);
        }
        if (isset($map['roles'])) {
            if (!empty($map['roles'])) {
                $model->roles = $map['roles'];
            }
        }

        return $model;
    }
}
