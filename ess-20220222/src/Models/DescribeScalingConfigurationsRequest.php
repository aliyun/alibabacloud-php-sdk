<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models;

use AlibabaCloud\Dara\Model;

class DescribeScalingConfigurationsRequest extends Model
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
    public $resourceOwnerAccount;
    /**
     * @var int
     */
    public $resourceOwnerId;
    /**
     * @var string[]
     */
    public $scalingConfigurationIds;
    /**
     * @var string[]
     */
    public $scalingConfigurationNames;
    /**
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
        if (\is_array($this->scalingConfigurationIds)) {
            Model::validateArray($this->scalingConfigurationIds);
        }
        if (\is_array($this->scalingConfigurationNames)) {
            Model::validateArray($this->scalingConfigurationNames);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->scalingConfigurationIds)) {
                $res['ScalingConfigurationIds'] = [];
                $n1                             = 0;
                foreach ($this->scalingConfigurationIds as $item1) {
                    $res['ScalingConfigurationIds'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->scalingConfigurationNames) {
            if (\is_array($this->scalingConfigurationNames)) {
                $res['ScalingConfigurationNames'] = [];
                $n1                               = 0;
                foreach ($this->scalingConfigurationNames as $item1) {
                    $res['ScalingConfigurationNames'][$n1++] = $item1;
                }
            }
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
                $model->scalingConfigurationIds = [];
                $n1                             = 0;
                foreach ($map['ScalingConfigurationIds'] as $item1) {
                    $model->scalingConfigurationIds[$n1++] = $item1;
                }
            }
        }

        if (isset($map['ScalingConfigurationNames'])) {
            if (!empty($map['ScalingConfigurationNames'])) {
                $model->scalingConfigurationNames = [];
                $n1                               = 0;
                foreach ($map['ScalingConfigurationNames'] as $item1) {
                    $model->scalingConfigurationNames[$n1++] = $item1;
                }
            }
        }

        if (isset($map['ScalingGroupId'])) {
            $model->scalingGroupId = $map['ScalingGroupId'];
        }

        return $model;
    }
}
