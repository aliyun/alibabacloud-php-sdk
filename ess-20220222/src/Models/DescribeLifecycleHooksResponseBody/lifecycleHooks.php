<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models\DescribeLifecycleHooksResponseBody;

use AlibabaCloud\Dara\Model;

class lifecycleHooks extends Model
{
    /**
     * @var string
     */
    public $defaultResult;

    /**
     * @var int
     */
    public $heartbeatTimeout;

    /**
     * @var string
     */
    public $lifecycleHookId;

    /**
     * @var string
     */
    public $lifecycleHookName;

    /**
     * @var string
     */
    public $lifecycleHookStatus;

    /**
     * @var string
     */
    public $lifecycleTransition;

    /**
     * @var string
     */
    public $notificationArn;

    /**
     * @var string
     */
    public $notificationMetadata;

    /**
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

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
