<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models;

use AlibabaCloud\Tea\Model;

class ModifyNotificationConfigurationRequest extends Model
{
    /**
     * @description The Alibaba Cloud Resource Name (ARN) of the notification method. The following list describes the value formats of this parameter:
     *
     *   If you use CloudMonitor as the notification method, the value format of this parameter is acs:ess:{region-id}:{account-id}:cloudmonitor.
     *   If you use an MNS queue as the notification method, the value format of this parameter is acs:mns:{region-id}:{account-id}:queue/{queuename}.
     *   If you use an MNS topic as the notification method, the value format of this parameter is acs:mns:{region-id}:{account-id}:topic/{topicname}.
     *
     * The variables in the preceding formats have the following meanings:
     *
     *   region-id: the region ID of the scaling group.
     *   account-id: the ID of the Alibaba Cloud account.
     *   queuename: the name of the MNS queue.
     *   topicname: the name of the MNS topic.
     *
     * @example acs:ess:cn-beijing:161456884340****:cloudmonitor
     *
     * @var string
     */
    public $notificationArn;

    /**
     * @description The types of the notifications that you want to modify. You can modify one to eight notifications. Specify multiple values in the repeated list form.
     *
     * You can call the DescribeNotificationTypes operation to query the values of this parameter.
     * @var string[]
     */
    public $notificationTypes;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The region ID of the scaling group.
     *
     * @example cn-beijing
     *
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @description The ID of the scaling group.
     *
     * @example asg-bp1igpak5ft1flyp****
     *
     * @var string
     */
    public $scalingGroupId;
    protected $_name = [
        'notificationArn'      => 'NotificationArn',
        'notificationTypes'    => 'NotificationTypes',
        'ownerId'              => 'OwnerId',
        'regionId'             => 'RegionId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'scalingGroupId'       => 'ScalingGroupId',
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
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->scalingGroupId) {
            $res['ScalingGroupId'] = $this->scalingGroupId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyNotificationConfigurationRequest
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
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ScalingGroupId'])) {
            $model->scalingGroupId = $map['ScalingGroupId'];
        }

        return $model;
    }
}
