<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models;

use AlibabaCloud\Tea\Model;

class SetPasswordExpirationConfigurationRequest extends Model
{
    /**
     * @description The instance ID.
     *
     * @example idaas_ue2jvisn35ea5lmthk267xxxxx
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The action to take upon password expiration. This parameter must be specified when PasswordExpirationStatus is set to enabled. Valid values:
     *
     *   forbid_login: Users cannot log on to IDaaS.
     *   force_update_password: Users must change the password.
     *   remind_update_password: IDaaS reminds users to change the password upon each logon.
     *
     * @example force_update_password
     *
     * @var string
     */
    public $passwordExpirationAction;

    /**
     * @description The methods for receiving password expiration notifications. This parameter must be specified when PasswordExpirationNotificationStatus is set to enabled.
     *
     * @example login
     *
     * @var string[]
     */
    public $passwordExpirationNotificationChannels;

    /**
     * @description The number of days before the expiration date during which password expiration notifications are sent. Unit: day. This parameter must be specified when PasswordExpirationNotificationStatus is set to enabled.
     *
     * @example 7
     *
     * @var int
     */
    public $passwordExpirationNotificationDuration;

    /**
     * @description Specifies whether to enable the password expiration notification feature. Valid values:
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
     * @description Specifies whether to enable the password expiration feature. Valid values:
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
     * @description The number of days before which users must change the password to prevent password expiration. Unit: day. You must set this parameter to a value greater than the value of PasswordExpirationNotificationDuration.
     *
     * @example 7
     *
     * @var int
     */
    public $passwordForcedUpdateDuration;

    /**
     * @description The validity period of a password. Unit: day. This parameter must be specified when PasswordExpirationStatus is set to enabled.
     *
     * @example 180
     *
     * @var int
     */
    public $passwordValidMaxDay;
    protected $_name = [
        'instanceId'                             => 'InstanceId',
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
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
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
     * @return SetPasswordExpirationConfigurationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
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
