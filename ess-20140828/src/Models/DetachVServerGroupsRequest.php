<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20140828\Models;

use AlibabaCloud\SDK\Ess\V20140828\Models\DetachVServerGroupsRequest\VServerGroup;
use AlibabaCloud\Tea\Model;

class DetachVServerGroupsRequest extends Model
{
    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $scalingGroupId;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var bool
     */
    public $forceDetach;

    /**
     * @var VServerGroup[]
     */
    public $VServerGroup;
    protected $_name = [
        'ownerId'              => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'regionId'             => 'RegionId',
        'scalingGroupId'       => 'ScalingGroupId',
        'clientToken'          => 'ClientToken',
        'forceDetach'          => 'ForceDetach',
        'VServerGroup'         => 'VServerGroup',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->scalingGroupId) {
            $res['ScalingGroupId'] = $this->scalingGroupId;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->forceDetach) {
            $res['ForceDetach'] = $this->forceDetach;
        }
        if (null !== $this->VServerGroup) {
            $res['VServerGroup'] = [];
            if (null !== $this->VServerGroup && \is_array($this->VServerGroup)) {
                $n = 0;
                foreach ($this->VServerGroup as $item) {
                    $res['VServerGroup'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DetachVServerGroupsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ScalingGroupId'])) {
            $model->scalingGroupId = $map['ScalingGroupId'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['ForceDetach'])) {
            $model->forceDetach = $map['ForceDetach'];
        }
        if (isset($map['VServerGroup'])) {
            if (!empty($map['VServerGroup'])) {
                $model->VServerGroup = [];
                $n                   = 0;
                foreach ($map['VServerGroup'] as $item) {
                    $model->VServerGroup[$n++] = null !== $item ? VServerGroup::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
