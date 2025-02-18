<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models\DescribeScalingInstancesResponseBody;

use AlibabaCloud\Dara\Model;

class scalingInstances extends Model
{
    /**
     * @var string
     */
    public $createdTime;
    /**
     * @var string
     */
    public $creationTime;
    /**
     * @var string
     */
    public $creationType;
    /**
     * @var bool
     */
    public $entrusted;
    /**
     * @var string
     */
    public $healthStatus;
    /**
     * @var string
     */
    public $instanceId;
    /**
     * @var string
     */
    public $launchTemplateId;
    /**
     * @var string
     */
    public $launchTemplateVersion;
    /**
     * @var string
     */
    public $lifecycleState;
    /**
     * @var int
     */
    public $loadBalancerWeight;
    /**
     * @var string
     */
    public $privateIpAddress;
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
    /**
     * @var string
     */
    public $scalingInstanceId;
    /**
     * @var string
     */
    public $spotStrategy;
    /**
     * @var string
     */
    public $warmupState;
    /**
     * @var int
     */
    public $weightedCapacity;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
