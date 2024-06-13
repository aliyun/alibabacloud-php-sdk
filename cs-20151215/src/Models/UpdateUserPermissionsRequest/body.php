<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\UpdateUserPermissionsRequest;

use AlibabaCloud\Tea\Model;

class body extends Model
{
    /**
     * @description The ID of the cluster on which you want to grant permissions to the RAM role or RAM role.
     *
     *   Set this parameter to an empty string if `role_type` is set to `all-clusters`.
     *
     * @example c796c60***
     *
     * @var string
     */
    public $cluster;

    /**
     * @description Specifies whether to assign a custom role to the RAM user or RAM role. If you want to assign a custom role to the RAM user or RAM role, set `role_name` to the name of the custom role.
     *
     * @example false
     *
     * @var bool
     */
    public $isCustom;

    /**
     * @description Specifies whether to use a RAM role to grant permissions.
     *
     * @example false
     *
     * @var bool
     */
    public $isRamRole;

    /**
     * @description The namespace that you want to authorize the RAM user or RAM role to manage. This parameter is required only if you set role_type to namespace.
     *
     * @example test
     *
     * @var string
     */
    public $namespace;

    /**
     * @description The predefined role. Valid values:
     *
     *   `admin`: administrator
     *   `ops`: O\\&M engineer
     *   `dev`: developer
     *   `restricted`: restricted user
     *   Custom role
     *
     * @example ops
     *
     * @var string
     */
    public $roleName;

    /**
     * @description The authorization type. Valid values:
     *
     *   `cluster`: authorizes the RAM user or RAM role to manage the specified clusters.
     *   `namespace`: authorizes the RAM user or RAM role to manage the specified namepsaces.
     *   `all-clusters`: authorizes the RAM user or RAM role to manage all clusters.
     *
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
