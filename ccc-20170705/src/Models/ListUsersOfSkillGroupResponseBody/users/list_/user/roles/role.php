<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models\ListUsersOfSkillGroupResponseBody\users\list_\user\roles;

use AlibabaCloud\SDK\CCC\V20170705\Models\ListUsersOfSkillGroupResponseBody\users\list_\user\roles\role\privileges;
use AlibabaCloud\Tea\Model;

class role extends Model
{
    /**
     * @var string
     */
    public $roleDescription;

    /**
     * @var privileges
     */
    public $privileges;

    /**
     * @var int
     */
    public $userCount;

    /**
     * @var string
     */
    public $roleName;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $roleId;
    protected $_name = [
        'roleDescription' => 'RoleDescription',
        'privileges'      => 'Privileges',
        'userCount'       => 'UserCount',
        'roleName'        => 'RoleName',
        'instanceId'      => 'InstanceId',
        'roleId'          => 'RoleId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->roleDescription) {
            $res['RoleDescription'] = $this->roleDescription;
        }
        if (null !== $this->privileges) {
            $res['Privileges'] = null !== $this->privileges ? $this->privileges->toMap() : null;
        }
        if (null !== $this->userCount) {
            $res['UserCount'] = $this->userCount;
        }
        if (null !== $this->roleName) {
            $res['RoleName'] = $this->roleName;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->roleId) {
            $res['RoleId'] = $this->roleId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return role
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RoleDescription'])) {
            $model->roleDescription = $map['RoleDescription'];
        }
        if (isset($map['Privileges'])) {
            $model->privileges = privileges::fromMap($map['Privileges']);
        }
        if (isset($map['UserCount'])) {
            $model->userCount = $map['UserCount'];
        }
        if (isset($map['RoleName'])) {
            $model->roleName = $map['RoleName'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['RoleId'])) {
            $model->roleId = $map['RoleId'];
        }

        return $model;
    }
}
