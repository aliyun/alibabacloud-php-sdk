<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models;

use AlibabaCloud\SDK\Ess\V20220222\Models\DescribeScalingGroupsRequest\tags;
use AlibabaCloud\Tea\Model;

class DescribeScalingGroupsRequest extends Model
{
    /**
     * @description The type of instances that are managed by the scaling group. Valid values:
     *
     *   ECS: Elastic Compute Service (ECS) instances.
     *   ECI: elastic container instances.
     *
     * @example ECS
     *
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
     * @description The page number. Minimum value: 1.
     *
     * Default value: 1.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries per page. Maximum value: 50.
     *
     * Default value: 10.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The region ID of the scaling group.
     *
     * This parameter is required.
     *
     * @example cn-qingdao
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the resource group to which the scaling group that you want to query belongs.
     *
     * >  If no scaling group belongs to the specified resource group, the query result is empty and no error is reported.
     *
     * @example rg-123******
     *
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
     * @description The IDs of the scaling groups that you want to query.
     *
     * The IDs of inactive scaling groups are not included in the query results, and no error is returned.
     *
     * @var string[]
     */
    public $scalingGroupIds;

    /**
     * @description The name of the scaling group.
     *
     * @example scalinggroup****
     *
     * @var string
     */
    public $scalingGroupName;

    /**
     * @description The names of the scaling groups that you want to query.
     *
     * The names of inactive scaling groups are not displayed in the query results, and no error is reported.
     *
     * @var string[]
     */
    public $scalingGroupNames;

    /**
     * @description The tags of the scaling group.
     *
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

    public function validate() {}

    public function toMap()
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
            $res['ScalingGroupIds'] = $this->scalingGroupIds;
        }
        if (null !== $this->scalingGroupName) {
            $res['ScalingGroupName'] = $this->scalingGroupName;
        }
        if (null !== $this->scalingGroupNames) {
            $res['ScalingGroupNames'] = $this->scalingGroupNames;
        }
        if (null !== $this->tags) {
            $res['Tags'] = [];
            if (null !== $this->tags && \is_array($this->tags)) {
                $n = 0;
                foreach ($this->tags as $item) {
                    $res['Tags'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeScalingGroupsRequest
     */
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
                $model->scalingGroupIds = $map['ScalingGroupIds'];
            }
        }
        if (isset($map['ScalingGroupName'])) {
            $model->scalingGroupName = $map['ScalingGroupName'];
        }
        if (isset($map['ScalingGroupNames'])) {
            if (!empty($map['ScalingGroupNames'])) {
                $model->scalingGroupNames = $map['ScalingGroupNames'];
            }
        }
        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n = 0;
                foreach ($map['Tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? tags::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
