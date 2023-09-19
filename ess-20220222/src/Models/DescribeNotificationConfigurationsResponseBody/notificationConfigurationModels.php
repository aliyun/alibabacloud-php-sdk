<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models\DescribeNotificationConfigurationsResponseBody;

use AlibabaCloud\Tea\Model;

class notificationConfigurationModels extends Model
{
    /**
     * @description The Alibaba Cloud Resource Name (ARN) of the notification method. The following list describes the value formats of this parameter:
     *
     *   If you use CloudMonitor as the notification method, the value format of this parameter is acs:ess:{region-id}:{account-id}:cloudmonitor.
     *   If you use a Message Service (MNS) queue as the notification method, the value format of this parameter is acs:mns:{region-id}:{account-id}:queue/{queuename}.
     *   If you use an MNS topic as the notification method, the value format of this parameter is acs:mns:{region-id}:{account-id}:topic/{topicname}.
     *
     * The variables in the preceding formats have the following meanings:
     *
     *   region-id: the region ID of the scaling group.
     *   account-id: the ID of the Alibaba Cloud account.
     *   queuename: the name of the MNS queue.
     *   topicname: the name of the MNS topic.
     *
     * @example acs:mns:cn-beijing:161456884340****:topic/modifyLifecycleHo****
     *
     * @var string
     */
    public $notificationArn;

    /**
     * @description The types of notifications for scaling activities and resource changes.
     *
     *   AUTOSCALING:SCALE_OUT_SUCCESS: The scale-out event is successful.
     *   AUTOSCALING:SCALE_IN_SUCCESS: The scale-in event is successful.
     *   AUTOSCALING:SCALE_OUT_ERROR: The scale-out event fails.
     *   AUTOSCALING:SCALE_IN_ERROR: The scale-in event fails.
     *   AUTOSCALING:SCALE_REJECT: The scaling activity is rejected.
     *   AUTOSCALING:SCALE_OUT_START: The scale-out event is started.
     *   AUTOSCALING:SCALE_IN_START: The scale-in event is started.
     *   AUTOSCALING:SCHEDULE_TASK_EXPIRING: Auto Scaling sends a notification when a scheduled task is about to expire.
     *
     * @var string[]
     */
    public $notificationTypes;

    /**
     * @description The ID of the scaling group.
     *
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
