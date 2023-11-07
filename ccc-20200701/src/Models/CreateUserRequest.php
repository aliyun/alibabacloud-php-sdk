<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models;

use AlibabaCloud\Tea\Model;

class CreateUserRequest extends Model
{
    /**
     * @var string
     */
    public $avatarUrl;

    /**
     * @example 1001
     *
     * @var string
     */
    public $displayId;

    /**
     * @var string
     */
    public $displayName;

    /**
     * @example username@example.com
     *
     * @var string
     */
    public $email;

    /**
     * @example ccc-test
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example agent
     *
     * @var string
     */
    public $loginName;

    /**
     * @example 1382114****
     *
     * @var string
     */
    public $mobile;

    /**
     * @var string
     */
    public $nickname;

    /**
     * @example false
     *
     * @var bool
     */
    public $resetPassword;

    /**
     * @example Agent@ccc-test
     *
     * @var string
     */
    public $roleId;

    /**
     * @example [{"skillGroupId":"skillgroup1@ccc-test","skillLevel":1},{"skillGroupId":"skillgroup2@ccc-test","skillLevel":10}]
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
        'avatarUrl'      => 'AvatarUrl',
        'displayId'      => 'DisplayId',
        'displayName'    => 'DisplayName',
        'email'          => 'Email',
        'instanceId'     => 'InstanceId',
        'loginName'      => 'LoginName',
        'mobile'         => 'Mobile',
        'nickname'       => 'Nickname',
        'resetPassword'  => 'ResetPassword',
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
        if (null !== $this->avatarUrl) {
            $res['AvatarUrl'] = $this->avatarUrl;
        }
        if (null !== $this->displayId) {
            $res['DisplayId'] = $this->displayId;
        }
        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }
        if (null !== $this->email) {
            $res['Email'] = $this->email;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->loginName) {
            $res['LoginName'] = $this->loginName;
        }
        if (null !== $this->mobile) {
            $res['Mobile'] = $this->mobile;
        }
        if (null !== $this->nickname) {
            $res['Nickname'] = $this->nickname;
        }
        if (null !== $this->resetPassword) {
            $res['ResetPassword'] = $this->resetPassword;
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
     * @return CreateUserRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AvatarUrl'])) {
            $model->avatarUrl = $map['AvatarUrl'];
        }
        if (isset($map['DisplayId'])) {
            $model->displayId = $map['DisplayId'];
        }
        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }
        if (isset($map['Email'])) {
            $model->email = $map['Email'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['LoginName'])) {
            $model->loginName = $map['LoginName'];
        }
        if (isset($map['Mobile'])) {
            $model->mobile = $map['Mobile'];
        }
        if (isset($map['Nickname'])) {
            $model->nickname = $map['Nickname'];
        }
        if (isset($map['ResetPassword'])) {
            $model->resetPassword = $map['ResetPassword'];
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
