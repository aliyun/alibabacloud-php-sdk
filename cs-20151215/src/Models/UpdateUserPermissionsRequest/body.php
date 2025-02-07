<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\UpdateUserPermissionsRequest;

use AlibabaCloud\Dara\Model;

class body extends Model
{
    /**
     * @var string
     */
    public $cluster;
    /**
     * @var bool
     */
    public $isCustom;
    /**
     * @var bool
     */
    public $isRamRole;
    /**
     * @var string
     */
    public $namespace;
    /**
     * @var string
     */
    public $roleName;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
