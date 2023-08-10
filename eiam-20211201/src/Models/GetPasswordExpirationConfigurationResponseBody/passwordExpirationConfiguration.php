<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\GetPasswordExpirationConfigurationResponseBody;

use AlibabaCloud\Tea\Model;

class passwordExpirationConfiguration extends Model
{
    /**
     * @description The action to take when a password expires. Valid values:
     *
     *   forbid_login: Prohibit the user from using the password to log on to IDaaS.
     *   force_update_password: Force the user to change the password.
     *   remind_update_password: Remind the user to change the password.
     *
     * @example forbid_login
     *
     * @var string
     */
    public $passwordExpirationAction;

    /**
     * @description The methods for receiving password expiration notifications.
     *
     * @example login
     *
     * @var string[]
     */
    public $passwordExpirationNotificationChannels;

    /**
     * @description The number of days before the expiration date during which password expiration notifications are sent. Unit: day.
     *
     * @example 7
     *
     * @var int
     */
    public $passwordExpirationNotificationDuration;

    /**
     * @description Indicates whether the password expiration notification feature is enabled. Valid values:
     *
     *   enabled
     *   disabled
     *
     * @example enabled
     *
     * @var string
     */
    public $passwordExpirationNotificationStatus;

    /**
     * @description Indicates whether the password expiration feature is enabled. Valid values:
     *
     *   enabled
     *   disabled
     *
     * @example enabled
     *
     * @var string
     */
    public $passwordExpirationStatus;

    /**
     * @description The number of days before which users must change the password to prevent password expiration. Unit: day.
     *
     * @example 3
     *
     * @var int
     */
    public $passwordForcedUpdateDuration;

    /**
     * @description The validity period of a password. Unit: day.
     *
     * @example 180
     *
     * @var int
     */
    public $passwordValidMaxDay;
    protected $_name = [
        'passwordExpirationAction'               => 'PasswordExpirationAction',
        'passwordExpirationNotificationChannels' => 'PasswordExpirationNotificationChannels',
        'passwordExpirationNotificationDuration' => 'PasswordExpirationNotificationDuration',
        'passwordExpirationNotificationStatus'   => 'PasswordExpirationNotificationStatus',
        'passwordExpirationStatus'               => 'PasswordExpirationStatus',
        'passwordForcedUpdateDuration'           => 'PasswordForcedUpdateDuration',
        'passwordValidMaxDay'                    => 'PasswordValidMaxDay',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->passwordExpirationAction) {
            $res['PasswordExpirationAction'] = $this->passwordExpirationAction;
        }
        if (null !== $this->passwordExpirationNotificationChannels) {
            $res['PasswordExpirationNotificationChannels'] = $this->passwordExpirationNotificationChannels;
        }
        if (null !== $this->passwordExpirationNotificationDuration) {
            $res['PasswordExpirationNotificationDuration'] = $this->passwordExpirationNotificationDuration;
        }
        if (null !== $this->passwordExpirationNotificationStatus) {
            $res['PasswordExpirationNotificationStatus'] = $this->passwordExpirationNotificationStatus;
        }
        if (null !== $this->passwordExpirationStatus) {
            $res['PasswordExpirationStatus'] = $this->passwordExpirationStatus;
        }
        if (null !== $this->passwordForcedUpdateDuration) {
            $res['PasswordForcedUpdateDuration'] = $this->passwordForcedUpdateDuration;
        }
        if (null !== $this->passwordValidMaxDay) {
            $res['PasswordValidMaxDay'] = $this->passwordValidMaxDay;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return passwordExpirationConfiguration
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PasswordExpirationAction'])) {
            $model->passwordExpirationAction = $map['PasswordExpirationAction'];
        }
        if (isset($map['PasswordExpirationNotificationChannels'])) {
            if (!empty($map['PasswordExpirationNotificationChannels'])) {
                $model->passwordExpirationNotificationChannels = $map['PasswordExpirationNotificationChannels'];
            }
        }
        if (isset($map['PasswordExpirationNotificationDuration'])) {
            $model->passwordExpirationNotificationDuration = $map['PasswordExpirationNotificationDuration'];
        }
        if (isset($map['PasswordExpirationNotificationStatus'])) {
            $model->passwordExpirationNotificationStatus = $map['PasswordExpirationNotificationStatus'];
        }
        if (isset($map['PasswordExpirationStatus'])) {
            $model->passwordExpirationStatus = $map['PasswordExpirationStatus'];
        }
        if (isset($map['PasswordForcedUpdateDuration'])) {
            $model->passwordForcedUpdateDuration = $map['PasswordForcedUpdateDuration'];
        }
        if (isset($map['PasswordValidMaxDay'])) {
            $model->passwordValidMaxDay = $map['PasswordValidMaxDay'];
        }

        return $model;
    }
}
