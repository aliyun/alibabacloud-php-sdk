<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models;

use AlibabaCloud\Tea\Model;

class AssignUsersRequest extends Model
{
    /**
     * @example ccc-test
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example ["28036411123456****","29234301123456****"]
     *
     * @var string
     */
    public $ramIdList;

    /**
     * @example Agent@ccc-test
     *
     * @var string
     */
    public $roleId;

    /**
     * @example [{"skillGroupId":"skillgroup@ccc-test","skillLevel":5}]
     *
     * @var string
     */
    public $skillLevelList;

    /**
     * @example ON_SITE
     *
     * @var string
     */
    public $workMode;
    protected $_name = [
        'instanceId'     => 'InstanceId',
        'ramIdList'      => 'RamIdList',
        'roleId'         => 'RoleId',
        'skillLevelList' => 'SkillLevelList',
        'workMode'       => 'WorkMode',
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
        if (null !== $this->ramIdList) {
            $res['RamIdList'] = $this->ramIdList;
        }
        if (null !== $this->roleId) {
            $res['RoleId'] = $this->roleId;
        }
        if (null !== $this->skillLevelList) {
            $res['SkillLevelList'] = $this->skillLevelList;
        }
        if (null !== $this->workMode) {
            $res['WorkMode'] = $this->workMode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AssignUsersRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['RamIdList'])) {
            $model->ramIdList = $map['RamIdList'];
        }
        if (isset($map['RoleId'])) {
            $model->roleId = $map['RoleId'];
        }
        if (isset($map['SkillLevelList'])) {
            $model->skillLevelList = $map['SkillLevelList'];
        }
        if (isset($map['WorkMode'])) {
            $model->workMode = $map['WorkMode'];
        }

        return $model;
    }
}
