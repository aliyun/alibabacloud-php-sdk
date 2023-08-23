<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models\DescribeScalingInstancesResponseBody;

use AlibabaCloud\Tea\Model;

class scalingInstances extends Model
{
    /**
     * @example 2020-05-18T03:11:39Z
     *
     * @var string
     */
    public $createdTime;

    /**
     * @example 2020-05-18T03:11Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @example AutoCreated
     *
     * @var string
     */
    public $creationType;

    /**
     * @example true
     *
     * @var bool
     */
    public $entrusted;

    /**
     * @example Healthy
     *
     * @var string
     */
    public $healthStatus;

    /**
     * @example i-bp109k5j3dum1ce6****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example lt-m5e3ofjr1zn1aw7****
     *
     * @var string
     */
    public $launchTemplateId;

    /**
     * @example 1
     *
     * @var string
     */
    public $launchTemplateVersion;

    /**
     * @example InService
     *
     * @var string
     */
    public $lifecycleState;

    /**
     * @example 50
     *
     * @var int
     */
    public $loadBalancerWeight;

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

    /**
     * @example SpotWithPriceLimit
     *
     * @var string
     */
    public $spotStrategy;

    /**
     * @example NoNeedWarmup
     *
     * @var string
     */
    public $warmupState;

    /**
     * @example 4
     *
     * @var int
     */
    public $weightedCapacity;

    /**
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
        'scalingActivityId'      => 'ScalingActivityId',
        'scalingConfigurationId' => 'ScalingConfigurationId',
        'scalingGroupId'         => 'ScalingGroupId',
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
        if (null !== $this->scalingActivityId) {
            $res['ScalingActivityId'] = $this->scalingActivityId;
        }
        if (null !== $this->scalingConfigurationId) {
            $res['ScalingConfigurationId'] = $this->scalingConfigurationId;
        }
        if (null !== $this->scalingGroupId) {
            $res['ScalingGroupId'] = $this->scalingGroupId;
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
        if (isset($map['ScalingActivityId'])) {
            $model->scalingActivityId = $map['ScalingActivityId'];
        }
        if (isset($map['ScalingConfigurationId'])) {
            $model->scalingConfigurationId = $map['ScalingConfigurationId'];
        }
        if (isset($map['ScalingGroupId'])) {
            $model->scalingGroupId = $map['ScalingGroupId'];
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
