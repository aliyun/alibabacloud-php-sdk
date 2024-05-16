<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models\DescribeScalingInstancesResponseBody;

use AlibabaCloud\Tea\Model;

class scalingInstances extends Model
{
    /**
     * @description The time when the ECS instance was added to the scaling group. The value is accurate to seconds.
     *
     * @example 2020-05-18T03:11:39Z
     *
     * @var string
     */
    public $createdTime;

    /**
     * @description The time when the ECS instance was added to the scaling group. The value is accurate to minutes.
     *
     * @example 2020-05-18T03:11Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description Indicates how the ECS instance is created. Valid values:
     *
     *   AutoCreated: Auto Scaling automatically creates ECS instances based on the instance configuration source.
     *   Attached: You manually add independent ECS instances to the scaling group.
     *
     * @example AutoCreated
     *
     * @var string
     */
    public $creationType;

    /**
     * @description Indicates whether the scaling group is allowed to manage the instance lifecycle when you manually add the instance. If the scaling group is allowed to manage the instance lifecycle, Auto Scaling can release the instance when the instance is automatically removed from the scaling group. This rule does not apply to instances that are manually removed from the scaling group. Valid values:
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
     * @description The health status of the ECS instance in the scaling group. If the ECS instance does not run as expected, Auto Scaling considers the ECS instance unhealthy. Valid values:
     *
     *   Healthy
     *   Unhealthy
     *
     * >  Make sure that you have sufficient balance within your Alibaba Cloud account. If you have overdue payments within your Alibaba Cloud account, pay-as-you-go and preemptible instances are stopped or even released. For information about how the states of ECS instances change when you have overdue payments within your Alibaba Cloud account, see [Overdue payments](https://help.aliyun.com/document_detail/170589.html).
     * @example Healthy
     *
     * @var string
     */
    public $healthStatus;

    /**
     * @description The ID of the ECS instance
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
     * @description The lifecycle state of the ECS instance. Valid values:
     *
     *   InService: The ECS instance is added to the scaling group and provides services as expected.
     *   Pending: The ECS instance is being added to the scaling group. During this process, Auto Scaling adds the ECS instance to the backend server groups of the associated SLB instance and adds the private IP address of the ECS instance to the IP address whitelist of the associated ApsaraDB RDS instance.
     *   Pending:Wait: The ECS instance is waiting to be added to the scaling group. If a lifecycle hook that applies to scale-outs is created for the scaling group, the ECS instance enters the Pending:Wait state. The ECS instance is added to the scaling group only after the lifecycle hook times out.
     *   Protected: The ECS instance is being protected. The ECS instance can provide services as expected. However, Auto Scaling does not manage the lifecycle of the ECS instance. You must manually manage the lifecycle of the ECS instance.
     *   Standby: The ECS instance is on standby. The ECS instance is out of service and the weight of the ECS instance as a backend server is set to zero. Auto Scaling does not manage the lifecycle of the ECS instance. You must manually manage the lifecycle of the ECS instance.
     *   Stopped: The ECS instance is stopped. The ECS instance is stopped and cannot provide services.
     *   Removing: The ECS instance is being removed from the scaling group. During this process, Auto Scaling removes the ECS instance from the backend server groups of the associated SLB instance and removes the IP address of the ECS instance from the IP address whitelist of the associated ApsaraDB RDS instance.
     *   Removing:Wait: The ECS instance is waiting to be removed from the scaling group. If a lifecycle hook that applies to scale-ins is created for the scaling group, the ECS instance enters the Removing:Wait state. The ECS instance is removed from the scaling group only after the lifecycle hook times out.
     *
     * @example InService
     *
     * @var string
     */
    public $lifecycleState;

    /**
     * @description The weight of the ECS instance as a backend server.
     *
     * @example 50
     *
     * @var int
     */
    public $loadBalancerWeight;

    /**
     * @description The private IP address of the ECS instance in the scaling group.
     *
     * @example 1**.2*.1**.2**
     *
     * @var string
     */
    public $privateIpAddress;

    /**
     * @description The ID of the scaling activity during which the ECS instance is added to the scaling group.
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
     * @description The identifier of the ECS instance in the scaling group. The identifier of an ECS instance or elastic container instance matches the ID of the ECS instance or elastic container instance.
     *
     * @example asi-j6cj1gcte640ekhb****
     *
     * @var string
     */
    public $scalingInstanceId;

    /**
     * @description The bidding policy for the preemptible instance. Valid values:
     *
     *   SpotWithPriceLimit: The instance is created as a preemptible instance with a user-defined maximum hourly price.
     *   SpotAsPriceGo: The instance is a preemptible instance for which the market price at the time of purchase is automatically used as the bidding price.
     *
     * @example SpotWithPriceLimit
     *
     * @var string
     */
    public $spotStrategy;

    /**
     * @description The warmup state of the ECS instance. Valid values:
     *
     *   NoNeedWarmup: The instance does not need to be warmed up.
     *   WaitingForInstanceWarmup: The instance is being warmed up.
     *   InstanceWarmupFinish: The instance is warmed up.
     *
     * @example NoNeedWarmup
     *
     * @var string
     */
    public $warmupState;

    /**
     * @description The weight of the instance type. The weight indicates the capacity of a single instance of the specified instance type in the scaling group. A greater weight indicates that a smaller number of instances of the specified instance type are required to meet the expected capacity requirement.
     *
     * @example 4
     *
     * @var int
     */
    public $weightedCapacity;

    /**
     * @description The zone ID of the ECS instance.
     *
     * @example cn-hangzhou-g
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'createdTime'            => 'CreatedTime',
        'creationTime'           => 'CreationTime',
        'creationType'           => 'CreationType',
        'entrusted'              => 'Entrusted',
        'healthStatus'           => 'HealthStatus',
        'instanceId'             => 'InstanceId',
        'launchTemplateId'       => 'LaunchTemplateId',
        'launchTemplateVersion'  => 'LaunchTemplateVersion',
        'lifecycleState'         => 'LifecycleState',
        'loadBalancerWeight'     => 'LoadBalancerWeight',
        'privateIpAddress'       => 'PrivateIpAddress',
        'scalingActivityId'      => 'ScalingActivityId',
        'scalingConfigurationId' => 'ScalingConfigurationId',
        'scalingGroupId'         => 'ScalingGroupId',
        'scalingInstanceId'      => 'ScalingInstanceId',
        'spotStrategy'           => 'SpotStrategy',
        'warmupState'            => 'WarmupState',
        'weightedCapacity'       => 'WeightedCapacity',
        'zoneId'                 => 'ZoneId',
    ];

    public function validate()
    {
    }

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
