<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models;

use AlibabaCloud\SDK\Ess\V20220222\Models\AttachAlbServerGroupsRequest\albServerGroups;
use AlibabaCloud\Tea\Model;

class AttachAlbServerGroupsRequest extends Model
{
    /**
     * @description Details of the ALB server group.
     *
     * @var albServerGroups[]
     */
    public $albServerGroups;

    /**
     * @description The client token that is used to ensure the idempotence of the request. You can use the client to generate the value, but you must ensure that the value is unique among different requests. The token can only contain ASCII characters and cannot exceed 64 characters in length. For more information, see [How to ensure the idempotence of a request](~~25965~~).
     *
     * @example 123e4567-e89b-12d3-a456-42665544****
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description Specifies whether to add the ECS instances in the scaling group to the ALB server group. Valid values:
     *
     *   true: adds the ECS instances to the ALB server group and returns the value of the `ScalingActivityId` parameter. You can check whether the ECS instances are added to the ALB server group by using the ID of the scaling activity.
     *   false: does not add the ECS instances to the ALB server group.
     *
     * Default value: false.
     * @example false
     *
     * @var bool
     */
    public $forceAttach;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The region ID of the scaling group, such as cn-hangzhou and cn-shanghai. For more information, see [Regions and zones](~~40654~~).
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
     * @description The ID of the scaling group.
     *
     * @example asg-bp18p2yfxow2dloq****
     *
     * @var string
     */
    public $scalingGroupId;
    protected $_name = [
        'albServerGroups'      => 'AlbServerGroups',
        'clientToken'          => 'ClientToken',
        'forceAttach'          => 'ForceAttach',
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
        if (null !== $this->albServerGroups) {
            $res['AlbServerGroups'] = [];
            if (null !== $this->albServerGroups && \is_array($this->albServerGroups)) {
                $n = 0;
                foreach ($this->albServerGroups as $item) {
                    $res['AlbServerGroups'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->forceAttach) {
            $res['ForceAttach'] = $this->forceAttach;
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
     * @return AttachAlbServerGroupsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlbServerGroups'])) {
            if (!empty($map['AlbServerGroups'])) {
                $model->albServerGroups = [];
                $n                      = 0;
                foreach ($map['AlbServerGroups'] as $item) {
                    $model->albServerGroups[$n++] = null !== $item ? albServerGroups::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['ForceAttach'])) {
            $model->forceAttach = $map['ForceAttach'];
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
