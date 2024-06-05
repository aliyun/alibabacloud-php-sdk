<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Tea\Model;

class CancelAssignRoleRequest extends Model
{
    /**
     * @description The unique identifier. You can cancel only the role assigned to a user.
     *
     * This parameter is required.
     * @var Identity
     */
    public $identity;

    /**
     * @description The ID of the resource that the role manages. Set the value to a group ID.
     *
     * This parameter is required.
     * @example 105***b82
     *
     * @var string
     */
    public $manageResourceId;

    /**
     * @description The type of the resource that the role manages. Set the value to RT_Group, which specifies group.
     *
     * This parameter is required.
     * @example RT_Group
     *
     * @var string
     */
    public $manageResourceType;

    /**
     * @description The ID of the role to be canceled. Set the value to SystemGroupAdmin, which is the ID of the group administrator role.
     *
     * This parameter is required.
     * @example SystemGroupAdmin
     *
     * @var string
     */
    public $roleId;
    protected $_name = [
        'identity'           => 'identity',
        'manageResourceId'   => 'manage_resource_id',
        'manageResourceType' => 'manage_resource_type',
        'roleId'             => 'role_id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->identity) {
            $res['identity'] = null !== $this->identity ? $this->identity->toMap() : null;
        }
        if (null !== $this->manageResourceId) {
            $res['manage_resource_id'] = $this->manageResourceId;
        }
        if (null !== $this->manageResourceType) {
            $res['manage_resource_type'] = $this->manageResourceType;
        }
        if (null !== $this->roleId) {
            $res['role_id'] = $this->roleId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CancelAssignRoleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['identity'])) {
            $model->identity = Identity::fromMap($map['identity']);
        }
        if (isset($map['manage_resource_id'])) {
            $model->manageResourceId = $map['manage_resource_id'];
        }
        if (isset($map['manage_resource_type'])) {
            $model->manageResourceType = $map['manage_resource_type'];
        }
        if (isset($map['role_id'])) {
            $model->roleId = $map['role_id'];
        }

        return $model;
    }
}
