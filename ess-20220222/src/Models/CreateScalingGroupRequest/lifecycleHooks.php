<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models\CreateScalingGroupRequest;

use AlibabaCloud\Tea\Model;

class lifecycleHooks extends Model
{
    /**
     * @description The action that Auto Scaling performs after the lifecycle hook of the scaling group times out. Valid values:
     *
     *   CONTINUE: continues to respond to scaling requests.
     *   ABANDON: releases ECS instances that are created during scale-out activities, or removes ECS instances from the scaling group during scale-in activities.
     *
     * Default value: CONTINUE.
     * @example CONTINUE
     *
     * @var string
     */
    public $defaultResult;

    /**
     * @description The period of time before the lifecycle hook times out. When the lifecycle hook times out, Auto Scaling performs the action specified by the DefaultResult parameter. Valid values: 30 to 21600. Unit: seconds.
     *
     * Default value: 600.
     * @example 600
     *
     * @var int
     */
    public $heartbeatTimeout;

    /**
     * @description The name of the lifecycle hook. After you specify this parameter, you cannot change the value of this parameter. If you do not specify this parameter, the ID of the lifecycle hook is used.
     *
     * @example lifecyclehook****
     *
     * @var string
     */
    public $lifecycleHookName;

    /**
     * @description The type of the scaling activity for which you create the lifecycle hook. Valid values:
     *
     *   SCALE_OUT: scale-out activity
     *   SCALE_IN: scale-in activity
     *
     * > If you create lifecycle hooks for your scaling group, you must specify the LifecycleTransition parameter.
     * @example SCALE_OUT
     *
     * @var string
     */
    public $lifecycleTransition;

    /**
     * @description The Alibaba Cloud Resource Name (ARN) of the notification method that Auto Scaling uses to send a notification when a lifecycle hook takes effect. This notification method can be a Message Service (MNS) queue or an MNS topic. Specify the value of this parameter in the following format: acs:ess:{region}:{account-id}:{resource-relative-id}.
     *
     *   region: the region where the scaling group resides
     *   account-id: the ID of the Alibaba Cloud account
     *
     * Examples:
     *
     *   MNS queue: acs:ess:{region}:{account-id}:queue/{queuename}
     *   MNS topic: acs:ess:{region}:{account-id}:topic/{topicname}
     *
     * @example acs:ess:cn-hangzhou:1111111111:queue/queue2
     *
     * @var string
     */
    public $notificationArn;

    /**
     * @description The fixed string that is included in a notification. Auto Scaling sends the notification when the lifecycle hook takes effect. The value of this parameter cannot exceed 4,096 characters in length. Auto Scaling sends the value of the notificationmetadata parameter together with the notification. This way, you can categorize and manage your notifications in an efficient manner. If you specify the notificationmetadata parameter, you must also specify the notificationarn parameter.
     *
     * @example Test
     *
     * @var string
     */
    public $notificationMetadata;
    protected $_name = [
        'defaultResult'        => 'DefaultResult',
        'heartbeatTimeout'     => 'HeartbeatTimeout',
        'lifecycleHookName'    => 'LifecycleHookName',
        'lifecycleTransition'  => 'LifecycleTransition',
        'notificationArn'      => 'NotificationArn',
        'notificationMetadata' => 'NotificationMetadata',
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return lifecycleHooks
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

        return $model;
    }
}
