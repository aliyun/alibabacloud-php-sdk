<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QueryOrganizationRoleConfigResponseBody;

use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QueryOrganizationRoleConfigResponseBody\result\authConfigList;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @description List of role permission configurations.
     *
     * @var authConfigList[]
     */
    public $authConfigList;

    /**
     * @description Whether it is a predefined role. Possible values:
     *
     * - true: Yes
     * - false: No
     *
     * @example true
     *
     * @var bool
     */
    public $isSystemRole;

    /**
     * @description Organization role ID, including predefined roles and custom roles:
     *
     * - Organization Administrator (predefined role): 111111111
     * - Permission Administrator (predefined role): 111111112
     * - Regular User (predefined role): 111111113
     * - Custom Role: The corresponding role ID of the custom role
     *
     * @example 111111111
     *
     * @var int
     */
    public $roleId;

    /**
     * @description Role name.
     *
     * @example Organization Admin
     *
     * @var string
     */
    public $roleName;
    protected $_name = [
        'authConfigList' => 'AuthConfigList',
        'isSystemRole' => 'IsSystemRole',
        'roleId' => 'RoleId',
        'roleName' => 'RoleName',
    ];

    public function validate() {}

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
                $n = 0;
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
