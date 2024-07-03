<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models\CreateScalingGroupRequest;

use AlibabaCloud\Tea\Model;

class lifecycleHooks extends Model
{
    /**
     * @description The action that Auto Scaling performs when the lifecycle hook times out. Valid values:
     *
     *   CONTINUE: Auto Scaling continues to respond to a scale-in or scale-out request.
     *   ABANDON: Auto Scaling releases ECS instances that are created during scale-out events, or removes ECS instances from the scaling group during scale-in events.
     *
     * Default value: CONTINUE.
     * @example CONTINUE
     *
     * @var string
     */
    public $defaultResult;

    /**
     * @description The period of time before the lifecycle hook times out. When the lifecycle hook times out, Auto Scaling performs the action that is specified by DefaultResult. Valid values: 30 to 21600. Unit: seconds.
     *
     * Default value: 600.
     * @example 600
     *
     * @var int
     */
    public $heartbeatTimeout;

    /**
     * @description The name of the lifecycle hook. After you specify this parameter, you cannot change the name of the lifecycle hook. If you do not specify this parameter, the name of the lifecycle hook is the same as the ID of the lifecycle hook.
     *
     * @example lifecyclehook****
     *
     * @var string
     */
    public $lifecycleHookName;

    /**
     * @description The type of the scaling activity to which you want to apply the lifecycle hook. Valid values:
     *
     *   SCALE_OUT
     *   SCALE_IN
     *
     * >  If you specify lifecycle hooks for the scaling group, you must specify LifecycleTransition. Other parameters are optional.
     * @example SCALE_OUT
     *
     * @var string
     */
    public $lifecycleTransition;

    /**
     * @description The identifier of the notification recipient party when the lifecycle hook takes effect. You can specify a Message Service (MNS) topic or queue as the notification recipient party. Specify the value in the acs:ess:{region}:{account-id}:{resource-relative-id} format.
     *
     *   region: the region ID of the scaling group
     *   account-id: the ID of your Alibaba Cloud account.
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
     * @description The fixed string that you want to include in a notification. When a lifecycle hook takes effect, Auto Scaling sends a notification. The fixed string can contain up to 4,096 characters in length. When Auto Scaling sends a notification to the recipient party, it includes predefined notification metadata into the notification. This helps in managing and labeling notifications of different categories. notificationmetadata takes effect only if you specify notificationarn.
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
