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
    public $instanceId;

    /**
     * @var privileges
     */
    public $privileges;

    /**
     * @var string
     */
    public $roleDescription;

    /**
     * @var string
     */
    public $roleId;

    /**
     * @var string
     */
    public $roleName;

    /**
     * @var int
     */
    public $userCount;
    protected $_name = [
        'instanceId'      => 'InstanceId',
        'privileges'      => 'Privileges',
        'roleDescription' => 'RoleDescription',
        'roleId'          => 'RoleId',
        'roleName'        => 'RoleName',
        'userCount'       => 'UserCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->privileges) {
            $res['Privileges'] = null !== $this->privileges ? $this->privileges->toMap() : null;
        }
        if (null !== $this->roleDescription) {
            $res['RoleDescription'] = $this->roleDescription;
        }
        if (null !== $this->roleId) {
            $res['RoleId'] = $this->roleId;
        }
        if (null !== $this->roleName) {
            $res['RoleName'] = $this->roleName;
        }
        if (null !== $this->userCount) {
            $res['UserCount'] = $this->userCount;
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
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Privileges'])) {
            $model->privileges = privileges::fromMap($map['Privileges']);
        }
        if (isset($map['RoleDescription'])) {
            $model->roleDescription = $map['RoleDescription'];
        }
        if (isset($map['RoleId'])) {
            $model->roleId = $map['RoleId'];
        }
        if (isset($map['RoleName'])) {
            $model->roleName = $map['RoleName'];
        }
        if (isset($map['UserCount'])) {
            $model->userCount = $map['UserCount'];
        }

        return $model;
    }
}
