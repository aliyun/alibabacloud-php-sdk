<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models;

use AlibabaCloud\Tea\Model;

class GrantUserPermissionsRequest extends Model
{
    /**
     * @description The permissions that are granted to an entity. The content is a string that consists of JSON arrays. You must specify all permissions that you want to grant to an entity. You can add or remove permissions by modifying the content. Field definition of the sample code:
     *
     *   `IsCustom`: a parameter that is required by the system. Set the value to `true`.
     *   `Cluster`: the ID of the Alibaba Cloud Service Mesh (ASM) instance.
     *   `RoleName`: the name of the permissions. Valid values: `istio-admin`, `istio-ops`, and `istio-readonly`. A value of istio-admin indicates the permissions of ASM administrators. A value of istio-ops indicates the permissions of ASM restricted users. A value of istio-readonly indicates the read-only permissions.
     *   `IsRamRole`: the entity to which you want to grant the permissions. To grant the permissions to a RAM role, set the value to `true`. Otherwise, set the value to `false`.
     *
     * @example [{"IsCustom":true,"RoleName":"istio-ops","Cluster":"c57b848115458460583a4260cb713****","RoleType":"custom","IsRamRole":false},{"IsCustom":true,"RoleName":"istio-ops","Cluster":"c4ec191f4e12145c09286ea3e2b8f****","RoleType":"custom","IsRamRole":false}]
     *
     * @var string
     */
    public $permissions;

    /**
     * @description The ID of the RAM user or RAM role.
     *
     * @example 27852573609480****
     *
     * @var string
     */
    public $subAccountUserId;
    protected $_name = [
        'permissions'      => 'Permissions',
        'subAccountUserId' => 'SubAccountUserId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->permissions) {
            $res['Permissions'] = $this->permissions;
        }
        if (null !== $this->subAccountUserId) {
            $res['SubAccountUserId'] = $this->subAccountUserId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GrantUserPermissionsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Permissions'])) {
            $model->permissions = $map['Permissions'];
        }
        if (isset($map['SubAccountUserId'])) {
            $model->subAccountUserId = $map['SubAccountUserId'];
        }

        return $model;
    }
}
