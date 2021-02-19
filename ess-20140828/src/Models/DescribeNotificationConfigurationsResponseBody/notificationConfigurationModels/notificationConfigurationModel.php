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
     * @var notificationTypes
     */
    public $notificationTypes;

    /**
     * @var string
     */
    public $scalingGroupId;
    protected $_name = [
        'notificationArn'   => 'NotificationArn',
        'notificationTypes' => 'NotificationTypes',
        'scalingGroupId'    => 'ScalingGroupId',
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
        if (null !== $this->notificationTypes) {
            $res['NotificationTypes'] = null !== $this->notificationTypes ? $this->notificationTypes->toMap() : null;
        }
        if (null !== $this->scalingGroupId) {
            $res['ScalingGroupId'] = $this->scalingGroupId;
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
        if (isset($map['NotificationTypes'])) {
            $model->notificationTypes = notificationTypes::fromMap($map['NotificationTypes']);
        }
        if (isset($map['ScalingGroupId'])) {
            $model->scalingGroupId = $map['ScalingGroupId'];
        }

        return $model;
    }
}
