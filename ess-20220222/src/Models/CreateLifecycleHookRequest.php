<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models;

use AlibabaCloud\Tea\Model;

class CreateLifecycleHookRequest extends Model
{
    /**
     * @description The action that you want Auto Scaling to perform after the lifecycle hook times out. Valid values:
     *
     *   CONTINUE: Auto Scaling continues to respond to scale-in or scale-out requests.
     *   ABANDON: Auto Scaling releases Elastic Compute Service (ECS) instances that are created during scale-out activities, or removes ECS instances from the scaling group during scale-in activities.
     *
     * Default value: CONTINUE.
     * @example CONTINUE
     *
     * @var string
     */
    public $defaultResult;

    /**
     * @description The period of time before the lifecycle hook times out. After the lifecycle hook times out, Auto Scaling performs the default action. Valid values: 30 to 21600. Unit: seconds.
     *
     * Default value: 600.
     * @example 600
     *
     * @var int
     */
    public $heartbeatTimeout;

    /**
     * @description The name of the lifecycle hook. Each lifecycle hook name must be unique within a scaling group. The name must be 2 to 64 characters in length, and can contain letters, digits, underscores (_), hyphens (-), and periods (.). It must start with a letter or a digit.
     *
     * If you do not specify this parameter, the value of the LifecycleHookId parameter is used.
     * @example lifecyclehook****
     *
     * @var string
     */
    public $lifecycleHookName;

    /**
     * @description The type of the scaling activity to which the lifecycle hook applies. Valid values:
     *
     *   SCALE_OUT
     *   SCALE_IN
     *
     * This parameter is required.
     * @example SCALE_OUT
     *
     * @var string
     */
    public $lifecycleTransition;

    /**
     * @description The Alibaba Cloud Resource Name (ARN) of the notification method that is used by Auto Scaling to send notifications when the lifecycle hook takes effect. If you do not specify this parameter, no notification is sent when the lifecycle hook takes effect. If you specify this parameter, the following rules apply:
     *
     *   If you use a Message Service (MNS) queue as the notification method, specify the value in the acs:mns:{region-id}:{account-id}:queue/{queuename} format.
     *   If you use an MNS topic as the notification method, specify the value in the acs:mns:{region-id}:{account-id}:topic/{topicname} format.
     *   If you use an OOS template as the notification method, specify the value in the acs:oos:{region-id}:{account-id}:template/{templatename} format.
     *
     * The variables in the preceding parameter formats have the following meanings:
     *
     *   region-id: the region ID of the scaling group.
     *   account-id: the ID of the Alibaba Cloud account. The ID of the RAM user is not supported.
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
     * @description The notification metadata that is sent when the lifecycle hook takes effect. This helps you manage and categorize notifications in an efficient manner. If you specify this parameter, you must specify the NotificationArn parameter. The parameter value cannot exceed 4,096 characters in length.
     *
     * If you use the NotificationArn parameter to specify a public or customOOS template, the value of the NotificationMetadata parameter must be a JSON string that contains the OOS template parameters. For example, your OOS template includes the following parameters: `{"dbInstanceId": "dds-bp17661e0135****", "modifyMode": "Append"}`, `dbInstanceId`, and `modifyMode`. Some parameters defined in your OOS template have default values. When you specify the NotificationMetadata parameter, specify parameters that do not have default values. If you specify parameters that have default values, the default values are overwritten. However, the default values of the following parameters must be retained to obtain information about scaling activities that are in progress:
     *
     *   `regionId`: the region ID of the scaling activity that is in progress. Default value: ${regionId}.
     *   `instanceIds`: the IDs of ECS instances that are scaled in in the scaling activity. Default value: ${instanceIds}.
     *   `lifecycleHookId`: the ID of the lifecycle hook. Default value: ${lifecycleHookId}.
     *   `lifecycleActionToken`: the token of the lifecycle action. You can use the token to end the timeout period of the lifecycle hook ahead of schedule. Default value: ${lifecycleActionToken}
     *   `scalingGroupId`: the ID of the scaling group in which the scaling activity is executed. Default value: ${scalingGroupId}.
     *
     * > You can obtain template parameter information in the [OOS console](https://oos.console.aliyun.com/).
     * @example Test lifecycle hook.
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
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @description The ID of the scaling group.
     *
     * This parameter is required.
     * @example asg-bp1eyv4qn8ssgv43****
     *
     * @var string
     */
    public $scalingGroupId;
    protected $_name = [
        'defaultResult'        => 'DefaultResult',
        'heartbeatTimeout'     => 'HeartbeatTimeout',
        'lifecycleHookName'    => 'LifecycleHookName',
        'lifecycleTransition'  => 'LifecycleTransition',
        'notificationArn'      => 'NotificationArn',
        'notificationMetadata' => 'NotificationMetadata',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
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
        if (null !== $this->lifecycleHookName) {
            $res['LifecycleHookName'] = $this->lifecycleHookName;
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
     * @return CreateLifecycleHookRequest
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
        if (isset($map['LifecycleHookName'])) {
            $model->lifecycleHookName = $map['LifecycleHookName'];
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
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ScalingGroupId'])) {
            $model->scalingGroupId = $map['ScalingGroupId'];
        }

        return $model;
    }
}
