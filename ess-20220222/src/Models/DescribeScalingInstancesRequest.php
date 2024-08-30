<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models;

use AlibabaCloud\Tea\Model;

class DescribeScalingInstancesRequest extends Model
{
    /**
     * @description The instance creation method. Valid values:
     *
     *   AutoCreated: The ECS instances are created by Auto Scaling based on the instance configuration source.
     *   Attached: The ECS instances are manually added to the scaling group.
     *   Managed: The Alibaba Cloud-managed third-party instances are manually added to the scaling group.
     *
     * @example AutoCreated
     *
     * @var string
     */
    public $creationType;

    /**
     * @description The instance creation methods. If you specify this parameter, you cannot specify CreationType.
     *
     * @var string[]
     */
    public $creationTypes;

    /**
     * @description The health status of the ECS instance in the scaling group. If an ECS instance is not in the Running state, the instance is considered unhealthy. Valid values:
     *
     *   Healthy
     *   Unhealthy
     *
     * >  Make sure that you have sufficient balance within your Alibaba Cloud account. If your Alibaba Cloud account has an overdue payment, all pay-as-you-go ECS instances, including preemptible instances, may be stopped or even released. For information about how the status of ECS instances changes when you have an overdue payment in your Alibaba Cloud account, see [Overdue payments](https://help.aliyun.com/document_detail/170589.html).
     * @example Healthy
     *
     * @var string
     */
    public $healthStatus;

    /**
     * @description The IDs of the ECS instances.
     *
     * The IDs of inactive instances are not displayed in the query result, and no errors are returned.
     * @var string[]
     */
    public $instanceIds;

    /**
     * @description The lifecycle status of the ECS instance in the scaling group. Valid values:
     *
     *   InService: The ECS instance is added to the scaling group and provides services as expected.
     *   Pending: The ECS instance is being added to the scaling group. When an ECS instance is being added to the scaling group, Auto Scaling also adds the instance to the backend server groups of the attached load balancers and adds the private IP address of the instance to the IP address whitelists of the attached ApsaraDB RDS instances.
     *   Pending:Wait: The ECS instance is waiting to be added to the scaling group. If a scale-out lifecycle hook is in effect, the ECS instance remains in the Pending:Wait state until the timeout period for the lifecycle hook expires.
     *   Protected: The ECS instance is protected. Protected ECS instances can continue to provide services as expected, but Auto Scaling does not manage the lifecycles of the ECS instances. You must manually manage the lifecycles of the ECS instances.
     *   Standby: The ECS instance is on standby. Standby ECS instances do not provide services as expected, and the weights of the ECS instances as backend servers are reset to zero. Auto Scaling does not manage the lifecycles of the ECS instances. Therefore, you must manually manage the lifecycles of the ECS instances.
     *   Stopped: The ECS instance is stopped. Stopped ECS instances no longer provide services.
     *   Removing: The ECS instance is being removed from the scaling group. When an ECS instance is being removed from the scaling group, Auto Scaling also removes the instance from the backend server groups of the attached load balancers and removes the private IP address of the instance from the IP address whitelists of the attached ApsaraDB RDS instances.
     *   Removing:Wait: The ECS instance is waiting to be removed from the scaling group. If a scale-in lifecycle hook is in effect, the ECS instance remains in the Removing:Wait state until the timeout period for the lifecycle hook expires.
     *
     * @example InService
     *
     * @var string
     */
    public $lifecycleState;

    /**
     * @description The lifecycle status of the ECS instances in the scaling group. You can specify only one of LifecycleStates and LifecycleState at a time. We recommend that you specify this parameter.
     *
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
     * @description The page number. Pages start from page 1.
     *
     * Default value: 1.
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries per page. Maximum value: 100.
     *
     * Default value: 10.
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The region ID of the scaling group.
     *
     * This parameter is required.
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
     * @description The ID of the scaling activity.
     *
     * @example asa-bp1c9djwrgxjyk31****
     *
     * @var string
     */
    public $scalingActivityId;

    /**
     * @description The ID of the scaling configuration.
     *
     * @example asc-bp1i65jd06v04vdh****
     *
     * @var string
     */
    public $scalingConfigurationId;

    /**
     * @description The ID of the scaling group.
     *
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
