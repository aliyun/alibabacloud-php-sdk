<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models;

use AlibabaCloud\Tea\Model;

class AssignUsersRequest extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string[]
     */
    public $roleId;

    /**
     * @var string[]
     */
    public $skillGroupId;

    /**
     * @var int[]
     */
    public $skillLevel;

    /**
     * @var string[]
     */
    public $userRamId;
    protected $_name = [
        'instanceId'   => 'InstanceId',
        'roleId'       => 'RoleId',
        'skillGroupId' => 'SkillGroupId',
        'skillLevel'   => 'SkillLevel',
        'userRamId'    => 'UserRamId',
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
        if (null !== $this->roleId) {
            $res['RoleId'] = $this->roleId;
        }
        if (null !== $this->skillGroupId) {
            $res['SkillGroupId'] = $this->skillGroupId;
        }
        if (null !== $this->skillLevel) {
            $res['SkillLevel'] = $this->skillLevel;
        }
        if (null !== $this->userRamId) {
            $res['UserRamId'] = $this->userRamId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AssignUsersRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['RoleId'])) {
            if (!empty($map['RoleId'])) {
                $model->roleId = $map['RoleId'];
            }
        }
        if (isset($map['SkillGroupId'])) {
            if (!empty($map['SkillGroupId'])) {
                $model->skillGroupId = $map['SkillGroupId'];
            }
        }
        if (isset($map['SkillLevel'])) {
            if (!empty($map['SkillLevel'])) {
                $model->skillLevel = $map['SkillLevel'];
            }
        }
        if (isset($map['UserRamId'])) {
            if (!empty($map['UserRamId'])) {
                $model->userRamId = $map['UserRamId'];
            }
        }

        return $model;
    }
}
