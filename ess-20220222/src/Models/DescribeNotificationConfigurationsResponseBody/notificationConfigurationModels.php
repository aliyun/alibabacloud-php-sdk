<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models\DescribeNotificationConfigurationsResponseBody;

use AlibabaCloud\Tea\Model;

class notificationConfigurationModels extends Model
{
    /**
     * @description The Alibaba Cloud Resource Name (ARN) of the notification recipient. The value is in one of the following formats:
     *
     *   If you specify CloudMonitor as the notification recipient, the value is in the acs:ess:{region-id}:{account-id}:cloudmonitor format.
     *   If you specify a Simple Message Queue (SMQ, formerly MNS) as the notification recipient, the value is in the acs:mns:{region-id}:{account-id}:queue/{queuename} format.
     *   If you specify an SMQ topic as the notification recipient, the value is in the acs:mns:{region-id}:{account-id}:topic/{topicname} format.
     *
     * The variables in the preceding value formats have the following meanings:
     *
     *   region-id: the region ID of your scaling group.
     *   account-id: the ID of your Alibaba Cloud account.
     *   queuename: the name of the SMQ queue.
     *   topicname: the name of the SMQ topic.
     *
     * @example acs:mns:cn-beijing:161456884340****:topic/modifyLifecycleHo****
     *
     * @var string
     */
    public $notificationArn;

    /**
     * @description The types of the notifications.
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

    /**
     * @description The time zone of the notification. The value must be in UTC. For example, a value of UTC+8 indicates that the time is 8 hours ahead of Coordinated Universal Time, and a value of UTC-7 indicates that the time is 7 hours behind Coordinated Universal Time.
     *
     * @example UTC+8
     *
     * @var string
     */
    public $timeZone;
    protected $_name = [
        'notificationArn'   => 'NotificationArn',
        'notificationTypes' => 'NotificationTypes',
        'scalingGroupId'    => 'ScalingGroupId',
        'timeZone'          => 'TimeZone',
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
        if (null !== $this->timeZone) {
            $res['TimeZone'] = $this->timeZone;
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
        if (isset($map['TimeZone'])) {
            $model->timeZone = $map['TimeZone'];
        }

        return $model;
    }
}
