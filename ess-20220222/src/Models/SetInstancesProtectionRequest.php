<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models;

use AlibabaCloud\Tea\Model;

class SetInstancesProtectionRequest extends Model
{
    /**
     * @description The IDs of the ECS instances.
     *
     * This parameter is required.
     * @var string[]
     */
    public $instanceIds;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description Specifies whether to put ECS instances into the Protected state. Auto Scaling does not remove ECS instances in the Protected state from scaling groups during scale-in activities.
     *
     *   true
     *   false
     *
     * This parameter is required.
     * @example true
     *
     * @var bool
     */
    public $protectedFromScaleIn;

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
        'instanceIds'          => 'InstanceIds',
        'ownerId'              => 'OwnerId',
        'protectedFromScaleIn' => 'ProtectedFromScaleIn',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'scalingGroupId'       => 'ScalingGroupId',
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
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->protectedFromScaleIn) {
            $res['ProtectedFromScaleIn'] = $this->protectedFromScaleIn;
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
     * @return SetInstancesProtectionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceIds'])) {
            if (!empty($map['InstanceIds'])) {
                $model->instanceIds = $map['InstanceIds'];
            }
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ProtectedFromScaleIn'])) {
            $model->protectedFromScaleIn = $map['ProtectedFromScaleIn'];
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
