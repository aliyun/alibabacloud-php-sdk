<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Viap_1_0\Models;

use AlibabaCloud\SDK\AliGenie\Viap_1_0\Models\PushNotificationsRequest\notificationUnicastRequest;
use AlibabaCloud\SDK\AliGenie\Viap_1_0\Models\PushNotificationsRequest\tenantInfo;
use AlibabaCloud\Tea\Model;

class PushNotificationsRequest extends Model
{
    /**
     * @description 消息推送入参对象。
     *
     * @var notificationUnicastRequest
     */
    public $notificationUnicastRequest;

    /**
     * @description 身份信息。
     *
     * @var tenantInfo
     */
    public $tenantInfo;
    protected $_name = [
        'notificationUnicastRequest' => 'NotificationUnicastRequest',
        'tenantInfo'                 => 'TenantInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->notificationUnicastRequest) {
            $res['NotificationUnicastRequest'] = null !== $this->notificationUnicastRequest ? $this->notificationUnicastRequest->toMap() : null;
        }
        if (null !== $this->tenantInfo) {
            $res['TenantInfo'] = null !== $this->tenantInfo ? $this->tenantInfo->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PushNotificationsRequest
     */
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
