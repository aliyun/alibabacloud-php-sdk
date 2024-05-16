<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models;

use AlibabaCloud\Tea\Model;

class DescribeEciScalingConfigurationsRequest extends Model
{
    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The number of the page to return. Pages start from page 1.
     *
     * Default value: 1.
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries to return on each page. Maximum value: 50.
     *
     * Default value: 10.
     * @example 50
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The region ID of the scaling group to which the scaling configuration belongs.
     *
     * This parameter is required.
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
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description The IDs of the scaling configurations that you want to query.
     *
     * The IDs of active and inactive scaling configurations are displayed in the query results. You can differentiate between active and inactive scaling configurations based on the value of the `LifecycleState` parameter.
     * @var string[]
     */
    public $scalingConfigurationIds;

    /**
     * @description The names of the scaling configurations that you want to query.
     *
     * The names of inactive scaling configurations are not displayed in the query results, and no error is reported.
     * @var string[]
     */
    public $scalingConfigurationNames;

    /**
     * @description The ID of the scaling group. You can use the ID to query all scaling configurations in the scaling group.
     *
     * @example asg-bp17pelvl720x3v7****
     *
     * @var string
     */
    public $scalingGroupId;
    protected $_name = [
        'ownerAccount'              => 'OwnerAccount',
        'ownerId'                   => 'OwnerId',
        'pageNumber'                => 'PageNumber',
        'pageSize'                  => 'PageSize',
        'regionId'                  => 'RegionId',
        'resourceOwnerAccount'      => 'ResourceOwnerAccount',
        'resourceOwnerId'           => 'ResourceOwnerId',
        'scalingConfigurationIds'   => 'ScalingConfigurationIds',
        'scalingConfigurationNames' => 'ScalingConfigurationNames',
        'scalingGroupId'            => 'ScalingGroupId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->scalingConfigurationIds) {
            $res['ScalingConfigurationIds'] = $this->scalingConfigurationIds;
        }
        if (null !== $this->scalingConfigurationNames) {
            $res['ScalingConfigurationNames'] = $this->scalingConfigurationNames;
        }
        if (null !== $this->scalingGroupId) {
            $res['ScalingGroupId'] = $this->scalingGroupId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeEciScalingConfigurationsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['ScalingConfigurationIds'])) {
            if (!empty($map['ScalingConfigurationIds'])) {
                $model->scalingConfigurationIds = $map['ScalingConfigurationIds'];
            }
        }
        if (isset($map['ScalingConfigurationNames'])) {
            if (!empty($map['ScalingConfigurationNames'])) {
                $model->scalingConfigurationNames = $map['ScalingConfigurationNames'];
            }
        }
        if (isset($map['ScalingGroupId'])) {
            $model->scalingGroupId = $map['ScalingGroupId'];
        }

        return $model;
    }
}
