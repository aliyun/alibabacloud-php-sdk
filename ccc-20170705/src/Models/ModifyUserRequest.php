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
    public $email;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $phone;

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

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'displayName'             => 'DisplayName',
        'email'                   => 'Email',
        'instanceId'              => 'InstanceId',
        'phone'                   => 'Phone',
        'privateOutboundNumberId' => 'PrivateOutboundNumberId',
        'roleId'                  => 'RoleId',
        'skillGroupId'            => 'SkillGroupId',
        'skillLevel'              => 'SkillLevel',
        'userId'                  => 'UserId',
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
        if (null !== $this->email) {
            $res['Email'] = $this->email;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->phone) {
            $res['Phone'] = $this->phone;
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
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
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
        if (isset($map['Email'])) {
            $model->email = $map['Email'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Phone'])) {
            $model->phone = $map['Phone'];
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
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
