<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models;

use AlibabaCloud\Tea\Model;

class UpdateUserPasswordRequest extends Model
{
    /**
     * @description The instance ID.
     *
     * This parameter is required.
     * @example idaas_ue2jvisn35ea5lmthk267xxxxx
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The new password of the account. For more information about the password format, see the "Password Policies" topic.
     *
     * This parameter is required.
     * @example 123456
     *
     * @var string
     */
    public $password;

    /**
     * @description Specifies whether to enable forcible password change upon first logon. Default value: disabled. Valid values:
     *
     *   enabled
     *   disabled
     *
     * @example enabled
     *
     * @var string
     */
    public $passwordForcedUpdateStatus;

    /**
     * @description The account ID.
     *
     * This parameter is required.
     * @example user_d6sbsuumeta4h66ec3il7yxxxx
     *
     * @var string
     */
    public $userId;

    /**
     * @description The methods for receiving password notifications.
     *
     * @example sms
     *
     * @var string[]
     */
    public $userNotificationChannels;
    protected $_name = [
        'instanceId'                 => 'InstanceId',
        'password'                   => 'Password',
        'passwordForcedUpdateStatus' => 'PasswordForcedUpdateStatus',
        'userId'                     => 'UserId',
        'userNotificationChannels'   => 'UserNotificationChannels',
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
        if (null !== $this->password) {
            $res['Password'] = $this->password;
        }
        if (null !== $this->passwordForcedUpdateStatus) {
            $res['PasswordForcedUpdateStatus'] = $this->passwordForcedUpdateStatus;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->userNotificationChannels) {
            $res['UserNotificationChannels'] = $this->userNotificationChannels;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateUserPasswordRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Password'])) {
            $model->password = $map['Password'];
        }
        if (isset($map['PasswordForcedUpdateStatus'])) {
            $model->passwordForcedUpdateStatus = $map['PasswordForcedUpdateStatus'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['UserNotificationChannels'])) {
            if (!empty($map['UserNotificationChannels'])) {
                $model->userNotificationChannels = $map['UserNotificationChannels'];
            }
        }

        return $model;
    }
}
