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
    public $privateOutboundNumberId;

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
        'detail'                  => 'Detail',
        'instanceId'              => 'InstanceId',
        'privateOutboundNumberId' => 'PrivateOutboundNumberId',
        'ramId'                   => 'RamId',
        'roles'                   => 'Roles',
        'skillLevels'             => 'SkillLevels',
        'userId'                  => 'UserId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->detail) {
            $res['Detail'] = null !== $this->detail ? $this->detail->toMap() : null;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->privateOutboundNumberId) {
            $res['PrivateOutboundNumberId'] = $this->privateOutboundNumberId;
        }
        if (null !== $this->ramId) {
            $res['RamId'] = $this->ramId;
        }
        if (null !== $this->roles) {
            $res['Roles'] = null !== $this->roles ? $this->roles->toMap() : null;
        }
        if (null !== $this->skillLevels) {
            $res['SkillLevels'] = null !== $this->skillLevels ? $this->skillLevels->toMap() : null;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
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
        if (isset($map['Detail'])) {
            $model->detail = detail::fromMap($map['Detail']);
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['PrivateOutboundNumberId'])) {
            $model->privateOutboundNumberId = $map['PrivateOutboundNumberId'];
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
