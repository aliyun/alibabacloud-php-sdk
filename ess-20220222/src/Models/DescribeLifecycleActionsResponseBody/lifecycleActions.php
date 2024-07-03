<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models\DescribeLifecycleActionsResponseBody;

use AlibabaCloud\Tea\Model;

class lifecycleActions extends Model
{
    /**
     * @description The IDs of the ECS instances on which the lifecycle hook takes effect
     *
     * @var string[]
     */
    public $instanceIds;

    /**
     * @description The subsequent action that Auto Scaling performs after the lifecycle hook times out. Valid values:
     *
     *   CONTINUE: Auto Scaling continues to respond to a scale-in or scale-out request.
     *   ABANDON: Auto Scaling releases ECS instances that are created during scale-out events, or removes ECS instances from the scaling group during scale-in events.
     *
     * @example CONTINUE
     *
     * @var string
     */
    public $lifecycleActionResult;

    /**
     * @description The status of the lifecycle hook action.
     *
     * @example Pending
     *
     * @var string
     */
    public $lifecycleActionStatus;

    /**
     * @description The token of the lifecycle hook action.
     *
     * @example 9C2E9DA7-F794-449A-ACF6-CEE24444F7BB
     *
     * @var string
     */
    public $lifecycleActionToken;

    /**
     * @description The ID of the lifecycle hook.
     *
     * @example ash-bp18uoft0deax0f7****
     *
     * @var string
     */
    public $lifecycleHookId;
    protected $_name = [
        'instanceIds'           => 'InstanceIds',
        'lifecycleActionResult' => 'LifecycleActionResult',
        'lifecycleActionStatus' => 'LifecycleActionStatus',
        'lifecycleActionToken'  => 'LifecycleActionToken',
        'lifecycleHookId'       => 'LifecycleHookId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceIds) {
            $res['InstanceIds'] = $this->instanceIds;
        }
        if (null !== $this->lifecycleActionResult) {
            $res['LifecycleActionResult'] = $this->lifecycleActionResult;
        }
        if (null !== $this->lifecycleActionStatus) {
            $res['LifecycleActionStatus'] = $this->lifecycleActionStatus;
        }
        if (null !== $this->lifecycleActionToken) {
            $res['LifecycleActionToken'] = $this->lifecycleActionToken;
        }
        if (null !== $this->lifecycleHookId) {
            $res['LifecycleHookId'] = $this->lifecycleHookId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return lifecycleActions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceIds'])) {
            if (!empty($map['InstanceIds'])) {
                $model->instanceIds = $map['InstanceIds'];
            }
        }
        if (isset($map['LifecycleActionResult'])) {
            $model->lifecycleActionResult = $map['LifecycleActionResult'];
        }
        if (isset($map['LifecycleActionStatus'])) {
            $model->lifecycleActionStatus = $map['LifecycleActionStatus'];
        }
        if (isset($map['LifecycleActionToken'])) {
            $model->lifecycleActionToken = $map['LifecycleActionToken'];
        }
        if (isset($map['LifecycleHookId'])) {
            $model->lifecycleHookId = $map['LifecycleHookId'];
        }

        return $model;
    }
}
