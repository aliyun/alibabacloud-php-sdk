<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ARMS\V20190808\Models\CreateOrUpdateNotificationPolicyResponseBody\notificationPolicy;

class CreateOrUpdateNotificationPolicyResponseBody extends Model
{
    /**
     * @var notificationPolicy
     */
    public $notificationPolicy;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'notificationPolicy' => 'NotificationPolicy',
        'requestId'          => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->notificationPolicy) {
            $this->notificationPolicy->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->notificationPolicy) {
            $res['NotificationPolicy'] = null !== $this->notificationPolicy ? $this->notificationPolicy->toArray($noStream) : $this->notificationPolicy;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['NotificationPolicy'])) {
            $model->notificationPolicy = notificationPolicy::fromMap($map['NotificationPolicy']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
