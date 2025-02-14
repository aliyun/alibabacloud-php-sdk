<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\GetPasswordInitializationConfigurationResponseBody;

use AlibabaCloud\Dara\Model;

class passwordInitializationConfiguration extends Model
{
    /**
     * @var string
     */
    public $passwordForcedUpdateStatus;
    /**
     * @var string[]
     */
    public $passwordInitializationNotificationChannels;
    /**
     * @var string
     */
    public $passwordInitializationStatus;
    /**
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
        if (\is_array($this->passwordInitializationNotificationChannels)) {
            Model::validateArray($this->passwordInitializationNotificationChannels);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->passwordForcedUpdateStatus) {
            $res['PasswordForcedUpdateStatus'] = $this->passwordForcedUpdateStatus;
        }

        if (null !== $this->passwordInitializationNotificationChannels) {
            if (\is_array($this->passwordInitializationNotificationChannels)) {
                $res['PasswordInitializationNotificationChannels'] = [];
                $n1                                                = 0;
                foreach ($this->passwordInitializationNotificationChannels as $item1) {
                    $res['PasswordInitializationNotificationChannels'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->passwordInitializationStatus) {
            $res['PasswordInitializationStatus'] = $this->passwordInitializationStatus;
        }

        if (null !== $this->passwordInitializationType) {
            $res['PasswordInitializationType'] = $this->passwordInitializationType;
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

        if (isset($map['PasswordInitializationNotificationChannels'])) {
            if (!empty($map['PasswordInitializationNotificationChannels'])) {
                $model->passwordInitializationNotificationChannels = [];
                $n1                                                = 0;
                foreach ($map['PasswordInitializationNotificationChannels'] as $item1) {
                    $model->passwordInitializationNotificationChannels[$n1++] = $item1;
                }
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
