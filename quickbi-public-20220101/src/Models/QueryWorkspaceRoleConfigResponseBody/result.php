<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QueryWorkspaceRoleConfigResponseBody;

use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QueryWorkspaceRoleConfigResponseBody\result\authConfigList;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var authConfigList[]
     */
    public $authConfigList;

    /**
     * @example true
     *
     * @var bool
     */
    public $isSystemRole;

    /**
     * @example 25
     *
     * @var int
     */
    public $roleId;

    /**
     * @var string
     */
    public $roleName;
    protected $_name = [
        'authConfigList' => 'AuthConfigList',
        'isSystemRole'   => 'IsSystemRole',
        'roleId'         => 'RoleId',
        'roleName'       => 'RoleName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->authConfigList) {
            $res['AuthConfigList'] = [];
            if (null !== $this->authConfigList && \is_array($this->authConfigList)) {
                $n = 0;
                foreach ($this->authConfigList as $item) {
                    $res['AuthConfigList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->isSystemRole) {
            $res['IsSystemRole'] = $this->isSystemRole;
        }
        if (null !== $this->roleId) {
            $res['RoleId'] = $this->roleId;
        }
        if (null !== $this->roleName) {
            $res['RoleName'] = $this->roleName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuthConfigList'])) {
            if (!empty($map['AuthConfigList'])) {
                $model->authConfigList = [];
                $n                     = 0;
                foreach ($map['AuthConfigList'] as $item) {
                    $model->authConfigList[$n++] = null !== $item ? authConfigList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['IsSystemRole'])) {
            $model->isSystemRole = $map['IsSystemRole'];
        }
        if (isset($map['RoleId'])) {
            $model->roleId = $map['RoleId'];
        }
        if (isset($map['RoleName'])) {
            $model->roleName = $map['RoleName'];
        }

        return $model;
    }
}
