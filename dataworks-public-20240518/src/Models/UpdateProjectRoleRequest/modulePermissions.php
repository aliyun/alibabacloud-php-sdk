<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\UpdateProjectRoleRequest;

use AlibabaCloud\Dara\Model;

class modulePermissions extends Model
{
    /**
     * @var int
     */
    public $moduleId;

    /**
     * @var string
     */
    public $permissionType;
    protected $_name = [
        'moduleId' => 'ModuleId',
        'permissionType' => 'PermissionType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->moduleId) {
            $res['ModuleId'] = $this->moduleId;
        }

        if (null !== $this->permissionType) {
            $res['PermissionType'] = $this->permissionType;
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
        if (isset($map['ModuleId'])) {
            $model->moduleId = $map['ModuleId'];
        }

        if (isset($map['PermissionType'])) {
            $model->permissionType = $map['PermissionType'];
        }

        return $model;
    }
}
