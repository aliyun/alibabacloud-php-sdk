<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models;

use AlibabaCloud\Tea\Model;

class ModifyUserRequest extends Model
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
     * @var bool
     */
    public $force;

    /**
     * @description This parameter is required.
     *
     * @example ccc-test
     *
     * @var string
     */
    public $instanceId;

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
     * @example Admin@ccc-test
     *
     * @var string
     */
    public $roleId;

    /**
     * @description This parameter is required.
     *
     * @example user-test@ccc-test
     *
     * @var string
     */
    public $userId;

    /**
     * @description This parameter is required.
     *
     * @example ON_SITE
     *
     * @var string
     */
    public $workMode;
    protected $_name = [
        'avatarUrl' => 'AvatarUrl',
        'displayId' => 'DisplayId',
        'displayName' => 'DisplayName',
        'force' => 'Force',
        'instanceId' => 'InstanceId',
        'mobile' => 'Mobile',
        'nickname' => 'Nickname',
        'roleId' => 'RoleId',
        'userId' => 'UserId',
        'workMode' => 'WorkMode',
    ];

    public function validate() {}

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
        if (null !== $this->force) {
            $res['Force'] = $this->force;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->mobile) {
            $res['Mobile'] = $this->mobile;
        }
        if (null !== $this->nickname) {
            $res['Nickname'] = $this->nickname;
        }
        if (null !== $this->roleId) {
            $res['RoleId'] = $this->roleId;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->workMode) {
            $res['WorkMode'] = $this->workMode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyUserRequest
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
        if (isset($map['Force'])) {
            $model->force = $map['Force'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Mobile'])) {
            $model->mobile = $map['Mobile'];
        }
        if (isset($map['Nickname'])) {
            $model->nickname = $map['Nickname'];
        }
        if (isset($map['RoleId'])) {
            $model->roleId = $map['RoleId'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['WorkMode'])) {
            $model->workMode = $map['WorkMode'];
        }

        return $model;
    }
}
