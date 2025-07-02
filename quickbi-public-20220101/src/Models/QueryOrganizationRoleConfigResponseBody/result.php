<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QueryOrganizationRoleConfigResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QueryOrganizationRoleConfigResponseBody\result\authConfigList;

class result extends Model
{
    /**
     * @var authConfigList[]
     */
    public $authConfigList;

    /**
     * @var bool
     */
    public $isSystemRole;

    /**
     * @var int
     */
    public $roleId;

    /**
     * @var string
     */
    public $roleName;
    protected $_name = [
        'authConfigList' => 'AuthConfigList',
        'isSystemRole' => 'IsSystemRole',
        'roleId' => 'RoleId',
        'roleName' => 'RoleName',
    ];

    public function validate()
    {
        if (\is_array($this->authConfigList)) {
            Model::validateArray($this->authConfigList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->authConfigList) {
            if (\is_array($this->authConfigList)) {
                $res['AuthConfigList'] = [];
                $n1 = 0;
                foreach ($this->authConfigList as $item1) {
                    $res['AuthConfigList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuthConfigList'])) {
            if (!empty($map['AuthConfigList'])) {
                $model->authConfigList = [];
                $n1 = 0;
                foreach ($map['AuthConfigList'] as $item1) {
                    $model->authConfigList[$n1] = authConfigList::fromMap($item1);
                    ++$n1;
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
