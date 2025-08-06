<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models;

use AlibabaCloud\Dara\Model;

class SetPasswordExpirationConfigurationRequest extends Model
{
    /**
     * @var string[]
     */
    public $effectiveAuthenticationSourceIds;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $passwordExpirationAction;

    /**
     * @var string[]
     */
    public $passwordExpirationNotificationChannels;

    /**
     * @var int
     */
    public $passwordExpirationNotificationDuration;

    /**
     * @var string
     */
    public $passwordExpirationNotificationStatus;

    /**
     * @var string
     */
    public $passwordExpirationStatus;

    /**
     * @var int
     */
    public $passwordForcedUpdateDuration;

    /**
     * @var int
     */
    public $passwordValidMaxDay;
    protected $_name = [
        'effectiveAuthenticationSourceIds' => 'EffectiveAuthenticationSourceIds',
        'instanceId' => 'InstanceId',
        'passwordExpirationAction' => 'PasswordExpirationAction',
        'passwordExpirationNotificationChannels' => 'PasswordExpirationNotificationChannels',
        'passwordExpirationNotificationDuration' => 'PasswordExpirationNotificationDuration',
        'passwordExpirationNotificationStatus' => 'PasswordExpirationNotificationStatus',
        'passwordExpirationStatus' => 'PasswordExpirationStatus',
        'passwordForcedUpdateDuration' => 'PasswordForcedUpdateDuration',
        'passwordValidMaxDay' => 'PasswordValidMaxDay',
    ];

    public function validate()
    {
        if (\is_array($this->effectiveAuthenticationSourceIds)) {
            Model::validateArray($this->effectiveAuthenticationSourceIds);
        }
        if (\is_array($this->passwordExpirationNotificationChannels)) {
            Model::validateArray($this->passwordExpirationNotificationChannels);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->effectiveAuthenticationSourceIds) {
            if (\is_array($this->effectiveAuthenticationSourceIds)) {
                $res['EffectiveAuthenticationSourceIds'] = [];
                $n1 = 0;
                foreach ($this->effectiveAuthenticationSourceIds as $item1) {
                    $res['EffectiveAuthenticationSourceIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->passwordExpirationAction) {
            $res['PasswordExpirationAction'] = $this->passwordExpirationAction;
        }

        if (null !== $this->passwordExpirationNotificationChannels) {
            if (\is_array($this->passwordExpirationNotificationChannels)) {
                $res['PasswordExpirationNotificationChannels'] = [];
                $n1 = 0;
                foreach ($this->passwordExpirationNotificationChannels as $item1) {
                    $res['PasswordExpirationNotificationChannels'][$n1] = $item1;
                    ++$n1;
                }
            }
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EffectiveAuthenticationSourceIds'])) {
            if (!empty($map['EffectiveAuthenticationSourceIds'])) {
                $model->effectiveAuthenticationSourceIds = [];
                $n1 = 0;
                foreach ($map['EffectiveAuthenticationSourceIds'] as $item1) {
                    $model->effectiveAuthenticationSourceIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['PasswordExpirationAction'])) {
            $model->passwordExpirationAction = $map['PasswordExpirationAction'];
        }

        if (isset($map['PasswordExpirationNotificationChannels'])) {
            if (!empty($map['PasswordExpirationNotificationChannels'])) {
                $model->passwordExpirationNotificationChannels = [];
                $n1 = 0;
                foreach ($map['PasswordExpirationNotificationChannels'] as $item1) {
                    $model->passwordExpirationNotificationChannels[$n1] = $item1;
                    ++$n1;
                }
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
