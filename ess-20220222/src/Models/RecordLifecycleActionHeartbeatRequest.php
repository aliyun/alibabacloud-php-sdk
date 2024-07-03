<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models;

use AlibabaCloud\Tea\Model;

class RecordLifecycleActionHeartbeatRequest extends Model
{
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
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @description The time window during which the desired ECS instance stays in a Pending state. When the time window ends, Auto Scaling executes the default action. Valid values: 30 to 21600. Unit: seconds.
     *
     * Default value: 600.
     * @example 600
     *
     * @var int
     */
    public $heartbeatTimeout;

    /**
     * @description The action token of the lifecycle hook. You can obtain the token from the details page of the Message Service (MNS) queue specified for the lifecycle hook when the desired ECS instance enters a Pending state.\\
     * This parameter is required.
     * @example F324B880-900E-4968-85DD-81691113****
     *
     * @var string
     */
    public $lifecycleActionToken;

    /**
     * @description The ID of the lifecycle hook.
     *
     * This parameter is required.
     * @example ash-bp1fxuqyi98w0aib****
     *
     * @var string
     */
    public $lifecycleHookId;
    protected $_name = [
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'regionId'             => 'RegionId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'heartbeatTimeout'     => 'heartbeatTimeout',
        'lifecycleActionToken' => 'lifecycleActionToken',
        'lifecycleHookId'      => 'lifecycleHookId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
        if (null !== $this->heartbeatTimeout) {
            $res['heartbeatTimeout'] = $this->heartbeatTimeout;
        }
        if (null !== $this->lifecycleActionToken) {
            $res['lifecycleActionToken'] = $this->lifecycleActionToken;
        }
        if (null !== $this->lifecycleHookId) {
            $res['lifecycleHookId'] = $this->lifecycleHookId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RecordLifecycleActionHeartbeatRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
        if (isset($map['heartbeatTimeout'])) {
            $model->heartbeatTimeout = $map['heartbeatTimeout'];
        }
        if (isset($map['lifecycleActionToken'])) {
            $model->lifecycleActionToken = $map['lifecycleActionToken'];
        }
        if (isset($map['lifecycleHookId'])) {
            $model->lifecycleHookId = $map['lifecycleHookId'];
        }

        return $model;
    }
}
