<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models\CreateUserRequest;

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
        'passwordForcedUpdateStatus' => 'passwordForcedUpdateStatus',
        'passwordInitializationPolicyPriority' => 'passwordInitializationPolicyPriority',
        'passwordInitializationType' => 'passwordInitializationType',
        'userNotificationChannels' => 'userNotificationChannels',
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
            $res['passwordForcedUpdateStatus'] = $this->passwordForcedUpdateStatus;
        }

        if (null !== $this->passwordInitializationPolicyPriority) {
            $res['passwordInitializationPolicyPriority'] = $this->passwordInitializationPolicyPriority;
        }

        if (null !== $this->passwordInitializationType) {
            $res['passwordInitializationType'] = $this->passwordInitializationType;
        }

        if (null !== $this->userNotificationChannels) {
            if (\is_array($this->userNotificationChannels)) {
                $res['userNotificationChannels'] = [];
                $n1 = 0;
                foreach ($this->userNotificationChannels as $item1) {
                    $res['userNotificationChannels'][$n1] = $item1;
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
        if (isset($map['passwordForcedUpdateStatus'])) {
            $model->passwordForcedUpdateStatus = $map['passwordForcedUpdateStatus'];
        }

        if (isset($map['passwordInitializationPolicyPriority'])) {
            $model->passwordInitializationPolicyPriority = $map['passwordInitializationPolicyPriority'];
        }

        if (isset($map['passwordInitializationType'])) {
            $model->passwordInitializationType = $map['passwordInitializationType'];
        }

        if (isset($map['userNotificationChannels'])) {
            if (!empty($map['userNotificationChannels'])) {
                $model->userNotificationChannels = [];
                $n1 = 0;
                foreach ($map['userNotificationChannels'] as $item1) {
                    $model->userNotificationChannels[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
