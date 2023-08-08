<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\GrantPermissionsRequest;

use AlibabaCloud\Tea\Model;

class body extends Model
{
    /**
     * @example c796c60***
     *
     * @var string
     */
    public $cluster;

    /**
     * @example false
     *
     * @var bool
     */
    public $isCustom;

    /**
     * @example false
     *
     * @var bool
     */
    public $isRamRole;

    /**
     * @example test
     *
     * @var string
     */
    public $namespace;

    /**
     * @example ops
     *
     * @var string
     */
    public $roleName;

    /**
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
