<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models;

use AlibabaCloud\Tea\Model;

class AddUsersToSkillGroupRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example ccc-test
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description This parameter is required.
     *
     * @example test1@ccc-test
     *
     * @var string
     */
    public $skillGroupId;

    /**
     * @description This parameter is required.
     *
     * @example [{"userId":"agent1@ccc-test","skillLevel":10},{"userId":"agent2@ccc-test","skillLevel":10}]
     *
     * @var string
     */
    public $userSkillLevelList;
    protected $_name = [
        'instanceId'         => 'InstanceId',
        'skillGroupId'       => 'SkillGroupId',
        'userSkillLevelList' => 'UserSkillLevelList',
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
        if (null !== $this->skillGroupId) {
            $res['SkillGroupId'] = $this->skillGroupId;
        }
        if (null !== $this->userSkillLevelList) {
            $res['UserSkillLevelList'] = $this->userSkillLevelList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddUsersToSkillGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['SkillGroupId'])) {
            $model->skillGroupId = $map['SkillGroupId'];
        }
        if (isset($map['UserSkillLevelList'])) {
            $model->userSkillLevelList = $map['UserSkillLevelList'];
        }

        return $model;
    }
}
