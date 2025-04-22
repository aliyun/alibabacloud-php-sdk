<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Dara\Model;

class AssignRoleRequest extends Model
{
    /**
     * @var Identity
     */
    public $identity;

    /**
     * @var string
     */
    public $manageResourceId;

    /**
     * @var string
     */
    public $manageResourceType;

    /**
     * @var string
     */
    public $roleId;
    protected $_name = [
        'identity' => 'identity',
        'manageResourceId' => 'manage_resource_id',
        'manageResourceType' => 'manage_resource_type',
        'roleId' => 'role_id',
    ];

    public function validate()
    {
        if (null !== $this->identity) {
            $this->identity->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->identity) {
            $res['identity'] = null !== $this->identity ? $this->identity->toArray($noStream) : $this->identity;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
