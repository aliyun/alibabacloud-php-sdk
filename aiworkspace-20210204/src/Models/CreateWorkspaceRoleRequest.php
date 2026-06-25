<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AIWorkSpace\V20210204\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\CreateWorkspaceRoleRequest\modulePermissions;

class CreateWorkspaceRoleRequest extends Model
{
    /**
     * @var modulePermissions[]
     */
    public $modulePermissions;

    /**
     * @var string
     */
    public $roleName;

    /**
     * @var string
     */
    public $roleType;
    protected $_name = [
        'modulePermissions' => 'ModulePermissions',
        'roleName' => 'RoleName',
        'roleType' => 'RoleType',
    ];

    public function validate()
    {
        if (\is_array($this->modulePermissions)) {
            Model::validateArray($this->modulePermissions);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->modulePermissions) {
            if (\is_array($this->modulePermissions)) {
                $res['ModulePermissions'] = [];
                $n1 = 0;
                foreach ($this->modulePermissions as $item1) {
                    $res['ModulePermissions'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->roleName) {
            $res['RoleName'] = $this->roleName;
        }

        if (null !== $this->roleType) {
            $res['RoleType'] = $this->roleType;
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
        if (isset($map['ModulePermissions'])) {
            if (!empty($map['ModulePermissions'])) {
                $model->modulePermissions = [];
                $n1 = 0;
                foreach ($map['ModulePermissions'] as $item1) {
                    $model->modulePermissions[$n1] = modulePermissions::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RoleName'])) {
            $model->roleName = $map['RoleName'];
        }

        if (isset($map['RoleType'])) {
            $model->roleType = $map['RoleType'];
        }

        return $model;
    }
}
