<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Viap_1_0\Models;

use AlibabaCloud\Tea\Model;

class PushNotificationsShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $notificationUnicastRequestShrink;

    /**
     * @var string
     */
    public $tenantInfoShrink;
    protected $_name = [
        'notificationUnicastRequestShrink' => 'NotificationUnicastRequest',
        'tenantInfoShrink'                 => 'TenantInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->notificationUnicastRequestShrink) {
            $res['NotificationUnicastRequest'] = $this->notificationUnicastRequestShrink;
        }
        if (null !== $this->tenantInfoShrink) {
            $res['TenantInfo'] = $this->tenantInfoShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PushNotificationsShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NotificationUnicastRequest'])) {
            $model->notificationUnicastRequestShrink = $map['NotificationUnicastRequest'];
        }
        if (isset($map['TenantInfo'])) {
            $model->tenantInfoShrink = $map['TenantInfo'];
        }

        return $model;
    }
}
