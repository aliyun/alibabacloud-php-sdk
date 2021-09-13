<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models;

use AlibabaCloud\Tea\Model;

class ModifySkillLevelsOfUserRequest extends Model
{
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
    public $skillLevelList;
    protected $_name = [
        'instanceId'     => 'InstanceId',
        'userId'         => 'UserId',
        'skillLevelList' => 'SkillLevelList',
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
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->skillLevelList) {
            $res['SkillLevelList'] = $this->skillLevelList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifySkillLevelsOfUserRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['SkillLevelList'])) {
            $model->skillLevelList = $map['SkillLevelList'];
        }

        return $model;
    }
}
