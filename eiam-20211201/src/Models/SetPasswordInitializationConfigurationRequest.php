<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models;

use AlibabaCloud\Tea\Model;

class SetPasswordInitializationConfigurationRequest extends Model
{
    /**
     * @description The ID of the instance.
     *
     * This parameter is required.
     * @example idaas_ue2jvisn35ea5lmthk267xxxxx
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description Specifies whether to enable forcible password change upon first logon. Valid values:
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
     * @description Specifies whether to enable password initialization. Valid values:
     *
     *   enabled
     *   disabled
     *
     * This parameter is required.
     * @example enabled
     *
     * @var string
     */
    public $passwordInitializationStatus;

    /**
     * @description The password initialization method. This parameter is required when PasswordInitializationStatus is set to enabled. Set the value to random.
     *
     *   random: A randomly generated password is used.
     *
     * @example random
     *
     * @var string
     */
    public $passwordInitializationType;
    protected $_name = [
        'instanceId'                                 => 'InstanceId',
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
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
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
     * @return SetPasswordInitializationConfigurationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
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
