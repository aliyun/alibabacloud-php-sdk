<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\GetPasswordInitializationConfigurationResponseBody;

use AlibabaCloud\Tea\Model;

class passwordInitializationConfiguration extends Model
{
    /**
     * @description Indicates whether forcible password change upon first logon is enabled. Valid values:
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
     * @description The methods for receiving password initialization notifications.
     *
     * @example email
     *
     * @var string[]
     */
    public $passwordInitializationNotificationChannels;

    /**
     * @description Indicates whether the password initialization feature is enabled. Valid values:
     *
     *   enabled
     *   disabled
     *
     * @example enabled
     *
     * @var string
     */
    public $passwordInitializationStatus;

    /**
     * @description The password initialization method. Set the value to random.
     *
     *   random: A randomly generated password is used.
     *
     * @example random
     *
     * @var string
     */
    public $passwordInitializationType;
    protected $_name = [
        'passwordForcedUpdateStatus'                 => 'PasswordForcedUpdateStatus',
        'passwordInitializationNotificationChannels' => 'PasswordInitializationNotificationChannels',
        'passwordInitializationStatus'               => 'PasswordInitializationStatus',
        'passwordInitializationType'                 => 'PasswordInitializationType',
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
        if (null !== $this->passwordInitializationNotificationChannels) {
            $res['PasswordInitializationNotificationChannels'] = $this->passwordInitializationNotificationChannels;
        }
        if (null !== $this->passwordInitializationStatus) {
            $res['PasswordInitializationStatus'] = $this->passwordInitializationStatus;
        }
        if (null !== $this->passwordInitializationType) {
            $res['PasswordInitializationType'] = $this->passwordInitializationType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return passwordInitializationConfiguration
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PasswordForcedUpdateStatus'])) {
            $model->passwordForcedUpdateStatus = $map['PasswordForcedUpdateStatus'];
        }
        if (isset($map['PasswordInitializationNotificationChannels'])) {
            if (!empty($map['PasswordInitializationNotificationChannels'])) {
                $model->passwordInitializationNotificationChannels = $map['PasswordInitializationNotificationChannels'];
            }
        }
        if (isset($map['PasswordInitializationStatus'])) {
            $model->passwordInitializationStatus = $map['PasswordInitializationStatus'];
        }
        if (isset($map['PasswordInitializationType'])) {
            $model->passwordInitializationType = $map['PasswordInitializationType'];
        }

        return $model;
    }
}
