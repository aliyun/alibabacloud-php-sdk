<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20140828\Models\DescribeNotificationConfigurationsResponseBody\notificationConfigurationModels;

use AlibabaCloud\SDK\Ess\V20140828\Models\DescribeNotificationConfigurationsResponseBody\notificationConfigurationModels\notificationConfigurationModel\notificationTypes;
use AlibabaCloud\Tea\Model;

class notificationConfigurationModel extends Model
{
    /**
     * @var string
     */
    public $notificationArn;

    /**
     * @var string
     */
    public $scalingGroupId;

    /**
     * @var notificationTypes
     */
    public $notificationTypes;
    protected $_name = [
        'notificationArn'   => 'NotificationArn',
        'scalingGroupId'    => 'ScalingGroupId',
        'notificationTypes' => 'NotificationTypes',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->notificationArn) {
            $res['NotificationArn'] = $this->notificationArn;
        }
        if (null !== $this->scalingGroupId) {
            $res['ScalingGroupId'] = $this->scalingGroupId;
        }
        if (null !== $this->notificationTypes) {
            $res['NotificationTypes'] = null !== $this->notificationTypes ? $this->notificationTypes->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return notificationConfigurationModel
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NotificationArn'])) {
            $model->notificationArn = $map['NotificationArn'];
        }
        if (isset($map['ScalingGroupId'])) {
            $model->scalingGroupId = $map['ScalingGroupId'];
        }
        if (isset($map['NotificationTypes'])) {
            $model->notificationTypes = notificationTypes::fromMap($map['NotificationTypes']);
        }

        return $model;
    }
}
