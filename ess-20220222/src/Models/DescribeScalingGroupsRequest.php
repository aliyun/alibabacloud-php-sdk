<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models;

use AlibabaCloud\Tea\Model;

class DescribeScalingGroupsRequest extends Model
{
    /**
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
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example cn-qingdao
     *
     * @var string
     */
    public $regionId;

    /**
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
     * @var string[]
     */
    public $scalingGroupIds;

    /**
     * @example scalinggroup****
     *
     * @var string
     */
    public $scalingGroupName;

    /**
     * @var string[]
     */
    public $scalingGroupNames;
    protected $_name = [
        'groupType'            => 'GroupType',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'pageNumber'           => 'PageNumber',
        'pageSize'             => 'PageSize',
        'regionId'             => 'RegionId',
        'resourceGroupId'      => 'ResourceGroupId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'scalingGroupIds'      => 'ScalingGroupIds',
        'scalingGroupName'     => 'ScalingGroupName',
        'scalingGroupNames'    => 'ScalingGroupNames',
    ];

    public function validate()
    {
    }

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

        return $model;
    }
}
