<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20140828\Models;

use AlibabaCloud\SDK\Ess\V20140828\Models\DescribeNotificationTypesResponseBody\notificationTypes;
use AlibabaCloud\Tea\Model;

class DescribeNotificationTypesResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var notificationTypes
     */
    public $notificationTypes;
    protected $_name = [
        'requestId'         => 'RequestId',
        'notificationTypes' => 'NotificationTypes',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->notificationTypes) {
            $res['NotificationTypes'] = null !== $this->notificationTypes ? $this->notificationTypes->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeNotificationTypesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['NotificationTypes'])) {
            $model->notificationTypes = notificationTypes::fromMap($map['NotificationTypes']);
        }

        return $model;
    }
}
