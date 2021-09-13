<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models;

use AlibabaCloud\Tea\Model;

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
     * @var string
     */
    public $userIdList;
    protected $_name = [
        'instanceId'   => 'InstanceId',
        'skillGroupId' => 'SkillGroupId',
        'userIdList'   => 'UserIdList',
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
        if (null !== $this->userIdList) {
            $res['UserIdList'] = $this->userIdList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RemoveUsersFromSkillGroupRequest
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
        if (isset($map['UserIdList'])) {
            $model->userIdList = $map['UserIdList'];
        }

        return $model;
    }
}
