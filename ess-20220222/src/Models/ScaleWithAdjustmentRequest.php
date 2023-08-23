<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models;

use AlibabaCloud\Tea\Model;

class ScaleWithAdjustmentRequest extends Model
{
    /**
     * @description The client token that is used to ensure the idempotence of the request. You can use the client to generate the value, but you must ensure that the value is unique among different requests. The token can contain only ASCII characters and cannot exceed 64 characters in length.
     *
     * @example QuantityChangeInCapacity
     *
     * @var string
     */
    public $adjustmentType;

    /**
     * @description The ID of the request.
     *
     * @example 100
     *
     * @var int
     */
    public $adjustmentValue;

    /**
     * @description Scales instances in a scaling group based on the specified scaling policy.
     *
     * @example 123e4567-e89b-12d3-a456-42665544****
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The ID of the scaling group.
     *
     * @example 1
     *
     * @var int
     */
    public $minAdjustmentMagnitude;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @description The minimum number of instances allowed in each adjustment. This parameter takes effect only if you set the `AdjustmentType` parameter to `PercentChangeInCapacity`.
     *
     * @example asg-j6c1o397427hyjdc****
     *
     * @var string
     */
    public $scalingGroupId;

    /**
     * @description ScaleWithAdjustment
     *
     * @example false
     *
     * @var bool
     */
    public $syncActivity;
    protected $_name = [
        'adjustmentType'         => 'AdjustmentType',
        'adjustmentValue'        => 'AdjustmentValue',
        'clientToken'            => 'ClientToken',
        'minAdjustmentMagnitude' => 'MinAdjustmentMagnitude',
        'ownerId'                => 'OwnerId',
        'resourceOwnerAccount'   => 'ResourceOwnerAccount',
        'scalingGroupId'         => 'ScalingGroupId',
        'syncActivity'           => 'SyncActivity',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->adjustmentType) {
            $res['AdjustmentType'] = $this->adjustmentType;
        }
        if (null !== $this->adjustmentValue) {
            $res['AdjustmentValue'] = $this->adjustmentValue;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->minAdjustmentMagnitude) {
            $res['MinAdjustmentMagnitude'] = $this->minAdjustmentMagnitude;
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
     * @return ScaleWithAdjustmentRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AdjustmentType'])) {
            $model->adjustmentType = $map['AdjustmentType'];
        }
        if (isset($map['AdjustmentValue'])) {
            $model->adjustmentValue = $map['AdjustmentValue'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['MinAdjustmentMagnitude'])) {
            $model->minAdjustmentMagnitude = $map['MinAdjustmentMagnitude'];
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
