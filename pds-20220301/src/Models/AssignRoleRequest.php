<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Tea\Model;

class AssignRoleRequest extends Model
{
    /**
     * @var Identity
     */
    public $identity;

    /**
     * @example 105***b82
     *
     * @var string
     */
    public $manageResourceId;

    /**
     * @example RT_Group
     *
     * @var string
     */
    public $manageResourceType;

    /**
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
     * @return AssignRoleRequest
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
