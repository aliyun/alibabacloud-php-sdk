<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\CreateUserRequest;

use AlibabaCloud\Tea\Model;

class passwordInitializationConfig extends Model
{
    /**
     * @description Specifies whether to forcibly change the password status. Default value: disabled. Valid values:
     *
     *   enabled: forcibly changes the password status.
     *   disabled: does not forcibly change the password status.
     *
     * @example enabled
     *
     * @var string
     */
    public $passwordForcedUpdateStatus;

    /**
     * @description The priority of the password initialization policy. By default, this parameter does not take effect. Valid values:
     *
     *   global: The password initialization policy globally takes effect.
     *   custom: The password initialization policy takes effect based on custom settings.
     *
     * @example global
     *
     * @var string
     */
    public $passwordInitializationPolicyPriority;

    /**
     * @description The password initialization method. Set the value to random,
     *
     *   which indicates that the password is randomly generated.
     *
     * @example random
     *
     * @var string
     */
    public $passwordInitializationType;

    /**
     * @description The password notification methods.
     *
     * @example sms
     *
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
    }

    public function toMap()
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
            $res['UserNotificationChannels'] = $this->userNotificationChannels;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return passwordInitializationConfig
     */
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
                $model->userNotificationChannels = $map['UserNotificationChannels'];
            }
        }

        return $model;
    }
}
