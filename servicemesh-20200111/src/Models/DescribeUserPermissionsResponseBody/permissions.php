<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeUserPermissionsResponseBody;

use AlibabaCloud\Tea\Model;

class permissions extends Model
{
    /**
     * @description The entity to which the permissions are granted. A value of `true` indicates that the permissions are granted to a RAM user. A value of `false` indicates that the permissions are granted to a RAM role.
     *
     * @example false
     *
     * @var string
     */
    public $isRamRole;

    /**
     * @description This parameter is required by the system. The return value is fixed to `0`.
     *
     * @example 0
     *
     * @var string
     */
    public $parentId;

    /**
     * @description The ID of the ASM instance.
     *
     * @example c57b848115458460583a4260cb713****
     *
     * @var string
     */
    public $resourceId;

    /**
     * @description This parameter is required by the system. The return value is fixed to `cluster`.
     *
     * @example cluster
     *
     * @var string
     */
    public $resourceType;

    /**
     * @description The name of the permissions. Valid values:
     *
     *   `istio-admin`: the permissions of Alibaba Cloud Service Mesh (ASM) administrators.
     *   `istio-ops`: the permissions of ASM restricted users.
     *   `istio-readonly`: the read-only permissions.
     *
     * @example istio-admin
     *
     * @var string
     */
    public $roleName;

    /**
     * @description This parameter is required by the system. The return value is fixed to `custom`.
     *
     * @example custom
     *
     * @var string
     */
    public $roleType;
    protected $_name = [
        'isRamRole'    => 'IsRamRole',
        'parentId'     => 'ParentId',
        'resourceId'   => 'ResourceId',
        'resourceType' => 'ResourceType',
        'roleName'     => 'RoleName',
        'roleType'     => 'RoleType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->isRamRole) {
            $res['IsRamRole'] = $this->isRamRole;
        }
        if (null !== $this->parentId) {
            $res['ParentId'] = $this->parentId;
        }
        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }
        if (null !== $this->roleName) {
            $res['RoleName'] = $this->roleName;
        }
        if (null !== $this->roleType) {
            $res['RoleType'] = $this->roleType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return permissions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IsRamRole'])) {
            $model->isRamRole = $map['IsRamRole'];
        }
        if (isset($map['ParentId'])) {
            $model->parentId = $map['ParentId'];
        }
        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
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
