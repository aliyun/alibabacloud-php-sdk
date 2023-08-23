<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models;

use AlibabaCloud\Tea\Model;

class CompleteLifecycleActionRequest extends Model
{
    /**
     * @description The client token that is used to ensure the idempotence of the request. You can use the client to generate the token, but you must make sure that the token is unique among different requests.
     *
     * The token can contain only ASCII characters and cannot exceed 64 characters in length. For more information, see [How to ensure idempotence](~~25965~~).
     * @example 123e4567-e89b-12d3-a456-42665544****
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The action that you want Auto Scaling to perform after the lifecycle hook times out. Valid values:
     *
     *   CONTINUE: Auto Scaling continues to respond to a scale-in or scale-out request.
     *   ABANDON: Auto Scaling releases Elastic Compute Service (ECS) instances that are created during scale-out activities or removes ECS instances from the scaling group during scale-in activities.
     *   ROLLBACK: For scale-in activities, Auto Scaling rejects the requests to release ECS instances but rolls back ECS instances. For scale-out activities, the ROLLBACK setting has the same effect as the ABANDON setting.
     *
     * If multiple lifecycle hooks exist in a scaling group and the lifecycle hooks are triggered at the same time, the following rules apply:
     *
     *   For scale-in activities, when lifecycle hooks whose LifecycleActionResult parameter is set to ABANDON or ROLLBACK time out, other lifecycle hooks time out ahead of schedule.
     *   For scale-in and scale-out activities, if you set the LifecycleActionResult parameter for all lifecycle hooks to CONTINUE, Auto Scaling performs the next action only after the last lifecycle hook times out. The action that Auto Scaling performs varies based on the value that you specify for the LifecycleActionResult parameter of the lifecycle hook that last times out.
     *
     * @example CONTINUE
     *
     * @var string
     */
    public $lifecycleActionResult;

    /**
     * @description The token of the lifecycle hook. You can obtain this token by using a Message Service (MNS) queue or an MNS topic that is specified for the lifecycle hook.
     *
     * @example aaaa-bbbbb-cccc-ddddd
     *
     * @var string
     */
    public $lifecycleActionToken;

    /**
     * @description The ID of the lifecycle hook.
     *
     * @example ash-bp14g3ee6bt3sc98****
     *
     * @var string
     */
    public $lifecycleHookId;

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
     * @example cn-qingdao
     *
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;
    protected $_name = [
        'clientToken'           => 'ClientToken',
        'lifecycleActionResult' => 'LifecycleActionResult',
        'lifecycleActionToken'  => 'LifecycleActionToken',
        'lifecycleHookId'       => 'LifecycleHookId',
        'ownerAccount'          => 'OwnerAccount',
        'ownerId'               => 'OwnerId',
        'regionId'              => 'RegionId',
        'resourceOwnerAccount'  => 'ResourceOwnerAccount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->lifecycleActionResult) {
            $res['LifecycleActionResult'] = $this->lifecycleActionResult;
        }
        if (null !== $this->lifecycleActionToken) {
            $res['LifecycleActionToken'] = $this->lifecycleActionToken;
        }
        if (null !== $this->lifecycleHookId) {
            $res['LifecycleHookId'] = $this->lifecycleHookId;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CompleteLifecycleActionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['LifecycleActionResult'])) {
            $model->lifecycleActionResult = $map['LifecycleActionResult'];
        }
        if (isset($map['LifecycleActionToken'])) {
            $model->lifecycleActionToken = $map['LifecycleActionToken'];
        }
        if (isset($map['LifecycleHookId'])) {
            $model->lifecycleHookId = $map['LifecycleHookId'];
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

        return $model;
    }
}
