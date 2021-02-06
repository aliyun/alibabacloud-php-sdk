<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\GrantPermissionsRequest;

use AlibabaCloud\Tea\Model;

class body extends Model
{
    /**
     * @description 授权目标集群id
     *
     * @var string
     */
    public $cluster;

    /**
     * @description 该授权是否是自定义授权
     *
     * @var bool
     */
    public $isCustom;

    /**
     * @description 预置的角色名称
     *
     * @var string
     */
    public $roleName;

    /**
     * @description 授权类型
     *
     * @var string
     */
    public $roleType;

    /**
     * @description 命名空间名称
     *
     * @var string
     */
    public $namespace;

    /**
     * @description 是否是 RAM 角色授权
     *
     * @var bool
     */
    public $isRamRole;
    protected $_name = [
        'cluster'   => 'cluster',
        'isCustom'  => 'is_custom',
        'roleName'  => 'role_name',
        'roleType'  => 'role_type',
        'namespace' => 'namespace',
        'isRamRole' => 'is_ram_role',
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
        if (null !== $this->roleName) {
            $res['role_name'] = $this->roleName;
        }
        if (null !== $this->roleType) {
            $res['role_type'] = $this->roleType;
        }
        if (null !== $this->namespace) {
            $res['namespace'] = $this->namespace;
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
        if (isset($map['cluster'])) {
            $model->cluster = $map['cluster'];
        }
        if (isset($map['is_custom'])) {
            $model->isCustom = $map['is_custom'];
        }
        if (isset($map['role_name'])) {
            $model->roleName = $map['role_name'];
        }
        if (isset($map['role_type'])) {
            $model->roleType = $map['role_type'];
        }
        if (isset($map['namespace'])) {
            $model->namespace = $map['namespace'];
        }
        if (isset($map['is_ram_role'])) {
            $model->isRamRole = $map['is_ram_role'];
        }

        return $model;
    }
}
