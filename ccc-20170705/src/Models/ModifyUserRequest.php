<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models;

use AlibabaCloud\Tea\Model;

class ModifyUserRequest extends Model
{
    /**
     * @var string
     */
    public $displayName;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $userId;

    /**
     * @var string
     */
    public $phone;

    /**
     * @var string
     */
    public $email;

    /**
     * @var string
     */
    public $privateOutboundNumberId;

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
    protected $_name = [
        'displayName'             => 'DisplayName',
        'instanceId'              => 'InstanceId',
        'userId'                  => 'UserId',
        'phone'                   => 'Phone',
        'email'                   => 'Email',
        'privateOutboundNumberId' => 'PrivateOutboundNumberId',
        'roleId'                  => 'RoleId',
        'skillGroupId'            => 'SkillGroupId',
        'skillLevel'              => 'SkillLevel',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->phone) {
            $res['Phone'] = $this->phone;
        }
        if (null !== $this->email) {
            $res['Email'] = $this->email;
        }
        if (null !== $this->privateOutboundNumberId) {
            $res['PrivateOutboundNumberId'] = $this->privateOutboundNumberId;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyUserRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['Phone'])) {
            $model->phone = $map['Phone'];
        }
        if (isset($map['Email'])) {
            $model->email = $map['Email'];
        }
        if (isset($map['PrivateOutboundNumberId'])) {
            $model->privateOutboundNumberId = $map['PrivateOutboundNumberId'];
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

        return $model;
    }
}
