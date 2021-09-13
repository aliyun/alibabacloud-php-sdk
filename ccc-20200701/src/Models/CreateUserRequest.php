<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models;

use AlibabaCloud\Tea\Model;

class CreateUserRequest extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $loginName;

    /**
     * @var string
     */
    public $displayName;

    /**
     * @var string
     */
    public $mobile;

    /**
     * @var string
     */
    public $email;

    /**
     * @var string
     */
    public $workMode;

    /**
     * @var string
     */
    public $roleId;

    /**
     * @var string
     */
    public $skillLevelList;

    /**
     * @var bool
     */
    public $resetPassword;
    protected $_name = [
        'instanceId'     => 'InstanceId',
        'loginName'      => 'LoginName',
        'displayName'    => 'DisplayName',
        'mobile'         => 'Mobile',
        'email'          => 'Email',
        'workMode'       => 'WorkMode',
        'roleId'         => 'RoleId',
        'skillLevelList' => 'SkillLevelList',
        'resetPassword'  => 'ResetPassword',
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
        if (null !== $this->loginName) {
            $res['LoginName'] = $this->loginName;
        }
        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }
        if (null !== $this->mobile) {
            $res['Mobile'] = $this->mobile;
        }
        if (null !== $this->email) {
            $res['Email'] = $this->email;
        }
        if (null !== $this->workMode) {
            $res['WorkMode'] = $this->workMode;
        }
        if (null !== $this->roleId) {
            $res['RoleId'] = $this->roleId;
        }
        if (null !== $this->skillLevelList) {
            $res['SkillLevelList'] = $this->skillLevelList;
        }
        if (null !== $this->resetPassword) {
            $res['ResetPassword'] = $this->resetPassword;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateUserRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['LoginName'])) {
            $model->loginName = $map['LoginName'];
        }
        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }
        if (isset($map['Mobile'])) {
            $model->mobile = $map['Mobile'];
        }
        if (isset($map['Email'])) {
            $model->email = $map['Email'];
        }
        if (isset($map['WorkMode'])) {
            $model->workMode = $map['WorkMode'];
        }
        if (isset($map['RoleId'])) {
            $model->roleId = $map['RoleId'];
        }
        if (isset($map['SkillLevelList'])) {
            $model->skillLevelList = $map['SkillLevelList'];
        }
        if (isset($map['ResetPassword'])) {
            $model->resetPassword = $map['ResetPassword'];
        }

        return $model;
    }
}
