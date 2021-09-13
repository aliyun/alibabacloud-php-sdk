<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models;

use AlibabaCloud\Tea\Model;

class AssignUsersRequest extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $roleId;

    /**
     * @var string
     */
    public $skillLevelList;

    /**
     * @var string
     */
    public $ramIdList;

    /**
     * @var string
     */
    public $workMode;
    protected $_name = [
        'instanceId'     => 'InstanceId',
        'roleId'         => 'RoleId',
        'skillLevelList' => 'SkillLevelList',
        'ramIdList'      => 'RamIdList',
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
        if (null !== $this->roleId) {
            $res['RoleId'] = $this->roleId;
        }
        if (null !== $this->skillLevelList) {
            $res['SkillLevelList'] = $this->skillLevelList;
        }
        if (null !== $this->ramIdList) {
            $res['RamIdList'] = $this->ramIdList;
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
        if (isset($map['RoleId'])) {
            $model->roleId = $map['RoleId'];
        }
        if (isset($map['SkillLevelList'])) {
            $model->skillLevelList = $map['SkillLevelList'];
        }
        if (isset($map['RamIdList'])) {
            $model->ramIdList = $map['RamIdList'];
        }
        if (isset($map['WorkMode'])) {
            $model->workMode = $map['WorkMode'];
        }

        return $model;
    }
}
