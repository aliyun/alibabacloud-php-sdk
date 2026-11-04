<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models;

use AlibabaCloud\Dara\Model;

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
        'displayName' => 'DisplayName',
        'email' => 'Email',
        'instanceId' => 'InstanceId',
        'phone' => 'Phone',
        'privateOutboundNumberId' => 'PrivateOutboundNumberId',
        'roleId' => 'RoleId',
        'skillGroupId' => 'SkillGroupId',
        'skillLevel' => 'SkillLevel',
        'userId' => 'UserId',
    ];

    public function validate()
    {
        if (\is_array($this->roleId)) {
            Model::validateArray($this->roleId);
        }
        if (\is_array($this->skillGroupId)) {
            Model::validateArray($this->skillGroupId);
        }
        if (\is_array($this->skillLevel)) {
            Model::validateArray($this->skillLevel);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->roleId)) {
                $res['RoleId'] = [];
                $n1 = 0;
                foreach ($this->roleId as $item1) {
                    $res['RoleId'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->skillGroupId) {
            if (\is_array($this->skillGroupId)) {
                $res['SkillGroupId'] = [];
                $n1 = 0;
                foreach ($this->skillGroupId as $item1) {
                    $res['SkillGroupId'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->skillLevel) {
            if (\is_array($this->skillLevel)) {
                $res['SkillLevel'] = [];
                $n1 = 0;
                foreach ($this->skillLevel as $item1) {
                    $res['SkillLevel'][$n1] = $item1;
                    ++$n1;
                }
            }
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
                $model->roleId = [];
                $n1 = 0;
                foreach ($map['RoleId'] as $item1) {
                    $model->roleId[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['SkillGroupId'])) {
            if (!empty($map['SkillGroupId'])) {
                $model->skillGroupId = [];
                $n1 = 0;
                foreach ($map['SkillGroupId'] as $item1) {
                    $model->skillGroupId[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['SkillLevel'])) {
            if (!empty($map['SkillLevel'])) {
                $model->skillLevel = [];
                $n1 = 0;
                foreach ($map['SkillLevel'] as $item1) {
                    $model->skillLevel[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
