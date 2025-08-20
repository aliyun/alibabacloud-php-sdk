<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Viap_1_0\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AliGenie\Viap_1_0\Models\SendNotificationsRequest\deviceInfo;
use AlibabaCloud\SDK\AliGenie\Viap_1_0\Models\SendNotificationsRequest\notificationUnicastRequest;
use AlibabaCloud\SDK\AliGenie\Viap_1_0\Models\SendNotificationsRequest\tenantInfo;
use AlibabaCloud\SDK\AliGenie\Viap_1_0\Models\SendNotificationsRequest\userInfo;

class SendNotificationsRequest extends Model
{
    /**
     * @var deviceInfo
     */
    public $deviceInfo;

    /**
     * @var notificationUnicastRequest
     */
    public $notificationUnicastRequest;

    /**
     * @var tenantInfo
     */
    public $tenantInfo;

    /**
     * @var userInfo
     */
    public $userInfo;
    protected $_name = [
        'deviceInfo' => 'DeviceInfo',
        'notificationUnicastRequest' => 'NotificationUnicastRequest',
        'tenantInfo' => 'TenantInfo',
        'userInfo' => 'UserInfo',
    ];

    public function validate()
    {
        if (null !== $this->deviceInfo) {
            $this->deviceInfo->validate();
        }
        if (null !== $this->notificationUnicastRequest) {
            $this->notificationUnicastRequest->validate();
        }
        if (null !== $this->tenantInfo) {
            $this->tenantInfo->validate();
        }
        if (null !== $this->userInfo) {
            $this->userInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->deviceInfo) {
            $res['DeviceInfo'] = null !== $this->deviceInfo ? $this->deviceInfo->toArray($noStream) : $this->deviceInfo;
        }

        if (null !== $this->notificationUnicastRequest) {
            $res['NotificationUnicastRequest'] = null !== $this->notificationUnicastRequest ? $this->notificationUnicastRequest->toArray($noStream) : $this->notificationUnicastRequest;
        }

        if (null !== $this->tenantInfo) {
            $res['TenantInfo'] = null !== $this->tenantInfo ? $this->tenantInfo->toArray($noStream) : $this->tenantInfo;
        }

        if (null !== $this->userInfo) {
            $res['UserInfo'] = null !== $this->userInfo ? $this->userInfo->toArray($noStream) : $this->userInfo;
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
            $model->deviceInfo = deviceInfo::fromMap($map['DeviceInfo']);
        }

        if (isset($map['NotificationUnicastRequest'])) {
            $model->notificationUnicastRequest = notificationUnicastRequest::fromMap($map['NotificationUnicastRequest']);
        }

        if (isset($map['TenantInfo'])) {
            $model->tenantInfo = tenantInfo::fromMap($map['TenantInfo']);
        }

        if (isset($map['UserInfo'])) {
            $model->userInfo = userInfo::fromMap($map['UserInfo']);
        }

        return $model;
    }
}
