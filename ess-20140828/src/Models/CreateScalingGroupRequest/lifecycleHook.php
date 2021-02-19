<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20140828\Models\CreateScalingGroupRequest;

use AlibabaCloud\Tea\Model;

class lifecycleHook extends Model
{
    /**
     * @var string
     */
    public $defaultResult;

    /**
     * @var string
     */
    public $lifecycleHookName;

    /**
     * @var string
     */
    public $lifecycleTransition;

    /**
     * @var string
     */
    public $notificationMetadata;

    /**
     * @var string
     */
    public $notificationArn;

    /**
     * @var int
     */
    public $heartbeatTimeout;
    protected $_name = [
        'defaultResult'        => 'DefaultResult',
        'lifecycleHookName'    => 'LifecycleHookName',
        'lifecycleTransition'  => 'LifecycleTransition',
        'notificationMetadata' => 'NotificationMetadata',
        'notificationArn'      => 'NotificationArn',
        'heartbeatTimeout'     => 'HeartbeatTimeout',
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
        if (null !== $this->lifecycleHookName) {
            $res['LifecycleHookName'] = $this->lifecycleHookName;
        }
        if (null !== $this->lifecycleTransition) {
            $res['LifecycleTransition'] = $this->lifecycleTransition;
        }
        if (null !== $this->notificationMetadata) {
            $res['NotificationMetadata'] = $this->notificationMetadata;
        }
        if (null !== $this->notificationArn) {
            $res['NotificationArn'] = $this->notificationArn;
        }
        if (null !== $this->heartbeatTimeout) {
            $res['HeartbeatTimeout'] = $this->heartbeatTimeout;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return lifecycleHook
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DefaultResult'])) {
            $model->defaultResult = $map['DefaultResult'];
        }
        if (isset($map['LifecycleHookName'])) {
            $model->lifecycleHookName = $map['LifecycleHookName'];
        }
        if (isset($map['LifecycleTransition'])) {
            $model->lifecycleTransition = $map['LifecycleTransition'];
        }
        if (isset($map['NotificationMetadata'])) {
            $model->notificationMetadata = $map['NotificationMetadata'];
        }
        if (isset($map['NotificationArn'])) {
            $model->notificationArn = $map['NotificationArn'];
        }
        if (isset($map['HeartbeatTimeout'])) {
            $model->heartbeatTimeout = $map['HeartbeatTimeout'];
        }

        return $model;
    }
}
