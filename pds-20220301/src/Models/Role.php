<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Tea\Model;

class Role extends Model
{
    /**
     * @var int
     */
    public $createdAt;

    /**
     * @var string
     */
    public $creator;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $manageResourceType;

    /**
     * @var string
     */
    public $name;

    /**
     * @var Permission[]
     */
    public $permissions;

    /**
     * @var string
     */
    public $roleId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $updatedAt;
    protected $_name = [
        'createdAt'          => 'created_at',
        'creator'            => 'creator',
        'description'        => 'description',
        'manageResourceType' => 'manage_resource_type',
        'name'               => 'name',
        'permissions'        => 'permissions',
        'roleId'             => 'role_id',
        'status'             => 'status',
        'updatedAt'          => 'updated_at',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createdAt) {
            $res['created_at'] = $this->createdAt;
        }
        if (null !== $this->creator) {
            $res['creator'] = $this->creator;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->manageResourceType) {
            $res['manage_resource_type'] = $this->manageResourceType;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->permissions) {
            $res['permissions'] = [];
            if (null !== $this->permissions && \is_array($this->permissions)) {
                $n = 0;
                foreach ($this->permissions as $item) {
                    $res['permissions'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->roleId) {
            $res['role_id'] = $this->roleId;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->updatedAt) {
            $res['updated_at'] = $this->updatedAt;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return Role
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['created_at'])) {
            $model->createdAt = $map['created_at'];
        }
        if (isset($map['creator'])) {
            $model->creator = $map['creator'];
        }
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['manage_resource_type'])) {
            $model->manageResourceType = $map['manage_resource_type'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['permissions'])) {
            if (!empty($map['permissions'])) {
                $model->permissions = [];
                $n                  = 0;
                foreach ($map['permissions'] as $item) {
                    $model->permissions[$n++] = null !== $item ? Permission::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['role_id'])) {
            $model->roleId = $map['role_id'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }
        if (isset($map['updated_at'])) {
            $model->updatedAt = $map['updated_at'];
        }

        return $model;
    }
}
