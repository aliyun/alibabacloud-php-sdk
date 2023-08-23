<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models\DescribeNotificationConfigurationsResponseBody;

use AlibabaCloud\Tea\Model;

class notificationConfigurationModels extends Model
{
    /**
     * @example acs:mns:cn-beijing:161456884340****:topic/modifyLifecycleHo****
     *
     * @var string
     */
    public $notificationArn;

    /**
     * @var string[]
     */
    public $notificationTypes;

    /**
     * @example asg-bp1igpak5ft1flyp****
     *
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
            $res['NotificationTypes'] = $this->notificationTypes;
        }
        if (null !== $this->scalingGroupId) {
            $res['ScalingGroupId'] = $this->scalingGroupId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return notificationConfigurationModels
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NotificationArn'])) {
            $model->notificationArn = $map['NotificationArn'];
        }
        if (isset($map['NotificationTypes'])) {
            if (!empty($map['NotificationTypes'])) {
                $model->notificationTypes = $map['NotificationTypes'];
            }
        }
        if (isset($map['ScalingGroupId'])) {
            $model->scalingGroupId = $map['ScalingGroupId'];
        }

        return $model;
    }
}
