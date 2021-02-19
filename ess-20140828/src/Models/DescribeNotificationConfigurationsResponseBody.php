<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20140828\Models;

use AlibabaCloud\SDK\Ess\V20140828\Models\DescribeNotificationConfigurationsResponseBody\notificationConfigurationModels;
use AlibabaCloud\Tea\Model;

class DescribeNotificationConfigurationsResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var notificationConfigurationModels
     */
    public $notificationConfigurationModels;
    protected $_name = [
        'requestId'                       => 'RequestId',
        'notificationConfigurationModels' => 'NotificationConfigurationModels',
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
        if (null !== $this->notificationConfigurationModels) {
            $res['NotificationConfigurationModels'] = null !== $this->notificationConfigurationModels ? $this->notificationConfigurationModels->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeNotificationConfigurationsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['NotificationConfigurationModels'])) {
            $model->notificationConfigurationModels = notificationConfigurationModels::fromMap($map['NotificationConfigurationModels']);
        }

        return $model;
    }
}
