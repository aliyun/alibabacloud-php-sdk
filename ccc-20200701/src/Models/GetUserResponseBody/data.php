<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models\GetUserResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $avatarUrl;
    /**
     * @var string
     */
    public $deviceExt;
    /**
     * @var string
     */
    public $deviceId;
    /**
     * @var string
     */
    public $deviceState;
    /**
     * @var string
     */
    public $displayId;
    /**
     * @var string
     */
    public $displayName;
    /**
     * @var string
     */
    public $email;
    /**
     * @var string
     */
    public $extension;
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
    public $mobile;
    /**
     * @var string
     */
    public $nickname;
    /**
     * @var string
     */
    public $roleId;
    /**
     * @var string
     */
    public $roleName;
    /**
     * @var string
     */
    public $userId;
    /**
     * @var string
     */
    public $workMode;
    protected $_name = [
        'avatarUrl'   => 'AvatarUrl',
        'deviceExt'   => 'DeviceExt',
        'deviceId'    => 'DeviceId',
        'deviceState' => 'DeviceState',
        'displayId'   => 'DisplayId',
        'displayName' => 'DisplayName',
        'email'       => 'Email',
        'extension'   => 'Extension',
        'instanceId'  => 'InstanceId',
        'loginName'   => 'LoginName',
        'mobile'      => 'Mobile',
        'nickname'    => 'Nickname',
        'roleId'      => 'RoleId',
        'roleName'    => 'RoleName',
        'userId'      => 'UserId',
        'workMode'    => 'WorkMode',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->avatarUrl) {
            $res['AvatarUrl'] = $this->avatarUrl;
        }

        if (null !== $this->deviceExt) {
            $res['DeviceExt'] = $this->deviceExt;
        }

        if (null !== $this->deviceId) {
            $res['DeviceId'] = $this->deviceId;
        }

        if (null !== $this->deviceState) {
            $res['DeviceState'] = $this->deviceState;
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

        if (null !== $this->extension) {
            $res['Extension'] = $this->extension;
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

        if (null !== $this->roleId) {
            $res['RoleId'] = $this->roleId;
        }

        if (null !== $this->roleName) {
            $res['RoleName'] = $this->roleName;
        }

        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
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
        if (isset($map['AvatarUrl'])) {
            $model->avatarUrl = $map['AvatarUrl'];
        }

        if (isset($map['DeviceExt'])) {
            $model->deviceExt = $map['DeviceExt'];
        }

        if (isset($map['DeviceId'])) {
            $model->deviceId = $map['DeviceId'];
        }

        if (isset($map['DeviceState'])) {
            $model->deviceState = $map['DeviceState'];
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

        if (isset($map['Extension'])) {
            $model->extension = $map['Extension'];
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

        if (isset($map['RoleId'])) {
            $model->roleId = $map['RoleId'];
        }

        if (isset($map['RoleName'])) {
            $model->roleName = $map['RoleName'];
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
