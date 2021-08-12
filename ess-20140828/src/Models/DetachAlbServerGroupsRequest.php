<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20140828\Models;

use AlibabaCloud\SDK\Ess\V20140828\Models\DetachAlbServerGroupsRequest\albServerGroup;
use AlibabaCloud\Tea\Model;

class DetachAlbServerGroupsRequest extends Model
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
     * @var albServerGroup[]
     */
    public $albServerGroup;
    protected $_name = [
        'ownerId'              => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'regionId'             => 'RegionId',
        'scalingGroupId'       => 'ScalingGroupId',
        'clientToken'          => 'ClientToken',
        'forceDetach'          => 'ForceDetach',
        'albServerGroup'       => 'AlbServerGroup',
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
        if (null !== $this->albServerGroup) {
            $res['AlbServerGroup'] = [];
            if (null !== $this->albServerGroup && \is_array($this->albServerGroup)) {
                $n = 0;
                foreach ($this->albServerGroup as $item) {
                    $res['AlbServerGroup'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DetachAlbServerGroupsRequest
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
        if (isset($map['AlbServerGroup'])) {
            if (!empty($map['AlbServerGroup'])) {
                $model->albServerGroup = [];
                $n                     = 0;
                foreach ($map['AlbServerGroup'] as $item) {
                    $model->albServerGroup[$n++] = null !== $item ? albServerGroup::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
