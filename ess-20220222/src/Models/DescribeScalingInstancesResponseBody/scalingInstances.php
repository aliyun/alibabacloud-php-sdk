<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models\DescribeScalingInstancesResponseBody;

use AlibabaCloud\Tea\Model;

class scalingInstances extends Model
{
    /**
     * @description The time when the ECS instances were added to the scaling group. The value is accurate to the second.
     *
     * @example 2020-05-18T03:11:39Z
     *
     * @var string
     */
    public $createdTime;

    /**
     * @description The time when the ECS instances were added to the scaling group. The value is accurate to the minute.
     *
     * @example 2020-05-18T03:11Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description The instance creation method. Valid values:
     *
     *   AutoCreated: The ECS instances are created by Auto Scaling based on the instance configuration source.
     *   Attached: The ECS instances are manually added to the scaling group.
     *
     * @example AutoCreated
     *
     * @var string
     */
    public $creationType;

    /**
     * @description Indicates whether the scaling group is allowed to manage the instance lifecycles when ECS instances are manually added. If the scaling group is allowed to manage the instance lifecycles, Auto Scaling can release the ECS instances when the instances are automatically removed from the scaling group. Valid values:
     *
     *   true
     *   false
     *
     * @example true
     *
     * @var bool
     */
    public $entrusted;

    /**
     * @description The health status of the ECS instance in the scaling group. If an ECS instance is not in the Running state, the instance is considered unhealthy. Valid values:
     *
     *   Healthy
     *   Unhealthy
     *
     * Auto Scaling automatically removes unhealthy ECS instances from the scaling group and then releases the automatically created instances among the unhealthy instances.
     *
     * Unhealthy ECS instances that are manually added to the scaling group are released based on the management mode of the lifecycles of the instances. If the lifecycles of the ECS instances are not managed by the scaling group, Auto Scaling removes the instances from the scaling group but does not release the instances. If the lifecycles of the ECS instances are managed by the scaling group, Auto Scaling removes the instances from the scaling group and releases the instances.
     *
     * >  Make sure that you have sufficient balance within your Alibaba Cloud account. If your Alibaba Cloud account has an overdue payment, all pay-as-you-go ECS instances, including preemptible instances, may be stopped or even released. For information about how the status of ECS instances changes when you have an overdue payment in your Alibaba Cloud account, see [Overdue payments](https://help.aliyun.com/document_detail/170589.html).
     *
     * @example Healthy
     *
     * @var string
     */
    public $healthStatus;

    /**
     * @description The ID of the ECS instance.
     *
     * @example i-bp109k5j3dum1ce6****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The ID of the launch template.
     *
     * @example lt-m5e3ofjr1zn1aw7****
     *
     * @var string
     */
    public $launchTemplateId;

    /**
     * @description The version number of the launch template.
     *
     * @example 1
     *
     * @var string
     */
    public $launchTemplateVersion;

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
     * @description The weight of each ECS instance as a backend server.
     *
     * >  This parameter is deprecated and is not recommended.
     *
     * @example 50
     *
     * @var int
     */
    public $loadBalancerWeight;

    /**
     * @description The private IP address of the ECS instance.
     *
     * @example 1**.2*.1**.2**
     *
     * @var string
     */
    public $privateIpAddress;

    /**
     * @description The ID of the scaling activity during which the ECS instances were added to the scaling group.
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

    /**
     * @description The ID of the ECS instance or elastic container instance.
     *
     * @example asi-j6cj1gcte640ekhb****
     *
     * @var string
     */
    public $scalingInstanceId;

    /**
     * @description The bidding policy for the preemptible instances. Valid values:
     *
     *   SpotWithPriceLimit: The instances are preemptible instances that have a user-defined maximum hourly price.
     *   SpotAsPriceGo: The instances are preemptible instances for which the market price at the time of purchase is automatically used as the bidding price.
     *
     * @example SpotWithPriceLimit
     *
     * @var string
     */
    public $spotStrategy;

    /**
     * @description The warm-up status of the ECS instances. Valid values:
     *
     *   NoNeedWarmup: The ECS instances do not need to undergo a warm-up process.
     *   WaitingForInstanceWarmup: The ECS instances are undergoing the warm-up process.
     *   InstanceWarmupFinish: The warm-up process for the ECS instances is complete.
     *
     * @example NoNeedWarmup
     *
     * @var string
     */
    public $warmupState;

    /**
     * @description The weight of the instance type. The weight indicates the capacity of a single instance of the specified instance type in the scaling group. A higher weight indicates that a smaller number of instances of the instance type are required to meet the expected capacity requirement.
     *
     * @example 4
     *
     * @var int
     */
    public $weightedCapacity;

    /**
     * @description The zone ID of the ECS instances.
     *
     * @example cn-hangzhou-g
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'createdTime' => 'CreatedTime',
        'creationTime' => 'CreationTime',
        'creationType' => 'CreationType',
        'entrusted' => 'Entrusted',
        'healthStatus' => 'HealthStatus',
        'instanceId' => 'InstanceId',
        'launchTemplateId' => 'LaunchTemplateId',
        'launchTemplateVersion' => 'LaunchTemplateVersion',
        'lifecycleState' => 'LifecycleState',
        'loadBalancerWeight' => 'LoadBalancerWeight',
        'privateIpAddress' => 'PrivateIpAddress',
        'scalingActivityId' => 'ScalingActivityId',
        'scalingConfigurationId' => 'ScalingConfigurationId',
        'scalingGroupId' => 'ScalingGroupId',
        'scalingInstanceId' => 'ScalingInstanceId',
        'spotStrategy' => 'SpotStrategy',
        'warmupState' => 'WarmupState',
        'weightedCapacity' => 'WeightedCapacity',
        'zoneId' => 'ZoneId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->createdTime) {
            $res['CreatedTime'] = $this->createdTime;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->creationType) {
            $res['CreationType'] = $this->creationType;
        }
        if (null !== $this->entrusted) {
            $res['Entrusted'] = $this->entrusted;
        }
        if (null !== $this->healthStatus) {
            $res['HealthStatus'] = $this->healthStatus;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->launchTemplateId) {
            $res['LaunchTemplateId'] = $this->launchTemplateId;
        }
        if (null !== $this->launchTemplateVersion) {
            $res['LaunchTemplateVersion'] = $this->launchTemplateVersion;
        }
        if (null !== $this->lifecycleState) {
            $res['LifecycleState'] = $this->lifecycleState;
        }
        if (null !== $this->loadBalancerWeight) {
            $res['LoadBalancerWeight'] = $this->loadBalancerWeight;
        }
        if (null !== $this->privateIpAddress) {
            $res['PrivateIpAddress'] = $this->privateIpAddress;
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
        if (null !== $this->scalingInstanceId) {
            $res['ScalingInstanceId'] = $this->scalingInstanceId;
        }
        if (null !== $this->spotStrategy) {
            $res['SpotStrategy'] = $this->spotStrategy;
        }
        if (null !== $this->warmupState) {
            $res['WarmupState'] = $this->warmupState;
        }
        if (null !== $this->weightedCapacity) {
            $res['WeightedCapacity'] = $this->weightedCapacity;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return scalingInstances
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreatedTime'])) {
            $model->createdTime = $map['CreatedTime'];
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['CreationType'])) {
            $model->creationType = $map['CreationType'];
        }
        if (isset($map['Entrusted'])) {
            $model->entrusted = $map['Entrusted'];
        }
        if (isset($map['HealthStatus'])) {
            $model->healthStatus = $map['HealthStatus'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['LaunchTemplateId'])) {
            $model->launchTemplateId = $map['LaunchTemplateId'];
        }
        if (isset($map['LaunchTemplateVersion'])) {
            $model->launchTemplateVersion = $map['LaunchTemplateVersion'];
        }
        if (isset($map['LifecycleState'])) {
            $model->lifecycleState = $map['LifecycleState'];
        }
        if (isset($map['LoadBalancerWeight'])) {
            $model->loadBalancerWeight = $map['LoadBalancerWeight'];
        }
        if (isset($map['PrivateIpAddress'])) {
            $model->privateIpAddress = $map['PrivateIpAddress'];
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
        if (isset($map['ScalingInstanceId'])) {
            $model->scalingInstanceId = $map['ScalingInstanceId'];
        }
        if (isset($map['SpotStrategy'])) {
            $model->spotStrategy = $map['SpotStrategy'];
        }
        if (isset($map['WarmupState'])) {
            $model->warmupState = $map['WarmupState'];
        }
        if (isset($map['WeightedCapacity'])) {
            $model->weightedCapacity = $map['WeightedCapacity'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
