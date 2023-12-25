<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models;

use AlibabaCloud\Tea\Model;

class DescribeScalingInstancesRequest extends Model
{
    /**
     * @example AutoCreated
     *
     * @var string
     */
    public $creationType;

    /**
     * @var string[]
     */
    public $creationTypes;

    /**
     * @example Healthy
     *
     * @var string
     */
    public $healthStatus;

    /**
     * @var string[]
     */
    public $instanceIds;

    /**
     * @example InService
     *
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
     * @example cn-hangzhou
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
     * @example asa-bp1c9djwrgxjyk31****
     *
     * @var string
     */
    public $scalingActivityId;

    /**
     * @example asc-bp1i65jd06v04vdh****
     *
     * @var string
     */
    public $scalingConfigurationId;

    /**
     * @example asg-bp1igpak5ft1flyp****
     *
     * @var string
     */
    public $scalingGroupId;
    protected $_name = [
        'creationType'           => 'CreationType',
        'creationTypes'          => 'CreationTypes',
        'healthStatus'           => 'HealthStatus',
        'instanceIds'            => 'InstanceIds',
        'lifecycleState'         => 'LifecycleState',
        'lifecycleStates'        => 'LifecycleStates',
        'ownerAccount'           => 'OwnerAccount',
        'ownerId'                => 'OwnerId',
        'pageNumber'             => 'PageNumber',
        'pageSize'               => 'PageSize',
        'regionId'               => 'RegionId',
        'resourceOwnerAccount'   => 'ResourceOwnerAccount',
        'resourceOwnerId'        => 'ResourceOwnerId',
        'scalingActivityId'      => 'ScalingActivityId',
        'scalingConfigurationId' => 'ScalingConfigurationId',
        'scalingGroupId'         => 'ScalingGroupId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->creationType) {
            $res['CreationType'] = $this->creationType;
        }
        if (null !== $this->creationTypes) {
            $res['CreationTypes'] = $this->creationTypes;
        }
        if (null !== $this->healthStatus) {
            $res['HealthStatus'] = $this->healthStatus;
        }
        if (null !== $this->instanceIds) {
            $res['InstanceIds'] = $this->instanceIds;
        }
        if (null !== $this->lifecycleState) {
            $res['LifecycleState'] = $this->lifecycleState;
        }
        if (null !== $this->lifecycleStates) {
            $res['LifecycleStates'] = $this->lifecycleStates;
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

    /**
     * @param array $map
     *
     * @return DescribeScalingInstancesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreationType'])) {
            $model->creationType = $map['CreationType'];
        }
        if (isset($map['CreationTypes'])) {
            if (!empty($map['CreationTypes'])) {
                $model->creationTypes = $map['CreationTypes'];
            }
        }
        if (isset($map['HealthStatus'])) {
            $model->healthStatus = $map['HealthStatus'];
        }
        if (isset($map['InstanceIds'])) {
            if (!empty($map['InstanceIds'])) {
                $model->instanceIds = $map['InstanceIds'];
            }
        }
        if (isset($map['LifecycleState'])) {
            $model->lifecycleState = $map['LifecycleState'];
        }
        if (isset($map['LifecycleStates'])) {
            if (!empty($map['LifecycleStates'])) {
                $model->lifecycleStates = $map['LifecycleStates'];
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
