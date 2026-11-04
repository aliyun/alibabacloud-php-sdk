<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models\GetUserByExtensionResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CCC\V20170705\Models\GetUserByExtensionResponseBody\user\detail;
use AlibabaCloud\SDK\CCC\V20170705\Models\GetUserByExtensionResponseBody\user\roles;
use AlibabaCloud\SDK\CCC\V20170705\Models\GetUserByExtensionResponseBody\user\skillLevels;

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
     * @var roles[]
     */
    public $roles;

    /**
     * @var skillLevels[]
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
        if (\is_array($this->roles)) {
            Model::validateArray($this->roles);
        }
        if (\is_array($this->skillLevels)) {
            Model::validateArray($this->skillLevels);
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
            if (\is_array($this->roles)) {
                $res['Roles'] = [];
                $n1 = 0;
                foreach ($this->roles as $item1) {
                    $res['Roles'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->skillLevels) {
            if (\is_array($this->skillLevels)) {
                $res['SkillLevels'] = [];
                $n1 = 0;
                foreach ($this->skillLevels as $item1) {
                    $res['SkillLevels'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
            if (!empty($map['Roles'])) {
                $model->roles = [];
                $n1 = 0;
                foreach ($map['Roles'] as $item1) {
                    $model->roles[$n1] = roles::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['SkillLevels'])) {
            if (!empty($map['SkillLevels'])) {
                $model->skillLevels = [];
                $n1 = 0;
                foreach ($map['SkillLevels'] as $item1) {
                    $model->skillLevels[$n1] = skillLevels::fromMap($item1);
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
