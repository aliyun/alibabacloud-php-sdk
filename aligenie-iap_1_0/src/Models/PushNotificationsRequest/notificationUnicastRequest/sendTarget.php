<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Viap_1_0\Models\PushNotificationsRequest\notificationUnicastRequest;

use AlibabaCloud\Tea\Model;

class sendTarget extends Model
{
    /**
     * @example 2VpiDQ6aMjxz******Eo7r6e08oIVZ3fKrm5TyEfY=
     *
     * @var string
     */
    public $targetIdentity;

    /**
     * @example DEVICE_OPEN_ID
     *
     * @var string
     */
    public $targetType;
    protected $_name = [
        'targetIdentity' => 'TargetIdentity',
        'targetType'     => 'TargetType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->targetIdentity) {
            $res['TargetIdentity'] = $this->targetIdentity;
        }
        if (null !== $this->targetType) {
            $res['TargetType'] = $this->targetType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return sendTarget
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TargetIdentity'])) {
            $model->targetIdentity = $map['TargetIdentity'];
        }
        if (isset($map['TargetType'])) {
            $model->targetType = $map['TargetType'];
        }

        return $model;
    }
}
