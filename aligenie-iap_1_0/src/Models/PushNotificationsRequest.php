<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Viap_1_0\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AliGenie\Viap_1_0\Models\PushNotificationsRequest\notificationUnicastRequest;
use AlibabaCloud\SDK\AliGenie\Viap_1_0\Models\PushNotificationsRequest\tenantInfo;

class PushNotificationsRequest extends Model
{
    /**
     * @var notificationUnicastRequest
     */
    public $notificationUnicastRequest;

    /**
     * @var tenantInfo
     */
    public $tenantInfo;
    protected $_name = [
        'notificationUnicastRequest' => 'NotificationUnicastRequest',
        'tenantInfo' => 'TenantInfo',
    ];

    public function validate()
    {
        if (null !== $this->notificationUnicastRequest) {
            $this->notificationUnicastRequest->validate();
        }
        if (null !== $this->tenantInfo) {
            $this->tenantInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->notificationUnicastRequest) {
            $res['NotificationUnicastRequest'] = null !== $this->notificationUnicastRequest ? $this->notificationUnicastRequest->toArray($noStream) : $this->notificationUnicastRequest;
        }

        if (null !== $this->tenantInfo) {
            $res['TenantInfo'] = null !== $this->tenantInfo ? $this->tenantInfo->toArray($noStream) : $this->tenantInfo;
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
            $model->notificationUnicastRequest = notificationUnicastRequest::fromMap($map['NotificationUnicastRequest']);
        }

        if (isset($map['TenantInfo'])) {
            $model->tenantInfo = tenantInfo::fromMap($map['TenantInfo']);
        }

        return $model;
    }
}
