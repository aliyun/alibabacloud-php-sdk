<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models\DescribeLifecycleHooksResponseBody;

use AlibabaCloud\Tea\Model;

class lifecycleHooks extends Model
{
    /**
     * @example CONTINUE
     *
     * @var string
     */
    public $defaultResult;

    /**
     * @example 60
     *
     * @var int
     */
    public $heartbeatTimeout;

    /**
     * @example ash-bp19d1032y9kij96****
     *
     * @var string
     */
    public $lifecycleHookId;

    /**
     * @example lifecyclehook****
     *
     * @var string
     */
    public $lifecycleHookName;

    /**
     * @example Active
     *
     * @var string
     */
    public $lifecycleHookStatus;

    /**
     * @example SCALE_OUT
     *
     * @var string
     */
    public $lifecycleTransition;

    /**
     * @example acs:ess:cn-beijing:161456884340****:null/null
     *
     * @var string
     */
    public $notificationArn;

    /**
     * @example Test Lifecycle Hook.
     *
     * @var string
     */
    public $notificationMetadata;

    /**
     * @example asg-bp1igpak5ft1flyp****
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
