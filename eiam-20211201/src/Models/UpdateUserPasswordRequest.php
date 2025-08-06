<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models;

use AlibabaCloud\Dara\Model;

class UpdateUserPasswordRequest extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $password;

    /**
     * @var string
     */
    public $passwordForcedUpdateStatus;

    /**
     * @var string
     */
    public $userId;

    /**
     * @var string[]
     */
    public $userNotificationChannels;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'password' => 'Password',
        'passwordForcedUpdateStatus' => 'PasswordForcedUpdateStatus',
        'userId' => 'UserId',
        'userNotificationChannels' => 'UserNotificationChannels',
    ];

    public function validate()
    {
        if (\is_array($this->userNotificationChannels)) {
            Model::validateArray($this->userNotificationChannels);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->userNotificationChannels)) {
                $res['UserNotificationChannels'] = [];
                $n1 = 0;
                foreach ($this->userNotificationChannels as $item1) {
                    $res['UserNotificationChannels'][$n1] = $item1;
                    ++$n1;
                }
            }
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
                $model->userNotificationChannels = [];
                $n1 = 0;
                foreach ($map['UserNotificationChannels'] as $item1) {
                    $model->userNotificationChannels[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
