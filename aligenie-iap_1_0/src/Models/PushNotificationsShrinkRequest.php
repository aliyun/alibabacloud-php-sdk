<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Viap_1_0\Models;

use AlibabaCloud\Dara\Model;

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
        'tenantInfoShrink' => 'TenantInfo',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
