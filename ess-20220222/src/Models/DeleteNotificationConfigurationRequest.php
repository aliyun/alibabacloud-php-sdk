<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models;

use AlibabaCloud\Tea\Model;

class DeleteNotificationConfigurationRequest extends Model
{
    /**
     * @description The Alibaba Cloud Resource Name (ARN) of the notification recipient. Specify the value in one of the following formats:
     *
     *   If you specify CloudMonitor as the notification recipient, specify the value in the acs:ess:{region-id}:{account-id}:cloudmonitor format.
     *   If you specify a Simple Message Queue (SMQ, formerly MNS) queue as the notification recipient, specify the value in the acs:mns:{region-id}:{account-id}:queue/{queuename} format.
     *   If you specify an SMQ queue as the notification recipient, specify the value in the acs:mns:{region-id}:{account-id}:topic/{topicname} format.
     *
     * The variables in the preceding value formats have the following meanings:
     *
     *   region-id: the region ID of the scaling group.
     *   account-id: the ID of your Alibaba Cloud cloud.
     *   queuename: the name of the SMQ queue.
     *   topicname: the name of the SMQ topic.
     *
     * This parameter is required.
     *
     * @example acs:ess:cn-beijing:161456884340****:cloudmonitor
     *
     * @var string
     */
    public $notificationArn;

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
     * This parameter is required.
     *
     * @example asg-bp18p2yfxow2dloq****
     *
     * @var string
     */
    public $scalingGroupId;
    protected $_name = [
        'notificationArn' => 'NotificationArn',
        'ownerId' => 'OwnerId',
        'regionId' => 'RegionId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'scalingGroupId' => 'ScalingGroupId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->notificationArn) {
            $res['NotificationArn'] = $this->notificationArn;
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
     * @return DeleteNotificationConfigurationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NotificationArn'])) {
            $model->notificationArn = $map['NotificationArn'];
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
