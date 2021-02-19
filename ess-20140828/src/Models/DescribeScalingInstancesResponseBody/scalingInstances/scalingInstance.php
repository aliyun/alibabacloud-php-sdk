<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20140828\Models\DescribeScalingInstancesResponseBody\scalingInstances;

use AlibabaCloud\Tea\Model;

class scalingInstance extends Model
{
    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var int
     */
    public $loadBalancerWeight;

    /**
     * @var string
     */
    public $launchTemplateId;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $launchTemplateVersion;

    /**
     * @var string
     */
    public $healthStatus;

    /**
     * @var string
     */
    public $spotStrategy;

    /**
     * @var string
     */
    public $scalingGroupId;

    /**
     * @var string
     */
    public $warmupState;

    /**
     * @var string
     */
    public $lifecycleState;

    /**
     * @var string
     */
    public $creationType;

    /**
     * @var string
     */
    public $scalingConfigurationId;

    /**
     * @var bool
     */
    public $entrusted;

    /**
     * @var int
     */
    public $weightedCapacity;

    /**
     * @var string
     */
    public $createdTime;
    protected $_name = [
        'creationTime'           => 'CreationTime',
        'loadBalancerWeight'     => 'LoadBalancerWeight',
        'launchTemplateId'       => 'LaunchTemplateId',
        'instanceId'             => 'InstanceId',
        'launchTemplateVersion'  => 'LaunchTemplateVersion',
        'healthStatus'           => 'HealthStatus',
        'spotStrategy'           => 'SpotStrategy',
        'scalingGroupId'         => 'ScalingGroupId',
        'warmupState'            => 'WarmupState',
        'lifecycleState'         => 'LifecycleState',
        'creationType'           => 'CreationType',
        'scalingConfigurationId' => 'ScalingConfigurationId',
        'entrusted'              => 'Entrusted',
        'weightedCapacity'       => 'WeightedCapacity',
        'createdTime'            => 'CreatedTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->loadBalancerWeight) {
            $res['LoadBalancerWeight'] = $this->loadBalancerWeight;
        }
        if (null !== $this->launchTemplateId) {
            $res['LaunchTemplateId'] = $this->launchTemplateId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->launchTemplateVersion) {
            $res['LaunchTemplateVersion'] = $this->launchTemplateVersion;
        }
        if (null !== $this->healthStatus) {
            $res['HealthStatus'] = $this->healthStatus;
        }
        if (null !== $this->spotStrategy) {
            $res['SpotStrategy'] = $this->spotStrategy;
        }
        if (null !== $this->scalingGroupId) {
            $res['ScalingGroupId'] = $this->scalingGroupId;
        }
        if (null !== $this->warmupState) {
            $res['WarmupState'] = $this->warmupState;
        }
        if (null !== $this->lifecycleState) {
            $res['LifecycleState'] = $this->lifecycleState;
        }
        if (null !== $this->creationType) {
            $res['CreationType'] = $this->creationType;
        }
        if (null !== $this->scalingConfigurationId) {
            $res['ScalingConfigurationId'] = $this->scalingConfigurationId;
        }
        if (null !== $this->entrusted) {
            $res['Entrusted'] = $this->entrusted;
        }
        if (null !== $this->weightedCapacity) {
            $res['WeightedCapacity'] = $this->weightedCapacity;
        }
        if (null !== $this->createdTime) {
            $res['CreatedTime'] = $this->createdTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return scalingInstance
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['LoadBalancerWeight'])) {
            $model->loadBalancerWeight = $map['LoadBalancerWeight'];
        }
        if (isset($map['LaunchTemplateId'])) {
            $model->launchTemplateId = $map['LaunchTemplateId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['LaunchTemplateVersion'])) {
            $model->launchTemplateVersion = $map['LaunchTemplateVersion'];
        }
        if (isset($map['HealthStatus'])) {
            $model->healthStatus = $map['HealthStatus'];
        }
        if (isset($map['SpotStrategy'])) {
            $model->spotStrategy = $map['SpotStrategy'];
        }
        if (isset($map['ScalingGroupId'])) {
            $model->scalingGroupId = $map['ScalingGroupId'];
        }
        if (isset($map['WarmupState'])) {
            $model->warmupState = $map['WarmupState'];
        }
        if (isset($map['LifecycleState'])) {
            $model->lifecycleState = $map['LifecycleState'];
        }
        if (isset($map['CreationType'])) {
            $model->creationType = $map['CreationType'];
        }
        if (isset($map['ScalingConfigurationId'])) {
            $model->scalingConfigurationId = $map['ScalingConfigurationId'];
        }
        if (isset($map['Entrusted'])) {
            $model->entrusted = $map['Entrusted'];
        }
        if (isset($map['WeightedCapacity'])) {
            $model->weightedCapacity = $map['WeightedCapacity'];
        }
        if (isset($map['CreatedTime'])) {
            $model->createdTime = $map['CreatedTime'];
        }

        return $model;
    }
}
