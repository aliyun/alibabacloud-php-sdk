<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\ListWorkspaceRolesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\ListWorkspaceRolesResponseBody\roles\modulePermissions;

class roles extends Model
{
    /**
     * @var string
     */
    public $creator;

    /**
     * @var string
     */
    public $gmtCreateTime;

    /**
     * @var string
     */
    public $gmtModifiedTime;

    /**
     * @var modulePermissions[]
     */
    public $modulePermissions;

    /**
     * @var string
     */
    public $roleId;

    /**
     * @var string
     */
    public $roleName;
    protected $_name = [
        'creator' => 'Creator',
        'gmtCreateTime' => 'GmtCreateTime',
        'gmtModifiedTime' => 'GmtModifiedTime',
        'modulePermissions' => 'ModulePermissions',
        'roleId' => 'RoleId',
        'roleName' => 'RoleName',
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
        if (null !== $this->creator) {
            $res['Creator'] = $this->creator;
        }

        if (null !== $this->gmtCreateTime) {
            $res['GmtCreateTime'] = $this->gmtCreateTime;
        }

        if (null !== $this->gmtModifiedTime) {
            $res['GmtModifiedTime'] = $this->gmtModifiedTime;
        }

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
        if (isset($map['Creator'])) {
            $model->creator = $map['Creator'];
        }

        if (isset($map['GmtCreateTime'])) {
            $model->gmtCreateTime = $map['GmtCreateTime'];
        }

        if (isset($map['GmtModifiedTime'])) {
            $model->gmtModifiedTime = $map['GmtModifiedTime'];
        }

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

        if (isset($map['RoleId'])) {
            $model->roleId = $map['RoleId'];
        }

        if (isset($map['RoleName'])) {
            $model->roleName = $map['RoleName'];
        }

        return $model;
    }
}
