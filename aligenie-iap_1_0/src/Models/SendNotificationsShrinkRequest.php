<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Viap_1_0\Models;

use AlibabaCloud\Dara\Model;

class SendNotificationsShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $deviceInfoShrink;

    /**
     * @var string
     */
    public $notificationUnicastRequestShrink;

    /**
     * @var string
     */
    public $tenantInfoShrink;

    /**
     * @var string
     */
    public $userInfoShrink;
    protected $_name = [
        'deviceInfoShrink' => 'DeviceInfo',
        'notificationUnicastRequestShrink' => 'NotificationUnicastRequest',
        'tenantInfoShrink' => 'TenantInfo',
        'userInfoShrink' => 'UserInfo',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->deviceInfoShrink) {
            $res['DeviceInfo'] = $this->deviceInfoShrink;
        }

        if (null !== $this->notificationUnicastRequestShrink) {
            $res['NotificationUnicastRequest'] = $this->notificationUnicastRequestShrink;
        }

        if (null !== $this->tenantInfoShrink) {
            $res['TenantInfo'] = $this->tenantInfoShrink;
        }

        if (null !== $this->userInfoShrink) {
            $res['UserInfo'] = $this->userInfoShrink;
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
        if (isset($map['DeviceInfo'])) {
            $model->deviceInfoShrink = $map['DeviceInfo'];
        }

        if (isset($map['NotificationUnicastRequest'])) {
            $model->notificationUnicastRequestShrink = $map['NotificationUnicastRequest'];
        }

        if (isset($map['TenantInfo'])) {
            $model->tenantInfoShrink = $map['TenantInfo'];
        }

        if (isset($map['UserInfo'])) {
            $model->userInfoShrink = $map['UserInfo'];
        }

        return $model;
    }
}
