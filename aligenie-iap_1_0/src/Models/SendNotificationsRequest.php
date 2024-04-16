<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Viap_1_0\Models;

use AlibabaCloud\SDK\AliGenie\Viap_1_0\Models\SendNotificationsRequest\deviceInfo;
use AlibabaCloud\SDK\AliGenie\Viap_1_0\Models\SendNotificationsRequest\notificationUnicastRequest;
use AlibabaCloud\SDK\AliGenie\Viap_1_0\Models\SendNotificationsRequest\tenantInfo;
use AlibabaCloud\SDK\AliGenie\Viap_1_0\Models\SendNotificationsRequest\userInfo;
use AlibabaCloud\Tea\Model;

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
        'deviceInfo'                 => 'DeviceInfo',
        'notificationUnicastRequest' => 'NotificationUnicastRequest',
        'tenantInfo'                 => 'TenantInfo',
        'userInfo'                   => 'UserInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deviceInfo) {
            $res['DeviceInfo'] = null !== $this->deviceInfo ? $this->deviceInfo->toMap() : null;
        }
        if (null !== $this->notificationUnicastRequest) {
            $res['NotificationUnicastRequest'] = null !== $this->notificationUnicastRequest ? $this->notificationUnicastRequest->toMap() : null;
        }
        if (null !== $this->tenantInfo) {
            $res['TenantInfo'] = null !== $this->tenantInfo ? $this->tenantInfo->toMap() : null;
        }
        if (null !== $this->userInfo) {
            $res['UserInfo'] = null !== $this->userInfo ? $this->userInfo->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SendNotificationsRequest
     */
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
