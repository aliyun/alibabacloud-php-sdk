<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models\DescribeLifecycleHooksResponseBody;

use AlibabaCloud\Tea\Model;

class lifecycleHooks extends Model
{
    /**
     * @description The next action that is performed after the lifecycle hook times out.
     *
     * @example CONTINUE
     *
     * @var string
     */
    public $defaultResult;

    /**
     * @description The period of time before the lifecycle hook times out. When the lifecycle hook times out, Auto Scaling performs the action that is specified by DefaultResult.
     *
     * @example 60
     *
     * @var int
     */
    public $heartbeatTimeout;

    /**
     * @description The ID of the lifecycle hook.
     *
     * @example ash-bp19d1032y9kij96****
     *
     * @var string
     */
    public $lifecycleHookId;

    /**
     * @description The name of the lifecycle hook.
     *
     * @example lifecyclehook****
     *
     * @var string
     */
    public $lifecycleHookName;

    /**
     * @description The status of the lifecycle hook. Valid values:
     *
     *   Active: The lifecycle hook is enabled.
     *   InActive: The lifecycle hook is disabled.
     *
     * @example Active
     *
     * @var string
     */
    public $lifecycleHookStatus;

    /**
     * @description The type of the scaling activity to which the lifecycle hook applies.
     *
     * @example SCALE_OUT
     *
     * @var string
     */
    public $lifecycleTransition;

    /**
     * @description The ARN of the notification recipient when the lifecycle hook takes effect. The value of this parameter must be in one of the following formats:
     *
     *   If you do not create a notification rule, specify the value in the `acs:ess:{region-id}:{account-id}:null/null` format.
     *   If you specify a Simple Message Queue (SMQ, formerly MNS) queue as the notification recipient, specify the value in the `acs:mns:{region-id}:{account-id}:queue/{queuename}` format.
     *   If you specify an SMQ as the notification recipient, specify the value in the `acs:mns:{region-id}:{account-id}:topic/{topicname}` format.
     *   If you specify a CloudOps Orchestration Service (OOS) template as the notification recipient, specify the value in the `acs:oos:{region-id}:{account-id}:template/{templatename}` format.
     *   If you specify an event bus as the notification recipient, specify the value in the `acs:eventbridge:{region-id}:{account-id}:eventbus/default` format.
     *
     * The variables in the preceding value formats have the following meanings:
     *
     *   region-id: the region ID of your scaling group.
     *   account-id: the ID of your Alibaba Cloud account.
     *   queuename: the name of the SMQ queue.
     *   topicname: the name of the SMQ topic.
     *   templatename: the name of the OOS template.
     *
     * @example acs:ess:cn-beijing:161456884340****:null/null
     *
     * @var string
     */
    public $notificationArn;

    /**
     * @description The fixed string that is included in a notification that Auto Scaling sends when the lifecycle hook takes effect.
     *
     * @example Test Lifecycle Hook.
     *
     * @var string
     */
    public $notificationMetadata;

    /**
     * @description The ID of the scaling group.
     *
     * @example asg-bp1igpak5ft1flyp****
     *
     * @var string
     */
    public $scalingGroupId;
    protected $_name = [
        'defaultResult' => 'DefaultResult',
        'heartbeatTimeout' => 'HeartbeatTimeout',
        'lifecycleHookId' => 'LifecycleHookId',
        'lifecycleHookName' => 'LifecycleHookName',
        'lifecycleHookStatus' => 'LifecycleHookStatus',
        'lifecycleTransition' => 'LifecycleTransition',
        'notificationArn' => 'NotificationArn',
        'notificationMetadata' => 'NotificationMetadata',
        'scalingGroupId' => 'ScalingGroupId',
    ];

    public function validate() {}

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
        if (null !== $this->scalingGroupId) {
            $res['ScalingGroupId'] = $this->scalingGroupId;
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
        if (isset($map['ScalingGroupId'])) {
            $model->scalingGroupId = $map['ScalingGroupId'];
        }

        return $model;
    }
}
