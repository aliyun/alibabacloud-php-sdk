<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\DescribeUserPermissionResponse;

use AlibabaCloud\Tea\Model;

class body extends Model
{
    /**
     * @description The authorization setting. Valid values:
     *
     *   `{cluster_id}` is returned if the permissions are scoped to a cluster.
     *   `{cluster_id}/{namespace}` is returned if the permissions are scoped to a namespace of a cluster.
     *   `all-clusters` is returned if the permissions are scoped to all clusters.
     *
     * @example c1b542****
     *
     * @var string
     */
    public $resourceId;

    /**
     * @description The authorization type. Valid values:
     *
     *   `cluster`: indicates that the permissions are scoped to a cluster.
     *   `namespace`: indicates that the permissions are scoped to a namespace of a cluster.
     *   `console`: indicates that the permissions are scoped to all clusters. This value was displayed only in the console.
     *
     * @example cluster
     *
     * @var string
     */
    public $resourceType;

    /**
     * @description The name of the custom role. If a custom role is assigned, the value is the name of the assigned custom role.
     *
     * @example view
     *
     * @var string
     */
    public $roleName;

    /**
     * @description The type of predefined role. Valid values:
     *
     *   `admin`: administrator
     *   `ops`: O\\&M engineer
     *   `dev`: developer
     *   `restricted`: restricted user
     *   `custom`: custom role
     *
     * @example admin
     *
     * @var string
     */
    public $roleType;

    /**
     * @description Indicates whether the permissions are granted to the cluster owner.
     *
     *   `0`: indicates that the permissions are not granted to the cluster owner.
     *   `1`: indicates that the permissions are granted to the cluster owner. The cluster owner is the administrator.
     *
     * @example 1
     *
     * @var int
     */
    public $isOwner;

    /**
     * @description Indicates whether the permissions are granted to the RAM role. Valid values:
     *
     *   `0`: indicates that the permissions are not granted to the RAM role.
     *   `1`: indicates that the permissions are granted to the RAM role.
     *
     * @example 1
     *
     * @var int
     */
    public $isRamRole;
    protected $_name = [
        'resourceId'   => 'resource_id',
        'resourceType' => 'resource_type',
        'roleName'     => 'role_name',
        'roleType'     => 'role_type',
        'isOwner'      => 'is_owner',
        'isRamRole'    => 'is_ram_role',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->resourceId) {
            $res['resource_id'] = $this->resourceId;
        }
        if (null !== $this->resourceType) {
            $res['resource_type'] = $this->resourceType;
        }
        if (null !== $this->roleName) {
            $res['role_name'] = $this->roleName;
        }
        if (null !== $this->roleType) {
            $res['role_type'] = $this->roleType;
        }
        if (null !== $this->isOwner) {
            $res['is_owner'] = $this->isOwner;
        }
        if (null !== $this->isRamRole) {
            $res['is_ram_role'] = $this->isRamRole;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return body
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['resource_id'])) {
            $model->resourceId = $map['resource_id'];
        }
        if (isset($map['resource_type'])) {
            $model->resourceType = $map['resource_type'];
        }
        if (isset($map['role_name'])) {
            $model->roleName = $map['role_name'];
        }
        if (isset($map['role_type'])) {
            $model->roleType = $map['role_type'];
        }
        if (isset($map['is_owner'])) {
            $model->isOwner = $map['is_owner'];
        }
        if (isset($map['is_ram_role'])) {
            $model->isRamRole = $map['is_ram_role'];
        }

        return $model;
    }
}
