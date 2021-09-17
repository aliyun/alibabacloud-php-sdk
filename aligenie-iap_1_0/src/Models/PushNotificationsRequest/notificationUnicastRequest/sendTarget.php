<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Viap_1_0\Models\PushNotificationsRequest\notificationUnicastRequest;

use AlibabaCloud\Tea\Model;

class sendTarget extends Model
{
    /**
     * @description 推送的目标类型，获取到对应设备或用户标识时的类型 - DEVICE_UNION_ID：设备unionId - DEVICE_OPEN_ID：设备openId - USER_UNION_ID：用户unionId - USER_OPEN_ID：用户openId
     *
     * @var string
     */
    public $targetType;

    /**
     * @description 推送目标类型对应的标识值。
     *
     * @var string
     */
    public $targetIdentity;
    protected $_name = [
        'targetType'     => 'TargetType',
        'targetIdentity' => 'TargetIdentity',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->targetType) {
            $res['TargetType'] = $this->targetType;
        }
        if (null !== $this->targetIdentity) {
            $res['TargetIdentity'] = $this->targetIdentity;
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
        if (isset($map['TargetType'])) {
            $model->targetType = $map['TargetType'];
        }
        if (isset($map['TargetIdentity'])) {
            $model->targetIdentity = $map['TargetIdentity'];
        }

        return $model;
    }
}
