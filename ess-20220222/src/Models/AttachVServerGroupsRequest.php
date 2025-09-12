<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ess\V20220222\Models\AttachVServerGroupsRequest\VServerGroups;

class AttachVServerGroupsRequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var bool
     */
    public $forceAttach;

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

    /**
     * @var VServerGroups[]
     */
    public $VServerGroups;
    protected $_name = [
        'clientToken' => 'ClientToken',
        'forceAttach' => 'ForceAttach',
        'ownerId' => 'OwnerId',
        'regionId' => 'RegionId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'scalingGroupId' => 'ScalingGroupId',
        'VServerGroups' => 'VServerGroups',
    ];

    public function validate()
    {
        if (\is_array($this->VServerGroups)) {
            Model::validateArray($this->VServerGroups);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
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

        if (null !== $this->VServerGroups) {
            if (\is_array($this->VServerGroups)) {
                $res['VServerGroups'] = [];
                $n1 = 0;
                foreach ($this->VServerGroups as $item1) {
                    $res['VServerGroups'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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

        if (isset($map['VServerGroups'])) {
            if (!empty($map['VServerGroups'])) {
                $model->VServerGroups = [];
                $n1 = 0;
                foreach ($map['VServerGroups'] as $item1) {
                    $model->VServerGroups[$n1] = VServerGroups::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
