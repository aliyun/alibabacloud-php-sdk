<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models;

use AlibabaCloud\Tea\Model;

class DeleteScalingGroupRequest extends Model
{
    /**
     * @description Specifies whether to forcibly delete the scaling group and release Elastic Compute Service (ECS) instances in the scaling group when ECS instances or ongoing scaling activities exist in the scaling group. Valid values:
     *
     *   true: forcibly deletes the scaling group. The scaling group is disabled and new scaling requests are rejected. After all existing scaling requests are processed, the ECS instances are removed from the scaling group. Then, the scaling group is deleted. If the ECS instances are manually added to the scaling group, the ECS instances are only removed from the scaling group. If the ECS instances are automatically created and added to the scaling group, the ECS instances are removed from the scaling group and then released.
     *
     *   false: does not forcibly delete the scaling group. The scaling group is disabled and then deleted if the following conditions are met:
     *
     *   No scaling activities are in process in the scaling group.
     *   The Total Capacity parameter is set to 0. A value of 0 specifies that no ECS instances exist in the scaling group.
     *
     * Default value: false.
     * @example false
     *
     * @var bool
     */
    public $forceDelete;

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

    /**
     * @description The ID of the scaling group.
     *
     * This parameter is required.
     * @example asg-bp18p2yfxow2dloq****
     *
     * @var string
     */
    public $scalingGroupId;
    protected $_name = [
        'forceDelete'          => 'ForceDelete',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'regionId'             => 'RegionId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'scalingGroupId'       => 'ScalingGroupId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->forceDelete) {
            $res['ForceDelete'] = $this->forceDelete;
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
        if (null !== $this->scalingGroupId) {
            $res['ScalingGroupId'] = $this->scalingGroupId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteScalingGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ForceDelete'])) {
            $model->forceDelete = $map['ForceDelete'];
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
        if (isset($map['ScalingGroupId'])) {
            $model->scalingGroupId = $map['ScalingGroupId'];
        }

        return $model;
    }
}
