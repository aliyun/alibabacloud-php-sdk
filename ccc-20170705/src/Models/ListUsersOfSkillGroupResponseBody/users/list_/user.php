<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models\ListUsersOfSkillGroupResponseBody\users\list_;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CCC\V20170705\Models\ListUsersOfSkillGroupResponseBody\users\list_\user\detail;
use AlibabaCloud\SDK\CCC\V20170705\Models\ListUsersOfSkillGroupResponseBody\users\list_\user\roles;
use AlibabaCloud\SDK\CCC\V20170705\Models\ListUsersOfSkillGroupResponseBody\users\list_\user\skillLevels;

class user extends Model
{
    /**
     * @var detail
     */
    public $detail;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $ramId;

    /**
     * @var roles
     */
    public $roles;

    /**
     * @var skillLevels
     */
    public $skillLevels;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'detail' => 'Detail',
        'instanceId' => 'InstanceId',
        'ramId' => 'RamId',
        'roles' => 'Roles',
        'skillLevels' => 'SkillLevels',
        'userId' => 'UserId',
    ];

    public function validate()
    {
        if (null !== $this->detail) {
            $this->detail->validate();
        }
        if (null !== $this->roles) {
            $this->roles->validate();
        }
        if (null !== $this->skillLevels) {
            $this->skillLevels->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->detail) {
            $res['Detail'] = null !== $this->detail ? $this->detail->toArray($noStream) : $this->detail;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->ramId) {
            $res['RamId'] = $this->ramId;
        }

        if (null !== $this->roles) {
            $res['Roles'] = null !== $this->roles ? $this->roles->toArray($noStream) : $this->roles;
        }

        if (null !== $this->skillLevels) {
            $res['SkillLevels'] = null !== $this->skillLevels ? $this->skillLevels->toArray($noStream) : $this->skillLevels;
        }

        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
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
        if (isset($map['Detail'])) {
            $model->detail = detail::fromMap($map['Detail']);
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['RamId'])) {
            $model->ramId = $map['RamId'];
        }

        if (isset($map['Roles'])) {
            $model->roles = roles::fromMap($map['Roles']);
        }

        if (isset($map['SkillLevels'])) {
            $model->skillLevels = skillLevels::fromMap($map['SkillLevels']);
        }

        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
