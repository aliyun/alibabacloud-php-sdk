<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models;

use AlibabaCloud\SDK\Ess\V20220222\Models\DescribeNotificationConfigurationsResponseBody\notificationConfigurationModels;
use AlibabaCloud\Tea\Model;

class DescribeNotificationConfigurationsResponseBody extends Model
{
    /**
     * @var notificationConfigurationModels[]
     */
    public $notificationConfigurationModels;

    /**
     * @example 473469C7-AA6F-4DC5-B3DB-A3DC0DE3****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'notificationConfigurationModels' => 'NotificationConfigurationModels',
        'requestId'                       => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->notificationConfigurationModels) {
            $res['NotificationConfigurationModels'] = [];
            if (null !== $this->notificationConfigurationModels && \is_array($this->notificationConfigurationModels)) {
                $n = 0;
                foreach ($this->notificationConfigurationModels as $item) {
                    $res['NotificationConfigurationModels'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['NotificationConfigurationModels'])) {
            if (!empty($map['NotificationConfigurationModels'])) {
                $model->notificationConfigurationModels = [];
                $n                                      = 0;
                foreach ($map['NotificationConfigurationModels'] as $item) {
                    $model->notificationConfigurationModels[$n++] = null !== $item ? notificationConfigurationModels::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
