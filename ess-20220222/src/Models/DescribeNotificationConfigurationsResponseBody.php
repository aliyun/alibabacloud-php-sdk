<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ess\V20220222\Models\DescribeNotificationConfigurationsResponseBody\notificationConfigurationModels;

class DescribeNotificationConfigurationsResponseBody extends Model
{
    /**
     * @var notificationConfigurationModels[]
     */
    public $notificationConfigurationModels;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'notificationConfigurationModels' => 'NotificationConfigurationModels',
        'requestId'                       => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->notificationConfigurationModels)) {
            Model::validateArray($this->notificationConfigurationModels);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->notificationConfigurationModels) {
            if (\is_array($this->notificationConfigurationModels)) {
                $res['NotificationConfigurationModels'] = [];
                $n1                                     = 0;
                foreach ($this->notificationConfigurationModels as $item1) {
                    $res['NotificationConfigurationModels'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['NotificationConfigurationModels'])) {
            if (!empty($map['NotificationConfigurationModels'])) {
                $model->notificationConfigurationModels = [];
                $n1                                     = 0;
                foreach ($map['NotificationConfigurationModels'] as $item1) {
                    $model->notificationConfigurationModels[$n1++] = notificationConfigurationModels::fromMap($item1);
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
