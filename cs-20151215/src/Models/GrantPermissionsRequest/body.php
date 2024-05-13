<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\GrantPermissionsRequest;

use AlibabaCloud\Tea\Model;

class body extends Model
{
    /**
     * @description The ID of the cluster that you want to manage.
     *
     *   When the `role_type` parameter is set to `all-clusters`, this parameter is set to an empty string.
     *
     * This parameter is required.
     * @example c796c60***
     *
     * @var string
     */
    public $cluster;

    /**
     * @description Specifies whether to perform a custom authorization. To perform a custom authorization, set `role_name` to a custom cluster role.
     *
     * @example false
     *
     * @var bool
     */
    public $isCustom;

    /**
     * @description Specifies whether the permissions are granted to a RAM role.
     *
     * @example false
     *
     * @var bool
     */
    public $isRamRole;

    /**
     * @description The namespace to which the permissions are scoped. This parameter is required only if you set role_type to namespace.
     *
     * @example test
     *
     * @var string
     */
    public $namespace;

    /**
     * @description The predefined role name. Valid values:
     *
     *   `admin`: administrator
     *   `ops`: O\\&M engineer
     *   `dev`: developer
     *   `restricted`: restricted user
     *   The custom cluster role.
     *
     * This parameter is required.
     * @example ops
     *
     * @var string
     */
    public $roleName;

    /**
     * @description The authorization type. Valid values:
     *
     *   `cluster`: indicates that the permissions are scoped to a cluster.
     *   `namespace`: specifies that the permissions are scoped to a namespace of a cluster.
     *   `all-clusters`: specifies that the permissions are scoped to all clusters.
     *
     * This parameter is required.
     * @example cluster
     *
     * @var string
     */
    public $roleType;
    protected $_name = [
        'cluster'   => 'cluster',
        'isCustom'  => 'is_custom',
        'isRamRole' => 'is_ram_role',
        'namespace' => 'namespace',
        'roleName'  => 'role_name',
        'roleType'  => 'role_type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cluster) {
            $res['cluster'] = $this->cluster;
        }
        if (null !== $this->isCustom) {
            $res['is_custom'] = $this->isCustom;
        }
        if (null !== $this->isRamRole) {
            $res['is_ram_role'] = $this->isRamRole;
        }
        if (null !== $this->namespace) {
            $res['namespace'] = $this->namespace;
        }
        if (null !== $this->roleName) {
            $res['role_name'] = $this->roleName;
        }
        if (null !== $this->roleType) {
            $res['role_type'] = $this->roleType;
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
        if (isset($map['cluster'])) {
            $model->cluster = $map['cluster'];
        }
        if (isset($map['is_custom'])) {
            $model->isCustom = $map['is_custom'];
        }
        if (isset($map['is_ram_role'])) {
            $model->isRamRole = $map['is_ram_role'];
        }
        if (isset($map['namespace'])) {
            $model->namespace = $map['namespace'];
        }
        if (isset($map['role_name'])) {
            $model->roleName = $map['role_name'];
        }
        if (isset($map['role_type'])) {
            $model->roleType = $map['role_type'];
        }

        return $model;
    }
}
