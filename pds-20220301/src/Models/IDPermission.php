<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Dara\Model;

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
        'expireTime' => 'expire_time',
        'permission' => 'permission',
        'roles' => 'roles',
    ];

    public function validate()
    {
        if (null !== $this->permission) {
            $this->permission->validate();
        }
        if (\is_array($this->roles)) {
            Model::validateArray($this->roles);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->disinheritSubGroup) {
            $res['disinherit_sub_group'] = $this->disinheritSubGroup;
        }

        if (null !== $this->expireTime) {
            $res['expire_time'] = $this->expireTime;
        }

        if (null !== $this->permission) {
            $res['permission'] = null !== $this->permission ? $this->permission->toArray($noStream) : $this->permission;
        }

        if (null !== $this->roles) {
            if (\is_array($this->roles)) {
                $res['roles'] = [];
                $n1 = 0;
                foreach ($this->roles as $item1) {
                    $res['roles'][$n1++] = $item1;
                }
            }
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
                $model->roles = [];
                $n1 = 0;
                foreach ($map['roles'] as $item1) {
                    $model->roles[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
