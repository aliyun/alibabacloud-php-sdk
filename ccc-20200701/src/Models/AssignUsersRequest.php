<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models;

use AlibabaCloud\Dara\Model;

class AssignUsersRequest extends Model
{
    /**
     * @var string
     */
    public $instanceId;
    /**
     * @var string
     */
    public $ramIdList;
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
        parent::validate();
    }

    public function toArray($noStream = false)
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
