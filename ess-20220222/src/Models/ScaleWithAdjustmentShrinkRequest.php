<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models;

use AlibabaCloud\Dara\Model;

class ScaleWithAdjustmentShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $activityMetadata;

    /**
     * @var string
     */
    public $adjustmentType;

    /**
     * @var int
     */
    public $adjustmentValue;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $executionMode;

    /**
     * @var string
     */
    public $lifecycleHookContextShrink;

    /**
     * @var int
     */
    public $minAdjustmentMagnitude;

    /**
     * @var string
     */
    public $overridesShrink;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var bool
     */
    public $parallelTask;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var string
     */
    public $scalingGroupId;

    /**
     * @var bool
     */
    public $syncActivity;
    protected $_name = [
        'activityMetadata' => 'ActivityMetadata',
        'adjustmentType' => 'AdjustmentType',
        'adjustmentValue' => 'AdjustmentValue',
        'clientToken' => 'ClientToken',
        'executionMode' => 'ExecutionMode',
        'lifecycleHookContextShrink' => 'LifecycleHookContext',
        'minAdjustmentMagnitude' => 'MinAdjustmentMagnitude',
        'overridesShrink' => 'Overrides',
        'ownerId' => 'OwnerId',
        'parallelTask' => 'ParallelTask',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'scalingGroupId' => 'ScalingGroupId',
        'syncActivity' => 'SyncActivity',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->executionMode) {
            $res['ExecutionMode'] = $this->executionMode;
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

        if (null !== $this->parallelTask) {
            $res['ParallelTask'] = $this->parallelTask;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

        if (isset($map['ExecutionMode'])) {
            $model->executionMode = $map['ExecutionMode'];
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

        if (isset($map['ParallelTask'])) {
            $model->parallelTask = $map['ParallelTask'];
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
