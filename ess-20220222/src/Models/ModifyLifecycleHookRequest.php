<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models;

use AlibabaCloud\Tea\Model;

class ModifyLifecycleHookRequest extends Model
{
    /**
     * @description The action that you want Auto Scaling to perform after the lifecycle hook times out. Valid values:
     *
     *   CONTINUE: Auto Scaling continues to respond to scale-in or scale-out requests.
     *   ABANDON: Auto Scaling releases Elastic Compute Service (ECS) instances that are created during scale-out activities or removes ECS instances from the scaling group during scale-in activities.
     *   ROLLBACK: For scale-in activities, Auto Scaling rejects the requests to release ECS instances but rolls back ECS instances. For scale-out activities, the ROLLBACK setting has the same effect as the ABANDON setting.
     *
     * If a scaling group has multiple lifecycle hooks in effect and you set the DefaultResult parameter for one of the lifecycle hooks to ABANDON or ROLLBACK, the following rule applies to scale-in activities: When the lifecycle hook whose DefaultResult parameter is set to ABANDON or ROLLBACK times out, other lifecycle hooks time out ahead of schedule. In other cases, Auto Scaling performs the action only after all lifecycle hooks time out. The action that Auto Scaling performs is specified by the DefaultResult parameter of the last lifecycle hook that times out.
     * @example CONTINUE
     *
     * @var string
     */
    public $defaultResult;

    /**
     * @description The period of time before the lifecycle hook times out. When the lifecycle hook times out, Auto Scaling performs the action specified by the DefaultResult parameter. Valid values: 30 to 21600. Unit: seconds.
     *
     * You can call the RecordLifecycleActionHeartbeat operation to extend the period of time before a lifecycle hook times out. You can also call the CompleteLifecycleAction operation to end a lifecycle hook ahead of schedule.
     * @example 600
     *
     * @var int
     */
    public $heartbeatTimeout;

    /**
     * @description The ID of the lifecycle hook that you want to modify.
     *
     * @example ash-bp1fxuqyi98w0aib****
     *
     * @var string
     */
    public $lifecycleHookId;

    /**
     * @description The name of the lifecycle hook that you want to modify.
     *
     * @example test_SCALE_IN
     *
     * @var string
     */
    public $lifecycleHookName;

    /**
     * @description The status that you want to specify for the lifecycle hook. Valid values:
     *
     *   Active
     *   InActive
     *
     * > By default, a lifecycle hook is in the Active state after you create it.
     * @example Active
     *
     * @var string
     */
    public $lifecycleHookStatus;

    /**
     * @description The type of the scaling activity to which the lifecycle hook applies. Valid values:
     *
     *   SCALE_OUT: scale-out activity
     *   SCALE_IN: scale-in activity
     *
     * @example SCALE_IN
     *
     * @var string
     */
    public $lifecycleTransition;

    /**
     * @description The Alibaba Cloud Resource Name (ARN) of the notification method.
     *
     *   If the notification method is a Message Service (MNS) queue, specify the value in the acs:mns:{region-id}:{account-id}:queue/{queuename} format.
     *   If the notification method is an MNS topic, specify the value in the acs:mns:{region-id}:{account-id}:topic/{topicname} format.
     *   If the notification method is an Operation Orchestration Service (OOS) template, specify the value in the acs:oos:{region-id}:{account-id}:template/{templatename} format.
     *
     * The variables in the preceding formats have the following meanings:
     *
     *   region-id: the region ID of the scaling group.
     *   account-id: the ID of the Alibaba Cloud account.
     *   queuename: the name of the MNS queue.
     *   topicname: the name of the MNS topic.
     *   templatename: the name of the OOS template.
     *
     * @example acs:mns:cn-beijing:161456884340****:queue/modifyLifecycleHo****
     *
     * @var string
     */
    public $notificationArn;

    /**
     * @description The fixed string that is included in a notification. Auto Scaling sends the notification when the lifecycle hook takes effect. The value of this parameter cannot exceed 4,096 characters in length.
     *
     * Auto Scaling sends the value of the NotificationMetadata parameter together with the notification. This helps you categorize your notifications. If you specify the NotificationMetadata parameter, you must also specify the NotificationArn parameter.
     * @example Test
     *
     * @var string
     */
    public $notificationMetadata;

    /**
     * @var string
     */
    public $ownerAccount;

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
     * @description The ID of the scaling group to which the lifecycle hook belongs.
     *
     * @example asg-bp18p2yfxow2dloq****
     *
     * @var string
     */
    public $scalingGroupId;
    protected $_name = [
        'defaultResult'        => 'DefaultResult',
        'heartbeatTimeout'     => 'HeartbeatTimeout',
        'lifecycleHookId'      => 'LifecycleHookId',
        'lifecycleHookName'    => 'LifecycleHookName',
        'lifecycleHookStatus'  => 'LifecycleHookStatus',
        'lifecycleTransition'  => 'LifecycleTransition',
        'notificationArn'      => 'NotificationArn',
        'notificationMetadata' => 'NotificationMetadata',
        'ownerAccount'         => 'OwnerAccount',
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
        if (null !== $this->defaultResult) {
            $res['DefaultResult'] = $this->defaultResult;
        }
        if (null !== $this->heartbeatTimeout) {
            $res['HeartbeatTimeout'] = $this->heartbeatTimeout;
        }
        if (null !== $this->lifecycleHookId) {
            $res['LifecycleHookId'] = $this->lifecycleHookId;
        }
        if (null !== $this->lifecycleHookName) {
            $res['LifecycleHookName'] = $this->lifecycleHookName;
        }
        if (null !== $this->lifecycleHookStatus) {
            $res['LifecycleHookStatus'] = $this->lifecycleHookStatus;
        }
        if (null !== $this->lifecycleTransition) {
            $res['LifecycleTransition'] = $this->lifecycleTransition;
        }
        if (null !== $this->notificationArn) {
            $res['NotificationArn'] = $this->notificationArn;
        }
        if (null !== $this->notificationMetadata) {
            $res['NotificationMetadata'] = $this->notificationMetadata;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
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
     * @return ModifyLifecycleHookRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DefaultResult'])) {
            $model->defaultResult = $map['DefaultResult'];
        }
        if (isset($map['HeartbeatTimeout'])) {
            $model->heartbeatTimeout = $map['HeartbeatTimeout'];
        }
        if (isset($map['LifecycleHookId'])) {
            $model->lifecycleHookId = $map['LifecycleHookId'];
        }
        if (isset($map['LifecycleHookName'])) {
            $model->lifecycleHookName = $map['LifecycleHookName'];
        }
        if (isset($map['LifecycleHookStatus'])) {
            $model->lifecycleHookStatus = $map['LifecycleHookStatus'];
        }
        if (isset($map['LifecycleTransition'])) {
            $model->lifecycleTransition = $map['LifecycleTransition'];
        }
        if (isset($map['NotificationArn'])) {
            $model->notificationArn = $map['NotificationArn'];
        }
        if (isset($map['NotificationMetadata'])) {
            $model->notificationMetadata = $map['NotificationMetadata'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
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
