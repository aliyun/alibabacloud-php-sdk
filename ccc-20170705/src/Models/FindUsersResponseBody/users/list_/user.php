<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models\FindUsersResponseBody\users\list_;

use AlibabaCloud\SDK\CCC\V20170705\Models\FindUsersResponseBody\users\list_\user\detail;
use AlibabaCloud\SDK\CCC\V20170705\Models\FindUsersResponseBody\users\list_\user\roles;
use AlibabaCloud\SDK\CCC\V20170705\Models\FindUsersResponseBody\users\list_\user\skillLevels;
use AlibabaCloud\Tea\Model;

class user extends Model
{
    /**
     * @var skillLevels
     */
    public $skillLevels;

    /**
     * @var string
     */
    public $privateOutboundNumberId;

    /**
     * @var string
     */
    public $userId;

    /**
     * @var roles
     */
    public $roles;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $ramId;

    /**
     * @var detail
     */
    public $detail;
    protected $_name = [
        'skillLevels'             => 'SkillLevels',
        'privateOutboundNumberId' => 'PrivateOutboundNumberId',
        'userId'                  => 'UserId',
        'roles'                   => 'Roles',
        'instanceId'              => 'InstanceId',
        'ramId'                   => 'RamId',
        'detail'                  => 'Detail',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->skillLevels) {
            $res['SkillLevels'] = null !== $this->skillLevels ? $this->skillLevels->toMap() : null;
        }
        if (null !== $this->privateOutboundNumberId) {
            $res['PrivateOutboundNumberId'] = $this->privateOutboundNumberId;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->roles) {
            $res['Roles'] = null !== $this->roles ? $this->roles->toMap() : null;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->ramId) {
            $res['RamId'] = $this->ramId;
        }
        if (null !== $this->detail) {
            $res['Detail'] = null !== $this->detail ? $this->detail->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return user
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SkillLevels'])) {
            $model->skillLevels = skillLevels::fromMap($map['SkillLevels']);
        }
        if (isset($map['PrivateOutboundNumberId'])) {
            $model->privateOutboundNumberId = $map['PrivateOutboundNumberId'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['Roles'])) {
            $model->roles = roles::fromMap($map['Roles']);
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['RamId'])) {
            $model->ramId = $map['RamId'];
        }
        if (isset($map['Detail'])) {
            $model->detail = detail::fromMap($map['Detail']);
        }

        return $model;
    }
}
