<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models;

use AlibabaCloud\Dara\Model;

class DescribeScalingInstancesRequest extends Model
{
    /**
     * @var string
     */
    public $creationType;

    /**
     * @var string[]
     */
    public $creationTypes;

    /**
     * @var string
     */
    public $healthStatus;

    /**
     * @var string[]
     */
    public $instanceIds;

    /**
     * @var string
     */
    public $lifecycleState;

    /**
     * @var string[]
     */
    public $lifecycleStates;

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
     * @var string
     */
    public $scalingActivityId;

    /**
     * @var string
     */
    public $scalingConfigurationId;

    /**
     * @var string
     */
    public $scalingGroupId;
    protected $_name = [
        'creationType' => 'CreationType',
        'creationTypes' => 'CreationTypes',
        'healthStatus' => 'HealthStatus',
        'instanceIds' => 'InstanceIds',
        'lifecycleState' => 'LifecycleState',
        'lifecycleStates' => 'LifecycleStates',
        'ownerAccount' => 'OwnerAccount',
        'ownerId' => 'OwnerId',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'regionId' => 'RegionId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'scalingActivityId' => 'ScalingActivityId',
        'scalingConfigurationId' => 'ScalingConfigurationId',
        'scalingGroupId' => 'ScalingGroupId',
    ];

    public function validate()
    {
        if (\is_array($this->creationTypes)) {
            Model::validateArray($this->creationTypes);
        }
        if (\is_array($this->instanceIds)) {
            Model::validateArray($this->instanceIds);
        }
        if (\is_array($this->lifecycleStates)) {
            Model::validateArray($this->lifecycleStates);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->creationType) {
            $res['CreationType'] = $this->creationType;
        }

        if (null !== $this->creationTypes) {
            if (\is_array($this->creationTypes)) {
                $res['CreationTypes'] = [];
                $n1 = 0;
                foreach ($this->creationTypes as $item1) {
                    $res['CreationTypes'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->healthStatus) {
            $res['HealthStatus'] = $this->healthStatus;
        }

        if (null !== $this->instanceIds) {
            if (\is_array($this->instanceIds)) {
                $res['InstanceIds'] = [];
                $n1 = 0;
                foreach ($this->instanceIds as $item1) {
                    $res['InstanceIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->lifecycleState) {
            $res['LifecycleState'] = $this->lifecycleState;
        }

        if (null !== $this->lifecycleStates) {
            if (\is_array($this->lifecycleStates)) {
                $res['LifecycleStates'] = [];
                $n1 = 0;
                foreach ($this->lifecycleStates as $item1) {
                    $res['LifecycleStates'][$n1] = $item1;
                    ++$n1;
                }
            }
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

        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }

        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }

        if (null !== $this->scalingActivityId) {
            $res['ScalingActivityId'] = $this->scalingActivityId;
        }

        if (null !== $this->scalingConfigurationId) {
            $res['ScalingConfigurationId'] = $this->scalingConfigurationId;
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
        if (isset($map['CreationType'])) {
            $model->creationType = $map['CreationType'];
        }

        if (isset($map['CreationTypes'])) {
            if (!empty($map['CreationTypes'])) {
                $model->creationTypes = [];
                $n1 = 0;
                foreach ($map['CreationTypes'] as $item1) {
                    $model->creationTypes[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['HealthStatus'])) {
            $model->healthStatus = $map['HealthStatus'];
        }

        if (isset($map['InstanceIds'])) {
            if (!empty($map['InstanceIds'])) {
                $model->instanceIds = [];
                $n1 = 0;
                foreach ($map['InstanceIds'] as $item1) {
                    $model->instanceIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['LifecycleState'])) {
            $model->lifecycleState = $map['LifecycleState'];
        }

        if (isset($map['LifecycleStates'])) {
            if (!empty($map['LifecycleStates'])) {
                $model->lifecycleStates = [];
                $n1 = 0;
                foreach ($map['LifecycleStates'] as $item1) {
                    $model->lifecycleStates[$n1] = $item1;
                    ++$n1;
                }
            }
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

        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }

        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }

        if (isset($map['ScalingActivityId'])) {
            $model->scalingActivityId = $map['ScalingActivityId'];
        }

        if (isset($map['ScalingConfigurationId'])) {
            $model->scalingConfigurationId = $map['ScalingConfigurationId'];
        }

        if (isset($map['ScalingGroupId'])) {
            $model->scalingGroupId = $map['ScalingGroupId'];
        }

        return $model;
    }
}
