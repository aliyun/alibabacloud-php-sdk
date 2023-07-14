<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\SDK\ARMS\V20190808\Models\CreateOrUpdateNotificationPolicyResponseBody\notificationPolicy;
use AlibabaCloud\Tea\Model;

class CreateOrUpdateNotificationPolicyResponseBody extends Model
{
    /**
     * @description An array of notification policy objects.
     *
     * @var notificationPolicy
     */
    public $notificationPolicy;

    /**
     * @description The ID of the request.
     *
     * @example A5EC8221-08F2-4C95-9AF1-49FD998C****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'notificationPolicy' => 'NotificationPolicy',
        'requestId'          => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->notificationPolicy) {
            $res['NotificationPolicy'] = null !== $this->notificationPolicy ? $this->notificationPolicy->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateOrUpdateNotificationPolicyResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NotificationPolicy'])) {
            $model->notificationPolicy = notificationPolicy::fromMap($map['NotificationPolicy']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
