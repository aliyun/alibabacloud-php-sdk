<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models;

use AlibabaCloud\Tea\Model;

class ScaleWithAdjustmentShrinkRequest extends Model
{
    /**
     * @description The metadata of the scaling activity.
     *
     * @example {"key":"value"}
     *
     * @var string
     */
    public $activityMetadata;

    /**
     * @description The type of the scaling policy. Valid values:
     *
     *   QuantityChangeInCapacity: adds the specified number of ECS instances to or removes the specified number of ECS instances from the scaling group.
     *   PercentChangeInCapacity: adds the specified percentage of ECS instances to or removes the specified percentage of ECS instances from the scaling group.
     *   TotalCapacity: adjusts the number of ECS instances in the scaling group to a specified number.
     *
     * This parameter is required.
     * @example QuantityChangeInCapacity
     *
     * @var string
     */
    public $adjustmentType;

    /**
     * @description The number of instances in each adjustment. The number of ECS instances in each adjustment cannot exceed 1,000.
     *
     *   Valid values if you set the AdjustmentType parameter to QuantityChangeInCapacity: -1000 to 1000.
     *   Valid values if you set the AdjustmentType parameter to PercentChangeInCapacity: -100 to 10000.
     *   Valid values if you set the AdjustmentType parameter to TotalCapacity: 0 to 2000.
     *
     * This parameter is required.
     * @example 100
     *
     * @var int
     */
    public $adjustmentValue;

    /**
     * @description The client token that is used to ensure the idempotence of the request. You can use the client to generate the value, but you must ensure that the value is unique among different requests. The token can contain only ASCII characters and cannot exceed 64 characters in length.
     *
     * @example 123e4567-e89b-12d3-a456-42665544****
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The context of the lifecycle hook.
     *
     * @var string
     */
    public $lifecycleHookContextShrink;

    /**
     * @description The minimum number of instances allowed in each adjustment. This parameter takes effect only if you set the `AdjustmentType` parameter to `PercentChangeInCapacity`.
     *
     * @example 1
     *
     * @var int
     */
    public $minAdjustmentMagnitude;

    /**
     * @description The overrides that allow you to adjust the scaling group of the Elastic Container Instance type during a scale-out.
     *
     * @var string
     */
    public $overridesShrink;

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
     * @example asg-j6c1o397427hyjdc****
     *
     * @var string
     */
    public $scalingGroupId;

    /**
     * @description Specifies whether to trigger the scaling activity in a synchronous manner. This parameter takes effect only on scaling groups for which you specified an expected number of instances. Valid values:
     *
     *   true: triggers the scaling activity in a synchronous manner. The scaling activity is triggered at the time when the scaling rule is executed.
     *   false: does not trigger the scaling activity in a synchronous manner. After you change the expected number of instances for the scaling group, Auto Scaling checks whether the total number of instances in the scaling group matches the new expected number of instances and determines whether to trigger the scaling activity based on the check result.
     *
     * Default value: false.
     * @example false
     *
     * @var bool
     */
    public $syncActivity;
    protected $_name = [
        'activityMetadata'           => 'ActivityMetadata',
        'adjustmentType'             => 'AdjustmentType',
        'adjustmentValue'            => 'AdjustmentValue',
        'clientToken'                => 'ClientToken',
        'lifecycleHookContextShrink' => 'LifecycleHookContext',
        'minAdjustmentMagnitude'     => 'MinAdjustmentMagnitude',
        'overridesShrink'            => 'Overrides',
        'ownerId'                    => 'OwnerId',
        'resourceOwnerAccount'       => 'ResourceOwnerAccount',
        'scalingGroupId'             => 'ScalingGroupId',
        'syncActivity'               => 'SyncActivity',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->activityMetadata) {
            $res['ActivityMetadata'] = $this->activityMetadata;
        }
        if (null !== $this->adjustmentType) {
            $res['AdjustmentType'] = $this->adjustmentType;
        }
        if (null !== $this->adjustmentValue) {
            $res['AdjustmentValue'] = $this->adjustmentValue;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->lifecycleHookContextShrink) {
            $res['LifecycleHookContext'] = $this->lifecycleHookContextShrink;
        }
        if (null !== $this->minAdjustmentMagnitude) {
            $res['MinAdjustmentMagnitude'] = $this->minAdjustmentMagnitude;
        }
        if (null !== $this->overridesShrink) {
            $res['Overrides'] = $this->overridesShrink;
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
        if (null !== $this->syncActivity) {
            $res['SyncActivity'] = $this->syncActivity;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ScaleWithAdjustmentShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ActivityMetadata'])) {
            $model->activityMetadata = $map['ActivityMetadata'];
        }
        if (isset($map['AdjustmentType'])) {
            $model->adjustmentType = $map['AdjustmentType'];
        }
        if (isset($map['AdjustmentValue'])) {
            $model->adjustmentValue = $map['AdjustmentValue'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['LifecycleHookContext'])) {
            $model->lifecycleHookContextShrink = $map['LifecycleHookContext'];
        }
        if (isset($map['MinAdjustmentMagnitude'])) {
            $model->minAdjustmentMagnitude = $map['MinAdjustmentMagnitude'];
        }
        if (isset($map['Overrides'])) {
            $model->overridesShrink = $map['Overrides'];
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
        if (isset($map['SyncActivity'])) {
            $model->syncActivity = $map['SyncActivity'];
        }

        return $model;
    }
}
