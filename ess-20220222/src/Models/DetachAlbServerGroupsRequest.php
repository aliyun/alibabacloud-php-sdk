<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ess\V20220222\Models\DetachAlbServerGroupsRequest\albServerGroups;

class DetachAlbServerGroupsRequest extends Model
{
    /**
     * @var albServerGroups[]
     */
    public $albServerGroups;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var bool
     */
    public $forceDetach;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var string
     */
    public $scalingGroupId;
    protected $_name = [
        'albServerGroups' => 'AlbServerGroups',
        'clientToken' => 'ClientToken',
        'forceDetach' => 'ForceDetach',
        'ownerId' => 'OwnerId',
        'regionId' => 'RegionId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'scalingGroupId' => 'ScalingGroupId',
    ];

    public function validate()
    {
        if (\is_array($this->albServerGroups)) {
            Model::validateArray($this->albServerGroups);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->albServerGroups) {
            if (\is_array($this->albServerGroups)) {
                $res['AlbServerGroups'] = [];
                $n1 = 0;
                foreach ($this->albServerGroups as $item1) {
                    $res['AlbServerGroups'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->forceDetach) {
            $res['ForceDetach'] = $this->forceDetach;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlbServerGroups'])) {
            if (!empty($map['AlbServerGroups'])) {
                $model->albServerGroups = [];
                $n1 = 0;
                foreach ($map['AlbServerGroups'] as $item1) {
                    $model->albServerGroups[$n1] = albServerGroups::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['ForceDetach'])) {
            $model->forceDetach = $map['ForceDetach'];
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
