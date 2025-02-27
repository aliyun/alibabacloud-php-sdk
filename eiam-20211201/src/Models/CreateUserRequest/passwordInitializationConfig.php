<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\CreateUserRequest;

use AlibabaCloud\Dara\Model;

class passwordInitializationConfig extends Model
{
    /**
     * @var string
     */
    public $passwordForcedUpdateStatus;
    /**
     * @var string
     */
    public $passwordInitializationPolicyPriority;
    /**
     * @var string
     */
    public $passwordInitializationType;
    /**
     * @var string[]
     */
    public $userNotificationChannels;
    protected $_name = [
        'passwordForcedUpdateStatus'           => 'PasswordForcedUpdateStatus',
        'passwordInitializationPolicyPriority' => 'PasswordInitializationPolicyPriority',
        'passwordInitializationType'           => 'PasswordInitializationType',
        'userNotificationChannels'             => 'UserNotificationChannels',
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
        if (null !== $this->passwordForcedUpdateStatus) {
            $res['PasswordForcedUpdateStatus'] = $this->passwordForcedUpdateStatus;
        }

        if (null !== $this->passwordInitializationPolicyPriority) {
            $res['PasswordInitializationPolicyPriority'] = $this->passwordInitializationPolicyPriority;
        }

        if (null !== $this->passwordInitializationType) {
            $res['PasswordInitializationType'] = $this->passwordInitializationType;
        }

        if (null !== $this->userNotificationChannels) {
            if (\is_array($this->userNotificationChannels)) {
                $res['UserNotificationChannels'] = [];
                $n1                              = 0;
                foreach ($this->userNotificationChannels as $item1) {
                    $res['UserNotificationChannels'][$n1++] = $item1;
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
        if (isset($map['PasswordForcedUpdateStatus'])) {
            $model->passwordForcedUpdateStatus = $map['PasswordForcedUpdateStatus'];
        }

        if (isset($map['PasswordInitializationPolicyPriority'])) {
            $model->passwordInitializationPolicyPriority = $map['PasswordInitializationPolicyPriority'];
        }

        if (isset($map['PasswordInitializationType'])) {
            $model->passwordInitializationType = $map['PasswordInitializationType'];
        }

        if (isset($map['UserNotificationChannels'])) {
            if (!empty($map['UserNotificationChannels'])) {
                $model->userNotificationChannels = [];
                $n1                              = 0;
                foreach ($map['UserNotificationChannels'] as $item1) {
                    $model->userNotificationChannels[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
