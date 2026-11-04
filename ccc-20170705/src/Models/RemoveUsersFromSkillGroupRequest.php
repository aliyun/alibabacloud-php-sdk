<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models;

use AlibabaCloud\Dara\Model;

class RemoveUsersFromSkillGroupRequest extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $skillGroupId;

    /**
     * @var string[]
     */
    public $userId;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'skillGroupId' => 'SkillGroupId',
        'userId' => 'UserId',
    ];

    public function validate()
    {
        if (\is_array($this->userId)) {
            Model::validateArray($this->userId);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->skillGroupId) {
            $res['SkillGroupId'] = $this->skillGroupId;
        }

        if (null !== $this->userId) {
            if (\is_array($this->userId)) {
                $res['UserId'] = [];
                $n1 = 0;
                foreach ($this->userId as $item1) {
                    $res['UserId'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['SkillGroupId'])) {
            $model->skillGroupId = $map['SkillGroupId'];
        }

        if (isset($map['UserId'])) {
            if (!empty($map['UserId'])) {
                $model->userId = [];
                $n1 = 0;
                foreach ($map['UserId'] as $item1) {
                    $model->userId[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
