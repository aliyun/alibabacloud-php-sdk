<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ess\V20220222\Models\DescribeScalingGroupsRequest\tags;

class DescribeScalingGroupsRequest extends Model
{
    /**
     * @var string
     */
    public $groupType;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @var string[]
     */
    public $scalingGroupIds;

    /**
     * @var string
     */
    public $scalingGroupName;

    /**
     * @var string[]
     */
    public $scalingGroupNames;

    /**
     * @var tags[]
     */
    public $tags;
    protected $_name = [
        'groupType' => 'GroupType',
        'ownerAccount' => 'OwnerAccount',
        'ownerId' => 'OwnerId',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'regionId' => 'RegionId',
        'resourceGroupId' => 'ResourceGroupId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'scalingGroupIds' => 'ScalingGroupIds',
        'scalingGroupName' => 'ScalingGroupName',
        'scalingGroupNames' => 'ScalingGroupNames',
        'tags' => 'Tags',
    ];

    public function validate()
    {
        if (\is_array($this->scalingGroupIds)) {
            Model::validateArray($this->scalingGroupIds);
        }
        if (\is_array($this->scalingGroupNames)) {
            Model::validateArray($this->scalingGroupNames);
        }
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->groupType) {
            $res['GroupType'] = $this->groupType;
        }

        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }

        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }

        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }

        if (null !== $this->scalingGroupIds) {
            if (\is_array($this->scalingGroupIds)) {
                $res['ScalingGroupIds'] = [];
                $n1 = 0;
                foreach ($this->scalingGroupIds as $item1) {
                    $res['ScalingGroupIds'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->scalingGroupName) {
            $res['ScalingGroupName'] = $this->scalingGroupName;
        }

        if (null !== $this->scalingGroupNames) {
            if (\is_array($this->scalingGroupNames)) {
                $res['ScalingGroupNames'] = [];
                $n1 = 0;
                foreach ($this->scalingGroupNames as $item1) {
                    $res['ScalingGroupNames'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->tags) {
            if (\is_array($this->tags)) {
                $res['Tags'] = [];
                $n1 = 0;
                foreach ($this->tags as $item1) {
                    $res['Tags'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['GroupType'])) {
            $model->groupType = $map['GroupType'];
        }

        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }

        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }

        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }

        if (isset($map['ScalingGroupIds'])) {
            if (!empty($map['ScalingGroupIds'])) {
                $model->scalingGroupIds = [];
                $n1 = 0;
                foreach ($map['ScalingGroupIds'] as $item1) {
                    $model->scalingGroupIds[$n1++] = $item1;
                }
            }
        }

        if (isset($map['ScalingGroupName'])) {
            $model->scalingGroupName = $map['ScalingGroupName'];
        }

        if (isset($map['ScalingGroupNames'])) {
            if (!empty($map['ScalingGroupNames'])) {
                $model->scalingGroupNames = [];
                $n1 = 0;
                foreach ($map['ScalingGroupNames'] as $item1) {
                    $model->scalingGroupNames[$n1++] = $item1;
                }
            }
        }

        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n1 = 0;
                foreach ($map['Tags'] as $item1) {
                    $model->tags[$n1++] = tags::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
